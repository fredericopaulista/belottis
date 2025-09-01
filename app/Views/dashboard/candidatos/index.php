<?php echo $this->extend('layouts/main'); ?>

<?php echo $this->section('title'); ?>
<?php echo $page_title ?? 'Candidatos'; ?>
<?php echo $this->endSection(); ?>

<?php echo $this->section('css'); ?>

<link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.3.2/r-3.0.5/datatables.min.css" rel="stylesheet"
    integrity="sha384-Ccfn4Q+lSKOnc8aSEmH6a7E86lIPrWNrlksJJtb0Qwehi6Fh15cBiKczAAR1N/df" crossorigin="anonymous">
<style>
/* NOVOS ESTILOS PARA FEEDBACK */
.feedback-message {
    padding: 15px 20px;
    border-radius: 8px;
    margin-bottom: 25px;
    display: flex;
    align-items: center;
    animation: fadeIn 0.5s ease-in-out;
}

.feedback-success {
    background-color: #d4edda;
    color: #155724;
    border-left: 4px solid var(--success);
}

.feedback-error {
    background-color: #f8d7da;
    color: #721c24;
    border-left: 4px solid #dc3545;
}

.feedback-icon {
    margin-right: 12px;
    font-size: 20px;
}

.feedback-content {
    flex: 1;
}

.feedback-close {
    background: none;
    border: none;
    font-size: 18px;
    cursor: pointer;
    color: inherit;
    opacity: 0.7;
    transition: opacity 0.3s;
}

.feedback-close:hover {
    opacity: 1;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<?php echo $this->endSection(); ?>
<?php echo $this->section('content'); ?>

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Candidatos</h6>
                <a href="<?php echo route_to('admin.candidatos.new'); ?>" class="btn btn-success float-end">
                    <i class="fa-solid fa-plus"></i>&nbsp; Cadastrar Candidato
                </a>
            </div>
            <!-- Área para mensagens de feedback -->
            <?php if(session()->getFlashdata('success')): ?>
            <div class="feedback-message feedback-success">
                <div class="feedback-icon"><i class="fas fa-check-circle"></i></div>
                <div class="feedback-content"><?= session()->getFlashdata('success') ?></div>
                <button class="feedback-close" onclick="this.parentElement.style.display='none'">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <?php endif; ?>

            <?php if(session()->getFlashdata('error')): ?>
            <div class="feedback-message feedback-error">
                <div class="feedback-icon"><i class="fas fa-exclamation-circle"></i></div>
                <div class="feedback-content"><?= session()->getFlashdata('error') ?></div>
                <button class="feedback-close" onclick="this.parentElement.style.display='none'">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <?php endif; ?>
            <div class=" card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table id="table" class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Título
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Data de Nascimento</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Status</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Cadastrado em</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($candidatos as $cand): ?>
                            <tr>

                                <td>
                                    <div class="align-middle text-center text-sm">

                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm"><?php echo ucfirst($cand['nome']); ?></h6>

                                        </div>
                                    </div>
                                </td>

                                <td class="align-middle text-center text-sm">
                                    <span
                                        class="text-secondary text-xs font-weight-bold"><?php echo date('d/m/Y', strtotime($cand['data_nascimento'])); ?></span>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span
                                        class="text-secondary text-xs font-weight-bold"><?php echo ucfirst($cand['status']); ?></span>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span
                                        class="text-secondary text-xs font-weight-bold"><?= date('d/m/Y', strtotime($cand['data_cadastro'])) ?></span>
                                </td>
                                <td class="align-middle text-center">
                                    <a href="<?php echo route_to('admin/candidatos/edit', $cand['id']); ?>"
                                        class="btn btn-sm btn-primary" data-toggle="tooltip" title="Editar vaga">
                                        <i class="fa-solid fa-pencil"> Editar</i>
                                    </a>
                                    <a href="<?php echo route_to('admin.candidatos.destroy', $cand['id']); ?>"
                                        class="btn btn-sm btn-danger" data-toggle="tooltip" title="Excluir vaga"
                                        onclick="return confirm('Tem certeza que deseja excluir esta vaga?')">
                                        <i class="fa-solid fa-trash">Apagar</i>
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
</div>


<?php echo $this->endSection(); ?>

<?php echo $this->section('js'); ?>

<script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.3.2/r-3.0.5/datatables.min.js"
    integrity="sha384-2ftx+0uRJCp41Pvj+ereTHIGMU9w/u1uTH6Pr1l5fHn66JJgc8Xs6r1zCtF7+qb6" crossorigin="anonymous">
</script>
<script>
$('#table').DataTable({
    order: [],
    language: {
        lengthMenu: "Mostrar _MENU_ registros por página",
        paginate: {
            first: "<<",
            previous: "<",
            next: ">",
            last: ">>"
        },
        // Outras traduções (opcional)
        search: "Pesquisar:",
        zeroRecords: "Nenhum registro encontrado",
        info: "Mostrando _START_ a _END_ de _TOTAL_ registros"
    }
});
</script>
<?php echo $this->endSection(); ?>