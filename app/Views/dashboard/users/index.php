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
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lista de Usuários</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Grupos</th>
                            <th>Status</th>
                            <th>Data Cadastro</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        // Verificar se o usuário atual é admin
                        $isAdmin = false;
                        $currentUserGroups = auth()->user()->getGroups();
                        foreach ($currentUserGroups as $group) {
                            if ($group === 'admin') {
                                $isAdmin = true;
                                break;
                            }
                        }
                        
                        foreach ($users as $user): 
                            // Verificar se o usuário da lista é admin
                            $userIsAdmin = false;
                            foreach ($user->getGroups() as $group) {
                                if ($group === 'admin') {
                                    $userIsAdmin = true;
                                    break;
                                }
                            }
                        ?>
                        <tr>
                            <td><?= $user->id ?></td>
                            <td><?= $user->username ?></td>
                            <td><?= $user->email ?></td>
                            <td>
                                <?php foreach ($user->getGroups() as $group): ?>
                                <span class="badge badge-primary"><?= $group ?></span>
                                <?php endforeach ?>
                            </td>
                            <td>
                                <span class="badge badge-<?= $user->active ? 'success' : 'danger' ?>">
                                    <?= $user->active ? 'Ativo' : 'Inativo' ?>
                                </span>
                            </td>
                            <td><?= date('d/m/Y H:i', strtotime($user->created_at)) ?></td>
                            <td>
                                <!-- Sempre permitir edição -->
                                <a href="<?= base_url('admin/usuarios/editar/' . $user->id) ?>"
                                    class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i> Editar
                                </a>

                                <!-- Botão de ativar/inativar -->
                                <a href="<?= base_url('admin/usuarios/toggle-status/' . $user->id) ?>"
                                    class="btn btn-<?= $user->active ? 'warning' : 'success' ?> btn-sm">
                                    <i class="fas fa-<?= $user->active ? 'times' : 'check' ?>"></i>
                                    <?= $user->active ? 'Inativar' : 'Ativar' ?>
                                </a>

                                <!-- Botão de excluir - restrito para usuários não-admin -->
                                <?php if ($user->id != auth()->id()): ?>
                                <?php if ($isAdmin || !$userIsAdmin): ?>
                                <a href="<?= base_url('admin/usuarios/excluir/' . $user->id) ?>"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Tem certeza que deseja excluir este usuário?')">
                                    <i class="fas fa-trash"></i> Excluir
                                </a>
                                <?php else: ?>
                                <!-- Espaçador para manter o layout -->
                                <span class="btn btn-sm" style="visibility: hidden;">
                                    <i class="fas fa-trash"></i> Excluir
                                </span>
                                <?php endif; ?>
                                <?php endif ?>
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