<?php echo $this->extend('layouts/main'); ?>

<?php echo $this->section('title'); ?>
<?php echo $page_title ?? 'Editar Vaga'; ?>
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
                <h6>Editar Vaga</h6>
                <a href="<?php echo route_to('admin/vagas'); ?>" class="btn btn-secondary float-end">
                    <i class="fa-solid fa-arrow-left"></i>&nbsp; Voltar
                </a>
            </div>

            <div class="card-body">
                <form action="<?php echo route_to('admin.vagas.update', $vaga->id); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="_method" value="PUT">

                    <!-- Campos ocultos com valores da vaga existente -->
                    <input type="hidden" class="form-control" id="empresa" name="empresa"
                        value="<?php echo $vaga->empresa; ?>">
                    <input type="hidden" class="form-control" id="setor" name="setor"
                        value="<?php echo $vaga->setor; ?>">
                    <input type="hidden" class="form-select" id="modalidade" name="modalidade"
                        value="<?php echo $vaga->modalidade; ?>">
                    <input type="hidden" class="form-select" id="nivel_experiencia" name="nivel_experiencia"
                        value="<?php echo $vaga->nivel_experiencia; ?>">
                    <input type="hidden" step="0.01" class="form-control" id="salario_min" name="salario_min"
                        value="0.01">
                    <input type="hidden" step="0.01" class="form-control" id="salario_max" name="salario_max"
                        value="0.01">
                    <input type="hidden" class="form-control" id="prazo_inscricao" name="prazo_inscricao"
                        value="<?php echo $vaga->prazo_inscricao; ?>">
                    <input type="hidden" class="form-control" id="quantidade_vagas" name="quantidade_vagas" value="1">
                    <input type="hidden" class="form-control" id="beneficios" name="beneficios"
                        value="<?php echo $vaga->beneficios; ?>">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="cargo" class="form-control-label required-label">Cargo</label>
                                <input type="text" class="form-control" id="cargo" name="cargo" required
                                    placeholder="Ex: Desenvolvedor Full Stack" value="<?php echo $vaga->cargo; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cidade" class="form-control-label required-label">Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="cidade" required
                                    placeholder="Ex: São Paulo" value="<?php echo $vaga->cidade; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="estado" class="form-control-label required-label">Estado (UF)</label>
                                <select class="form-select" id="estado" name="estado" required>
                                    <option value="">Selecione o estado</option>
                                    <option value="AC" <?php echo ($vaga->estado) == 'AC' ? 'selected' : ''; ?>>
                                        Acre</option>
                                    <option value="AL" <?php echo ($vaga->estado) == 'AL' ? 'selected' : ''; ?>>
                                        Alagoas</option>
                                    <option value="AP" <?php echo ($vaga->estado) == 'AP' ? 'selected' : ''; ?>>
                                        Amapá</option>
                                    <option value="AM" <?php echo ($vaga->estado) == 'AM' ? 'selected' : ''; ?>>
                                        Amazonas</option>
                                    <option value="BA" <?php echo ($vaga->estado) == 'BA' ? 'selected' : ''; ?>>
                                        Bahia</option>
                                    <option value="CE" <?php echo ($vaga->estado) == 'CE' ? 'selected' : ''; ?>>
                                        Ceará</option>
                                    <option value="DF" <?php echo ($vaga->estado) == 'DF' ? 'selected' : ''; ?>>
                                        Distrito Federal</option>
                                    <option value="ES" <?php echo ($vaga->estado) == 'ES' ? 'selected' : ''; ?>>
                                        Espírito Santo</option>
                                    <option value="GO" <?php echo ($vaga->estado) == 'GO' ? 'selected' : ''; ?>>
                                        Goiás</option>
                                    <option value="MA" <?php echo ($vaga->estado) == 'MA' ? 'selected' : ''; ?>>
                                        Maranhão</option>
                                    <option value="MT" <?php echo ($vaga->estado) == 'MT' ? 'selected' : ''; ?>>
                                        Mato Grosso</option>
                                    <option value="MS" <?php echo ($vaga->estado) == 'MS' ? 'selected' : ''; ?>>
                                        Mato Grosso do Sul</option>
                                    <option value="MG" <?php echo ($vaga->estado) == 'MG' ? 'selected' : ''; ?>>
                                        Minas Gerais</option>
                                    <option value="PA" <?php echo ($vaga->estado) == 'PA' ? 'selected' : ''; ?>>
                                        Pará</option>
                                    <option value="PB" <?php echo ($vaga->estado) == 'PB' ? 'selected' : ''; ?>>
                                        Paraíba</option>
                                    <option value="PR" <?php echo ($vaga->estado) == 'PR' ? 'selected' : ''; ?>>
                                        Paraná</option>
                                    <option value="PE" <?php echo ($vaga->estado) == 'PE' ? 'selected' : ''; ?>>
                                        Pernambuco</option>
                                    <option value="PI" <?php echo ($vaga->estado) == 'PI' ? 'selected' : ''; ?>>
                                        Piauí</option>
                                    <option value="RJ" <?php echo ($vaga->estado) == 'RJ' ? 'selected' : ''; ?>>
                                        Rio de Janeiro</option>
                                    <option value="RN" <?php echo ($vaga->estado) == 'RN' ? 'selected' : ''; ?>>
                                        Rio Grande do Norte</option>
                                    <option value="RS" <?php echo ($vaga->estado) == 'RS' ? 'selected' : ''; ?>>
                                        Rio Grande do Sul</option>
                                    <option value="RO" <?php echo ($vaga->estado) == 'RO' ? 'selected' : ''; ?>>
                                        Rondônia</option>
                                    <option value="RR" <?php echo ($vaga->estado) == 'RR' ? 'selected' : ''; ?>>
                                        Roraima</option>
                                    <option value="SC" <?php echo ($vaga->estado) == 'SC' ? 'selected' : ''; ?>>
                                        Santa Catarina</option>
                                    <option value="SP" <?php echo ($vaga->estado) == 'SP' ? 'selected' : ''; ?>>
                                        São Paulo</option>
                                    <option value="SE" <?php echo ($vaga->estado) == 'SE' ? 'selected' : ''; ?>>
                                        Sergipe</option>
                                    <option value="TO" <?php echo ($vaga->estado) == 'TO' ? 'selected' : ''; ?>>
                                        Tocantins</option>
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
                                    <option value="CLT"
                                        <?php echo ($vaga->tipo_contratacao) == 'CLT' ? 'selected' : ''; ?>>CLT
                                    </option>
                                    <option value="PJ"
                                        <?php echo ($vaga->tipo_contratacao) == 'PJ' ? 'selected' : ''; ?>>PJ
                                    </option>
                                    <option value="Freelancer"
                                        <?php echo ($vaga->tipo_contratacao) == 'Freelancer' ? 'selected' : ''; ?>>
                                        Freelancer</option>
                                    <option value="Estágio"
                                        <?php echo ($vaga->tipo_contratacao) == 'Estágio' ? 'selected' : ''; ?>>
                                        Estágio</option>
                                    <option value="Temporário"
                                        <?php echo ($vaga->tipo_contratacao) == 'Temporário' ? 'selected' : ''; ?>>
                                        Temporário</option>
                                    <option value="Autônomo"
                                        <?php echo ($vaga->tipo_contratacao) == 'Autônomo' ? 'selected' : ''; ?>>
                                        Autônomo</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="data_publicacao" class="form-control-label required-label">Data de
                                    Publicação</label>
                                <input type="datetime-local" class="form-control" id="data_publicacao"
                                    name="data_publicacao" required value="<?php echo $vaga->data_publicacao; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="descricao" class="form-control-label required-label">Descrição da
                                    Vaga</label>
                                <textarea class="form-control" id="descricao" name="descricao" rows="5" required
                                    placeholder="Descreva detalhadamente as responsabilidades e atribuições do cargo"><?php echo $vaga->descricao; ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="requisitos" class="form-control-label">Requisitos</label>
                                <textarea class="form-control" id="requisitos" name="requisitos" rows="4"
                                    placeholder="Liste os requisitos necessários para a vaga (separados por vírgula ou em tópicos)"><?php echo $vaga->requisitos; ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="ativo" name="ativo" value="1"
                                    <?php echo ($vaga->ativo ?? 1) ? 'checked' : ''; ?> <label class="form-check-label"
                                    for="ativo">Vaga ativa</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <button type="submit" class="btn btn-success">
                                <i class="fa-solid fa-floppy-disk"></i>&nbsp; Atualizar Vaga
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
// Não definir data/hora atual automaticamente na edição
// Os valores serão preenchidos com os dados existentes
</script>
<?php echo $this->endSection(); ?>