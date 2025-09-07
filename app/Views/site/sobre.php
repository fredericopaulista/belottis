<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belottis - Quem Somos</title>
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

    /* Hero Section */
    .hero {
        background: linear-gradient(135deg, var(--primary) 0%, #2C3E50 100%);
        color: var(--white);
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }

    .hero-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .hero-text {
        flex: 1;
        padding-right: 30px;
    }

    .hero-text h1 {
        font-size: 3rem;
        margin-bottom: 20px;
        line-height: 1.2;
    }

    .hero-text p {
        font-size: 1.2rem;
        margin-bottom: 30px;
        opacity: 0.9;
    }

    .hero-buttons {
        display: flex;
        gap: 15px;
    }

    .hero-btn {
        padding: 12px 25px;
        border-radius: 5px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s;
    }

    .hero-btn-primary {
        background-color: var(--accent);
        color: var(--white);
    }

    .hero-btn-primary:hover {
        background-color: #c0392b;
        transform: translateY(-2px);
    }

    .hero-btn-secondary {
        background-color: transparent;
        color: var(--white);
        border: 2px solid var(--white);
    }

    .hero-btn-secondary:hover {
        background-color: var(--white);
        color: var(--primary);
    }

    .hero-image {
        flex: 1;
        text-align: center;
    }

    .hero-image img {
        max-width: 100%;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
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
        background-color: var(--secondary);
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
        color: var(--secondary);
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

    /* Testimonials Section */
    .testimonials {
        padding: 80px 0;
        background-color: var(--white);
    }

    .testimonials-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .testimonial-card {
        background-color: var(--light);
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .testimonial-header {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .testimonial-avatar {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        margin-right: 15px;
        background-color: var(--secondary);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--white);
        font-size: 24px;
        font-weight: bold;
    }

    .testimonial-info h4 {
        color: var(--primary);
        margin-bottom: 5px;
    }

    .testimonial-info p {
        color: var(--text-light);
        font-size: 0.9rem;
        margin: 0;
    }

    .testimonial-text {
        color: var(--text);
        line-height: 1.6;
        font-style: italic;
    }

    /* CTA Section */
    .cta {
        padding: 80px 0;
        background: linear-gradient(135deg, var(--primary) 0%, #2C3E50 100%);
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
    @media (max-width: 992px) {
        .hero-content {
            flex-direction: column;
            text-align: center;
        }

        .hero-text {
            padding-right: 0;
            margin-bottom: 40px;
        }

        .hero-buttons {
            justify-content: center;
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
            padding: 60px 0;
        }

        .hero-text h1 {
            font-size: 1.8rem;
        }

        .hero-buttons {
            flex-direction: column;
            gap: 10px;
        }

        .services,
        .jobs,
        .testimonials,
        .cta {
            padding: 60px 0;
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #333;
        line-height: 1.6;
        background-color: #f9f9f9;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
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
    }

    @media (max-width: 576px) {
        .hero {
            padding: 50px 0;
        }

        .hero-text h1 {
            font-size: 2.2rem;
        }

        .hero-text p {
            font-size: 1.1rem;
        }

        .slider {
            height: 300px;
        }

        .slider-nav-btn {
            width: 35px;
            height: 35px;
        }
    }
    </style>
</head>

<body>
    <header>
        <div class="container header-container">
            <div class="logo">
                <div class="logo-text"><img src="<?php echo base_url(); ?>assets/img/Logo_fundo_branco_estagios.png"
                        height="100%"></div>
            </div>

            <nav>
                <ul id="menu">
                    <li><a href="<?php echo route_to('site.home');?>">Início</a></li>
                    <li><a href="<?php echo route_to('site.sobre');?>">Quem Somos</a></li>
                    <li><a href="<?php echo route_to('site.servicos');?>">Serviços</a></li>
                    <li><a href="<?php echo route_to('site.vagas');?>">Vagas</a></li>
                    <li><a href="<?php echo route_to('site.contato');?>">Contato</a></li>
                </ul>
            </nav>

            <div class="nav-buttons">
                <a href="#" class="btn btn-outline">Enviar Currículo</a>
                <a href="#" class="btn btn-primary">Cadastrar</a>
            </div>

            <button class="mobile-menu-btn" id="mobileMenu">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>


    <main id="main-content">
        <section id="page-header" class="pt-24 h-[400px] bg-neutral-50">
            <div class="container mx-auto px-6 py-12">
                <div class="text-center max-w-3xl mx-auto">
                    <h1 class="text-4xl md:text-5xl text-neutral-900 mb-6">Quem Somos</h1>
                    <p class="text-xl text-neutral-600">Conheça nossa história, valores e a equipe por trás da HR
                        Solutions, conectando talentos às melhores oportunidades desde 2010.</p>
                </div>
            </div>
        </section>

        <section id="our-history" class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <div class="md:w-1/2">
                        <h2 class="text-3xl text-neutral-900 mb-4">Nossa História</h2>
                        <div class="w-16 h-1 bg-neutral-300 mb-6"></div>
                        <p class="text-neutral-600 mb-4">Fundada em 2010, a HR Solutions nasceu da visão de transformar
                            a maneira como empresas e profissionais se conectam no mercado de trabalho. O que começou
                            como uma pequena consultoria em São Paulo, hoje é uma empresa reconhecida nacionalmente por
                            sua excelência em soluções de recursos humanos.</p>
                        <p class="text-neutral-600 mb-4">Ao longo dos anos, expandimos nossa atuação para diferentes
                            regiões do Brasil e diversificamos nosso portfólio de serviços, sempre mantendo o
                            compromisso com a qualidade e a satisfação de nossos clientes.</p>
                        <p class="text-neutral-600">Atualmente, contamos com uma equipe de mais de 50 profissionais
                            especializados e já ajudamos mais de 500 empresas a encontrar os talentos ideais para seus
                            negócios, além de termos contribuído para o desenvolvimento profissional de milhares de
                            candidatos.</p>
                    </div>
                    <div class="md:w-1/2">
                        <div class="bg-neutral-200 rounded-lg h-[400px] flex items-center justify-center">
                            <!-- <span class="text-white text-lg">Imagem do escritório da empresa</span> -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="our-values" class="py-16 bg-neutral-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl text-neutral-900 mb-4">Nossos Valores</h2>
                    <div class="w-16 h-1 bg-neutral-300 mx-auto mb-6"></div>
                    <p class="text-xl text-neutral-600 max-w-3xl mx-auto">Os princípios que norteiam nossas ações e
                        decisões todos os dias.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                    <div class="bg-white p-8 rounded-lg shadow-sm">
                        <div class="w-16 h-16 bg-neutral-200 rounded-full flex items-center justify-center mb-6">
                            <i class="fa-solid fa-handshake text-neutral-700 text-2xl"></i>
                        </div>
                        <h3 class="text-xl mb-4">Ética e Transparência</h3>
                        <p class="text-neutral-600">Conduzimos nossos negócios com honestidade e clareza, construindo
                            relações de confiança com clientes, candidatos e parceiros.</p>
                    </div>

                    <div class="bg-white p-8 rounded-lg shadow-sm">
                        <div class="w-16 h-16 bg-neutral-200 rounded-full flex items-center justify-center mb-6">
                            <i class="fa-solid fa-users text-neutral-700 text-2xl"></i>
                        </div>
                        <h3 class="text-xl mb-4">Valorização das Pessoas</h3>
                        <p class="text-neutral-600">Acreditamos que o sucesso de qualquer organização depende do
                            desenvolvimento e bem-estar de seus colaboradores.</p>
                    </div>

                    <div class="bg-white p-8 rounded-lg shadow-sm">
                        <div class="w-16 h-16 bg-neutral-200 rounded-full flex items-center justify-center mb-6">
                            <i class="fa-solid fa-rocket text-neutral-700 text-2xl"></i>
                        </div>
                        <h3 class="text-xl mb-4">Inovação Constante</h3>
                        <p class="text-neutral-600">Buscamos continuamente novas metodologias e tecnologias para
                            aprimorar nossos processos e oferecer soluções cada vez mais eficientes.</p>
                    </div>

                    <div class="bg-white p-8 rounded-lg shadow-sm">
                        <div class="w-16 h-16 bg-neutral-200 rounded-full flex items-center justify-center mb-6">
                            <i class="fa-solid fa-bullseye text-neutral-700 text-2xl"></i>
                        </div>
                        <h3 class="text-xl mb-4">Foco em Resultados</h3>
                        <p class="text-neutral-600">Trabalhamos com determinação para alcançar os objetivos
                            estabelecidos, sempre buscando superar as expectativas de nossos clientes.</p>
                    </div>

                    <div class="bg-white p-8 rounded-lg shadow-sm">
                        <div class="w-16 h-16 bg-neutral-200 rounded-full flex items-center justify-center mb-6">
                            <i class="fa-solid fa-heart text-neutral-700 text-2xl"></i>
                        </div>
                        <h3 class="text-xl mb-4">Responsabilidade Social</h3>
                        <p class="text-neutral-600">Comprometemo-nos com práticas sustentáveis e iniciativas que
                            contribuam positivamente para a sociedade e o meio ambiente.</p>
                    </div>

                    <div class="bg-white p-8 rounded-lg shadow-sm">
                        <div class="w-16 h-16 bg-neutral-200 rounded-full flex items-center justify-center mb-6">
                            <i class="fa-solid fa-lightbulb text-neutral-700 text-2xl"></i>
                        </div>
                        <h3 class="text-xl mb-4">Aprendizado Contínuo</h3>
                        <p class="text-neutral-600">Incentivamos o desenvolvimento profissional e pessoal, valorizando a
                            troca de conhecimentos e experiências.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="our-team" class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl text-neutral-900 mb-4">Nossa Equipe de Liderança</h2>
                    <div class="w-16 h-1 bg-neutral-300 mx-auto mb-6"></div>
                    <p class="text-xl text-neutral-600 max-w-3xl mx-auto">Conheça os profissionais que lideram a HR
                        Solutions e trabalham para oferecer as melhores soluções em recursos humanos.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                    <div class="text-center">
                        <img src="https://api.dicebear.com/7.x/notionists/svg?scale=200&amp;seed=123" alt="CEO"
                            class="w-32 h-32 rounded-full mx-auto mb-4">
                        <h3 class="text-xl mb-1">Marcelo Oliveira</h3>
                        <p class="text-neutral-700 mb-2">CEO &amp; Fundador</p>
                        <p class="text-neutral-600 mb-4">Com mais de 20 anos de experiência em gestão de pessoas e
                            desenvolvimento organizacional.</p>
                        <div class="flex justify-center space-x-4">
                            <span class="text-neutral-700 hover:text-neutral-900 cursor-pointer">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </span>
                            <span class="text-neutral-700 hover:text-neutral-900 cursor-pointer">
                                <i class="fa-brands fa-twitter"></i>
                            </span>
                        </div>
                    </div>

                    <div class="text-center">
                        <img src="https://api.dicebear.com/7.x/notionists/svg?scale=200&amp;seed=456" alt="COO"
                            class="w-32 h-32 rounded-full mx-auto mb-4">
                        <h3 class="text-xl mb-1">Renata Santos</h3>
                        <p class="text-neutral-700 mb-2">Diretora de Operações</p>
                        <p class="text-neutral-600 mb-4">Especialista em processos de recrutamento e seleção, com
                            formação em psicologia organizacional.</p>
                        <div class="flex justify-center space-x-4">
                            <span class="text-neutral-700 hover:text-neutral-900 cursor-pointer">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </span>
                            <span class="text-neutral-700 hover:text-neutral-900 cursor-pointer">
                                <i class="fa-brands fa-twitter"></i>
                            </span>
                        </div>
                    </div>

                    <div class="text-center">
                        <img src="https://api.dicebear.com/7.x/notionists/svg?scale=200&amp;seed=789" alt="CTO"
                            class="w-32 h-32 rounded-full mx-auto mb-4">
                        <h3 class="text-xl mb-1">Eduardo Costa</h3>
                        <p class="text-neutral-700 mb-2">Diretor de Tecnologia</p>
                        <p class="text-neutral-600 mb-4">Responsável pela implementação de soluções tecnológicas
                            inovadoras para os processos de RH.</p>
                        <div class="flex justify-center space-x-4">
                            <span class="text-neutral-700 hover:text-neutral-900 cursor-pointer">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </span>
                            <span class="text-neutral-700 hover:text-neutral-900 cursor-pointer">
                                <i class="fa-brands fa-twitter"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="timeline" class="py-16 bg-neutral-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl text-neutral-900 mb-4">Nossa Trajetória</h2>
                    <div class="w-16 h-1 bg-neutral-300 mx-auto mb-6"></div>
                    <p class="text-xl text-neutral-600 max-w-3xl mx-auto">Os principais marcos da história da HR
                        Solutions.</p>
                </div>

                <div class="relative max-w-4xl mx-auto mt-12">
                    <div class="absolute top-0 bottom-0 left-1/2 w-0.5 bg-neutral-300 transform -translate-x-1/2"></div>

                    <div class="relative mb-12">
                        <div class="flex items-center">
                            <div class="flex-1 text-right pr-8 md:pr-12">
                                <h3 class="text-xl mb-2">2010</h3>
                                <p class="text-neutral-600">Fundação da HR Solutions em São Paulo</p>
                            </div>
                            <div class="w-10 h-10 bg-neutral-800 rounded-full flex items-center justify-center z-10">
                                <i class="fa-solid fa-flag text-white"></i>
                            </div>
                            <div class="flex-1 pl-8 md:pl-12"></div>
                        </div>
                    </div>

                    <div class="relative mb-12">
                        <div class="flex items-center">
                            <div class="flex-1 text-right pr-8 md:pr-12"></div>
                            <div class="w-10 h-10 bg-neutral-800 rounded-full flex items-center justify-center z-10">
                                <i class="fa-solid fa-building text-white"></i>
                            </div>
                            <div class="flex-1 pl-8 md:pl-12">
                                <h3 class="text-xl mb-2">2013</h3>
                                <p class="text-neutral-600">Expansão para Rio de Janeiro e Belo Horizonte</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative mb-12">
                        <div class="flex items-center">
                            <div class="flex-1 text-right pr-8 md:pr-12">
                                <h3 class="text-xl mb-2">2016</h3>
                                <p class="text-neutral-600">Lançamento da plataforma digital de recrutamento</p>
                            </div>
                            <div class="w-10 h-10 bg-neutral-800 rounded-full flex items-center justify-center z-10">
                                <i class="fa-solid fa-laptop text-white"></i>
                            </div>
                            <div class="flex-1 pl-8 md:pl-12"></div>
                        </div>
                    </div>

                    <div class="relative mb-12">
                        <div class="flex items-center">
                            <div class="flex-1 text-right pr-8 md:pr-12"></div>
                            <div class="w-10 h-10 bg-neutral-800 rounded-full flex items-center justify-center z-10">
                                <i class="fa-solid fa-award text-white"></i>
                            </div>
                            <div class="flex-1 pl-8 md:pl-12">
                                <h3 class="text-xl mb-2">2019</h3>
                                <p class="text-neutral-600">Reconhecimento como uma das melhores consultorias de RH do
                                    Brasil</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative mb-12">
                        <div class="flex items-center">
                            <div class="flex-1 text-right pr-8 md:pr-12">
                                <h3 class="text-xl mb-2">2022</h3>
                                <p class="text-neutral-600">Implementação de soluções baseadas em inteligência
                                    artificial</p>
                            </div>
                            <div class="w-10 h-10 bg-neutral-800 rounded-full flex items-center justify-center z-10">
                                <i class="fa-solid fa-robot text-white"></i>
                            </div>
                            <div class="flex-1 pl-8 md:pl-12"></div>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="flex items-center">
                            <div class="flex-1 text-right pr-8 md:pr-12"></div>
                            <div class="w-10 h-10 bg-neutral-800 rounded-full flex items-center justify-center z-10">
                                <i class="fa-solid fa-globe text-white"></i>
                            </div>
                            <div class="flex-1 pl-8 md:pl-12">
                                <h3 class="text-xl mb-2">2025</h3>
                                <p class="text-neutral-600">Início da expansão internacional com escritórios em Portugal
                                    e EUA</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="cta" class="py-16 bg-neutral-800 text-white">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-3xl mb-6">Faça parte da nossa história</h2>
                <p class="text-xl mb-8 max-w-3xl mx-auto">Junte-se a nós e descubra como podemos ajudar sua empresa a
                    encontrar os melhores talentos ou impulsionar sua carreira profissional.</p>
                <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                    <span class="px-6 py-3 bg-white text-neutral-800 rounded-md hover:bg-neutral-100 cursor-pointer">Ver
                        Vagas Disponíveis</span>
                    <span class="px-6 py-3 border border-white rounded-md hover:bg-neutral-700 cursor-pointer">Solicitar
                        Consultoria</span>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer" class="bg-neutral-900 text-neutral-400">
        <div class="container mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-6">
                        <i class="fa-solid fa-users-gear text-white text-2xl"></i>
                        <span class="text-xl text-white">Belottis</span>
                    </div>
                    <p class="mb-6">Conectando talentos e oportunidades desde 2010.</p>
                    <div class="flex space-x-4">
                        <span class="text-neutral-400 hover:text-white cursor-pointer">
                            <a href="https://www.facebook.com/belottis/" target="blank"> <i
                                    class="fa-brands fa-facebook-f">
                                </i></a>
                        </span>
                        <span class="text-neutral-400 hover:text-white cursor-pointer">
                            <i class="fa-brands fa-twitter"></i>
                        </span>
                        <span class="text-neutral-400 hover:text-white cursor-pointer">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </span>
                        <span class="text-neutral-400 hover:text-white cursor-pointer">
                            <i class="fa-brands fa-instagram"></i>
                        </span>
                    </div>
                </div>

                <div>
                    <h3 class="text-white text-lg mb-6">Links Rápidos</h3>
                    <ul class="space-y-3">
                        <li><span class="hover:text-white cursor-pointer">Início</span></li>
                        <li><span class="hover:text-white cursor-pointer">Quem Somos</span></li>
                        <li><span class="hover:text-white cursor-pointer">Serviços</span></li>
                        <li><span class="hover:text-white cursor-pointer">Vagas</span></li>
                        <li><span class="hover:text-white cursor-pointer">Cadastrar Currículo</span></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-white text-lg mb-6">Serviços</h3>
                    <ul class="space-y-3">
                        <li><span class="hover:text-white cursor-pointer">Recrutamento e Seleção</span></li>
                        <li><span class="hover:text-white cursor-pointer">Estágios</span></li>
                        <li><span class="hover:text-white cursor-pointer">Folha de Pagamento</span></li>
                        <li><span class="hover:text-white cursor-pointer">Treinamentos</span></li>

                    </ul>
                </div>

                <div>
                    <h3 class="text-white text-lg mb-6">Contato</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fa-solid fa-location-dot mr-3"></i>
                            <span>Rua Jamil João Zarif, 264 - Sala 4
                                CEP:07143-000 - Guarulhos / SP</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-phone mr-3"></i>
                            <span>(11) 2600-1607</span>
                            <span>(11) 94632-6003</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-envelope mr-3"></i>
                            <span>contato@belottis.com.br</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-neutral-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p>© 2025 HR Solutions. Todos os direitos reservados. Desenvolvido por <a
                        href="https://fredericomoura.com.br">Frederico Moura</a></p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <span class="hover:text-white cursor-pointer">Política de Privacidade</span>
                    <span class="hover:text-white cursor-pointer">Termos de Uso</span>
                    <span class="hover:text-white cursor-pointer">Cookies</span>
                </div>
            </div>
        </div>
    </footer>
    <?= $this->include('components/whatsapp_float') ?>

</body>

</html>