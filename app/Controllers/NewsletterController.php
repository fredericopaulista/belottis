<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\NewsletterModel;

class NewsletterController extends BaseController
{
protected $newsletterModel;

    public function __construct()
    {
        $this->newsletterModel = new NewsletterModel();
    }

    public function index()
    {
        $news = new NewsletterModel();
        $data = [
            'title' => 'Gerenciar Newsletter',
            'inscritos' => $this->newsletterModel->orderBy('criado_em', 'DESC')->findAll()
        ];

        return view('dashboard/newsletter/index', $data);
    }

    public function editar($id = null)
    {
        $inscrito = $this->newsletterModel->find($id);

        if (!$inscrito) {
            return redirect()->back()->with('error', 'Inscrito não encontrado');
        }

        $data = [
            'title' => 'Editar Inscrito',
            'inscrito' => $inscrito
        ];

        return view('admin/newsletter/editar', $data);
    }

    public function atualizar($id)
    {
        $inscrito = $this->newsletterModel->find($id);

        if (!$inscrito) {
            return redirect()->back()->with('error', 'Inscrito não encontrado');
        }

        $dados = $this->request->getPost();

        if ($this->newsletterModel->update($id, $dados)) {
            return redirect()->to('/admin/newsletter')->with('success', 'Inscrito atualizado com sucesso!');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->newsletterModel->errors());
        }
    }

    public function excluir($id)
    {
        $inscrito = $this->newsletterModel->find($id);

        if (!$inscrito) {
            return redirect()->back()->with('error', 'Inscrito não encontrado');
        }

        if ($this->newsletterModel->delete($id)) {
            return redirect()->to('/admin/newsletter')->with('success', 'Inscrito excluído com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Erro ao excluir inscrito');
        }
    }

    public function toggleStatus($id)
    {
        $inscrito = $this->newsletterModel->find($id);

        if (!$inscrito) {
            return redirect()->back()->with('error', 'Inscrito não encontrado');
        }

        $novoStatus = $inscrito->ativo ? 0 : 1;

        if ($this->newsletterModel->update($id, ['ativo' => $novoStatus])) {
            $statusMsg = $novoStatus ? 'ativado' : 'desativado';
            return redirect()->back()->with('success', "Inscrito {$statusMsg} com sucesso!");
        } else {
            return redirect()->back()->with('error', 'Erro ao alterar status');
        }
    }

    public function exportar()
    {
        $inscritos = $this->newsletterModel->where('ativo', 1)->findAll();

        $csv = "Email,Nome,Data Cadastro\n";
        foreach ($inscritos as $inscrito) {
            $csv .= "\"{$inscrito->email}\",\"{$inscrito->nome}\",\"{$inscrito->criado_em}\"\n";
        }

        return $this->response->download('newsletter_inscritos.csv', $csv);
    }
}