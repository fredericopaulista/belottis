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
        // Obter parâmetros de filtro
        $filtros = [
            'status' => $this->request->getGet('status'),
            'busca' => $this->request->getGet('busca'),
            'data_inicio' => $this->request->getGet('data_inicio'),
            'data_fim' => $this->request->getGet('data_fim')
        ];
        
        $pagina = $this->request->getGet('page') ?? 1;
        $porPagina = 10;
        
        // Buscar candidatos
        $dados = $this->candidatoModel->buscarCandidatos($filtros, $pagina, $porPagina);
        
        // Contagem por status
        $contagemStatus = $this->candidatoModel->contarPorStatus();
        
        return view('dashboard/candidatos/index', [
            'candidatos' => $dados['candidatos'],
            'paginacao' => [
                'pagina_atual' => $pagina,
                'total_paginas' => $dados['total_paginas'],
                'total_itens' => $dados['total']
            ],
            'filtros' => $filtros,
            'contagemStatus' => $contagemStatus,
            'page_title' => 'Vagas Disponíveis',
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
}