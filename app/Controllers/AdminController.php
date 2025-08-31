<?php

namespace App\Controllers;

use App\Models\VagaModel;
use App\Models\UsuarioModel;
use App\Models\CandidatoModel;

class AdminController extends BaseController
{
    protected $vagaModel;
    protected $usuarioModel;

    public function __construct()
    {
         $this->vagaModel = new VagaModel();
        // $this->usuarioModel = new UsuarioModel();
        $this->CandidatoModel = new CandidatoModel();
        
        // Carrega helpers adicionais
        helper(filenames: ['form', 'url', 'admin']);
    }

    /**
     * Dashboard do painel administrativo
     */
    public function index()
    {
        // Verifica se o usuário é admin (exemplo básico)
        // if (!session()->get('is_admin')) {
        //     return redirect()->to('/admin/')->with('error', 'Acesso não autorizado');
        // }

         $data = [
             'titulo' => 'Painel Administrativo',
              'totalCandidatos' => $this->CandidatoModel->countAll(),
             'totalVagas' => $this->vagaModel->countAll(),
        //     'vagasAtivas' => $this->vagaModel->where('status', 'publicada')->countAllResults(),
        //     'totalUsuarios' => $this->usuarioModel->countAll(),
        //     'ultimasVagas' => $this->vagaModel->orderBy('created_at', 'DESC')->limit(5)->find(),
        //     'ultimosUsuarios' => $this->usuarioModel->orderBy('created_at', 'DESC')->limit(5)->find()
         ];

        return view('dashboard/index', $data);
    }

    /**
     * Página de login administrativo
     */
    public function login()
    {
        // Se já estiver logado, redireciona para o dashboard
        if (session()->get('isLoggedIn')) {
            return redirect()->to(admin_url());
        }

        $data = ['titulo' => 'Login Administrativo'];
        return view('admin/login', $data);
    }

    /**
     * Processa o login
     */
    public function auth()
    {
        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');

        // Validação básica
        if (empty($email) || empty($senha)) {
            return redirect()->back()->withInput()->with('error', 'E-mail e senha são obrigatórios');
        }

        // Busca usuário no banco de dados
        $usuario = $this->usuarioModel->where('email', $email)->first();

        // Verifica se usuário existe e é admin
        if (!$usuario || !$usuario['is_admin'] || !password_verify($senha, $usuario['senha'])) {
            return redirect()->back()->withInput()->with('error', 'Credenciais inválidas ou acesso não autorizado');
        }

        // Cria sessão
        $sessionData = [
            'id' => $usuario['id'],
            'nome' => $usuario['nome'],
            'email' => $usuario['email'],
            'is_admin' => true,
            'isLoggedIn' => true
        ];

        session()->set($sessionData);

        return redirect()->to(admin_url())->with('message', 'Login realizado com sucesso');
    }

    /**
     * Faz logout do sistema
     */
    public function logout()
    {
        session()->destroy();
        return redirect()->to(admin_url('login'))->with('message', 'Logout realizado com sucesso');
    }

    /**
     * Configurações do sistema
     */
    public function configuracoes()
    {
        if (!session()->get('is_admin')) {
            return redirect()->to(admin_url('login'))->with('error', 'Acesso não autorizado');
        }

        $data = ['titulo' => 'Configurações do Sistema'];
        return view('admin/configuracoes', $data);
    }

    /**
     * Atualiza configurações
     */
    public function updateConfig()
    {
        if (!session()->get('is_admin')) {
            return redirect()->to(admin_url('login'))->with('error', 'Acesso não autorizado');
        }

        // Lógica para atualizar configurações aqui
        // ...

        return redirect()->to(admin_url('configuracoes'))->with('message', 'Configurações atualizadas com sucesso');
    }
}