<?php echo $this->extend('layouts/main'); ?>

<?php echo $this->section('title'); ?>
<?php echo $page_title ?? 'Vagas Disponíveis'; ?>
<?php echo $this->endSection(); ?>

<?php echo $this->section('css'); ?>

<link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.3.2/r-3.0.5/datatables.min.css" rel="stylesheet"
    integrity="sha384-Ccfn4Q+lSKOnc8aSEmH6a7E86lIPrWNrlksJJtb0Qwehi6Fh15cBiKczAAR1N/df" crossorigin="anonymous">

<?php echo $this->endSection(); ?>
<?php echo $this->section('content'); ?>

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Vagas</h6>
                <a href="<?php echo route_to('admin.vagas.new'); ?>" class="btn btn-success float-end">
                    <i class="fa-solid fa-plus"></i>&nbsp; Nova Vaga
                </a>
            </div>

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
                                    Empresa</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Status</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Publicado</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Ação</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data as $job): ?>
                            <tr>

                                <td>
                                    <div class="align-middle text-center text-sm">

                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm"><?php echo ucfirst($job->cargo); ?></h6>

                                        </div>
                                    </div>
                                </td>

                                <td class="align-middle text-center text-sm">
                                    <span
                                        class="text-secondary text-xs font-weight-bold"><?php echo $job->empresa; ?></span>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <div class="form-check form-switch d-inline-block">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="status-<?php echo $job->id; ?>"
                                            <?php echo $job->ativo == 1 ? 'checked' : ''; ?>
                                            onchange="toggleStatus(<?php echo $job->id; ?>, this.checked)">
                                        <label class="form-check-label small" for="status-<?php echo $job->id; ?>">
                                            <?php echo $job->ativo == 1 ? 'Ativa' : 'Inativa'; ?>
                                        </label>
                                    </div>
                                </td>

                                <td class="align-middle text-center text-sm">
                                    <span
                                        class="text-secondary text-xs font-weight-bold"><?= date('d-m-Y', strtotime($job->created_at)) ?></span>
                                </td>

                                <td class="align-middle text-center">
                                    <a href="<?php echo route_to('admin/vagas/edit', $job->id); ?>"
                                        class="btn btn-sm btn-primary" data-toggle="tooltip" title="Editar vaga">
                                        <i class="fa-solid fa-pencil"> Editar</i>
                                    </a>
                                    <a href="<?php echo route_to('admin.vagas.delete', $job->id); ?>"
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

function toggleStatus(vagaId, status) {
    fetch('<?php echo route_to('admin.vagas.toggleStatus', $job->id); ?>', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: `id=${vagaId}&status=${status ? 1 : 0}&<?php echo csrf_token(); ?>=<?php echo csrf_hash(); ?>`
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const label = document.querySelector(`label[for="status-${vagaId}"]`);
                if (label) {
                    label.textContent = status ? 'Ativa' : 'Inativa';
                }
                alert('Status atualizado com sucesso!');
            } else {
                const checkbox = document.querySelector(`#status-${vagaId}`);
                if (checkbox) {
                    checkbox.checked = !status;
                }
                alert('Erro: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            const checkbox = document.querySelector(`#status-${vagaId}`);
            if (checkbox) {
                checkbox.checked = !status;
            }
            alert('Erro de conexão');
        });
}

function showToast(message, type = 'info') {
    // Usando SweetAlert2 para mensagens mais bonitas (opcional)
    if (typeof Swal !== 'undefined') {
        Swal.fire({
            icon: type,
            title: message,
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
    } else {
        // Fallback para alert simples
        alert(message);
    }
}
</script>
<?php echo $this->endSection(); ?>