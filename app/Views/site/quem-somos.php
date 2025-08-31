<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belottis - Quem Somos</title>
    <meta name="description" content="Belottis RH: Conectando talentos e oportunidades há mais de 10 anos. Especializados em recrutamento, seleção e estágios. Conheça nossa história, equipe e metodologia única.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        :root {
            --primary: #2C3E50;     /* Azul escuro similar à logo */
            --secondary: #3498DB;   /* Azul médio para contrastes */
            --accent: #55b2b4;      /* Vermelho coral para destaques */
            --light: #ECF0F1;       /* Cinza muito claro para fundos */
            --dark: #2C3E50;        /* Azul escuro para textos */
            --text: #2C3E50;        /* Cor padrão para texto */
            --text-light: #7F8C8D;  /* Texto secundário */
            --white: #FFFFFF;
            --success: #27AE60;     /* Verde para confirmações */
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
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
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
            background-color: rgba(255,255,255,0.1);
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
            border-top: 1px solid rgba(255,255,255,0.1);
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
                box-shadow: 0 10px 20px rgba(0,0,0,0.1);
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
        
        /* Estilos específicos para a página Quem Somos */
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
        
        .flex-container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 40px;
        }
        
        .flex-text {
            flex: 1;
            min-width: 300px;
        }
        
        .flex-image {
            flex: 1;
            min-width: 300px;
            text-align: center;
        }
        
        .flex-image img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .value-card {
            background-color: var(--white);
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s;
        }
        
        .value-card:hover {
            transform: translateY(-5px);
        }
        
        .value-icon {
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
        
        .mission-vision {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .mission-card, .vision-card {
            background-color: var(--white);
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .mission-icon, .vision-icon {
            width: 70px;
            height: 70px;
            background-color: var(--accent);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            margin: 0 auto 20px;
        }
        
        .values-list {
            background-color: var(--white);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-top: 40px;
        }
        
        .values-list ul {
            list-style-type: none;
        }
        
        .values-list li {
            padding: 15px 0;
            border-bottom: 1px solid var(--light);
            display: flex;
            align-items: center;
        }
        
        .values-list li:last-child {
            border-bottom: none;
        }
        
        .values-list i {
            color: var(--accent);
            margin-right: 15px;
            font-size: 1.2rem;
        }
        
        .cta-section {
            background: linear-gradient(135deg, var(--primary) 0%, #2C3E50 100%);
            color: var(--white);
            padding: 80px 0;
            text-align: center;
        }
        
        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }
        
        @media (max-width: 768px) {
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
        }
        .nav-link.active {
   
    font-weight: 600; /* opcional: deixa em negrito */
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
                <h1>Quem Somos</h1>
                <p>Conheça nossa missão, visão e valores que nos guiam para oferecer as melhores soluções em recursos humanos.</p>
            </div>
        </section>

        <section id="about-us" class="content-section bg-white">
            <div class="container">
                <div class="flex-container">
                    <div class="flex-text">
                        <h2 class="section-title">Nossa Empresa</h2>
                        <p>Somos uma consultoria de Recursos Humanos que visa apoiar nossos clientes no desenvolvimento de seus planos de negócio, suprindo suas demandas de recrutamento & seleção, treinamentos, administração de estágios, entre outros.</p>
                        <p>Com uma equipe especializada e comprometida, oferecemos soluções personalizadas que atendem às necessidades específicas de cada cliente, sempre com excelência e profissionalismo.</p>
                    </div>
                    <div class="flex-image">
                        <div style="background-color: #e0e0e0; height: 300px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                            <span>Imagem representando a equipe Belottis</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="mission-vision" class="content-section bg-light">
            <div class="container">
                <div class="section-title">
                    <h2>Missão e Visão</h2>
                    <p>Os pilares que fundamentam nosso trabalho e direcionam nosso crescimento.</p>
                </div>

                <div class="mission-vision">
                    <div class="mission-card">
                        <div class="mission-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3>Missão</h3>
                        <p>Oferecer aos clientes soluções eficazes e inovadoras na área de Recursos Humanos.</p>
                    </div>

                    <div class="vision-card">
                        <div class="vision-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3>Visão</h3>
                        <p>Ser reconhecida como uma das melhores Consultorias de Recursos Humanos.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="our-values" class="content-section bg-white">
            <div class="container">
                <div class="section-title">
                    <h2>Nossos Valores</h2>
                    <p>Os princípios que norteiam nossas ações e decisões todos os dias.</p>
                </div>

                <div class="values-list">
                    <ul>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Cliente satisfeito:</strong> Priorizamos a satisfação total de nossos clientes, entendendo suas necessidades e superando expectativas.</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Excelência no atendimento:</strong> Buscamos constantemente a excelência em todos os nossos serviços e no relacionamento com clientes e candidatos.</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Respeito aos profissionais:</strong> Valorizamos e respeitamos todos os profissionais, tratando cada indivíduo com dignidade e consideração.</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span><strong>Competência e confiabilidade:</strong> Mantemos altos padrões de competência técnica e confiabilidade em todos os nossos serviços e compromissos.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="cta-section">
            <div class="container">
                <h2>Conheça nossas soluções</h2>
                <p>Entre em contato conosco e descubra como podemos ajudar sua empresa a encontrar os talentos ideais.</p>
                <div class="cta-buttons">
                    <a href="<?php echo route_to('site.servicos');?>" title="Nossos Serviços" class="btn btn-primary">Nossos Serviços</a>
                    <a href="<?php echo route_to('site.contato');?>"  title="Contato" class="btn btn-outline" style="border-color: var(--white); color: var(--white);">Entre em Contato</a>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <?= $this->include('site/layouts/footer') ?>
    </footer>

    <script>
        // Menu mobile toggle
        document.getElementById('mobileMenu').addEventListener('click', function() {
            const menu = document.getElementById('menu');
            menu.classList.toggle('active');
        });
    </script>
</body>
</html>