<?php
// app/Models/VagaModel.php

namespace App\Models;

use CodeIgniter\Model;

class VagaModel extends Model
{
    protected $table            = 'vagas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $allowedFields    = [
        'cargo', 
        'empresa', 
        'cidade', 
        'estado', 
        'tipo_contratacao', 
        'modalidade', 
        'descricao', 
        'salario_min', 
        'salario_max', 
        'data_publicacao', 
        'requisitos', 
        'beneficios', 
        'nivel_experiencia', 
        'setor', 
        'quantidade_vagas', 
        'prazo_inscricao', 
        'ativo',
        'slug'
    ];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    //  protected $beforeInsert = ['gerarSlug'];
    protected $beforeUpdate = ['gerarSlug'];

    protected $validationRules = [
        'cargo' => 'required|max_length[100]',
        'empresa' => 'required|max_length[100]',
        'cidade' => 'required|max_length[50]',
        'estado' => 'required|max_length[2]',
        'tipo_contratacao' => 'required|max_length[20]',
        'modalidade' => 'required|max_length[20]',
        'descricao' => 'required',
        'data_publicacao' => 'required|valid_date'
    ];

    protected $validationMessages = [
        'cargo' => [
            'required' => 'O campo cargo é obrigatório.',
            'max_length' => 'O campo cargo não pode ter mais de 100 caracteres.'
        ],
        'empresa' => [
            'required' => 'O campo empresa é obrigatório.',
            'max_length' => 'O campo empresa não pode ter mais de 100 caracteres.'
        ],
        'cidade' => [
            'required' => 'O campo cidade é obrigatório.',
            'max_length' => 'O campo cidade não pode ter mais de 50 caracteres.'
        ],
        'estado' => [
            'required' => 'O campo estado é obrigatório.',
            'max_length' => 'O campo estado não pode ter mais de 2 caracteres.'
        ],
        'data_publicacao' => [
            'required' => 'A data de publicação é obrigatória.',
            'valid_date' => 'A data de publicação deve ser uma data válida.'
        ]
    ];

    protected $skipValidation = false;
    protected $beforeInsert = ['setDataPublicacao'];

    /**
     * Define a data de publicação antes de inserir
     */
    protected function setDataPublicacao(array $data)
    {
        if (!isset($data['data']['data_publicacao']) || empty($data['data']['data_publicacao'])) {
            $data['data']['data_publicacao'] = date('Y-m-d H:i:s');
        }
        return $data;
    }

    /**
     * Retorna os dados formatados similares à imagem
     */
    public function getFormattedData($id = null)
    {
        if ($id) {
            $vaga = $this->find($id);
        } else {
            $vaga = $this->first();
        }

        if (!$vaga) {
            return null;
        }

        // Calcular dias desde a publicação
        $dataPublicacao = new \DateTime($vaga->data_publicacao);
        $hoje = new \DateTime();
        $diferenca = $hoje->diff($dataPublicacao);
        $diasPublicacao = $diferenca->days;

        // Formatar faixa salarial
        $faixaSalarial = 'A combinar';
        if ($vaga->salario_min && $vaga->salario_max) {
            $faixaSalarial = 'R$ ' . number_format($vaga->salario_min, 2, ',', '.') . 
                            ' - R$ ' . number_format($vaga->salario_max, 2, ',', '.');
        }

        return [
            'cargo' => $vaga->cargo,
            'empresa' => $vaga->empresa,
            'localidade' => $vaga->cidade . ', ' . $vaga->estado,
            'tipo_contratacao' => $vaga->tipo_contratacao,
            'modalidade' => $vaga->modalidade,
            'descricao' => $vaga->descricao,
            'faixa_salarial' => $faixaSalarial,
            'data_publicacao' => date('d/m/Y', strtotime($vaga->data_publicacao)),
            'dias_publicacao' => $diasPublicacao == 1 ? 'Publicada há 1 dia' : "Publicada há $diasPublicacao dias",
            'requisitos' => $vaga->requisitos,
            'beneficios' => $vaga->beneficios,
            'nivel_experiencia' => $vaga->nivel_experiencia,
            'setor' => $vaga->setor,
            'quantidade_vagas' => $vaga->quantidade_vagas,
            'prazo_inscricao' => $vaga->prazo_inscricao ? date('d/m/Y', strtotime($vaga->prazo_inscricao)) : null,
            'ativo' => (bool)$vaga->ativo
        ];
    }

    /**
     * Busca vagas ativas ordenadas por data de publicação
     */
    public function getVagasAtivas()
    {
        return $this->where('ativo', 1)
                    ->orderBy('data_publicacao', 'DESC')
                    ->findAll();
    }

    /**
     * Busca vaga por ID apenas se estiver ativa
     */
    public function getVagaAtiva($id)
    {
        return $this->where('id', $id)
                    ->where('ativo', 1)
                    ->first();
    }

    /**
     * Cria uma vaga de exemplo baseada na imagem
     */
    public function criarVagaExemplo()
    {
        $dados = [
            'cargo' => 'Analista de Recursos Humanos',
            'empresa' => 'Tech Solutions Ltda',
            'cidade' => 'São Paulo',
            'estado' => 'SP',
            'tipo_contratacao' => 'CLT',
            'modalidade' => 'Presencial',
            'descricao' => 'Buscamos um profissional para atuar na área de Recursos Humanos, com foco em recrutamento e seleção, treinamento e desenvolvimento, e gestão de benefícios.',
            'salario_min' => 4000.00,
            'salario_max' => 5500.00,
            'data_publicacao' => date('Y-m-d H:i:s', strtotime('-2 days')),
            'requisitos' => 'Formação em RH ou áreas correlatas, experiência com recrutamento e seleção.',
            'beneficios' => 'Vale alimentação, vale transporte, plano de saúde',
            'nivel_experiencia' => 'Pleno',
            'setor' => 'Tecnologia',
            'quantidade_vagas' => 1,
            'ativo' => 1
        ];
        
        return $this->insert($dados);
    }
    protected function gerarSlug(array $data)
    {
        if (isset($data['data']['cargo']) && isset($data['data']['empresa'])) {
        // Remover acentos antes de gerar o slug
        $texto = $data['data']['cargo'] . ' ' . $data['data']['empresa'];
        $texto = $this->removerAcentos($texto);
        
        $slug = url_title($texto, '-', true);
        
        // Verificar se o slug já existe
        $existing = $this->where('slug', $slug)
                        ->where('id !=', $data['id'] ?? 0)
                        ->first();
        
        // Se existir, adicionar número no final
        if ($existing) {
            $counter = 1;
            while ($this->where('slug', $slug . '-' . $counter)->first()) {
                $counter++;
            }
            $slug = $slug . '-' . $counter;
        }
        
        $data['data']['slug'] = $slug;
    }
    
    return $data;
}

// Adicionar método para remover acentos


    public function findBySlug($slug)
    {
        return $this->where('slug', $slug)->first();
    }
}