<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Mensagem de Contato</title>
    <style>
    /* Reset CSS para compatibilidade com clientes de email */
    body,
    table,
    td,
    a {
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
    }

    table,
    td {
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        border-collapse: collapse;
    }

    img {
        -ms-interpolation-mode: bicubic;
        border: 0;
        height: auto;
        line-height: 100%;
        outline: none;
        text-decoration: none;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
    }

    .header {
        background-color: #2563eb;
        color: white;
        padding: 20px;
        text-align: center;
    }

    .content {
        padding: 30px;
        background-color: #f9fafb;
        font-family: Arial, sans-serif;
        color: #374151;
        line-height: 1.6;
    }

    .field {
        margin-bottom: 15px;
    }

    .label {
        font-weight: bold;
        color: #4b5563;
        display: block;
        margin-bottom: 5px;
    }

    .value {
        background-color: white;
        padding: 10px 15px;
        border-left: 4px solid #2563eb;
        border-radius: 0 4px 4px 0;
    }

    .message {
        background-color: white;
        padding: 15px;
        border-left: 4px solid #2563eb;
        border-radius: 0 4px 4px 0;
        margin-top: 10px;
    }

    .footer {
        background-color: #f3f4f6;
        padding: 20px;
        text-align: center;
        font-size: 12px;
        color: #6b7280;
    }

    @media only screen and (max-width: 480px) {
        .container {
            width: 100% !important;
        }
    }
    </style>
</head>

<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #e5e7eb;">
    <center>
        <div class="container">
            <!-- Cabeçalho -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0" class="header">
                <tr>
                    <td>
                        <h1 style="margin: 0; font-size: 24px;">Nova Mensagem de Contato</h1>
                        <p style="margin: 5px 0 0; opacity: 0.9;">Site Belottis - Formulário de Contato</p>
                    </td>
                </tr>
            </table>

            <!-- Conteúdo -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0" class="content">
                <tr>
                    <td>
                        <p>Olá,</p>
                        <p>Você recebeu uma nova mensagem através do formulário de contato do site.</p>

                        <div class="field">
                            <span class="label">Nome:</span>
                            <div class="value"><?php echo $name; ?></div>
                        </div>

                        <div class="field">
                            <span class="label">E-mail:</span>
                            <div class="value"><?php echo $email; ?></div>
                        </div>

                        <div class="field">
                            <span class="label">Telefone:</span>
                            <div class="value"><?php echo $phone; ?></div>
                        </div>
                        <div class="field">
                            <span class="label">Empresa:</span>
                            <div class="value"><?php echo $company; ?></div>
                        </div>

                        <div class="field">
                            <span class="label">Assunto:</span>
                            <div class="value"><?php echo $subject; ?></div>
                        </div>

                        <div class="field">
                            <span class="label">Mensagem:</span>
                            <div class="message"><?php echo $message; ?></div>
                        </div>

                        <p style="margin-top: 25px;">Atenciosamente,<br>Sistema de Contato</p>
                    </td>
                </tr>
            </table>

            <!-- Rodapé -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0" class="footer">
                <tr>
                    <td>
                        <p>© <?php echo $ano; ?> <?php echo $nome_da_empresa; ?>. Todos os direitos reservados.</p>
                        <p>Esta é uma mensagem automática, por favor não responda este e-mail.</p>
                    </td>
                </tr>
            </table>
        </div>
    </center>
</body>

</html>