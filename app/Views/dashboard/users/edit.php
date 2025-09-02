<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Editar Usuário</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('admin/usuarios/atualizar/' . $user->id) ?>" method="post">
                <?= csrf_field() ?>

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control"
                        value="<?= old('username', $user->username) ?>" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="<?= old('email', $user->email) ?>"
                        required>
                </div>

                <div class="form-group">
                    <label>Grupos</label>
                    <select name="groups[]" class="form-control" multiple>
                        <option value="admin" <?= in_array('admin', $user->getGroups()) ? 'selected' : '' ?>>
                            Administrador</option>
                        <option value="user" <?= in_array('user', $user->getGroups()) ? 'selected' : '' ?>>Usuário
                        </option>
                        <option value="moderator" <?= in_array('moderator', $user->getGroups()) ? 'selected' : '' ?>>
                            Moderador</option>
                    </select>
                    <small class="form-text text-muted">Segure Ctrl para selecionar múltiplos grupos</small>
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="active" class="form-control">
                        <option value="1" <?= $user->active ? 'selected' : '' ?>>Ativo</option>
                        <option value="0" <?= !$user->active ? 'selected' : '' ?>>Inativo</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="<?= base_url('admin/usuarios') ?>" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>