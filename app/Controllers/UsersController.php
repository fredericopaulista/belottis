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

        return view('dashboard/users/edit', $data);
    }

    public function atualizar($id)
{
    $userModel = new UserModel();
    $user = $userModel->find($id);
    
    if (!$user) {
        return redirect()->back()->with('error', 'Usuário não encontrado.');
    }
    
    // Regras de validação
    $rules = [
        'username' => 'required|min_length[3]|max_length[30]',
        'email'    => 'required|valid_email',
        'groups'   => 'required',
        'active'   => 'required|in_list[0,1]'
    ];
    
    // Se for o próprio usuário e forneceu senha, adiciona regras de senha
    if (auth()->user()->id === $user->id && !empty($this->request->getPost('password'))) {
        $rules['password'] = 'strong_password';
        $rules['password_confirm'] = 'required|matches[password]';
    }
    
    if (!$this->validate($rules)) {
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }
    
    // Dados para atualizar
    $data = [
        'username' => $this->request->getPost('username'),
        'email'    => $this->request->getPost('email'),
        'active'   => $this->request->getPost('active')
    ];
    
    // Só atualiza a senha se for o próprio usuário e forneceu nova senha
    if (auth()->user()->id === $user->id && !empty($this->request->getPost('password'))) {
        $data['password'] = $this->request->getPost('password');
    }
    
    try {
        // Atualizar usuário
        $user->fill($data);
        $userModel->save($user);
        
        // Atualizar grupos (usando Shield)
        // $user->syncGroups($this->request->getPost('groups') ?? []);
        
        return redirect()->to('admin/usuarios')->with('success', 'Usuário atualizado com sucesso.');
        
    } catch (\Exception $e) {
        return redirect()->back()->withInput()->with('error', 'Erro ao atualizar usuário: ' . $e->getMessage());
    }
}

    public function excluir($id)
    {
         // Verificar se o usuário atual é admin
    $isAdmin = false;
    $currentUserGroups = auth()->user()->getGroups();
    foreach ($currentUserGroups as $group) {
        if ($group === 'admin') {
            $isAdmin = true;
            break;
        }
    }
    
    // Buscar o usuário a ser excluído
    $userToDelete = $this->userModel->find($id);
    
    // Verificar se o usuário a ser excluído é admin
    $userIsAdmin = false;
    foreach ($userToDelete->getGroups() as $group) {
        if ($group === 'admin') {
            $userIsAdmin = true;
            break;
        }
    }
    
    // Impedir que usuários não-admin excluam admins
    if (!$isAdmin && $userIsAdmin) {
        return redirect()->back()->with('error', 'Você não tem permissão para excluir um administrador.');
    }
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