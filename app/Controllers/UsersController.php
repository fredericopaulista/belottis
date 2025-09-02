<?php
// app/Controllers/Admin/UsersController.php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Shield\Entities\User;
use CodeIgniter\Shield\Models\UserModel;

class UsersController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Gerenciar Usuários',
            'users' => $this->userModel->findAll()
        ];

        return view('dashboard/users/index', $data);
    }

    public function editar($id)
    {
        $user = $this->userModel->find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'Usuário não encontrado');
        }

        $data = [
            'title' => 'Editar Usuário',
            'user' => $user
        ];

        return view('admin/users/editar', $data);
    }

    public function atualizar($id)
    {
        $user = $this->userModel->find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'Usuário não encontrado');
        }

        $dados = $this->request->getPost();

        // Atualizar dados básicos
        if (isset($dados['username'])) {
            $user->username = $dados['username'];
        }

        if (isset($dados['email'])) {
            $user->email = $dados['email'];
        }

        // Atualizar grupos/permissões
        if (isset($dados['groups'])) {
            $user->syncGroups(...$dados['groups']);
        }

        if (isset($dados['permissions'])) {
            $user->syncPermissions(...$dados['permissions']);
        }

        if ($this->userModel->save($user)) {
            return redirect()->to('/admin/usuarios')->with('success', 'Usuário atualizado com sucesso!');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->userModel->errors());
        }
    }

    public function excluir($id)
    {
        // Não permitir excluir o próprio usuário
        if ($id == auth()->id()) {
            return redirect()->back()->with('error', 'Você não pode excluir sua própria conta');
        }

        if ($this->userModel->delete($id)) {
            return redirect()->to('/admin/usuarios')->with('success', 'Usuário excluído com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Erro ao excluir usuário');
        }
    }

    public function toggleStatus($id)
    {
        // Não permitir desativar o próprio usuário
        if ($id == auth()->id()) {
            return redirect()->back()->with('error', 'Você não pode desativar sua própria conta');
        }

        $user = $this->userModel->find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'Usuário não encontrado');
        }

        $novoStatus = !$user->active;

        if ($this->userModel->update($id, ['active' => $novoStatus])) {
            $statusMsg = $novoStatus ? 'ativado' : 'desativado';
            return redirect()->back()->with('success', "Usuário {$statusMsg} com sucesso!");
        } else {
            return redirect()->back()->with('error', 'Erro ao alterar status do usuário');
        }
    }
}