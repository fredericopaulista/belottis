<?php

namespace App\Models;

use CodeIgniter\Model;

class CandidatoModel extends Model
{
    protected $table = 'candidatos';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nome', 
        'email', 
        'telefone', 
        'formacao_academica', 
        'curso', 
        'instituicao', 
        'experiencia_profissional', 
        'habilidades_competencias', 
        'nome_arquivo_curriculo', 
        'caminho_arquivo', 
        'carta_apresentacao', 
        'ip_candidato', 
        'status', 
        'observacoes',
        'data_nascimento',
        'cidade',
        'estado',
        'ano_conclusao',
        'linkedin',
        'portfolio'
    ];
    protected $useTimestamps = true;
    protected $createdField = 'data_cadastro';
    protected $updatedField = 'data_atualizacao';
    protected $returnType = 'array';
    
    /**
     * Busca candidatos com filtros e paginação
     */
    public function buscarCandidatos($filtros = [], $pagina = 1, $porPagina = 10)
    {
        $builder = $this->builder();
        
        // Aplicar filtros
        if (!empty($filtros['status'])) {
            $builder->where('status', $filtros['status']);
        }
        
        if (!empty($filtros['busca'])) {
            $builder->groupStart()
                ->like('nome', $filtros['busca'])
                ->orLike('email', $filtros['busca'])
                ->orLike('curso', $filtros['busca'])
                ->orLike('instituicao', $filtros['busca'])
                ->groupEnd();
        }
        
        if (!empty($filtros['data_inicio'])) {
            $builder->where('data_cadastro >=', $filtros['data_inicio']);
        }
        
        if (!empty($filtros['data_fim'])) {
            $builder->where('data_cadastro <=', $filtros['data_fim'] . ' 23:59:59');
        }
        
        // Ordenar por data de cadastro (mais recentes primeiro)
        $builder->orderBy('data_cadastro', 'DESC');
        
        // Configurar paginação
        $total = $builder->countAllResults(false);
        $offset = ($pagina - 1) * $porPagina;
        $builder->limit($porPagina, $offset);
        
        $candidatos = $builder->get()->getResultArray();
        
        return [
            'candidatos' => $candidatos,
            'total' => $total,
            'pagina' => $pagina,
            'por_pagina' => $porPagina,
            'total_paginas' => ceil($total / $porPagina)
        ];
    }
    
    /**
     * Atualiza status do candidato
     */
    public function atualizarStatus($id, $status, $observacoes = null)
    {
        $dados = ['status' => $status];
        
        if ($observacoes !== null) {
            $dados['observacoes'] = $observacoes;
        }
        
        return $this->update($id, $dados);
    }
    
    /**
     * Conta candidatos por status
     */
    public function contarPorStatus()
    {
        $builder = $this->builder();
        $builder->select('status, COUNT(*) as total');
        $builder->groupBy('status');
        
        $result = $builder->get()->getResultArray();
        $contagem = [
            'novo' => 0,
            'visualizado' => 0,
            'em_analise' => 0,
            'aprovado' => 0,
            'rejeitado' => 0,
            'total' => 0
        ];
        
        foreach ($result as $row) {
            $contagem[$row['status']] = $row['total'];
            $contagem['total'] += $row['total'];
        }
        
        return $contagem;
    }
}