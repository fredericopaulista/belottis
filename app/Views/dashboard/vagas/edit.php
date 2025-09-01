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

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cargo" class="form-control-label required-label">Cargo</label>
                                <input type="text" class="form-control" id="cargo" name="cargo" required
                                    value="<?php echo old('cargo', $vaga->cargo); ?>"
                                    placeholder="Ex: Desenvolvedor Full Stack">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="empresa" class="form-control-label required-label">Empresa</label>
                                <input type="text" class="form-control" id="empresa" name="empresa" required
                                    value="<?php echo old('empresa', $vaga->empresa); ?>" placeholder="Nome da empresa">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="cidade" class="form-control-label required-label">Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="cidade" required
                                    value="<?php echo old('cidade', $vaga->cidade); ?>" placeholder="Ex: São Paulo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="estado" class="form-control-label required-label">Estado (UF)</label>
                                <select class="form-select" id="estado" name="estado" required>
                                    <option value="">Selecione o estado</option>
                                    <?php 
                                    $estados = [
                                        'AC' => 'Acre', 'AL' => 'Alagoas', 'AP' => 'Amapá', 'AM' => 'Amazonas',
                                        'BA' => 'Bahia', 'CE' => 'Ceará', 'DF' => 'Distrito Federal', 'ES' => 'Espírito Santo',
                                        'GO' => 'Goiás', 'MA' => 'Maranhão', 'MT' => 'Mato Grosso', 'MS' => 'Mato Grosso do Sul',
                                        'MG' => 'Minas Gerais', 'PA' => 'Pará', 'PB' => 'Paraíba', 'PR' => 'Paraná',
                                        'PE' => 'Pernambuco', 'PI' => 'Piauí', 'RJ' => 'Rio de Janeiro', 'RN' => 'Rio Grande do Norte',
                                        'RS' => 'Rio Grande do Sul', 'RO' => 'Rondônia', 'RR' => 'Roraima', 'SC' => 'Santa Catarina',
                                        'SP' => 'São Paulo', 'SE' => 'Sergipe', 'TO' => 'Tocantins'
                                    ];
                                    foreach ($estados as $uf => $nome):
                                    ?>
                                    <option value="<?php echo $uf; ?>"
                                        <?php echo (old('estado', $vaga->estado) == $uf) ? 'selected' : ''; ?>>
                                        <?php echo $nome; ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="setor" class="form-control-label">Setor</label>
                                <input type="text" class="form-control" id="setor" name="setor"
                                    value="<?php echo old('setor', $vaga->setor); ?>"
                                    placeholder="Ex: Tecnologia, Saúde, Educação">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tipo_contratacao" class="form-control-label required-label">Tipo de
                                    Contratação</label>
                                <select class="form-select" id="tipo_contratacao" name="tipo_contratacao" required>
                                    <option value="">Selecione o tipo</option>
                                    <?php 
                                    $tiposContratacao = ['CLT', 'PJ', 'Freelancer', 'Estágio', 'Temporário', 'Autônomo'];
                                    foreach ($tiposContratacao as $tipo):
                                    ?>
                                    <option value="<?php echo $tipo; ?>"
                                        <?php echo (old('tipo_contratacao', $vaga->tipo_contratacao) == $tipo) ? 'selected' : ''; ?>>
                                        <?php echo $tipo; ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="modalidade" class="form-control-label required-label">Modalidade</label>
                                <select class="form-select" id="modalidade" name="modalidade" required>
                                    <option value="">Selecione a modalidade</option>
                                    <?php 
                                    $modalidades = ['Presencial', 'Híbrido', 'Remoto'];
                                    foreach ($modalidades as $modalidade):
                                    ?>
                                    <option value="<?php echo $modalidade; ?>"
                                        <?php echo (old('modalidade', $vaga->modalidade) == $modalidade) ? 'selected' : ''; ?>>
                                        <?php echo $modalidade; ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nivel_experiencia" class="form-control-label">Nível de Experiência</label>
                                <select class="form-select" id="nivel_experiencia" name="nivel_experiencia">
                                    <option value="">Selecione o nível</option>
                                    <?php 
                                    $niveisExperiencia = ['Estagiário', 'Júnior', 'Pleno', 'Sênior', 'Especialista'];
                                    foreach ($niveisExperiencia as $nivel):
                                    ?>
                                    <option value="<?php echo $nivel; ?>"
                                        <?php echo (old('nivel_experiencia', $vaga->nivel_experiencia) == $nivel) ? 'selected' : ''; ?>>
                                        <?php echo $nivel; ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="salario_min" class="form-control-label">Salário Mínimo (R$)</label>
                                <input type="number" step="0.01" class="form-control" id="salario_min"
                                    name="salario_min" value="<?php echo old('salario_min', $vaga->salario_min); ?>"
                                    placeholder="0,00">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="salario_max" class="form-control-label">Salário Máximo (R$)</label>
                                <input type="number" step="0.01" class="form-control" id="salario_max"
                                    name="salario_max" value="<?php echo old('salario_max', $vaga->salario_max); ?>"
                                    placeholder="0,00">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="quantidade_vagas" class="form-control-label">Quantidade de Vagas</label>
                                <input type="number" class="form-control" id="quantidade_vagas" name="quantidade_vagas"
                                    value="<?php echo old('quantidade_vagas', $vaga->quantidade_vagas); ?>" min="1">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="data_publicacao" class="form-control-label required-label">Data de
                                    Publicação</label>
                                <input type="datetime-local" class="form-control" id="data_publicacao"
                                    name="data_publicacao" required
                                    value="<?php echo date('Y-m-d\TH:i', strtotime(old('data_publicacao', $vaga->data_publicacao))); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="prazo_inscricao" class="form-control-label">Prazo de Inscrição</label>
                                <?php $prazoInscricao = old('prazo_inscricao', $vaga->prazo_inscricao); ?>
                                <input type="datetime-local" class="form-control" id="prazo_inscricao"
                                    name="prazo_inscricao"
                                    value="<?php echo $prazoInscricao ? date('Y-m-d\TH:i', strtotime($prazoInscricao)) : ''; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="descricao" class="form-control-label required-label">Descrição da
                                    Vaga</label>
                                <textarea class="form-control" id="descricao" name="descricao" rows="5" required
                                    placeholder="Descreva detalhadamente as responsabilidades e atribuições do cargo"><?php echo old('descricao', $vaga->descricao); ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="requisitos" class="form-control-label">Requisitos</label>
                                <textarea class="form-control" id="requisitos" name="requisitos" rows="4"
                                    placeholder="Liste os requisitos necessários para a vaga (separados por vírgula ou em tópicos)"><?php echo old('requisitos', $vaga->requisitos); ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="beneficios" class="form-control-label">Benefícios</label>
                                <textarea class="form-control" id="beneficios" name="beneficios" rows="4"
                                    placeholder="Liste os benefícios oferecidos (separados por vírgula ou em tópicos)"><?php echo old('beneficios', $vaga->beneficios); ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="ativo" name="ativo" value="1"
                                    <?php echo (old('ativo', $vaga->ativo) == 1) ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="ativo">Vaga ativa</label>
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