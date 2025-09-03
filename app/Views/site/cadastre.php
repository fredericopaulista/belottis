<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belottis - Cadastro de Currículo</title>
    <meta name="description"
        content="Cadastre seu currículo na Belottis RH e tenha acesso às melhores oportunidades de emprego e estágio.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    :root {
        --primary: #2C3E50;
        --secondary: #3498DB;
        --accent: #55b2b4;
        --light: #ECF0F1;
        --dark: #2C3E50;
        --text: #2C3E50;
        --text-light: #7F8C8D;
        --white: #FFFFFF;
        --success: #27AE60;
    }

    body {
        background-color: var(--light);
        color: var(--text);
        line-height: 1.6;
    }

    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Header */
    header {
        background-color: var(--white);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        position: sticky;
        top: 0;
        z-index: 100;
    }

    .header-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 0;
    }

    .logo {
        display: flex;
        align-items: center;
    }

    .logo img {
        height: 50px;
    }

    .logo-text {
        font-size: 24px;
        font-weight: 700;
        color: var(--primary);
        margin-left: 10px;
    }

    .logo-subtext {
        font-size: 14px;
        color: var(--accent);
        font-weight: 600;
        display: block;
        letter-spacing: 1px;
    }

    nav ul {
        display: flex;
        list-style: none;
    }

    nav ul li {
        margin-left: 25px;
    }

    nav ul li a {
        text-decoration: none;
        color: var(--text);
        font-weight: 500;
        transition: color 0.3s;
        position: relative;
    }

    nav ul li a:hover {
        color: var(--secondary);
    }

    nav ul li a::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 0;
        height: 2px;
        background-color: var(--secondary);
        transition: width 0.3s;
    }

    nav ul li a:hover::after {
        width: 100%;
    }

    .nav-buttons {
        display: flex;
        align-items: center;
    }

    .btn {
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s;
        display: inline-block;
    }

    .btn-outline {
        border: 2px solid var(--primary);
        color: var(--primary);
        margin-right: 15px;
    }

    .btn-outline:hover {
        background-color: var(--primary);
        color: var(--white);
    }

    .btn-primary {
        background-color: var(--accent);
        color: var(--white);
    }

    .btn-primary:hover {
        background-color: #c0392b;
        transform: translateY(-2px);
    }

    .mobile-menu-btn {
        display: none;
        font-size: 24px;
        background: none;
        border: none;
        color: var(--primary);
        cursor: pointer;
    }

    /* Footer */
    footer {
        background-color: #2b3479;
        color: var(--white);
        padding: 60px 0 20px;
    }

    .footer-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
        margin-bottom: 40px;
    }

    .footer-logo {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .footer-logo-text {
        font-size: 24px;
        font-weight: 700;
        margin-left: 10px;
    }

    .footer-logo-subtext {
        font-size: 14px;
        color: var(--accent);
        font-weight: 600;
        display: block;
        letter-spacing: 1px;
    }

    .footer-about p {
        opacity: 0.8;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .footer-social {
        display: flex;
        gap: 15px;
    }

    .footer-social a {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--white);
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .footer-social a:hover {
        background-color: var(--accent);
    }

    .footer-title {
        font-size: 1.2rem;
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 10px;
    }

    .footer-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 40px;
        height: 2px;
        background-color: var(--accent);
    }

    .footer-links {
        list-style: none;
    }

    .footer-links li {
        margin-bottom: 10px;
    }

    .footer-links a {
        color: var(--white);
        text-decoration: none;
        opacity: 0.8;
        transition: opacity 0.3s;
    }

    .footer-links a:hover {
        opacity: 1;
        color: var(--accent);
    }

    .footer-contact li {
        display: flex;
        margin-bottom: 15px;
    }

    .footer-contact i {
        margin-right: 10px;
        color: var(--accent);
    }

    .footer-bottom {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        padding-top: 20px;
        text-align: center;
        opacity: 0.7;
        font-size: 0.9rem;
    }

    .footer-bottom a {
        color: var(--white);
        text-decoration: none;
    }

    .footer-bottom a:hover {
        text-decoration: underline;
    }

    /* Responsividade */
    @media (max-width: 768px) {
        nav ul {
            display: none;
            flex-direction: column;
            position: absolute;
            top: 80px;
            left: 0;
            right: 0;
            background-color: var(--white);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        nav ul.active {
            display: flex;
        }

        nav ul li {
            margin: 10px 0;
        }

        .mobile-menu-btn {
            display: block;
        }

        .nav-buttons {
            display: none;
        }
    }

    @media (max-width: 576px) {
        .logo-text {
            font-size: 20px;
        }
    }

    .nav-link.active {
        font-weight: 600;
    }

    #page-header {
        background: linear-gradient(135deg, var(--primary) 0%, #2C3E50 100%);
        color: var(--white);
        padding: 80px 0;
        text-align: center;
    }

    #page-header h1 {
        font-size: 3rem;
        margin-bottom: 20px;
    }

    #page-header p {
        font-size: 1.2rem;
        max-width: 700px;
        margin: 0 auto 30px;
        opacity: 0.9;
    }

    .content-section {
        padding: 80px 0;
    }

    /* Estilos específicos para o formulário */
    .form-section {
        padding: 40px 0;
    }

    .form-container {
        background-color: var(--white);
        border-radius: 10px;
        padding: 40px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        margin-bottom: 40px;
    }

    .form-title {
        font-size: 1.8rem;
        color: var(--primary);
        margin-bottom: 10px;
    }

    .form-divider {
        width: 60px;
        height: 3px;
        background-color: var(--accent);
        margin-bottom: 30px;
    }

    .form-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: var(--primary);
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1rem;
        transition: border-color 0.3s;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: var(--secondary);
    }

    .form-group textarea {
        min-height: 150px;
        resize: vertical;
    }

    .file-upload {
        border: 2px dashed #ddd;
        border-radius: 10px;
        padding: 30px;
        text-align: center;
        margin-bottom: 20px;
        cursor: pointer;
    }

    .file-upload:hover {
        border-color: var(--secondary);
    }

    .file-icon {
        font-size: 40px;
        color: var(--text-light);
        margin-bottom: 15px;
    }

    .form-checkbox {
        display: flex;
        align-items: flex-start;
        margin-bottom: 20px;
    }

    .form-checkbox input {
        margin-right: 10px;
        margin-top: 5px;
    }

    .form-checkbox label {
        font-size: 0.9rem;
        color: var(--text-light);
        line-height: 1.4;
    }

    .form-button {
        background-color: var(--primary);
        color: var(--white);
        border: none;
        padding: 15px 30px;
        border-radius: 5px;
        font-weight: 600;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s;
        display: block;
        margin: 0 auto;
    }

    .form-button:hover {
        background-color: var(--secondary);
    }

    /* FAQ Section */
    .faq-section {
        padding: 60px 0;
        background-color: var(--white);
    }

    .faq-title {
        text-align: center;
        margin-bottom: 50px;
    }

    .faq-title h2 {
        font-size: 2.5rem;
        color: var(--primary);
        margin-bottom: 15px;
    }

    .faq-title p {
        font-size: 1.2rem;
        color: var(--text-light);
        max-width: 700px;
        margin: 0 auto;
    }

    .faq-item {
        border: 1px solid #ddd;
        border-radius: 10px;
        margin-bottom: 15px;
        overflow: hidden;
    }

    .faq-question {
        padding: 20px;
        background-color: var(--light);
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
    }

    .faq-question h3 {
        font-size: 1.2rem;
        color: var(--primary);
    }

    .faq-answer {
        padding: 0 20px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease, padding 0.3s ease;
    }

    .faq-answer.active {
        padding: 20px;
        max-height: 200px;
    }

    .faq-answer p {
        color: var(--text-light);
        line-height: 1.6;
    }

    /* NOVOS ESTILOS PARA FEEDBACK */
    .feedback-message {
        padding: 15px 20px;
        border-radius: 8px;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        animation: fadeIn 0.5s ease-in-out;
    }

    .feedback-success {
        background-color: #d4edda;
        color: #155724;
        border-left: 4px solid var(--success);
    }

    .feedback-error {
        background-color: #f8d7da;
        color: #721c24;
        border-left: 4px solid #dc3545;
    }

    .feedback-icon {
        margin-right: 12px;
        font-size: 20px;
    }

    .feedback-content {
        flex: 1;
    }

    .feedback-close {
        background: none;
        border: none;
        font-size: 18px;
        cursor: pointer;
        color: inherit;
        opacity: 0.7;
        transition: opacity 0.3s;
    }

    .feedback-close:hover {
        opacity: 1;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    </style>
    <style>
    .whatsapp-float {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
    }

    .whatsapp-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 60px;
        height: 60px;
        background-color: #25d366;
        border-radius: 50%;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
        animation: pulse 2s infinite;
        text-decoration: none;
    }

    .whatsapp-link:hover {
        background-color: #128C7E;
        transform: scale(1.1);
        box-shadow: 0 6px 14px rgba(0, 0, 0, 0.25);
    }

    .whatsapp-link i {
        font-size: 30px;
        color: white;
    }

    /* Animação de pulsar */
    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
        }

        70% {
            box-shadow: 0 0 0 10px rgba(37, 211, 102, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
        }
    }

    /* Responsividade */
    @media (max-width: 768px) {
        .whatsapp-float {
            bottom: 15px;
            right: 15px;
        }

        .whatsapp-link {
            width: 50px;
            height: 50px;
        }

        .whatsapp-link i {
            font-size: 25px;
        }
    }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <?= $this->include('site/layouts/nav') ?>
    </header>

    <!-- Main Content -->
    <main id="main">
        <section id="page-header">
            <div class="container">
                <h1>Cadastro de Currículo</h1>
                <p>Preencha o formulário abaixo com suas informações profissionais e dê o primeiro passo para encontrar
                    a vaga ideal para sua carreira.</p>
            </div>
        </section>

        <section class="form-section">
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
            <div class="container">
                <div class="form-container">
                    <h2 class="form-title">Informações Pessoais</h2>
                    <div class="form-divider"></div>

                    <form id="curriculum-form" method="post" action="<?= route_to('site.enviarCurriculo') ?>"
                        enctype="multipart/form-data">
                        <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="nome">Nome Completo *</label>
                                <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="email">E-mail *</label>
                                <input type="email" id="email" name="email" placeholder="seu.email@exemplo.com"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="telefone">Telefone *</label>
                                <input type="tel" id="telefone" name="telefone" placeholder="(00) 00000-0000" required>
                            </div>

                            <div class="form-group">
                                <label for="nascimento">Data de Nascimento *</label>
                                <input type="date" id="nascimento" name="data_nascimento" required>
                            </div>

                            <div class=" form-group">
                                <label for="cidade">Cidade *</label>
                                <input type="text" id="cidade" placeholder="Sua cidade" name="cidade" required>
                            </div>

                            <div class="form-group">
                                <label for="estado">Estado *</label>
                                <select id="estado" required name="estado">
                                    <option value="" disabled selected>Selecione seu estado</option>
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
                                    <optiton value="MT">Mato Grosso</optiton>
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

                            <div class="form-group">
                                <label for="linkedin">LinkedIn (opcional)</label>
                                <input type="url" id="linkedin" name="linkedin"
                                    placeholder="https://linkedin.com/in/seuperfil">
                            </div>

                            <div class="form-group">
                                <label for="portfolio">Site/Portfólio (opcional)</label>
                                <input type="url" id="portfolio" name="portfolio"
                                    placeholder="https://seuportfolio.com">
                            </div>
                        </div>

                        <h2 class="form-title" style="margin-top: 40px;">Formação e Experiência</h2>
                        <div class="form-divider"></div>

                        <div class="form-grid">
                            <div class="form-group">
                                <label for="formacao">Formação Acadêmica *</label>
                                <select id="formacao" required name="formacao">
                                    <option value="" disabled selected>Selecione sua formação</option>
                                    <option value="Ensino Médio">Ensino Médio</option>
                                    <option value="Curso Técnico">Curso Técnico</option>
                                    <option value="Superior Incompleto">Superior Incompleto</option>
                                    <option value="Superior Completo">Superior Completo</option>
                                    <option value="Pós-Graduação">Pós-Graduação</option>
                                    <option value="Mestrado">Mestrado</option>
                                    <option value="Doutorado">Doutorado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="curso">Curso *</label>
                                <input type="text" id="curso" name="curso" placeholder="Nome do curso" required>
                            </div>

                            <div class="form-group">
                                <label for="instituicao">Instituição *</label>
                                <input type="text" id="instituicao" name="instituicao" placeholder="Nome da instituição"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="conclusao">Ano de Conclusão *</label>
                                <input type="number" id="conclusao" min="1950" max="2030" name="ano_conclusao"
                                    placeholder="Ano de conclusão" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="experiencia">Experiência Profissional *</label>
                            <textarea id="experiencia"
                                placeholder="Descreva suas experiências profissionais mais relevantes, incluindo empresa, cargo, período e principais atividades"
                                required name="experiencia"> </textarea>
                        </div>

                        <div class="form-group">
                            <label for="habilidades">Habilidades e Competências *</label>
                            <textarea id="habilidades"
                                placeholder="Liste suas principais habilidades técnicas e comportamentais" required
                                name="habilidades"></textarea>
                        </div>

                        <h2 class="form-title" style="margin-top: 40px;">Upload de Currículo</h2>
                        <div class="form-divider"></div>

                        <div class="form-group">
                            <label for="curriculo">Anexar Currículo (PDF, DOC ou DOCX) *</label>
                            <div class="file-upload" id="fileUploadArea">
                                <div class="file-icon">
                                    <i class="fas fa-file-upload"></i>
                                </div>
                                <p>Arraste e solte seu arquivo aqui ou</p>
                                <button type="button" class="btn btn-outline" style="margin-top: 10px;">Selecionar
                                    arquivo</button>
                                <p style="font-size: 0.9rem; margin-top: 10px;">Tamanho máximo: 5MB</p>
                            </div>
                            <input type="file" id="curriculo" accept=".pdf,.doc,.docx" required style="display: none;"
                                name="curriculo">
                        </div>

                        <div class="form-group">
                            <label for="carta">Carta de Apresentação (opcional)</label>
                            <textarea id="carta"
                                placeholder="Escreva uma breve apresentação sobre você, suas motivações e objetivos profissionais"
                                name="carta_apresentacao"></textarea>
                        </div>

                        <div class="form-checkbox">
                            <input type="checkbox" id="termos" required>
                            <label for="termos">Concordo com os <a href="#" style="color: var(--primary);">Termos de
                                    Uso</a> e <a href="<?= route_to('site.politicas') ?>"
                                    style="color: var(--primary);">Política de Privacidade</a>
                                *</label>
                        </div>

                        <button type="submit" class="form-button">Enviar Currículo</button>
                    </form>
                </div>
            </div>
        </section>

        <section class="faq-section">
            <div class="container">
                <div class="faq-title">
                    <h2>Perguntas Frequentes</h2>
                    <p>Tire suas dúvidas sobre o processo de cadastro e seleção</p>
                </div>

                <div class="faq-list">
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Como funciona o processo de seleção?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Após o envio do seu currículo, nossa equipe de recrutamento fará uma análise do seu
                                perfil. Caso você se encaixe em alguma vaga disponível, entraremos em contato para
                                agendar uma entrevista. Todo o processo é realizado com agilidade e transparência.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Por quanto tempo meu currículo fica no banco de dados?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Seu currículo permanece em nosso banco de dados por 12 meses. Após esse período, você
                                pode atualizá-lo enviando novamente através deste formulário.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Como sei se meu currículo foi recebido?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Após o envio do formulário, você receberá um e-mail de confirmação. Caso não receba,
                                verifique sua pasta de spam ou entre em contato conosco.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Posso me candidatar a mais de uma vaga?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Sim, seu currículo será considerado para todas as vagas compatíveis com seu perfil. Não é
                                necessário enviar múltiplas vezes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <?= $this->include('site/layouts/footer') ?>
    </footer>
    <?= $this->include('components/whatsapp_float') ?>
    <script>
    // Menu mobile toggle
    document.getElementById('mobileMenu').addEventListener('click', function() {
        const menu = document.getElementById('menu');
        menu.classList.toggle('active');
    });

    // FAQ accordion functionality
    document.querySelectorAll('.faq-question').forEach(question => {
        question.addEventListener('click', function() {
            const answer = this.nextElementSibling;
            const icon = this.querySelector('i');

            // Close all other answers
            document.querySelectorAll('.faq-answer').forEach(item => {
                if (item !== answer && item.classList.contains('active')) {
                    item.classList.remove('active');
                    item.previousElementSibling.querySelector('i').classList.remove(
                        'fa-chevron-up');
                    item.previousElementSibling.querySelector('i').classList.add(
                        'fa-chevron-down');
                }
            });

            // Toggle current answer
            answer.classList.toggle('active');

            if (answer.classList.contains('active')) {
                icon.classList.remove('fa-chevron-down');
                icon.classList.add('fa-chevron-up');
            } else {
                icon.classList.remove('fa-chevron-up');
                icon.classList.add('fa-chevron-down');
            }
        });
    });

    // File upload functionality
    const fileUploadArea = document.getElementById('fileUploadArea');
    const fileInput = document.getElementById('curriculo');

    fileUploadArea.addEventListener('click', function() {
        fileInput.click();
    });

    fileUploadArea.addEventListener('dragover', function(e) {
        e.preventDefault();
        this.style.borderColor = 'var(--secondary)';
        this.style.backgroundColor = 'rgba(52, 152, 219, 0.1)';
    });

    fileUploadArea.addEventListener('dragleave', function() {
        this.style.borderColor = '#ddd';
        this.style.backgroundColor = 'transparent';
    });

    fileUploadArea.addEventListener('drop', function(e) {
        e.preventDefault();
        this.style.borderColor = '#ddd';
        this.style.backgroundColor = 'transparent';

        if (e.dataTransfer.files.length) {
            fileInput.files = e.dataTransfer.files;

            // Update UI to show file name
            const fileName = document.createElement('p');
            fileName.textContent = `Arquivo selecionado: ${e.dataTransfer.files[0].name}`;
            fileName.style.marginTop = '10px';
            fileName.style.fontWeight = 'bold';
            fileName.style.color = 'var(--secondary)';

            // Remove previous file name if exists
            const prevFileName = this.querySelector('p:last-of-type');
            if (prevFileName && prevFileName.textContent.includes('Arquivo selecionado')) {
                this.removeChild(prevFileName);
            }

            this.appendChild(fileName);
        }
    });

    fileInput.addEventListener('change', function() {
        if (this.files.length) {
            // Update UI to show file name
            const fileName = document.createElement('p');
            fileName.textContent = `Arquivo selecionado: ${this.files[0].name}`;
            fileName.style.marginTop = '10px';
            fileName.style.fontWeight = 'bold';
            fileName.style.color = 'var(--secondary)';

            // Remove previous file name if exists
            const prevFileName = fileUploadArea.querySelector('p:last-of-type');
            if (prevFileName && prevFileName.textContent.includes('Arquivo selecionado')) {
                fileUploadArea.removeChild(prevFileName);
            }

            fileUploadArea.appendChild(fileName);
        }
    });

    // Form submission
    // document.getElementById('curriculum-form').addEventListener('submit', function(e) {
    //     e.preventDefault();
    //     alert('Formulário enviado com sucesso! Entraremos em contato em breve.');
    //     this.reset();

    //     // Clear file name display
    //     const fileName = fileUploadArea.querySelector('p:last-of-type');
    //     if (fileName && fileName.textContent.includes('Arquivo selecionado')) {
    //         fileUploadArea.removeChild(fileName);
    //     }
    // });
    </script>
</body>

</html>