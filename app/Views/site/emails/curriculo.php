<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidatura Recebida - Belottis RH</title>
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.6;
        color: #2C3E50;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #ffffff;
    }

    .header {
        background: linear-gradient(135deg, #2C3E50 0%, #3498DB 100%);
        padding: 30px;
        text-align: center;
        color: white;
    }

    .logo {
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .logo-subtext {
        font-size: 16px;
        opacity: 0.9;
        letter-spacing: 1px;
    }

    .content {
        padding: 30px;
    }

    .section {
        margin-bottom: 25px;
        border-bottom: 1px solid #eee;
        padding-bottom: 20px;
    }

    .section-title {
        color: #2C3E50;
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 15px;
        padding-bottom: 8px;
        border-bottom: 2px solid #3498DB;
        display: inline-block;
    }

    .field {
        margin-bottom: 15px;
    }

    .field-label {
        font-weight: 600;
        color: #2C3E50;
        display: block;
        margin-bottom: 5px;
    }

    .field-value {
        background-color: #f8f9fa;
        padding: 12px 15px;
        border-radius: 5px;
        border-left: 4px solid #3498DB;
    }

    .footer {
        background-color: #2C3E50;
        color: white;
        padding: 20px;
        text-align: center;
        font-size: 14px;
    }

    .attachment-note {
        background-color: #e8f4fc;
        padding: 15px;
        border-radius: 5px;
        margin-top: 20px;
        border-left: 4px solid #3498DB;
    }

    .highlight {
        background-color: #fff3cd;
        padding: 15px;
        border-radius: 5px;
        margin: 20px 0;
        border-left: 4px solid #ffc107;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">BELOTTIS RH</div>
            <div class="logo-subtext">Recrutamento e Seleção</div>
        </div>

        <div class="content">
            <div class="highlight">
                <strong>Nova Candidatura Recebida</strong> - Um candidato acabou de enviar seu currículo através do
                site.
            </div>
            <div class="field">
                <span class="field-label">ID do Candidato:</span>
                <div class="field-value">
                    <strong><?php echo $nome; ?></strong> -
                    <a href="<?= site_url('admin/candidatos/visualizar/') ?><?php echo $nome; ?>" target="_blank">
                        Ver no painel administrativo
                    </a>
                </div>
            </div>
            <div class="section">
                <h2 class="section-title">Dados Pessoais</h2>
                <div class="field">
                    <span class="field-label">Nome do Candidato:</span>
                    <div class="field-value"><?php echo $nome; ?></div>
                </div>
                <div class="field">
                    <span class="field-label">E-mail:</span>
                    <div class="field-value"><?php echo $email; ?></div>
                </div>
                <div class="field">
                    <span class="field-label">Telefone:</span>
                    <div class="field-value"><?php echo $telefone; ?></div>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">Formação Acadêmica</h2>
                <div class="field">
                    <span class="field-label">Formação:</span>
                    <div class="field-value"><?php echo $formacao; ?></div>
                </div>
                <div class="field">
                    <span class="field-label">Curso:</span>
                    <div class="field-value"><?php echo $curso; ?></div>
                </div>
                <div class="field">
                    <span class="field-label">Instituição:</span>
                    <div class="field-value"><?php echo $instituicao; ?></div>
                </div>

            </div>

            <div class="section">
                <h2 class="section-title">Experiência Profissional</h2>
                <div class="field">
                    <div class="field-value"><?php echo $experiencia; ?></div>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">Habilidades e Competências</h2>
                <div class="field">
                    <div class="field-value"><?php echo $habilidades; ?></div>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">Documentos Anexados</h2>
                <div class="field">
                    <span class="field-label">Currículo:</span>
                    <div class="field-value">[NOME_ARQUIVO_CURRICULO]</div>
                </div>
                <div class="attachment-note">
                    <strong>Arquivo anexado a este e-mail.</strong>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">Carta de Apresentação</h2>
                <div class="field">
                    <div class="field-value"><?php echo $carta_apresentacao; ?></div>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">Informações Adicionais</h2>
                <div class="field">
                    <span class="field-label">Data de Envio:</span>
                    <div class="field-value"><?php echo $data; ?></div>
                </div>
                <div class="field">
                    <span class="field-label">IP do Candidato:</span>
                    <div class="field-value"><?php echo $ip; ?></div>
                </div>
            </div>
        </div>

        <div class="footer">
            <p>Este e-mail foi gerado automaticamente pelo site de recrutamento da Belottis Estágios.</p>
            <p>© <?php echo $ano; ?> Belottis Estágios - Todos os direitos reservados</p>
        </div>
    </div>
</body>

</html>