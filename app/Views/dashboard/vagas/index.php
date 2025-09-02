<?php echo $this->extend('layouts/main'); ?>

<?php echo $this->section('title'); ?>
<?php echo $page_title ?? 'Vagas Disponíveis'; ?>
<?php echo $this->endSection(); ?>

<?php echo $this->section('content'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?? 'Vagas Disponíveis' ?></h1>

    <?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif ?>

    <?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Lista de Vagas</h6>
            <a href="<?php echo route_to('admin.vagas.new'); ?>" class="btn btn-success btn-sm">
                <i class="fas fa-plus"></i> Nova Vaga
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Empresa</th>
                            <th>Status</th>
                            <th>Publicado em</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $job): ?>
                        <tr id="vaga-<?= $job->id ?>">
                            <td><?= $job->id ?></td>
                            <td><?= ucfirst($job->cargo) ?></td>
                            <td><?= $job->empresa ?></td>
                            <td>
                                <span class="badge badge-<?= $job->ativo == 1 ? 'success' : 'danger' ?>"
                                    id="status-badge-<?= $job->id ?>">
                                    <?= $job->ativo == 1 ? 'Ativa' : 'Inativa' ?>
                                </span>
                            </td>
                            <td><?= date('d/m/Y', strtotime($job->created_at)) ?></td>
                            <td>
                                <a href="<?php echo route_to('admin.vagas.edit', $job->id); ?>"
                                    class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i> Editar
                                </a>
                                <!-- <a href="<?= base_url('admin/vagas/toggle-status/' . $job->id) ?>"
                                    class="btn btn-<?= $job->ativo == 1 ? 'warning' : 'success' ?> btn-sm toggle-status"
                                    data-id="<?= $job->id ?>" data-status="<?= $job->ativo ?>">
                                    <i class="fas fa-<?= $job->ativo == 1 ? 'times' : 'check' ?>"
                                        id="toggle-icon-<?= $job->id ?>"></i>
                                    <span
                                        id="toggle-text-<?= $job->id ?>"><?= $job->ativo == 1 ? 'Inativar' : 'Ativar' ?></span>
                                </a> -->
                                <a href="<?php echo route_to('admin.vagas.delete', $job->id); ?>"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Tem certeza que deseja excluir esta vaga?')">
                                    <i class="fas fa-trash"></i> Excluir
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
<?php echo $this->endSection(); ?>

<?php echo $this->section('js'); ?>
<script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.3.2/r-3.0.5/datatables.min.js"
    integrity="sha384-2ftx+0uRJCp41Pvj+ereTHIGMU9w/u1uTH6Pr1l5fHn66JJgc8Xs6r1zCtF7+qb6" crossorigin="anonymous">
</script>
<script>
$(document).ready(function() {
    $('#dataTable').DataTable({
        order: [
            [0, 'desc']
        ],
        language: {
            lengthMenu: "Mostrar _MENU_ registros por página",
            paginate: {
                first: "«",
                previous: "‹",
                next: "›",
                last: "»"
            },
            search: "Pesquisar:",
            zeroRecords: "Nenhum registro encontrado",
            info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
            infoEmpty: "Mostrando 0 a 0 de 0 registros",
            infoFiltered: "(filtrado de _MAX_ registros no total)"
        }
    });

    // Interceptar cliques nos links de toggle status
    $('.toggle-status').on('click', function(e) {
        e.preventDefault();

        const link = $(this);
        const vagaId = link.data('id');
        const statusAtual = link.data('status');
        const novoStatus = statusAtual == 1 ? 0 : 1;

        // Mostrar loading
        const originalHtml = link.html();
        link.html('<i class="fas fa-spinner fa-spin"></i> Processando...');
        link.addClass('disabled');

        // Fazer a requisição GET para a rota existente
        window.location.href = link.attr('href');

        // Nota: Após a requisição, o servidor deve redirecionar de volta para esta página
        // e atualizar os status. Se quiser uma atualização sem recarregar a página,
        // seria necessário criar uma rota POST ou usar a rota GET com AJAX
    });
});

// Alternativa: Se preferir usar AJAX com a rota GET existente
function toggleStatusWithAjax(vagaId, statusAtual) {
    const novoStatus = statusAtual == 1 ? 0 : 1;
    const url = '<?= base_url('admin/vagas/toggle-status') ?>/' + vagaId;

    // Mostrar loading
    const button = $(`#toggle-btn-${vagaId}`);
    const originalHtml = button.html();
    button.html('<i class="fas fa-spinner fa-spin"></i> Processando...');
    button.addClass('disabled');

    // Fazer requisição GET
    fetch(url, {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Recarregar a página para ver as mudanças
                location.reload();
            } else {
                alert('Erro: ' + data.message);
                button.html(originalHtml);
                button.removeClass('disabled');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Erro de conexão');
            button.html(originalHtml);
            button.removeClass('disabled');
        });
}
</script>
<?php echo $this->endSection(); ?>