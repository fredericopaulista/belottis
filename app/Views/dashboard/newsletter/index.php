<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <?php if (session('success')): ?>
    <div class="alert alert-success"><?= session('success') ?></div>
    <?php endif ?>

    <?php if (session('error')): ?>
    <div class="alert alert-danger"><?= session('error') ?></div>
    <?php endif ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Lista de Inscritos</h6>
            <a href="<?= base_url('admin/newsletter/exportar') ?>" class="btn btn-success btn-sm">
                <i class="fas fa-download"></i> Exportar CSV
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Data Cadastro</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($inscritos as $inscrito): ?>
                        <tr>
                            <td><?= $inscrito->nome ?? 'Não informado' ?></td>
                            <td><?= $inscrito->email ?></td>

                            <td><?= date('d/m/Y H:i', strtotime($inscrito->criado_em)) ?></td>
                            <td> <a href="<?= base_url('admin/newsletter/toggle-status/' . $inscrito->id) ?>"
                                    class="btn btn-<?= $inscrito->ativo ? 'warning' : 'success' ?> btn-sm">
                                    <i class="fas fa-<?= $inscrito->ativo ? 'times' : 'check' ?>"></i>
                                </a></td>
                            <td>
                                <a href="<?= base_url('admin/newsletter/editar/' . $inscrito->id) ?>"
                                    class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"> Editar</i>
                                </a>

                                <a href="<?= base_url('admin/newsletter/excluir/' . $inscrito->id) ?>"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Tem certeza que deseja excluir?')">
                                    <i class="fas fa-trash">Apagar</i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>