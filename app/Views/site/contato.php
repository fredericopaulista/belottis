<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belottis - Entre em Contato</title>
    <meta name="description"
        content="Entre em contato com a Belottis RH. Estamos prontos para atender suas necessidades em recrutamento, seleção e soluções em recursos humanos.">
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
        /* Azul escuro similar à logo */
        --secondary: #3498DB;
        /* Azul médio para contrastes */
        --accent: #55b2b4;
        /* Vermelho coral para destaques */
        --light: #ECF0F1;
        /* Cinza muito claro para fundos */
        --dark: #2C3E50;
        /* Azul escuro para textos */
        --text: #2C3E50;
        /* Cor padrão para texto */
        --text-light: #7F8C8D;
        /* Texto secundário */
        --white: #FFFFFF;
        --success: #27AE60;
        /* Verde para confirmações */
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

    /* Main content styles */
    main {
        padding: 40px 0;
    }

    .section-title {
        text-align: center;
        margin-bottom: 50px;
    }

    .section-title h2 {
        font-size: 2.5rem;
        color: var(--primary);
        margin-bottom: 15px;
    }

    .section-title p {
        font-size: 1.2rem;
        color: var(--text-light);
        max-width: 700px;
        margin: 0 auto;
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

        .section-title h2 {
            font-size: 2rem;
        }
    }

    @media (max-width: 576px) {
        .logo-text {
            font-size: 20px;
        }
    }

    /* Estilos específicos para a página de Contato */
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
        margin: 0 auto;
        opacity: 0.9;
    }

    .content-section {
        padding: 80px 0;
    }

    .bg-light {
        background-color: var(--light);
    }

    .bg-white {
        background-color: var(--white);
    }

    .contact-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-bottom: 50px;
    }

    .contact-card {
        background-color: var(--white);
        border-radius: 10px;
        padding: 30px;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s;
    }

    .contact-card:hover {
        transform: translateY(-5px);
    }

    .contact-icon {
        width: 70px;
        height: 70px;
        background-color: var(--secondary);
        color: var(--white);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        margin: 0 auto 20px;
    }

    .contact-card h3 {
        font-size: 1.5rem;
        margin-bottom: 15px;
        color: var(--primary);
    }

    .contact-card p {
        color: var(--text-light);
        margin-bottom: 10px;
    }

    .contact-form {
        background-color: var(--white);
        border-radius: 10px;
        padding: 40px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
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
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
    }

    .form-button:hover {
        background-color: var(--secondary);
    }

    .form-button i {
        margin-right: 8px;
    }

    .map-container {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        height: 400px;
    }

    .map-container iframe {
        width: 100%;
        height: 100%;
        border: none;
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 40px;
        margin-top: 60px;
    }

    .info-card {
        background-color: var(--white);
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .info-card h3 {
        font-size: 1.5rem;
        margin-bottom: 20px;
        color: var(--primary);
    }

    .business-hours {
        list-style: none;
    }

    .business-hours li {
        display: flex;
        justify-content: space-between;
        padding: 12px 0;
        border-bottom: 1px solid #eee;
    }

    .business-hours li:last-child {
        border-bottom: none;
    }

    .quick-contact {
        list-style: none;
    }

    .quick-contact li {
        display: flex;
        align-items: center;
        padding: 15px;
        background-color: var(--light);
        border-radius: 8px;
        margin-bottom: 15px;
        transition: background-color 0.3s;
        cursor: pointer;
    }

    .quick-contact li:hover {
        background-color: #e0e7ee;
    }

    .quick-contact i {
        font-size: 24px;
        color: var(--primary);
        margin-right: 15px;
    }

    .quick-contact div {
        flex: 1;
    }

    .quick-contact p {
        margin: 0;
        color: var(--text);
        font-weight: 500;
    }

    .quick-contact span {
        color: var(--text-light);
        font-size: 0.9rem;
    }

    @media (max-width: 768px) {
        .form-grid {
            grid-template-columns: 1fr;
        }

        .info-grid {
            grid-template-columns: 1fr;
        }
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

    .nav-link.active {
        font-weight: 600;
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
    <main id="main-content">
        <section id="page-header">
            <div class="container">
                <h1>Entre em Contato</h1>
                <p>Estamos aqui para ajudar você a encontrar as melhores oportunidades de carreira ou os profissionais
                    ideais para sua empresa</p>
            </div>
        </section>

        <section class="content-section">
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
            <div class="container">
                <div class="contact-grid">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h2>Telefone</h2>
                        <p>(11) 2600-1607</p>
                        <p>(11) 94632-6003</p>
                        <p>(11) 97388-8761</p>
                    </div>

                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h2>E-mail</h2>
                        <p>contato@belottis.com.br</p>

                    </div>

                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h2>Endereço</h2>
                        <p>Rua Jamil João Zarif, 264 - 1º andar</p>
                        <p>Guarulhos - SP, 07143-000</p>
                    </div>
                </div>

                <div class="contact-form">
                    <h2 class="section-title">Envie sua Mensagem</h2>
                    <p class="text-center" style="color: var(--text-light); margin-bottom: 30px;">Preencha o formulário
                        abaixo e nossa equipe retornará o mais breve possível</p>

                    <form method="post" action="<?= route_to('site.enviaEmail') ?>">
                        <?= csrf_field() ?>
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="name">Nome Completo *</label>
                                <input type="text" id="name" name="name" placeholder="Seu nome completo" required>
                            </div>

                            <div class="form-group">
                                <label for="email">E-mail *</label>
                                <input type="email" id="email" name="email" placeholder="seu@email.com" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">Telefone *</label>
                                <input type="tel" id="phone" placeholder="(11) 9 9999-9999" required name="phone">
                            </div>

                            <div class="form-group">
                                <label for="company">Empresa</label>
                                <input type="text" id="company" placeholder="Nome da empresa" name="company">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="subject">Assunto *</label>
                            <select id="subject" name="subject" required>
                                <option value="">Selecione o assunto</option>
                                <option value="Busco uma vaga de emprego">Busco uma vaga de emprego</option>
                                <option value="Preciso contratar profissionais">Preciso contratar profissionais</option>
                                <option value="Consultoria em RH">Consultoria em RH</option>
                                <option value="Parceria comercial">Parceria comercial</option>
                                <option value="Outros">Outros</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">Mensagem *</label>
                            <textarea id="message" name="message" placeholder="Descreva sua necessidade ou dúvida..."
                                required></textarea>
                        </div>

                        <div class="form-checkbox">
                            <input type="checkbox" id="consent" name="consent">
                            <label for="consent">Aceito receber comunicações por e-mail e WhatsApp sobre vagas e
                                serviços da Belottis</label>
                        </div>

                        <button type="submit" class="form-button">
                            <i class="fas fa-paper-plane"></i>
                            Enviar Mensagem
                        </button>
                    </form>
                </div>

                <div class="map-container" style="margin-top: 60px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.659385127084!2d-46.500188!3d-23.507555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce8ade93b6aaab%3A0x4341bc920aa93601!2sRua%20Jamil%20Jo%C3%A3o%20Zarif%2C%20264%20-%20Tabo%C3%A3o%2C%20Guarulhos%20-%20SP%2C%2007143-000!5e0!3m2!1spt-BR!2sbr!4v1633028161234!5m2!1spt-BR!2sbr"
                        allowfullscreen="" loading="lazy"
                        title="Mapa interativo mostrando a localização da nossa empresa "></iframe>
                </div>

                <div class="info-grid">
                    <div class="info-card">
                        <h3>Horário de Atendimento</h3>
                        <ul class="business-hours">
                            <li>
                                <span>Segunda a Sexta</span>
                                <span>09:00 às 17:00</span>
                            </li>
                            <li>
                                <span>Sábado</span>
                                <span>Fechado</span>
                            </li>
                            <li>
                                <span>Domingo</span>
                                <span>Fechado</span>
                            </li>
                        </ul>
                    </div>

                    <div class="info-card">
                        <h3>Atendimento Rápido</h3>
                        <p style="color: var(--text-light); margin-bottom: 20px;">Para dúvidas rápidas ou urgências,
                            entre em contato pelos nossos canais diretos:</p>

                        <ul class="quick-contact">
                            <li>
                                <i class="fab fa-whatsapp"></i>
                                <div>
                                    <p>WhatsApp</p>
                                    <span>(11) 94632-6003</span>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <div>
                                    <p>Email</p>
                                    <span>contato@belottis.com.br</span>
                                </div>
                            </li>
                        </ul>
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
    </script>
</body>

</html>