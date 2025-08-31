<?php echo $this->extend('layouts/main'); ?>

<?php echo $this->section('title'); ?>
<?php echo "Cadastrar Vaga "; ?>
<?php echo $this->endSection(); ?>

<?php echo $this->section('css'); ?>

<link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.3.2/r-3.0.5/datatables.min.css" rel="stylesheet"
    integrity="sha384-Ccfn4Q+lSKOnc8aSEmH6a7E86lIPrWNrlksJJtb0Qwehi6Fh15cBiKczAAR1N/df" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@tinymce/tinymce-webcomponent/dist/tinymce-webcomponent.min.js"></script>
<?php echo $this->endSection(); ?>
<?php echo $this->section('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6><?php echo $title; ?></h6>
                <a href="<?php echo route_to('admin/vagas/new'); ?>" class="btn btn-success float-end">
                    <i class="fa-solid fa-plus"></i>&nbsp; Nova Vaga
                </a>
            </div>

            <div class=" card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0"></div>
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Example select</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Example multiple select</label>
                        <select multiple class="form-control" id="exampleFormControlSelect2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descrição da Vaga</label>
                        <textarea class="form-control" id="content" rows="3"></textarea>
                        <script>
                        var editorConfig = {
                            license_key: 'guch1ddvk4iznja8o2mdxbrwx9whxtbgmihubh0wlwgxx8i9'
                        }
                        </script>
                        <tinymce-editor config="editorConfig"></tinymce-editor>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php echo $this->endSection(); ?>

<?php echo $this->section('js'); ?>
<script src="/assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.3.2/r-3.0.5/datatables.min.js"
    integrity="sha384-2ftx+0uRJCp41Pvj+ereTHIGMU9w/u1uTH6Pr1l5fHn66JJgc8Xs6r1zCtF7+qb6" crossorigin="anonymous">
</script>
<script>
$('textarea#content').tinymce({
    height: 500,
    license_key: 'gpl',
    menubar: false,
    plugins: [
        'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
        'anchor', 'searchreplace', 'visualblocks', 'fullscreen',
        'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'
    ],
    toolbar: 'undo redo | blocks | bold italic backcolor | ' +
        'alignleft aligncenter alignright alignjustify | ' +
        'bullist numlist outdent indent | removeformat | help'
});
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
        }, // Outras traduções (opcional) search: "Pesquisar:" ,
        zeroRecords: "Nenhum registro encontrado",
        info: "Mostrando _START_ a _END_ de _TOTAL_ registros"
    }
});
</script>
<?php echo $this->endSection(); ?>