<?php

namespace App\Models\Basic;

use CodeIgniter\Model;
use function PHPUnit\Framework\isTrue;

abstract AppModel extends Model
{
    
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $protectFields    = true;

    protected bool $updateOnlyChanged = false;


    // Dates
    protected $useTimestamps = isTrue;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['escapeData', 'setCode'];
    protected $beforeUpdate   = ['escapeData'];

    protected function escapeData(array $data): array{
        
        return esc($data);
    }

    protected function setCode(array $data): array{
        
        return esc($data);
    }
  
}