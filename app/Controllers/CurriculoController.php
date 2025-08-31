<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CandidatoModel;

class CurriculoController extends Controller
{

    public function __construct()
    {
        $this->model = new CandidatoModel();
    }
    public function enviarCurriculo()
    {
        // Obter dados do formulário
        $dados = $this->request->getPost();
        $arquivo = $this->request->getFile('curriculo');
        
        // Validar dados
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nome' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'telefone' => 'required',
            'formacao' => 'required',
            'curso' => 'required',
            'instituicao' => 'required',
            'experiencia' => 'required|min_length[10]',
            'habilidades' => 'required|min_length[10]',
            'curriculo' => 'uploaded[curriculo]|max_size[curriculo,5120]|ext_in[curriculo,pdf,doc,docx]'
        ]);
        
        if (!$validation->run($dados)) {
            return redirect()->back()->withInput()->with('error', 'Por favor, preencha todos os campos obrigatórios corretamente.');
        }
        
        // Processar upload do arquivo
        $nomeArquivo = '';
        $caminhoArquivo = '';
        
        if ($arquivo->isValid() && !$arquivo->hasMoved()) {
            // Criar nome personalizado baseado no nome do candidato
            $nomeCandidato = $dados['nome'];
            $nomeSanitizado = $this->sanitizeFileName($nomeCandidato);
            $extensao = $arquivo->getClientExtension();
            $novoNome = $nomeSanitizado . '-' . time() . '.' . $extensao;
            
            // Criar diretório se não existir
            $uploadPath = ROOTPATH . 'public/uploads/curriculos/';
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }
            
            $caminhoArquivo = 'uploads/curriculos/' . $novoNome;
            $nomeArquivo = $novoNome;
            
            // Mover o arquivo
            if (!$arquivo->move(ROOTPATH . 'public/uploads/curriculos/', $novoNome)) {
                log_message('error', 'Erro ao mover arquivo: ' . $arquivo->getErrorString());
                return redirect()->back()->withInput()->with('error', 'Erro ao fazer upload do arquivo.');
            }
        } else {
            log_message('error', 'Arquivo inválido ou já movido: ' . $arquivo->getError());
            return redirect()->back()->withInput()->with('error', 'Arquivo inválido.');
        }
        
        // Salvar/Atualizar no banco de dados
        $candidatoModel = new CandidatoModel();
        
        // Verificar se já existe candidato com este email
        $candidatoExistente = $candidatoModel->where('email', $dados['email'])->first();
        
        $dadosCandidato = [
            'nome' => $dados['nome'],
            'email' => $dados['email'],
            'telefone' => $dados['telefone'],
            'formacao_academica' => $dados['formacao'],
            'curso' => $dados['curso'],
            'ano_conclusao' => $dados['ano_conclusao'],
            'linkedin' => $dados['linkedin'],
            'cidade' => $dados['cidade'], 
            'data_nascimento' => $dados['data_nascimento'], 
            'estado' => $dados['estado'], 
            'portfolio' => $dados['portfolio'], 
            'instituicao' => $dados['instituicao'],
            'experiencia_profissional' => $dados['experiencia'],
            'habilidades_competencias' => $dados['habilidades'],
            'nome_arquivo_curriculo' => $nomeArquivo,
            'caminho_arquivo' => $caminhoArquivo,
            'carta_apresentacao' => $dados['carta_apresentacao'] ?? '',
            'ip_candidato' => $this->request->getIPAddress(),
            'status' => 'novo',
            'atualizado_em' => date('Y-m-d H:i:s') // Campo para tracking de atualizações
        ];
        
        try {
            if ($candidatoExistente) {
                 // ATUALIZAR registro existente
                $candidatoId = $candidatoExistente['id'];
                $candidatoModel->update($candidatoId, $dadosCandidato);
                log_message('info', 'Candidato ATUALIZADO no banco. ID: ' . $candidatoId . ', Email: ' . $dados['email']);
                $acao = 'atualizado';
            
                
            } else {
                // INSERIR novo registro
                $candidatoModel->insert($dadosCandidato);
                $candidatoId = $candidatoModel->getInsertID();
                log_message('info', 'Candidato INSERIDO no banco. ID: ' . $candidatoId . ', Email: ' . $dados['email']);
                $acao = 'cadastrado';
            }
            
            // Carregar template de email
            $template = view('site/emails/curriculo', [
                'nome' => $dados['nome'],
                'email' => $dados['email'],
                'telefone' => $dados['telefone'],
                'formacao' => $dados['formacao'],
                'curso' => $dados['curso'],
                'instituicao' => $dados['instituicao'],
                'experiencia' => nl2br($dados['experiencia']),
                'habilidades' => nl2br($dados['habilidades']),
                'carta_apresentacao' => !empty($dados['carta_apresentacao']) ? nl2br($dados['carta_apresentacao']) : 'Não informada',
                'NOME_ARQUIVO_CURRICULO' => $nomeArquivo,
                'FORMATO_ARQUIVO' => strtoupper($arquivo->getClientExtension()),
                'TAMANHO_ARQUIVO' => $this->formatarTamanhoArquivo($arquivo->getSize()),
                'data' => date('d/m/Y H:i:s'),
                'ip' => $this->request->getIPAddress(),
                'ID_CANDIDATO' => $candidatoId,
                'ano' => date('Y'),
                'ACAO' => $acao // Novo campo para informar se foi cadastro ou atualização
            ]);
            
            // Configurar e enviar email
            $email = \Config\Services::email();

            $config = [
                'protocol' => 'smtp',
                'SMTPHost' => 'sandbox.smtp.mailtrap.io',
                'SMTPUser' => 'a5e973d50971fb',
                'SMTPPass' => '6b53f328a51264',
                'SMTPPort' => 2525,
                'SMTPCrypto' => 'tls',
                'wordWrap' => true,
                'mailType' => 'html',
                'charset'  => 'utf-8',
                'newline'  => "\r\n"
            ];

            $email->initialize($config);

            $email->setFrom('rh@belottis.com.br', 'Sistema Belottis RH');
            $email->setReplyTo($dados['email'], $dados['nome']);
            $email->setTo('fredericopaulista@gmail.com');
            $email->setSubject('Currículo ' . ($acao == 'atualizado' ? 'Atualizado' : 'Recebido') . ' - ' . $dados['nome']);
            $email->setMessage($template);

            // Anexar currículo
            if (!empty($caminhoArquivo) && file_exists(ROOTPATH . 'public/' . $caminhoArquivo)) {
                $email->attach(ROOTPATH . 'public/' . $caminhoArquivo);
            }

            // Tentar enviar email
            if ($email->send()) {
                log_message('info', 'Email enviado com sucesso para o candidato ID: ' . $candidatoId);
                 $mensagem = $acao == 'atualizado' 
            ? 'Currículo atualizado com sucesso! Suas informações foram renovadas em nosso banco de dados.' 
            : 'Currículo enviado com sucesso! Agora você faz parte do nosso banco de talentos.';
        
                return redirect()->back()->with('success', $mensagem);
            } else {
                log_message('warning', 'Falha no envio de email, mas currículo salvo. ID: ' . $candidatoId);
    
    $mensagem = $acao == 'atualizado' 
        ? 'Currículo atualizado com sucesso! Suas informações foram renovadas em nosso banco de dados.' 
        : 'Currículo enviado com sucesso! Agora você faz parte do nosso banco de talentos.';
    
    return redirect()->back()->with('success', $mensagem);
            }
            
        } catch (\Exception $e) {
             log_message('error', 'Erro ao salvar/atualizar candidato: ' . $e->getMessage());
    return redirect()->back()->withInput()->with('error', 'Houve um problema ao enviar seu currículo. Tente novamente mais tarde.');
        }
    }
    
    
    private function formatarTamanhoArquivo($bytes)
    {
        if ($bytes >= 1048576) {
            return number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            return number_format($bytes / 1024, 2) . ' KB';
        } else {
            return $bytes . ' bytes';
        }
    }
    
    private function sanitizeFileName($name)
    {
        // Converter para minúsculas
        $name = mb_strtolower($name, 'UTF-8');
        
        // Remover acentos
        $name = iconv('UTF-8', 'ASCII//TRANSLIT', $name);
        
        // Substituir espaços e caracteres especiais por hífens
        $name = preg_replace('/[^a-z0-9]+/', '-', $name);
        
        // Remover hífens duplicados e das extremidades
        $name = preg_replace('/-+/', '-', $name);
        $name = trim($name, '-');
        
        // Limitar o tamanho do nome (máximo 50 caracteres)
        if (strlen($name) > 50) {
            $name = substr($name, 0, 50);
            $name = rtrim($name, '-');
        }
        
        return $name;
    }

    public function index()
    {
         $curriculoModel = new CandidatoModel();
    
    // Buscar todas as vagas com os campos necessários
    $alljobs = $curriculoModel
                        ->orderBy('data_publicacao', 'DESC')
                        ->findAll();
    
    // Formatar os dados
    

    return view('dashboard/candidatos/index', [
        
        'title' => 'Curriculos Cadastrados',
        'page_title' => 'Curriculos Cadastrados',
        'breadcrumb' => [
            ['title' => 'Dashboard', 'url' => route_to('admin.dashboard')],
            ['title' => 'Currículos', 'url' => route_to('admin.candidatos.index')],
            ['title' => 'Curriculos Cadastrados', 'url' => null, 'active' => true]
        ]
    ]);
}
}