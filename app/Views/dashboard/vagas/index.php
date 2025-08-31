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
                <a href="<?php echo route_to('admin/vagas/new'); ?>" class="btn btn-success float-end">
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
                                    <span class="text-secondary text-xs font-weight-bold"></span>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span
                                        class="text-secondary text-xs font-weight-bold"><?= date('d-m-Y', strtotime($job->created_at)) ?></span>
                                </td>
                                <td class="align-middle text-center">
                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                        data-toggle="tooltip" data-original-title="Edit user">
                                        Editar
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