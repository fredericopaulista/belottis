<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CandidatoModel;

class CandidatosController extends BaseController
{
    protected $candidatoModel;
    
    public function __construct()
    {
        $this->candidatoModel = new CandidatoModel();
        // Adicione verificação de autenticação se necessário
    }
    
    public function index()
    {

            $candidatos = new CandidatoModel();
    
    // Buscar todas as vagas com os campos necessários
    $dados = $candidatos
                        ->orderBy('data_cadastro', 'DESC')
                        ->findAll();
        // Obter parâmetros de filtro
        $filtros = [
            'status' => $this->request->getGet('status'),
            'busca' => $this->request->getGet('busca'),
            'data_inicio' => $this->request->getGet('data_inicio'),
            'data_fim' => $this->request->getGet('data_fim')
        ];
        
        // $pagina = $this->request->getGet('page') ?? 1;
        // $porPagina = 10;
        
        // Buscar candidatos
        // $dados = $this->candidatoModel->buscarCandidatos($filtros);
        
        // Contagem por status
        $contagemStatus = $this->candidatoModel->contarPorStatus();
        
        return view('dashboard/candidatos/index', [
            'candidatos' => $dados,
            
            'contagemStatus' => $contagemStatus,
            'page_title' => 'Currículos Disponíveis',
        'breadcrumb' => [
            ['title' => 'Dashboard', 'url' => route_to('admin.dashboard')],
            ['title' => 'Candidatos', 'url' => route_to('admin.candidatos.index')],
            ['title' => 'Listagem de Candidatos', 'url' => null, 'active' => true]
        ]
        ]);
    }
    
    public function visualizar($id)
    {
        $candidato = $this->candidatoModel->find($id);
        
        if (!$candidato) {
            return redirect()->to('/admin/candidatos')->with('error', 'Candidato não encontrado.');
        }
        
        // Marcar como visualizado
        if ($candidato['status'] == 'novo') {
            $this->candidatoModel->atualizarStatus($id, 'visualizado');
        }
        
        return view('dashboard/candidatos/visualizar', ['candidato' => $candidato]);
    }
    
    public function atualizarStatus($id)
    {
        $candidato = $this->candidatoModel->find($id);
        
        if (!$candidato) {
            return redirect()->back()->with('error', 'Candidato não encontrado.');
        }
        
        $novoStatus = $this->request->getPost('status');
        $observacoes = $this->request->getPost('observacoes');
        
        if ($this->candidatoModel->atualizarStatus($id, $novoStatus, $observacoes)) {
            return redirect()->back()->with('success', 'Status atualizado com sucesso.');
        } else {
            return redirect()->back()->with('error', 'Erro ao atualizar status.');
        }
    }
    
    public function downloadCurriculo($id)
    {
        $candidato = $this->candidatoModel->find($id);
        
        if (!$candidato || empty($candidato['caminho_arquivo'])) {
            return redirect()->back()->with('error', 'Currículo não encontrado.');
        }
        
        $caminhoArquivo = ROOTPATH . 'public/' . $candidato['caminho_arquivo'];
        
        if (!file_exists($caminhoArquivo)) {
            return redirect()->back()->with('error', 'Arquivo não encontrado.');
        }
        
        return $this->response->download($caminhoArquivo, null);
    }
    
    public function excluir($id)
    {
        $candidato = $this->candidatoModel->find($id);
        
        if (!$candidato) {
            return redirect()->back()->with('error', 'Candidato não encontrado.');
        }
        
        // Excluir arquivo físico se existir
        if (!empty($candidato['caminho_arquivo'])) {
            $caminhoArquivo = ROOTPATH . 'public/' . $candidato['caminho_arquivo'];
            if (file_exists($caminhoArquivo)) {
                unlink($caminhoArquivo);
            }
        }
        
        if ($this->candidatoModel->delete($id)) {
            return redirect()->to('/admin/candidatos')->with('success', 'Candidato excluído com sucesso.');
        } else {
            return redirect()->back()->with('error', 'Erro ao excluir candidato.');
        }
    }

    public function new()
    {
        return view('dashboard/candidatos/new', [
            'page_title' => 'Cadastrar Novo Candidato',
            'breadcrumb' => [
                ['title' => 'Dashboard', 'url' => route_to('admin.dashboard')],
                ['title' => 'Candidatos', 'url' => route_to('admin.candidatos.index')],
                ['title' => 'Cadastrar Novo Candidato', 'url' => null, 'active' => true]
            ]
        ]);
    }

    /**
     * Processa o cadastro do candidato
     */
    public function store()
    {
        // Validar os dados do formulário
        $rules = [
            'nome' => [
                'rules' => 'required|min_length[3]|max_length[255]',
                'label' => 'nome'
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[candidatos.email]',
                'label' => 'e-mail'
            ],
            'telefone' => [
                'rules' => 'required|min_length[10]|max_length[20]',
                'label' => 'telefone'
            ],
            'data_nascimento' => [
                'rules' => 'valid_date',
                'label' => 'data de nascimento'
            ],
            'linkedin' => [
                'rules' => 'valid_url|permit_empty',
                'label' => 'LinkedIn'
            ],
            'portfolio' => [
                'rules' => 'valid_url|permit_empty',
                'label' => 'portfólio'
            ],
            'ano_conclusao' => [
                'rules' => 'numeric|permit_empty|greater_than[1900]|less_than[2100]',
                'label' => 'ano de conclusão'
            ],
            'curriculo' => [
                'rules' => 'uploaded[curriculo]|max_size[curriculo,2048]|ext_in[curriculo,pdf,doc,docx]|permit_empty',
                'label' => 'currículo'
            ]
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Processar upload do currículo se existir
        $nomeArquivo = null;
        $caminhoArquivo = null;

        $curriculo = $this->request->getFile('curriculo');
        if ($curriculo && $curriculo->isValid() && !$curriculo->hasMoved()) {
            $novoNome = $curriculo->getRandomName();
            $caminho = 'uploads/curriculos/';

            // Criar diretório se não existir
            if (!is_dir(WRITEPATH . $caminho)) {
                mkdir(WRITEPATH . $caminho, 0777, true);
            }

            if ($curriculo->move(WRITEPATH . $caminho, $novoNome)) {
                $nomeArquivo = $curriculo->getClientName();
                $caminhoArquivo = $caminho . $novoNome;
            }
        }

        // Preparar dados para inserção
        $dadosCandidato = [
            'nome' => $this->request->getPost('nome'),
            'email' => $this->request->getPost('email'),
            'telefone' => $this->request->getPost('telefone'),
            'data_nascimento' => $this->request->getPost('data_nascimento') ?: null,
            'linkedin' => $this->request->getPost('linkedin'),
            'cidade' => $this->request->getPost('cidade'),
            'estado' => $this->request->getPost('estado'),
            'formacao_academica' => $this->request->getPost('formacao_academica'),
            'instituicao' => $this->request->getPost('instituicao'),
            'curso' => $this->request->getPost('curso'),
            'ano_conclusao' => $this->request->getPost('ano_conclusao') ?: null,
            'portfolio' => $this->request->getPost('portfolio'),
            'experiencia_profissional' => $this->request->getPost('experiencia_profissional'),
            'habilidades_competencias' => $this->request->getPost('habilidades_competencias'),
            'carta_apresentacao' => $this->request->getPost('carta_apresentacao'),
            'nome_arquivo_curriculo' => $nomeArquivo,
            'caminho_arquivo' => $caminhoArquivo,
            'ip_candidato' => $this->request->getIPAddress(),
            'status' => 'novo',
            'data_cadastro' => date('Y-m-d H:i:s')
        ];

        // Inserir no banco de dados
        try {
            if ($this->candidatoModel->save($dadosCandidato)) {
                return redirect()->to(route_to('admin.candidatos.index'))->with('success', 'Candidato cadastrado com sucesso!');
            } else {
                return redirect()->back()->withInput()->with('error', 'Erro ao cadastrar candidato. Tente novamente.');
            }
        } catch (\Exception $e) {
            // Se houver erro, excluir o arquivo enviado
            if ($caminhoArquivo && file_exists(WRITEPATH . $caminhoArquivo)) {
                unlink(WRITEPATH . $caminhoArquivo);
            }
            
            return redirect()->back()->withInput()->with('error', 'Erro ao cadastrar candidato: ' . $e->getMessage());
        }
    }
    public function edit($id = null)
    {
        $candidato = $this->candidatoModel->find($id);
        
        if (!$candidato) {
            return redirect()->to(route_to('admin/candidatos'))->with('error', 'Candidato não encontrado.');
        }

        $data = [
            'title' => 'Editar Candidato',
            'candidato' => $candidato,
            'validation' => \Config\Services::validation()
        ];

        return view('admin/candidatos/edit', $data);
    }
    /**
     * Processa a atualização do candidato
     */
    public function update($id = null)
    {
        $candidato = $this->candidatoModel->find($id);
        
        if (!$candidato) {
            return redirect()->to(route_to('admin/candidatos'))->with('error', 'Candidato não encontrado.');
        }

        // Regras de validação (email único apenas se foi alterado)
        $rules = [
            'nome' => [
                'rules' => 'required|min_length[3]|max_length[255]',
                'label' => 'nome'
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[candidatos.email,id,' . $id . ']',
                'label' => 'e-mail'
            ],
            'telefone' => [
                'rules' => 'required|min_length[10]|max_length[20]',
                'label' => 'telefone'
            ],
            'data_nascimento' => [
                'rules' => 'valid_date',
                'label' => 'data de nascimento'
            ],
            'linkedin' => [
                'rules' => 'valid_url|permit_empty',
                'label' => 'LinkedIn'
            ],
            'portfolio' => [
                'rules' => 'valid_url|permit_empty',
                'label' => 'portfólio'
            ],
            'ano_conclusao' => [
                'rules' => 'numeric|permit_empty|greater_than[1900]|less_than[2100]',
                'label' => 'ano de conclusão'
            ],
            'curriculo' => [
                'rules' => 'max_size[curriculo,2048]|ext_in[curriculo,pdf,doc,docx]|permit_empty',
                'label' => 'currículo'
            ]
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Processar upload do novo currículo se existir
        $nomeArquivo = $candidato['nome_arquivo_curriculo'];
        $caminhoArquivo = $candidato['caminho_arquivo'];

        $curriculo = $this->request->getFile('curriculo');
        if ($curriculo && $curriculo->isValid() && !$curriculo->hasMoved()) {
            // Excluir arquivo anterior se existir
            if ($caminhoArquivo && file_exists(WRITEPATH . $caminhoArquivo)) {
                unlink(WRITEPATH . $caminhoArquivo);
            }

            $novoNome = $curriculo->getRandomName();
            $caminho = 'uploads/curriculos/';

            if (!is_dir(WRITEPATH . $caminho)) {
                mkdir(WRITEPATH . $caminho, 0777, true);
            }

            if ($curriculo->move(WRITEPATH . $caminho, $novoNome)) {
                $nomeArquivo = $curriculo->getClientName();
                $caminhoArquivo = $caminho . $novoNome;
            }
        }

        // Preparar dados para atualização
        $dadosCandidato = [
            'id' => $id,
            'nome' => $this->request->getPost('nome'),
            'email' => $this->request->getPost('email'),
            'telefone' => $this->request->getPost('telefone'),
            'data_nascimento' => $this->request->getPost('data_nascimento') ?: null,
            'linkedin' => $this->request->getPost('linkedin'),
            'cidade' => $this->request->getPost('cidade'),
            'estado' => $this->request->getPost('estado'),
            'formacao_academica' => $this->request->getPost('formacao_academica'),
            'instituicao' => $this->request->getPost('instituicao'),
            'curso' => $this->request->getPost('curso'),
            'ano_conclusao' => $this->request->getPost('ano_conclusao') ?: null,
            'portfolio' => $this->request->getPost('portfolio'),
            'experiencia_profissional' => $this->request->getPost('experiencia_profissional'),
            'habilidades_competencias' => $this->request->getPost('habilidades_competencias'),
            'carta_apresentacao' => $this->request->getPost('carta_apresentacao'),
            'nome_arquivo_curriculo' => $nomeArquivo,
            'caminho_arquivo' => $caminhoArquivo,
            'data_atualizacao' => date('Y-m-d H:i:s')
        ];

        // Atualizar no banco de dados
        if ($this->candidatoModel->save($dadosCandidato)) {
            return redirect()->to(route_to('admin/candidatos'))->with('success', 'Candidato atualizado com sucesso!');
        } else {
            return redirect()->back()->withInput()->with('error', 'Erro ao atualizar candidato. Tente novamente.');
        }
    }
/**
     * Exclui um candidato
     */
    public function delete($id = null)
    {
        $candidato = $this->candidatoModel->find($id);
        
        if (!$candidato) {
            return redirect()->to(route_to('admin/candidatos'))->with('error', 'Candidato não encontrado.');
        }

        // Excluir arquivo de currículo se existir
        if ($candidato['caminho_arquivo'] && file_exists(WRITEPATH . $candidato['caminho_arquivo'])) {
            unlink(WRITEPATH . $candidato['caminho_arquivo']);
        }

        if ($this->candidatoModel->delete($id)) {
            return redirect()->to(route_to('admin/candidatos'))->with('success', 'Candidato excluído com sucesso!');
        } else {
            return redirect()->to(route_to('admin/candidatos'))->with('error', 'Erro ao excluir candidato. Tente novamente.');
        }
    }
    
   
}