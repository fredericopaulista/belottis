<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belottis - Políticas de Privacidade</title>
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
            --accent: #E74C3C;      /* Vermelho coral para destaques */
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
        
        /* Estilos específicos para a página de Políticas de Privacidade */
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
        
        .privacy-content {
            background-color: var(--white);
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .privacy-section {
            margin-bottom: 40px;
        }
        
        .privacy-section:last-child {
            margin-bottom: 0;
        }
        
        .privacy-section h2 {
            font-size: 1.8rem;
            color: var(--primary);
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--light);
        }
        
        .privacy-section h3 {
            font-size: 1.4rem;
            color: var(--primary);
            margin: 25px 0 15px;
        }
        
        .privacy-section p {
            color: var(--text-light);
            margin-bottom: 15px;
            line-height: 1.7;
        }
        
        .privacy-section ul {
            margin-bottom: 20px;
            padding-left: 20px;
        }
        
        .privacy-section li {
            color: var(--text-light);
            margin-bottom: 10px;
            line-height: 1.6;
        }
        
        .privacy-section a {
            color: var(--secondary);
            text-decoration: none;
        }
        
        .privacy-section a:hover {
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
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            transition: all 0.3s;
            z-index: 99;
        }
        
        .back-to-top:hover {
            background-color: #c0392b;
            transform: translateY(-3px);
        }
        
        @media (max-width: 768px) {
            .privacy-content {
                padding: 25px;
            }
            
            .privacy-section h2 {
                font-size: 1.6rem;
            }
            
            .privacy-section h3 {
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
                <h1>Políticas de Privacidade</h1>
                <p>Conheça como protegemos e utilizamos suas informações pessoais</p>
            </div>
        </section>

        <section class="content-section bg-light">
    <div class="container">
      <div class="privacy-content">

        <div class="privacy-section">
          <h2>1. Dados coletados</h2>
          <p>Ao se cadastrar em nosso site para concorrer a vagas de estágio, poderemos coletar os seguintes dados pessoais:</p>
          <ul>
            <li>Nome completo;</li>
            <li>Data de nascimento;</li>
            <li>Documento de identificação (RG/CPF);</li>
            <li>Endereço, telefone e e-mail;</li>
            <li>Informações acadêmicas (instituição de ensino, curso, período, matrícula);</li>
            <li>Experiências anteriores e qualificações profissionais;</li>
            <li>Outros dados fornecidos voluntariamente pelo candidato em currículos e formulários.</li>
          </ul>
        </div>

        <div class="privacy-section">
          <h2>2. Finalidade do tratamento</h2>
          <p>Os dados pessoais coletados serão utilizados para:</p>
          <ul>
            <li>Realizar análise e triagem de currículos;</li>
            <li>Entrar em contato com candidatos para etapas do processo seletivo;</li>
            <li>Cumprir exigências legais e regulatórias relacionadas a programas de estágio;</li>
            <li>Eventualmente, enviar informações sobre novas oportunidades de estágio, mediante consentimento do candidato.</li>
          </ul>
        </div>

        <div class="privacy-section">
          <h2>3. Compartilhamento de dados</h2>
          <p>Seus dados poderão ser compartilhados com:</p>
          <ul>
            <li>Instituições de ensino, quando necessário para validação de vínculo acadêmico;</li>
            <li>Empresas concedentes de estágio, exclusivamente para análise de perfil e participação em processos seletivos;</li>
            <li>Órgãos públicos, quando exigido por lei.</li>
          </ul>
          <p><strong>Não comercializamos dados pessoais.</strong></p>
        </div>

        <div class="privacy-section">
          <h2>4. Base legal do tratamento</h2>
          <ul>
            <li>Art. 7º, inciso V da LGPD – quando necessário para execução de contrato ou de procedimentos preliminares relacionados a contrato do qual o titular seja parte (processo seletivo de estágio);</li>
            <li>Consentimento do titular – quando aplicável, para envio de novas oportunidades.</li>
          </ul>
        </div>

        <div class="privacy-section">
          <h2>5. Armazenamento e segurança</h2>
          <p>Os dados serão armazenados em ambiente seguro, com medidas técnicas e administrativas adequadas para proteger contra acessos não autorizados, perda, alteração ou divulgação indevida.</p>
        </div>

        <div class="privacy-section">
          <h2>6. Tempo de retenção</h2>
          <ul>
            <li>Durante o processo seletivo em andamento;</li>
            <li>Pelo prazo máximo de 12 meses após o cadastro, para contato em futuras oportunidades, salvo manifestação contrária do candidato.</li>
          </ul>
          <p>Após esse período, os dados poderão ser eliminados ou anonimizados, salvo obrigação legal de retenção.</p>
        </div>

        <div class="privacy-section">
          <h2>7. Direitos do titular</h2>
          <p>O candidato pode, a qualquer momento e de forma gratuita, exercer seus direitos previstos na LGPD, como:</p>
          <ul>
            <li>Confirmar a existência de tratamento;</li>
            <li>Solicitar acesso, correção ou atualização de seus dados;</li>
            <li>Solicitar exclusão dos dados, quando aplicável;</li>
            <li>Revogar consentimento previamente concedido.</li>
          </ul>
          <p>Para exercer seus direitos, o candidato deve entrar em contato pelo e-mail: <a href="mailto:contato@belottis.com.br">contato@belottis.com.br</a>.</p>
        </div>

        <div class="privacy-section">
          <h2>8. Alterações nesta política</h2>
          <p>Esta Política poderá ser atualizada a qualquer momento para refletir melhorias ou mudanças legais. Recomendamos consulta periódica em nosso site.</p>
        </div>

        <div class="privacy-section">
          <h2>9. Encarregado de Proteção de Dados (DPO)</h2>
          <p>Em caso de dúvidas, solicitações ou exercício de direitos relacionados ao tratamento de dados pessoais, o candidato pode entrar em contato com nosso Encarregado de Proteção de Dados no e-mail: <a href="mailto:contato@belottis.com.br">contato@belottis.com.br</a>.</p>
        </div>

        <div class="update-date">
          <p><strong>Última atualização:</strong> 27 de agosto de 2025</p>
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
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
</body>
</html>