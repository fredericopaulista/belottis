<?php echo $this->extend('layouts/main'); ?>

<?php echo $this->section('title'); ?>
<?php echo $page_title ?? 'Editar Candidato'; ?>
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

.btn-upload {
    position: relative;
    overflow: hidden;
}

.btn-upload input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    cursor: pointer;
    display: block;
}
</style>
<?php echo $this->endSection(); ?>

<?php echo $this->section('content'); ?>

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Editar Candidato</h6>
                <a href="<?php echo route_to('admin.candidatos'); ?>" class="btn btn-secondary float-end">
                    <i class="fa-solid fa-arrow-left"></i>&nbsp; Voltar
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

            <div class="card-body">
                <form action="<?php echo route_to('admin.candidatos.update', $candidato['id'] ?? ''); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="_method" value="PUT">

                    <h6 class="text-primary mb-3">Dados Pessoais</h6>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nome" class="form-control-label required-label">Nome Completo</label>
                                <input type="text" class="form-control" id="nome" name="nome" required
                                    value="<?php echo old('nome', $candidato['nome'] ?? ''); ?>"
                                    placeholder="Ex: João da Silva">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email" class="form-control-label required-label">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" required
                                    value="<?php echo old('email', $candidato['email'] ?? ''); ?>"
                                    placeholder="Ex: joao.silva@email.com">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="telefone" class="form-control-label required-label">Telefone</label>
                                <input type="tel" class="form-control" id="telefone" name="telefone" required
                                    value="<?php echo old('telefone', $candidato['telefone'] ?? ''); ?>"
                                    placeholder="Ex: (11) 99999-9999">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="data_nascimento" class="form-control-label">Data de Nascimento</label>
                                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento"
                                    value="<?php echo old('data_nascimento', $candidato['data_nascimento'] ?? ''); ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="linkedin" class="form-control-label">LinkedIn</label>
                                <input type="url" class="form-control" id="linkedin" name="linkedin"
                                    value="<?php echo old('linkedin', $candidato['linkedin'] ?? ''); ?>"
                                    placeholder="Ex: https://linkedin.com/in/usuario">
                            </div>
                        </div>
                    </div>

                    <h6 class="text-primary mt-4 mb-3">Endereço</h6>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cidade" class="form-control-label">Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="cidade"
                                    value="<?php echo old('cidade', $candidato['cidade'] ?? ''); ?>"
                                    placeholder="Ex: São Paulo">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="estado" class="form-control-label">Estado (UF)</label>
                                <select class="form-select" id="estado" name="estado">
                                    <option value="">Selecione o estado</option>
                                    <?php $estados = [
                                        'AC' => 'Acre', 'AL' => 'Alagoas', 'AP' => 'Amapá', 'AM' => 'Amazonas',
                                        'BA' => 'Bahia', 'CE' => 'Ceará', 'DF' => 'Distrito Federal', 'ES' => 'Espírito Santo',
                                        'GO' => 'Goiás', 'MA' => 'Maranhão', 'MT' => 'Mato Grosso', 'MS' => 'Mato Grosso do Sul',
                                        'MG' => 'Minas Gerais', 'PA' => 'Pará', 'PB' => 'Paraíba', 'PR' => 'Paraná',
                                        'PE' => 'Pernambuco', 'PI' => 'Piauí', 'RJ' => 'Rio de Janeiro', 'RN' => 'Rio Grande do Norte',
                                        'RS' => 'Rio Grande do Sul', 'RO' => 'Rondônia', 'RR' => 'Roraima', 'SC' => 'Santa Catarina',
                                        'SP' => 'São Paulo', 'SE' => 'Sergipe', 'TO' => 'Tocantins'
                                    ]; ?>
                                    <?php foreach ($estados as $sigla => $nome): ?>
                                    <option value="<?php echo $sigla; ?>"
                                        <?php echo (old('estado', $candidato['estado'] ?? '') == $sigla) ? 'selected' : ''; ?>>
                                        <?php echo $nome; ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <h6 class="text-primary mt-4 mb-3">Formação Acadêmica</h6>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="formacao_academica" class="form-control-label">Formação Acadêmica</label>
                                <select class="form-select" id="formacao_academica" name="formacao_academica">
                                    <option value="">Selecione a formação</option>
                                    <?php $formacoes = [
                                        'Ensino Fundamental', 'Ensino Médio', 'Técnico', 'Graduação', 
                                        'Pós-graduação', 'Mestrado', 'Doutorado'
                                    ]; ?>
                                    <?php foreach ($formacoes as $formacao): ?>
                                    <option value="<?php echo $formacao; ?>"
                                        <?php echo (old('formacao_academica', $candidato['formacao_academica'] ?? '') == $formacao) ? 'selected' : ''; ?>>
                                        <?php echo $formacao; ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="instituicao" class="form-control-label">Instituição de Ensino</label>
                                <input type="text" class="form-control" id="instituicao" name="instituicao"
                                    value="<?php echo old('instituicao', $candidato['instituicao'] ?? ''); ?>"
                                    placeholder="Ex: Universidade de São Paulo">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="curso" class="form-control-label">Curso</label>
                                <input type="text" class="form-control" id="curso" name="curso"
                                    value="<?php echo old('curso', $candidato['curso'] ?? ''); ?>"
                                    placeholder="Ex: Ciência da Computação">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ano_conclusao" class="form-control-label">Ano de Conclusão</label>
                                <input type="number" class="form-control" id="ano_conclusao" name="ano_conclusao"
                                    value="<?php echo old('ano_conclusao', $candidato['ano_conclusao'] ?? ''); ?>"
                                    min="1900" max="2099" placeholder="Ex: 2023">
                            </div>
                        </div>
                    </div>

                    <h6 class="text-primary mt-4 mb-3">Experiência Profissional</h6>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="experiencia_profissional" class="form-control-label">Experiência
                                    Profissional</label>
                                <textarea class="form-control" id="experiencia_profissional"
                                    name="experiencia_profissional" rows="4"
                                    placeholder="Descreva suas experiências profissionais anteriores"><?php echo old('experiencia_profissional', $candidato['experiencia_profissional'] ?? ''); ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="habilidades_competencias" class="form-control-label">Habilidades e
                                    Competências</label>
                                <textarea class="form-control" id="habilidades_competencias"
                                    name="habilidades_competencias" rows="3"
                                    placeholder="Liste suas principais habilidades e competências"><?php echo old('habilidades_competencias', $candidato['habilidades_competencias'] ?? ''); ?></textarea>
                                <small class="form-text text-muted">Separe as habilidades com vírgula</small>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="portfolio" class="form-control-label">Portfólio</label>
                                <input type="url" class="form-control" id="portfolio" name="portfolio"
                                    value="<?php echo old('portfolio', $candidato['portfolio'] ?? ''); ?>"
                                    placeholder="Ex: https://meuportfolio.com">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="carta_apresentacao" class="form-control-label">Carta de Apresentação</label>
                                <textarea class="form-control" id="carta_apresentacao" name="carta_apresentacao"
                                    rows="4"
                                    placeholder="Escreva uma carta de apresentação para a vaga"><?php echo old('carta_apresentacao', $candidato['carta_apresentacao'] ?? ''); ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa-solid fa-save"></i>&nbsp; Atualizar Candidato
                            </button>
                            <a href="<?php echo route_to('admin.candidatos'); ?>" class="btn btn-secondary">
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
// Máscara para telefone
document.addEventListener('DOMContentLoaded', function() {
    const telefoneInput = document.getElementById('telefone');

    telefoneInput.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');

        if (value.length > 11) {
            value = value.slice(0, 11);
        }

        if (value.length > 10) {
            value = value.replace(/^(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
        } else if (value.length > 6) {
            value = value.replace(/^(\d{2})(\d{4})(\d{0,4})/, '($1) $2-$3');
        } else if (value.length > 2) {
            value = value.replace(/^(\d{2})(\d{0,5})/, '($1) $2');
        } else if (value.length > 0) {
            value = value.replace(/^(\d*)/, '($1');
        }

        e.target.value = value;
    });
});
</script>
<?php echo $this->endSection(); ?>