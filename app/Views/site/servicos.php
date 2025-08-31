<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belottis - Nossos Serviços</title>
    <meta name="description" content="Especialistas em estágios: recrutamento sob medida, gestão de contratos, seguro incluso e intermediação completa entre empresas e estudantes.">
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
            color: #55b2b4;
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
        
        /* Estilos específicos para a página de Serviços */
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
        
        .bg-light {
            background-color: var(--light);
        }
        
        .bg-white {
            background-color: var(--white);
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .service-card {
            background-color: var(--white);
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
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
                <h1>Nossos Serviços</h1>
                <p>Oferecemos soluções completas em recursos humanos para empresas de todos os portes.</p>
                <div class="cta-buttons">
                    <a href="#" class="btn btn-primary">Solicitar Consultoria</a>
                    <!--<a href="#" class="btn btn-outline" style="border-color: var(--white); color: var(--white);">Ver Depoimentos</a>-->
                </div>
            </div>
        </section>

        <section id="services-main" class="content-section bg-white">
            <div class="container">
                <div class="section-title">
                    <h2>Serviços Especializados em Estágios</h2>
                    <p>Conheça nosso portfólio completo de serviços especializados em estágios para sua empresa.</p>
                </div>

                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h3>Recrutamento sob medida</h3>
                        <p>Identificamos e indicamos estagiários com o perfil ideal para a sua empresa, de forma eficaz e assertiva.</p>
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
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <h3>Gestão de contratos</h3>
                        <p>Administramos a formalização, prorrogação e encerramento do estágio com total segurança e conformidade com a lei de estágio.</p>
                        <a href="#" class="service-link">Saiba mais <i class="fas fa-arrow-right"></i></a>
                    </div>

                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Seguro de acidentes incluso</h3>
                        <p>Oferecemos cobertura obrigatória já integrada ao processo, sem dor de cabeça para sua empresa.</p>
                        <a href="#" class="service-link">Saiba mais <i class="fas fa-arrow-right"></i></a>
                    </div>

                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <h3>Gestão financeira do estágio</h3>
                        <p>Emitimos os recibos de pagamento da bolsa-auxílio e auxílio transporte de forma organizada e sem complicações.</p>
                        <a href="#" class="service-link">Saiba mais <i class="fas fa-arrow-right"></i></a>
                    </div>

                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-piggy-bank"></i>
                        </div>
                        <h3>Economia e praticidade</h3>
                        <p>Sem vínculo empregatício e isento de encargos trabalhistas e previdenciários, o estágio é uma opção estratégica e de baixo custo.</p>
                        <a href="#" class="service-link">Saiba mais <i class="fas fa-arrow-right"></i></a>
                    </div>

                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Acompanhamento de desempenho</h3>
                        <p>Realizamos avaliações periódicas para acompanhar a evolução do estagiário dentro da sua empresa.</p>
                        <a href="#" class="service-link">Saiba mais <i class="fas fa-arrow-right"></i></a>
                    </div>

                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <h3>Responsabilidade social</h3>
                        <p>Conectamos empresas a jovens talentos da própria região, incentivando o primeiro emprego e movimentando a economia local.</p>
                        <a href="#" class="service-link">Saiba mais <i class="fas fa-arrow-right"></i></a>
                    </div>

                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h3>Suporte contínuo</h3>
                        <p>Você e seu estagiário contam com nosso apoio durante toda a jornada — orientação, ajustes e atendimento humanizado.</p>
                        <a href="#" class="service-link">Saiba mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-section">
            <div class="container">
                <h2>Pronto para encontrar o estagiário ideal para sua empresa?</h2>
                <p>Entre em contato conosco para uma consultoria personalizada e descubra como nossos serviços podem impulsionar os resultados do seu negócio.</p>
                <div class="cta-buttons">
                    <a href="#" class="btn btn-primary">Solicitar Proposta</a>
                    <a href="#" class="btn btn-outline" style="border-color: var(--white); color: var(--white);">Falar com um Consultor</a>
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