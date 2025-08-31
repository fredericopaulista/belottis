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
         $curriculoModel = new VagaModel();
    
    // Buscar todas as vagas com os campos necessários
    $alljobs = $curriculoModel
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

    // Exibe apenas vagas públicas


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

        return redirect()->to('/vagas')->with('message', 'Vaga cadastrada com sucesso!');
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

        return view('vagas/edit', $data);
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

        return redirect()->to('/vagas')->with('message', 'Vaga atualizada com sucesso!');
    }

    // Exclui uma vaga (soft delete)
    public function delete($id)
    {
        $vaga = $this->model->find($id);

        if (empty($vaga)) {
            throw new PageNotFoundException('Vaga não encontrada');
        }

        $this->model->delete($id);

        return redirect()->to('/vagas')->with('message', 'Vaga arquivada com sucesso!');
    }
}