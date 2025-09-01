<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Editar Inscrito</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('admin/newsletter/atualizar/' . $inscrito->id) ?>" method="post">
                <?= csrf_field() ?>

                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" name="email" class="form-control" value="<?= old('email', $inscrito->email) ?>"
                        required>
                </div>

                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control" value="<?= old('nome', $inscrito->nome) ?>">
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="ativo" class="form-control">
                        <option value="1" <?= $inscrito->ativo ? 'selected' : '' ?>>Ativo</option>
                        <option value="0" <?= !$inscrito->ativo ? 'selected' : '' ?>>Inativo</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="<?= base_url('admin/newsletter') ?>" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>