<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belottis - Termos de Uso</title>
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
        --accent: #E74C3C;
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
        background-color: var(--primary);
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

    /* Estilos específicos para a página de Termos de Uso */
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

    .terms-content {
        background-color: var(--white);
        border-radius: 10px;
        padding: 40px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .terms-section {
        margin-bottom: 40px;
    }

    .terms-section:last-child {
        margin-bottom: 0;
    }

    .terms-section h2 {
        font-size: 1.8rem;
        color: var(--primary);
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid var(--light);
    }

    .terms-section h3 {
        font-size: 1.4rem;
        color: var(--primary);
        margin: 25px 0 15px;
    }

    .terms-section p {
        color: var(--text-light);
        margin-bottom: 15px;
        line-height: 1.7;
    }

    .terms-section ul {
        margin-bottom: 20px;
        padding-left: 20px;
    }

    .terms-section li {
        color: var(--text-light);
        margin-bottom: 10px;
        line-height: 1.6;
    }

    .terms-section a {
        color: var(--secondary);
        text-decoration: none;
    }

    .terms-section a:hover {
        text-decoration: underline;
    }

    .update-date {
        background-color: var(--light);
        padding: 20px;
        border-radius: 8px;
        margin-top: 40px;
        text-align: center;
    }

    .update-date p {
        color: var(--text);
        font-weight: 500;
    }

    .back-to-top {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        background-color: var(--accent);
        color: var(--white);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        transition: all 0.3s;
        z-index: 99;
    }

    .back-to-top:hover {
        background-color: #c0392b;
        transform: translateY(-3px);
    }

    @media (max-width: 768px) {
        .terms-content {
            padding: 25px;
        }

        .terms-section h2 {
            font-size: 1.6rem;
        }

        .terms-section h3 {
            font-size: 1.3rem;
        }

        .back-to-top {
            bottom: 20px;
            right: 20px;
            width: 45px;
            height: 45px;
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
                <h1>Termos de Uso</h1>
                <p>Conheça os termos e condições que regem o uso de nossos serviços</p>
            </div>
        </section>

        <section class="content-section bg-light">
            <div class="container">
                <div class="terms-content">
                    <div class="terms-section">
                        <h2>1. Aceitação dos Termos</h2>
                        <p>Ao acessar e utilizar os serviços da Belottis, você concorda em cumprir e estar vinculado a
                            estes Termos de Uso. Se você não concordar com qualquer parte destes termos, não deverá
                            utilizar nossos serviços.</p>
                        <p>Estes Termos de Uso regulam o uso deste site e todos os serviços oferecidos pela Belottis,
                            incluindo recrutamento, seleção e intermediação de oportunidades de emprego e estágio.</p>
                    </div>

                    <div class="terms-section">
                        <h2>2. Definições</h2>
                        <p>Para os fins destes Termos de Uso, as seguintes definições se aplicam:</p>

                        <h3>2.1. Partes envolvidas</h3>
                        <ul>
                            <li><strong>Belottis:</strong> Empresa de recrutamento e seleção, provedora dos serviços
                            </li>
                            <li><strong>Usuário/Candidato:</strong> Pessoa física que utiliza os serviços da plataforma
                            </li>
                            <li><strong>Empresa Cliente:</strong> Organização que contrata os serviços da Belottis</li>
                            <li><strong>Serviços:</strong> Todas as funcionalidades oferecidas através do site e
                                plataformas relacionadas</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h2>3. Cadastro e Conta do Usuário</h2>

                        <h3>3.1. Requisitos para cadastro</h3>
                        <p>Para utilizar nossos serviços, você deverá:</p>
                        <ul>
                            <li>Fornecer informações verdadeiras, precisas e completas</li>
                            <li>Ser maior de 16 anos ou ter autorização dos responsáveis legais</li>
                            <li>Manter suas informações de cadastro atualizadas</li>
                        </ul>

                        <h3>3.2. Responsabilidades da conta</h3>
                        <p>Você é integralmente responsável por:</p>
                        <ul>
                            <li>Manter a confidencialidade de sua senha</li>
                            <li>Todas as atividades que ocorram em sua conta</li>
                            <li>Notificar imediatamente a Belottis sobre qualquer uso não autorizado</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h2>4. Serviços Prestados</h2>
                        <p>A Belottis oferece os seguintes serviços através de sua plataforma:</p>
                        <ul>
                            <li>Intermediação entre candidatos e oportunidades de emprego/estágio</li>
                            <li>Processos seletivos e recrutamento</li>
                            <li>Gestão de documentos e contratos</li>
                            <li>Orientação profissional e consultoria de carreira</li>
                            <li>Comunicação sobre vagas e oportunidades compatíveis</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h2>5. Obrigações do Usuário</h2>
                        <p>Ao utilizar nossos serviços, você se compromete a:</p>

                        <h3>5.1. Conduta geral</h3>
                        <ul>
                            <li>Fornecer apenas informações verdadeiras e precisas</li>
                            <li>Não utilizar a plataforma para fins ilícitos ou fraudulentos</li>
                            <li>Respeitar os direitos de propriedade intelectual</li>
                            <li>Não praticar qualquer forma de discriminação ou assédio</li>
                        </ul>

                        <h3>5.2. Conteúdo enviado</h3>
                        <ul>
                            <li>Garantir que possui todos os direitos sobre o conteúdo compartilhado</li>
                            <li>Não enviar material ofensivo, difamatório ou ilegal</li>
                            <li>Conceder à Belottis licença para utilizar o conteúdo para os fins dos serviços</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h2>6. Propriedade Intelectual</h2>

                        <h3>6.1. Direitos da Belottis</h3>
                        <p>Todos os direitos de propriedade intelectual relacionados à plataforma, incluindo software,
                            design, logotipos, marcas e conteúdo, são de propriedade exclusiva da Belottis ou de seus
                            licenciadores.</p>

                        <h3>6.2. Conteúdo do usuário</h3>
                        <p>Ao enviar conteúdo para nossa plataforma, você concede à Belottis uma licença mundial, não
                            exclusiva e isenta de royalties para usar, reproduzir, modificar e exibir tal conteúdo para
                            os fins de prestação dos serviços.</p>
                    </div>

                    <div class="terms-section">
                        <h2>7. Limitação de Responsabilidade</h2>

                        <h3>7.1. Natureza dos serviços</h3>
                        <p>A Belottis atua como intermediária entre candidatos e empresas. Não garantimos:</p>
                        <ul>
                            <li>Colocação em vagas específicas</li>
                            <li>Sucesso em processos seletivos</li>
                            <li>Veracidade absoluta de todas as informações de terceiros</li>
                        </ul>

                        <h3>7.2. Limitações</h3>
                        <p>Em nenhuma circunstância a Belottis será responsável por:</p>
                        <ul>
                            <li>Danos indiretos, incidentais ou consequenciais</li>
                            <li>Perda de dados ou oportunidades</li>
                            <li>Ações ou omissões de empresas clientes</li>
                            <li>Decisões tomadas com base em informações da plataforma</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h2>8. Privacidade e Proteção de Dados</h2>
                        <p>O tratamento de dados pessoais é regido pela nossa <a
                                href="<?php echo route_to('site.politicas');?>" title="Política de Privacidade">Política
                                de Privacidade</a>, que faz parte integrante destes Termos de Uso.</p>
                        <p>Ao utilizar nossos serviços, você consente com a coleta, uso e compartilhamento de suas
                            informações pessoais conforme descrito em nossa Política de Privacidade.</p>
                    </div>

                    <div class="terms-section">
                        <h2>9. Modificações nos Termos</h2>
                        <p>A Belottis se reserva o direito de modificar estes Termos de Uso a qualquer momento. As
                            alterações entrarão em vigor após a publicação na plataforma.</p>
                        <p>O uso continuado dos serviços após tais modificações constitui aceitação dos novos termos.
                            Recomendamos que você revise periodicamente estes Termos de Uso.</p>
                    </div>

                    <div class="terms-section">
                        <h2>10. Rescisão</h2>
                        <p>Estes Termos de Uso permanecerão em vigor enquanto você utilizar nossos serviços. A Belottis
                            pode suspender ou encerrar seu acesso:</p>
                        <ul>
                            <li>Por violação destes Termos de Uso</li>
                            <li>Por solicitação do usuário</li>
                            <li>Por decisão unilateral, mediante aviso prévio</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h2>11. Disposições Gerais</h2>

                        <h3>11.1. Lei aplicável</h3>
                        <p>Estes Termos de Uso são regidos pelas leis da República Federativa do Brasil.</p>

                        <h3>11.2. Foro</h3>
                        <p>Fica eleito o foro da comarca de Guarulhos/SP para dirimir qualquer questão relacionada a
                            estes termos, com renúncia expressa a qualquer outro.</p>

                        <h3>11.3. Tolerância</h3>
                        <p>O não exercício de qualquer direito ou disposição destes Termos de Uso não constituirá
                            renúncia a tal direito ou disposição.</p>
                    </div>

                    <div class="terms-section">
                        <h2>12. Contato</h2>
                        <p>Para questões relacionadas a estes Termos de Uso, entre em contato conosco:</p>
                        <p><strong>Email:</strong> contato@belottis.com.br<br>
                            <strong>Telefone:</strong> (11) 2600-1607
                        </p>
                        <p><strong>Endereço:</strong><br>
                            Rua Jamil João Zarif, 264 - Sala 4<br>
                            Guarulhos - SP, 07143-000</p>
                    </div>

                    <div class="update-date">
                        <p><strong>Última atualização:</strong> 22 de Agosto de 2025</p>
                    </div>
                </div>
            </div>
        </section>

        <a href="#" class="back-to-top" id="backToTop">
            <i class="fas fa-arrow-up"></i>
        </a>
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

    // Back to top button
    const backToTopButton = document.getElementById('backToTop');

    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTopButton.style.display = 'flex';
        } else {
            backToTopButton.style.display = 'none';
        }
    });

    backToTopButton.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    </script>
</body>

</html>