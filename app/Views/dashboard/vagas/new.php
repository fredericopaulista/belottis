<?php echo $this->extend('layouts/main'); ?>

<?php echo $this->section('title'); ?>
<?php echo $page_title ?? 'Cadastrar Nova Vaga'; ?>
<?php echo $this->endSection(); ?>

<?php echo $this->section('css'); ?>
<style>
.form-control:focus,
.form-select:focus {
    border-color: #4A3AFF;
    box-shadow: 0 0 0 2px rgba(74, 58, 255, 0.25);
}

.required-label::after {
    content: " *";
    color: #e74c3c;
}
</style>
<?php echo $this->endSection(); ?>

<?php echo $this->section('content'); ?>

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Cadastrar Nova Vaga</h6>
                <a href="<?php echo route_to('admin/vagas'); ?>" class="btn btn-secondary float-end">
                    <i class="fa-solid fa-arrow-left"></i>&nbsp; Voltar
                </a>
            </div>

            <div class="card-body">
                <form action="<?php echo route_to('admin.vagas.create'); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" class="form-control" id="empresa" name="empresa" value="..">
                    <input type="hidden" class="form-control" id="setor" name="setor" value=".">
                    <input type="hidden" class="form-select" id="modalidade" name="modalidade" value="Presencial">
                    <input type="hidden" class="form-select" id="nivel_experiencia" name="nivel_experiencia"
                        value="Estagiário">
                    <input type="hidden" step="0.01" class="form-control" id="salario_min" name="salario_min"
                        value="0,00">
                    <input type="hidden" step="0.01" class="form-control" id="salario_max" name="salario_max"
                        value="0,00">
                    <input type="hidden" class="form-control" id="prazo_inscricao" name="prazo_inscricao">
                    <input type="hidden" class="form-control" id="quantidade_vagas" name="quantidade_vagas" value="1">
                    <input type="hidden" class="form-control" id="beneficios" name="beneficios" value="."></input>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="cargo" class="form-control-label required-label">Cargo</label>
                                <input type="text" class="form-control" id="cargo" name="cargo" required
                                    placeholder="Ex: Desenvolvedor Full Stack">
                            </div>
                        </div>

                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cidade" class="form-control-label required-label">Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="cidade" required
                                    placeholder="Ex: São Paulo">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="estado" class="form-control-label required-label">Estado (UF)</label>
                                <select class="form-select" id="estado" name="estado" required>
                                    <option value="">Selecione o estado</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tipo_contratacao" class="form-control-label required-label">Tipo de
                                    Contratação</label>
                                <select class="form-select" id="tipo_contratacao" name="tipo_contratacao" required>
                                    <option value="">Selecione o tipo</option>
                                    <option value="CLT">CLT</option>
                                    <option value="PJ">PJ</option>
                                    <option value="Freelancer">Freelancer</option>
                                    <option value="Estágio">Estágio</option>
                                    <option value="Temporário">Temporário</option>
                                    <option value="Autônomo">Autônomo</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="data_publicacao" class="form-control-label required-label">Data de
                                    Publicação</label>
                                <input type="datetime-local" class="form-control" id="data_publicacao"
                                    name="data_publicacao" required>
                            </div>
                        </div>

                    </div>





                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="descricao" class="form-control-label required-label">Descrição da
                                    Vaga</label>
                                <textarea class="form-control" id="descricao" name="descricao" rows="5" required
                                    placeholder="Descreva detalhadamente as responsabilidades e atribuições do cargo"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="requisitos" class="form-control-label">Requisitos</label>
                                <textarea class="form-control" id="requisitos" name="requisitos" rows="4"
                                    placeholder="Liste os requisitos necessários para a vaga (separados por vírgula ou em tópicos)"></textarea>
                            </div>
                        </div>
                    </div>



                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="ativo" name="ativo" value="1"
                                    checked>
                                <label class="form-check-label" for="ativo">Vaga ativa</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <button type="submit" class="btn btn-success">
                                <i class="fa-solid fa-floppy-disk"></i>&nbsp; Salvar Vaga
                            </button>
                            <a href="<?php echo route_to('admin/vagas'); ?>" class="btn btn-secondary">
                                <i class="fa-solid fa-times"></i>&nbsp; Cancelar
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>

<?php echo $this->section('js'); ?>
<script>
// Definir data/hora atual como padrão para data_publicacao
document.addEventListener('DOMContentLoaded', function() {
    const now = new Date();
    // Formatar para o input datetime-local (YYYY-MM-DDTHH:MM)
    const formattedNow = now.toISOString().slice(0, 16);
    document.getElementById('data_publicacao').value = formattedNow;
});
</script>
<?php echo $this->endSection(); ?>