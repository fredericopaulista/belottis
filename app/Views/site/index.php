<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belottis - Conectando Talentos e Oportunidades</title>
    <meta name="description"
        content="A Belottis RH oferece soluções completas em recrutamento, seleção, gestão de talentos e consultoria em recursos humanos para empresas de todos os portes.">
    <link rel="preload" rel="stylesheet" href="/assets/css/all.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </noscript>
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
        --accent: #E74C3C;
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
        background-color: #2b3479;
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

    /* Hero Section */
    .hero {
        padding: 80px 0;
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    }

    .hero-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 40px;
    }

    .hero-text {
        flex: 1;
        max-width: 550px;
    }

    .hero-text h1 {
        font-size: 2.8rem;
        color: #2c3e50;
        margin-bottom: 20px;
        line-height: 1.2;
    }

    .hero-text p {
        font-size: 1.2rem;
        color: #34495e;
        margin-bottom: 30px;
    }

    .hero-buttons {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .hero-btn {
        display: inline-block;
        padding: 14px 30px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .hero-btn-primary {
        background-color: #3498db;
        color: white;
        box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
    }

    .hero-btn-primary:hover {
        background-color: #2980b9;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(52, 152, 219, 0.4);
    }

    .hero-btn-secondary {
        background-color: transparent;
        color: #3498db;
        border: 2px solid #3498db;
    }

    .hero-btn-secondary:hover {
        background-color: rgba(52, 152, 219, 0.1);
        transform: translateY(-2px);
    }

    /* Slider Styles */
    .hero-image {
        flex: 1;
        max-width: 550px;
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }

    .slider {
        position: relative;
        width: 100%;
        height: 400px;
        border-radius: 12px;
        overflow: hidden;
    }

    .slides {
        display: flex;
        transition: transform 0.5s ease-in-out;
        height: 100%;
    }

    .slide {
        min-width: 100%;
        height: 100%;
        position: relative;
    }

    .slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .slide-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 15px;
        text-align: center;
        font-size: 1.1rem;
    }

    .slider-controls {
        position: absolute;
        bottom: 20px;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        gap: 10px;
        z-index: 10;
    }

    .slider-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.5);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .slider-dot.active {
        background: #3498db;
        transform: scale(1.2);
    }

    .slider-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 100%;
        display: flex;
        justify-content: space-between;
        padding: 0 20px;
        z-index: 10;
    }

    .slider-nav-btn {
        background: rgba(255, 255, 255, 0.8);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        color: #2c3e50;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .slider-nav-btn:hover {
        background: white;
        transform: scale(1.1);
    }

    /* Services Section */
    .services {
        padding: 80px 0;
        background-color: var(--white);
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

    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
    }

    .service-card {
        background-color: var(--light);
        border-radius: 10px;
        padding: 30px;
        text-align: center;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .service-icon {
        width: 70px;
        height: 70px;
        background-color: #2b3479;
        color: var(--white);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        margin: 0 auto 20px;
    }

    .service-card h3 {
        font-size: 1.5rem;
        margin-bottom: 15px;
        color: var(--primary);
    }

    .service-card p {
        color: var(--text-light);
        margin-bottom: 20px;
    }

    .service-link {
        color: #2b3479;
        text-decoration: none;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
    }

    .service-link i {
        margin-left: 5px;
        transition: transform 0.3s;
    }

    .service-link:hover i {
        transform: translateX(5px);
    }

    /* Jobs Section */
    .jobs {
        padding: 80px 0;
        background-color: var(--light);
    }

    .jobs-container {
        display: flex;
        gap: 40px;
        align-items: flex-start;
    }

    .jobs-content {
        flex: 1;
    }

    .jobs-content h2 {
        font-size: 2.5rem;
        color: var(--primary);
        margin-bottom: 20px;
    }

    .jobs-content p {
        font-size: 1.2rem;
        color: var(--text-light);
        margin-bottom: 30px;
    }

    .job-list {
        margin-bottom: 30px;
    }

    .job-item {
        background-color: var(--white);
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .job-item:hover {
        transform: translateX(5px);
    }

    .job-info h3 {
        color: var(--primary);
        margin-bottom: 5px;
    }

    .job-info p {
        color: var(--text-light);
        margin: 0;
        font-size: 1rem;
    }

    .job-tag {
        background-color: var(--light);
        color: var(--primary);
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 600;
    }

    .jobs-image {
        flex: 1;
        text-align: center;
    }

    .jobs-image img {
        max-width: 100%;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    /* CTA Section */
    .cta {
        padding: 80px 0;
        background: #55b2b4;
        color: var(--white);
        text-align: center;
    }

    .cta h2 {
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .cta p {
        font-size: 1.2rem;
        max-width: 700px;
        margin: 0 auto 30px;
        opacity: 0.9;
    }

    .cta-buttons {
        display: flex;
        justify-content: center;
        gap: 15px;
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
        background-color: #fff;
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
        color: #55b2b4;
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
    @media (max-width: 992px) {
        .hero-content {
            flex-direction: column;
            text-align: center;
        }

        .hero-text {
            max-width: 100%;
        }

        .hero-buttons {
            justify-content: center;
        }

        .hero-image {
            max-width: 100%;
            order: -1;
        }

        .slider {
            height: 350px;
        }

        .jobs-container {
            flex-direction: column;
        }
    }

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

        .hero-text h1 {
            font-size: 2.2rem;
        }

        .section-title h2 {
            font-size: 2rem;
        }

        .cta h2 {
            font-size: 2rem;
        }

        .cta-buttons {
            flex-direction: column;
            align-items: center;
        }
    }

    @media (max-width: 576px) {
        .logo-text {
            font-size: 20px;
        }

        .hero {
            padding: 50px 0;
        }

        .hero-text h1 {
            font-size: 1.8rem;
        }

        .hero-text p {
            font-size: 1.1rem;
        }

        .hero-buttons {
            flex-direction: column;
            gap: 10px;
        }

        .slider {
            height: 300px;
        }

        .slider-nav-btn {
            width: 35px;
            height: 35px;
        }

        .services,
        .jobs,
        .cta {
            padding: 60px 0;
        }
    }

    .nav-link.active {

        font-weight: 600;
        /* opcional: deixa em negrito */
    }

    @font-face {
        font-family: 'Font Awesome 6 Free';
        font-style: normal;
        font-weight: 900;
        font-display: swap;
        src: url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/webfonts/fa-solid-900.woff2') format('woff2');
    }

    @font-face {
        font-family: 'Font Awesome 6 Brands';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/webfonts/fa-brands-400.woff2') format('woff2');
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
    <!-- Font Awesome para o ícone -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Header -->
    <header>



        <?= $this->include('site/layouts/nav') ?>


    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-content">
            <div class="hero-text">
                <h1>Conectando talentos às melhores oportunidades</h1>
                <p>Somos especialistas em encontrar o profissional certo para sua empresa e a vaga ideal para sua
                    carreira.</p>
                <div class="hero-buttons">
                    <a href="<?php echo route_to('site.vagas');?>" title="Vagas Disponíveis"
                        class="hero-btn hero-btn-primary" style="background-color: #55b2b4; /* Azul mais escuro */
  color: #ffffff; /* Branco para máximo contraste */
  border: 2px solid #55b2b4;
  padding: 12px 24px;
  text-decoration: none;
  font-weight: 600;!important">Ver Vagas Disponíveis</a>
                    <a href="<?php echo route_to('site.servicos');?>" title="Nossos Serviços"
                        class="hero-btn hero-btn-secondary" style="color:#0056b3!important;">Conheça Nossas Soluções</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="slider">
                    <div class="slides">
                        <div class="slide">
                            <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80"
                                alt="Profissionais em ambiente corporativo" fetchpriority="high" decoding="async">
                        </div>
                        <div class="slide">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80"
                                alt="Reunião de equipe" fetchpriority="high" decoding="async">
                        </div>
                        <div class="slide">
                            <img src="https://images.unsplash.com/photo-1568992687947-868a62a9f521?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80"
                                alt="Espaço de trabalho moderno" fetchpriority="high" decoding="async">
                        </div>
                        <div class="slide">
                            <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80"
                                alt="Apresentação corporativa" fetchpriority="high" decoding="async">
                        </div>
                    </div>

                    <div class="slider-nav">
                        <div class="slider-nav-btn prev-btn">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                        <div class="slider-nav-btn next-btn">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>

                    <div class="slider-controls">
                        <div class="slider-dot active"></div>
                        <div class="slider-dot"></div>
                        <div class="slider-dot"></div>
                        <div class="slider-dot"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <div class="section-title">
                <h2>Nossos Serviços</h2>
                <p>Oferecemos soluções completas em recursos humanos para empresas de todos os portes.</p>
            </div>

            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Recrutamento sob medida</h3>
                    <p>Identificamos e indicamos estagiários com o perfil ideal para a sua empresa, de forma eficaz e
                        assertiva.</p>
                    <a href="#" class="service-link">Saiba mais <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3>Seleção personalizada</h3>
                    <p>Conduzimos processos seletivos alinhados às necessidades e à cultura do seu negócio.</p>
                    <a href="#" class="service-link">Saiba mais <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Intermediação completa</h3>
                    <p>Cuidamos de toda a parte burocrática entre empresa, estudante e instituição de ensino.</p>
                    <a href="#" class="service-link">Saiba mais <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Gestão de contratos</h3>
                    <p>Administramos a formalização, prorrogação e encerramento do estágio com total segurança e
                        conformidade com a lei de estágio.</p>
                    <a href="#" class="service-link">Saiba mais <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Seguro de acidentes incluso</h3>
                    <p>Oferecemos cobertura obrigatória já integrada ao processo, sem dor de cabeça para sua empresa.
                    </p>
                    <a href="#" class="service-link">Saiba mais <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <h3>Gestão financeira do estágio</h3>
                    <p>Emitimos os recibos de pagamento da bolsa-auxílio e auxílio transporte de forma organizada e sem
                        complicações.</p>
                    <a href="#" class="service-link">Saiba mais <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-piggy-bank"></i>
                    </div>
                    <h3>Economia e praticidade</h3>
                    <p>Sem vínculo empregatício e isento de encargos trabalhistas e previdenciários, o estágio é uma
                        opção estratégica e de baixo custo.</p>
                    <a href="#" class="service-link">Saiba mais <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Acompanhamento de desempenho</h3>
                    <p>Realizamos avaliações periódicas para acompanhar a evolução do estagiário dentro da sua empresa.
                    </p>
                    <a href="#" class="service-link">Saiba mais <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h3>Responsabilidade social</h3>
                    <p>Conectamos empresas a jovens talentos da própria região, incentivando o primeiro emprego e
                        movimentando a economia local.</p>
                    <a href="#" class="service-link">Saiba mais <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Suporte contínuo</h3>
                    <p>Você e seu estagiário contam com nosso apoio durante toda a jornada — orientação, ajustes e
                        atendimento humanizado.</p>
                    <a href="#" class="service-link">Saiba mais <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Jobs Section -->
    <section class="jobs">
        <div class="container jobs-container">
            <div class="jobs-content">
                <h2>Vagas em Destaque</h2>
                <p>Confira algumas das oportunidades disponíveis em nosso banco de vagas.</p>

                <div class="job-list">
                    <?php foreach($alljobs as $job): ?>
                    <div class="job-item">
                        <div class="job-info">
                            <h3><?php echo $job->cargo; ?></h3>
                            <p><?php echo $job->cidade; ?> - <?php echo $job->estado; ?></p>
                        </div>
                        <span class="job-tag"><?php echo $job->tipo_contratacao; ?></span>
                    </div>
                    <?php endforeach ?>

                </div>

                <a href="<?php echo route_to('site.vagas');?>" title="Vagas Disponíveis" class="btn
                    btn-primary">Ver todas as vagas</a>
            </div>

            <div class="jobs-image">
                <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&h=400&q=80"
                    alt="Pessoas em ambiente de trabalho">
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2>Pronto para transformar sua carreira ou equipe?</h2>
            <p>Seja você um profissional em busca de novas oportunidades ou uma empresa que precisa de talentos, estamos
                aqui para ajudar.</p>
            <div class="cta-buttons">
                <a href="<?php echo route_to('site.vagas');?>" title="Vagas Disponíveis" class=" hero-btn
                    hero-btn-primary" style="background:#2b3479!important">Ver Vagas
                    Disponíveis</a>
                <a href="<?php echo route_to('site.servicos');?>" class="hero-btn hero-btn-primary"
                    style="background:#2b3479!important" title="Conheça nossas Solluções">Nossas Soluções</a>
            </div>
        </div>
    </section>

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

    // Slider functionality
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelector('.slides');
        const slideItems = document.querySelectorAll('.slide');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        const dots = document.querySelectorAll('.slider-dot');

        let currentSlide = 0;
        const slideCount = slideItems.length;
        let autoSlideInterval;

        function updateSlider() {
            slides.style.transform = `translateX(-${currentSlide * 100}%)`;

            dots.forEach((dot, index) => {
                if (index === currentSlide) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slideCount;
            updateSlider();
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slideCount) % slideCount;
            updateSlider();
        }

        function startAutoSlide() {
            autoSlideInterval = setInterval(nextSlide, 5000);
        }

        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }

        nextBtn.addEventListener('click', () => {
            nextSlide();
            stopAutoSlide();
            startAutoSlide();
        });

        prevBtn.addEventListener('click', () => {
            prevSlide();
            stopAutoSlide();
            startAutoSlide();
        });

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentSlide = index;
                updateSlider();
                stopAutoSlide();
                startAutoSlide();
            });
        });

        const slider = document.querySelector('.slider');
        slider.addEventListener('mouseenter', stopAutoSlide);
        slider.addEventListener('mouseleave', startAutoSlide);

        startAutoSlide();
    });
    </script>
</body>

</html>