<?php

namespace App\Controllers;

use App\Models\JobModel;

class HomeController extends BaseController
{

    protected $vagaModel;

    
    public function index(): string
    {
        $data = [
            'titulo' => 'Painel Administrativo',
            'totalVagas' => $this->vagaModel->countAll(),
            'vagasAtivas' => $this->vagaModel->where('status', 'publicada')->countAllResults(),
            'ultimasVagas' => $this->vagaModel->orderBy('created_at', 'DESC')->limit(5)->find(),
            
        ];
        return view('dashboard/index', $data);
    }
}