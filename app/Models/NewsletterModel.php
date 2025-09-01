<?php
// app/Models/NewsletterModel.php

namespace App\Models;

use CodeIgniter\Model;

class NewsletterModel extends Model
{
    protected $table = 'newsletter';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['email', 'nome', 'ativo'];
    protected $useTimestamps = true;
    protected $createdField = 'criado_em';
    protected $updatedField = 'atualizado_em';

    protected $validationRules = [
        'email' => 'required|valid_email|is_unique[newsletter.email,id,{id}]',
        'nome' => 'permit_empty|max_length[255]'
    ];

    protected $validationMessages = [
        'email' => [
            'required' => 'O e-mail é obrigatório',
            'valid_email' => 'Informe um e-mail válido',
            'is_unique' => 'Este e-mail já está cadastrado'
        ]
    ];
}