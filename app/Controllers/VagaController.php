<?php

namespace App\Controllers;

use App\Models\VagaModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class VagaController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new VagaModel();
    }

    // Lista todas as vagas
    public function index()
    {
         $vagas = new VagaModel();
    
    // Buscar todas as vagas com os campos necessários
    $alljobs = $vagas
                        ->orderBy('data_publicacao', 'DESC')
                        ->findAll();
    
    
    return view('dashboard/vagas/index', [
        'data' => $alljobs,
        'title' => 'Curriculos Cadastrados',
        'page_title' => 'Curriculos Cadastrados',
        'breadcrumb' => [
            ['title' => 'Dashboard', 'url' => route_to('admin.dashboard')],
            ['title' => 'Vagas', 'url' => route_to('admin.vagas.index')],
            ['title' => 'Vagas Cadastradas', 'url' => null, 'active' => true]
        ]
    ]);
    }




    // Exibe uma vaga específica
    public function show($id)
    {
        $vaga = $this->model->find($id);

        if (empty($vaga)) {
            throw new PageNotFoundException('Vaga não encontrada');
        }

        $data = [
            'vaga' => $vaga,
            'titulo' => $vaga['titulo']
        ];

        return view('vagas/show', $data);
    }

    // Cria nova vaga (formulário)
    public function new()
    {
        $data = [
            'title' => 'Cadastrar Nova Vaga',
            'statusOptions' => [
                'rascunho' => 'Rascunho',
                'publicada' => 'Publicada',
                'arquivada' => 'Arquivada'
            ]
        ];

        return view('dashboard/vagas/new', $data);
    }

    // Salva a nova vaga
    public function create()
    {
        if (!$this->validate($this->model->validationRules, $this->model->validationMessages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $dados = $this->request->getPost();
        $dados['data_publicacao'] = date('Y-m-d', strtotime($dados['data_publicacao']));

        $this->model->save($dados);

        return redirect()->to('/admin/vagas/cadastrar')->with('message', 'Vaga cadastrada com sucesso!');
    }

    // Edita uma vaga (formulário)
    public function edit($id)
{
    $vaga = $this->model->find($id);

    if (empty($vaga)) {
        throw new PageNotFoundException('Vaga não encontrada');
    }

    $data = [
        'vaga' => $vaga,
        'titulo' => 'Editar Vaga',
        'statusOptions' => [
            'rascunho' => 'Rascunho',
            'publicada' => 'Publicada',
            'arquivada' => 'Arquivada'
        ]
    ];

    return view('dashboard/vagas/edit', $data);
}

    // Atualiza a vaga
    public function update($id)
    {
        if (!$this->validate($this->model->validationRules, $this->model->validationMessages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $dados = $this->request->getPost();
        $dados['id'] = $id;
        $dados['data_publicacao'] = date('Y-m-d', strtotime($dados['data_publicacao']));

        $this->model->save($dados);

        return redirect()->to('admin/vagas')->with('message', 'Vaga atualizada com sucesso!');
    }

    // Exclui uma vaga (soft delete)
    public function delete($id)
    {
        $vaga = $this->model->find($id);

        if (empty($vaga)) {
            throw new PageNotFoundException('Vaga não encontrada');
        }

        $this->model->delete($id);

        return redirect()->to('/admin/vagas')->with('message', 'Vaga arquivada com sucesso!');
    }
    public function toggleStatus()
    {
        // Verifica se é uma requisição AJAX
        if (!$this->request->isAJAX()) {
            return $this->response->setJSON(['success' => false, 'message' => 'Requisição inválida']);
        }

        $id = $this->request->getPost('id');
        $status = $this->request->getPost('status');

        if (!$id) {
            return $this->response->setJSON(['success' => false, 'message' => 'ID não fornecido']);
        }

        $vaga = $this->model->find($id);

        if (!$vaga) {
            return $this->response->setJSON(['success' => false, 'message' => 'Vaga não encontrada']);
        }

        try {
            $data = [
                'ativo' => $status,
                'updated_at' => date('Y-m-d H:i:s')
            ];

            if ($this->model->update($id, $data)) {
                return $this->response->setJSON(['success' => true, 'message' => 'Status atualizado com sucesso']);
            } else {
                return $this->response->setJSON(['success' => false, 'message' => 'Erro ao atualizar status']);
            }
        } catch (\Exception $e) {
            return $this->response->setJSON(['success' => false, 'message' => 'Erro: ' . $e->getMessage()]);
        }
    }
}