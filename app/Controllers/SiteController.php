<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VagaModel;
use CodeIgniter\HTTP\ResponseInterface;

class SiteController extends BaseController
{
    
    public function index()
    {
        $jobs = new VagaModel();
        $alljobs = $jobs->orderBy('created_at', 'DESC')
                           ->limit(4)
                           ->findAll();
        return view('site/index', compact('alljobs'));
    }

    public function todasVagas(){
        $jobModel = new VagaModel();
    $totalJobs = $jobModel->countAllResults();
    $data = [
        'jobs' => $jobModel->where('ativo', '1')->orderBy('created_at', 'DESC')
                         ->paginate(7), // 5 itens por página
        'pager' => $jobModel->pager,
        'totalJobs' => $totalJobs
    ];
    
    return view('site/vagas', $data);
        
    }
    public function cadastre()
    {
        return view('site/cadastre');
    }
    public function contato()
    {
        return view('site/contato');
    }
    public function servicos(){
        return view('site/servicos');
    }
    public function sobre(){
        return view('site/quem-somos');
    }
    public function politicas(){
        return view('site/politicas');
    }
     public function termos(){
        return view('site/termos');
    }

    // Página LGPD
    public function lgpd(){
        return view('site/lgpd');
    }
    
    // Envia email de contato 
    public function enviaEmail(){
        
        // Obter dados do formulário
        $dados = $this->request->getPost();
         // Carregar template de email
        $template = view('site/emails/contato', [
            'name' => $dados['name'],
            'email' => $dados['email'],
            'company' => $dados['company'],
            'phone' => $dados['phone'] ?? '',
            'subject' => $dados['subject'],
            'message' => $dados['message'],
            'ano' => date('Y'),
            'nome_da_empresa' => 'Belottis Estágio' // Altere para o nome da sua empresa
        ]);
        $email = service('email');

        $config = [
             'protocol' => 'smtp',
            'SMTPHost' => 'mail.advogadocontagem.com.br',
            'SMTPUser' => 'contato@advogadocontagem.com.br',
            'SMTPPass' => 'Davi2014!',
            'SMTPPort' => 465,
            'wordWrap' => true,
            'mailType' => 'html',
            'charset'  => 'utf-8',
            'newline'  => "\r\n"
        ];

        $email->initialize($config);

        $email->setFrom('contato@advogadocontagem.com.br', $this->request->getGetPost('name'));
        $email->setTo('fredericopaulista02@gmail.com');
        $email->setReplyTo('contato@belottis.com.br', 'Belottis Estágio');
        $email->setCC('fredericopaulista@gmail.com');
        // $email->setBCC('them@their-example.com');

        $email->setSubject($this->request->getGetPost('subject'));
        $email->setMessage($template);

        $sent = $email->send();

        if ($sent) {
            // Email enviado com sucesso
            return redirect()->back()->with('success', 'Sua mensagem foi enviada com sucesso! Entraremos em contato em breve.');
        } else {
            // Falha ao enviar o email
            $data = $email->printDebugger(['headers']);
            return redirect()->back()->withInput()->with('error', 'Falha ao enviar o e-mail. Por favor, tente novamente mais tarde.');
        }
    }

   public function buscaVagas()
{
    $vagaModel = new VagaModel();

    // Obter parâmetros de busca
    $search = $this->request->getGet('search');
    $localidade = $this->request->getGet('localidade');
    $ensino_medio = $this->request->getGet('ensino_medio');
    $ensino_superior = $this->request->getGet('ensino_superior');
    $id = $this->request->getGet('id');
    
    // Construir query com filtros
    $query = $vagaModel->where('ativo', 1);
    
    // Filtro por texto
    if (!empty($search)) {
        $query->groupStart()
              ->like('cargo', $search)
              ->orLike('empresa', $search)
              ->orLike('descricao', $search)
              ->orLike('requisitos', $search)
              ->groupEnd();
    }
    
    // Filtro por localidade
    if (!empty($localidade)) {
        $query->groupStart()
              ->like('cidade', $localidade)
              ->orLike('estado', $localidade)
              ->groupEnd();
    }
    
    // Filtro por nível de ensino
    if (!empty($ensino_medio)) {
        $query->groupStart()
              ->like('requisitos', 'Ensino Médio')
              ->orLike('requisitos', 'ensino médio')
              ->orLike('requisitos', 'Ensino medio')
              ->groupEnd();
    }
    
    if (!empty($ensino_superior)) {
        $query->groupStart()
              ->like('requisitos', 'Ensino Superior')
              ->orLike('requisitos', 'ensino superior')
              ->orLike('requisitos', 'Graduação')
              ->orLike('requisitos', 'graduação')
              ->groupEnd();
    }
    
    // Contar total ANTES da paginação
    $total_vagas = $query->countAllResults(false);
    
    // Configurar paginação
    $perPage = 10;
    $page = $this->request->getVar('page') ?? 1;
    
    // Buscar dados com paginação
    $jobs = $query->where('ativo', 1)->orderBy('data_publicacao', 'DESC')
                 ->paginate($perPage, 'default', $page);
    
    // Obter o pager
    $pager = $vagaModel->pager;

    // Manter parâmetros de busca na paginação
    if ($pager) {
           // Filtrar apenas os parâmetros que queremos manter
    $queryParams = $this->request->getGet();
    $allowedParams = ['search', 'localidade', 'ensino_medio', 'ensino_superior'];
    $filteredParams = [];
    
    foreach ($allowedParams as $param) {
        if (isset($queryParams[$param])) {
            $filteredParams[$param] = $queryParams[$param];
        }
    }
    
    $pager->setPath(current_url());
    
    // Usar reflection para métodos disponíveis
    if (method_exists($pager, 'setQuery')) {
        $pager->setQuery($filteredParams);
    }
    }

    return view('site/vagas', [
        'jobs' => $jobs, 
        'id' => $id,
        'pager' => $vagaModel->pager,
        'search_term' => $search,
        'localidade_term' => $localidade,
        'ensino_medio_checked' => $ensino_medio,
        'ensino_superior_checked' => $ensino_superior,
        'total_vagas' => $total_vagas,
        'title' => 'Resultados da Busca - Vagas Disponíveis'
    ]);
}
public function detalhesVaga($slug = null)
{
    // Validar se o slug foi fornecido
    if (empty($slug)) {
        throw new PageNotFoundException('Slug da vaga não especificado');
    }

    // Buscar a vaga no banco de dados pelo slug
    $vaga = $this->vagaModel->findBySlug($slug);

    // Verificar se a vaga existe
    if (!$vaga) {
        throw new PageNotFoundException('Vaga não encontrada');
    }

    // Ajuste para acesso como objeto ou array
    $vagaId = is_object($vaga) ? $vaga->id : $vaga['id'];
    $vagaEmpresa = is_object($vaga) ? $vaga->empresa : $vaga['empresa'];
    $vagaSetor = is_object($vaga) ? $vaga->setor : $vaga['setor'];
    $vagaCargo = is_object($vaga) ? $vaga->cargo : $vaga['cargo'];
    $vagaCidade = is_object($vaga) ? $vaga->cidade : $vaga['cidade'];
    $vagaEstado = is_object($vaga) ? $vaga->estado : $vaga['estado'];
    $vagaDescricao = is_object($vaga) ? $vaga->descricao : $vaga['descricao'];

    // Buscar vagas relacionadas
    $vagasRelacionadas = $this->vagaModel
        ->where('id !=', $vagaId)
        ->where('ativo', 1)
        ->groupStart()
            ->where('empresa', $vagaEmpresa)
            ->orWhere('setor', $vagaSetor)
            ->orLike('cargo', $vagaCargo)
        ->groupEnd()
        ->orderBy('data_publicacao', 'DESC')
        ->limit(3)
        ->findAll();

    // Preparar dados para a view
    $data = [
        'title' => $vagaCargo . ' - ' . $vagaEmpresa . ' | Belottis',
        'vaga' => $vaga,
        'slug' => $slug,
        'vagas_relacionadas' => $vagasRelacionadas,
        'meta_description' => 'Vaga de ' . $vagaCargo . ' na ' . $vagaEmpresa . 
                             ' em ' . $vagaCidade . '/' . $vagaEstado . 
                             '. ' . strip_tags(substr($vagaDescricao, 0, 150)) . '...'
    ];

    return view('site/vaga', $data);
}

// Em um controller temporário ou no terminal
public function gerarSlugsExistentes()
{
    $vagas = $this->vagaModel->findAll();
    
    foreach ($vagas as $vaga) {
        $slug = url_title($vaga->cargo . ' ' . $vaga->empresa, '-', true);
        
        // Verificar duplicatas
        $existing = $this->vagaModel->where('slug', $slug)
                                  ->where('id !=', $vaga->id)
                                  ->first();
        
        if ($existing) {
            $counter = 1;
            while ($this->vagaModel->where('slug', $slug . '-' . $counter)->first()) {
                $counter++;
            }
            $slug = $slug . '-' . $counter;
        }
        
        $this->vagaModel->update($vaga->id, ['slug' => $slug]);
    }
    
    echo 'Slugs gerados com sucesso!';
}
   
}