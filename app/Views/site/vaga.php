<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belottis - Detalhes da Vaga</title>
    <meta name="description"
        content="Detalhes completos da vaga de emprego. Confira os requisitos, benefícios e como se candidatar.">
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

    /* Estilos específicos para a página de Detalhes da Vaga */
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

    .job-detail-container {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 30px;
        margin-bottom: 40px;
    }

    @media (max-width: 992px) {
        .job-detail-container {
            grid-template-columns: 1fr;
        }
    }

    .job-main-content {
        background-color: var(--white);
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .job-sidebar {
        background-color: var(--white);
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        height: fit-content;
    }

    .job-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 25px;
        flex-wrap: wrap;
        gap: 15px;
    }

    .job-info {
        display: flex;
        align-items: flex-start;
        gap: 15px;
    }

    .job-icon {
        width: 60px;
        height: 60px;
        background-color: var(--light);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary);
        font-size: 24px;
        flex-shrink: 0;
    }

    .job-details h2 {
        font-size: 1.8rem;
        margin-bottom: 5px;
        color: var(--primary);
    }

    .job-company {
        color: var(--text-light);
        font-size: 1.1rem;
        margin-bottom: 5px;
    }

    .job-location {
        color: var(--text-light);
        margin-bottom: 10px;
    }

    .job-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 10px;
    }

    .job-tag {
        background-color: var(--light);
        color: var(--primary);
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
    }

    .job-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin: 25px 0;
        padding: 20px;
        background-color: var(--light);
        border-radius: 8px;
    }

    .meta-item {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .meta-item i {
        color: var(--accent);
        font-size: 1.2rem;
    }

    .meta-content h4 {
        font-size: 0.9rem;
        color: var(--text-light);
        margin-bottom: 3px;
    }

    .meta-content p {
        font-weight: 600;
        color: var(--primary);
    }

    .job-section {
        margin-bottom: 30px;
    }

    .job-section h3 {
        font-size: 1.3rem;
        color: var(--primary);
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: 2px solid var(--light);
    }

    .job-description {
        line-height: 1.8;
        color: var(--text);
    }

    .requirements-list,
    .benefits-list {
        list-style: none;
    }

    .requirements-list li,
    .benefits-list li {
        margin-bottom: 10px;
        padding-left: 25px;
        position: relative;
    }

    .requirements-list li::before {
        content: '•';
        color: var(--accent);
        font-weight: bold;
        position: absolute;
        left: 0;
        font-size: 1.2rem;
    }

    .benefits-list li::before {
        content: '✓';
        color: var(--success);
        font-weight: bold;
        position: absolute;
        left: 0;
    }

    .job-actions {
        display: flex;
        gap: 15px;
        margin-top: 30px;
        flex-wrap: wrap;
    }

    .btn-apply {
        background-color: var(--accent);
        color: var(--white);
        padding: 12px 25px;
        border-radius: 5px;
        font-weight: 600;
        text-decoration: none;
        transition: background-color 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .btn-apply:hover {
        background-color: var(--secondary);
    }

    .btn-save {
        background-color: transparent;
        border: 2px solid var(--primary);
        color: var(--primary);
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .btn-save:hover {
        background-color: var(--primary);
        color: var(--white);
    }

    .sidebar-section {
        margin-bottom: 25px;
    }

    .sidebar-section h3 {
        font-size: 1.2rem;
        color: var(--primary);
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: 2px solid var(--light);
    }

    .company-info {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 20px;
    }

    .company-logo {
        width: 60px;
        height: 60px;
        background-color: var(--light);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary);
        font-size: 20px;
    }

    .company-details h4 {
        font-size: 1.1rem;
        margin-bottom: 5px;
    }

    .company-details p {
        color: var(--text-light);
        font-size: 0.9rem;
    }

    .job-stats {
        list-style: none;
    }

    .job-stats li {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
        padding-bottom: 10px;
        border-bottom: 1px solid var(--light);
    }

    .job-stats span:first-child {
        color: var(--text-light);
    }

    .job-stats span:last-child {
        font-weight: 600;
        color: var(--primary);
    }

    .related-jobs {
        margin-top: 50px;
    }

    .related-jobs h2 {
        font-size: 1.8rem;
        color: var(--primary);
        margin-bottom: 25px;
        text-align: center;
    }

    .related-jobs-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
    }

    .related-job-card {
        background-color: var(--white);
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .related-job-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .related-job-card h3 {
        font-size: 1.2rem;
        margin-bottom: 10px;
        color: var(--primary);
    }

    .related-job-card .company {
        color: var(--text-light);
        margin-bottom: 10px;
    }

    .related-job-card .location {
        color: var(--text-light);
        font-size: 0.9rem;
        margin-bottom: 15px;
    }

    .related-job-card .salary {
        color: var(--primary);
        font-weight: 600;
        margin-bottom: 15px;
    }

    .related-job-card .btn-view {
        display: inline-block;
        color: var(--accent);
        font-weight: 600;
        text-decoration: none;
    }

    .related-job-card .btn-view:hover {
        text-decoration: underline;
    }

    .breadcrumb {
        display: flex;
        align-items: center;
        margin-bottom: 30px;
        color: var(--text-light);
        font-size: 0.9rem;
    }

    .breadcrumb a {
        color: var(--text-light);
        text-decoration: none;
    }

    .breadcrumb a:hover {
        color: var(--accent);
    }

    .breadcrumb span {
        margin: 0 10px;
    }

    .newsletter-section {
        background-color: var(--light);
        padding: 60px 0;
        text-align: center;
    }

    .newsletter-content {
        max-width: 600px;
        margin: 0 auto;
    }

    .newsletter-form {
        display: flex;
        gap: 10px;
        margin-top: 20px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .newsletter-input {
        flex: 1;
        min-width: 250px;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1rem;
    }

    .newsletter-button {
        background-color: var(--primary);
        color: var(--white);
        border: none;
        padding: 12px 25px;
        border-radius: 5px;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .newsletter-button:hover {
        background-color: var(--secondary);
    }

    @media (max-width: 768px) {
        .job-header {
            flex-direction: column;
        }

        .job-meta {
            flex-direction: column;
            gap: 15px;
        }

        .job-actions {
            flex-direction: column;
        }

        .btn-apply,
        .btn-save {
            width: 100%;
            text-align: center;
            justify-content: center;
        }
    }

    /* Notificações da Newsletter */
    .newsletter-alert {
        padding: 12px 16px;
        margin-bottom: 20px;
        border-radius: 6px;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .newsletter-alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .newsletter-alert-error {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }

    .newsletter-alert i {
        font-size: 16px;
    }

    /* Melhorias no formulário */
    .newsletter-input:invalid {
        border-color: #dc3545;
    }

    .newsletter-input:focus:invalid {
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
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
                <div class="breadcrumb">
                    <a href="<?= site_url('/') ?>">Home</a>
                    <span>/</span>
                    <a href="<?= route_to('site.vagas') ?>">Vagas</a>
                    <span>/</span>
                    <span>Detalhes da Vaga <?= $vaga->cargo ?></span>
                </div>
                <h1><?= $vaga->cargo ?></h1>
                <p>Confira todas as informações sobre esta oportunidade</p>
            </div>
        </section>

        <section class="content-section bg-light">
            <div class="container">
                <div class="job-detail-container">
                    <div class="job-main-content">
                        <div class="job-header">
                            <div class="job-info">
                                <div class="job-icon">
                                    <i class="fas fa-building"></i>
                                </div>
                                <div class="job-details">
                                    <h2><?= $vaga->cargo ?></h2>

                                    <div class="job-location"><?= $vaga->cidade ?>, <?= $vaga->estado ?></div>
                                    <div class="job-tags">
                                        <!-- <span class="job-tag"><?= $vaga->tipo_contratacao ?></span> -->
                                        <span class="job-tag"><?= $vaga->modalidade ?></span>
                                        <span class="job-tag"><?= $vaga->nivel_experiencia ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="job-meta">

                            <div class="meta-item">
                                <i class="fas fa-briefcase"></i>
                                <!-- <div class="meta-content">
                                    <h4>Tipo de Contratação</h4>
                                    <p><?= $vaga->tipo_contratacao ?></p>
                                </div> -->
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-location-dot"></i>
                                <div class="meta-content">
                                    <h4>Localidade</h4>
                                    <p><?= $vaga->cidade ?>, <?= $vaga->estado ?></p>
                                </div>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-calendar"></i>
                                <div class="meta-content">
                                    <h4>Publicada em</h4>
                                    <p><?= date('d/m/Y', strtotime($vaga->data_publicacao)) ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="job-section">
                            <h3>Descrição da Vaga</h3>
                            <div class="job-description">
                                <?= nl2br($vaga->descricao) ?>
                            </div>
                        </div>

                        <?php if (!empty($vaga->requisitos)): ?>
                        <div class="job-section">
                            <h3>Requisitos</h3>
                            <ul class="requirements-list">
                                <?php 
                                $requisitos = explode("\n", $vaga->requisitos);
                                foreach ($requisitos as $requisito): 
                                    if (!empty(trim($requisito))):
                                ?>
                                <li><?= trim($requisito) ?></li>
                                <?php 
                                    endif;
                                endforeach; 
                                ?>
                            </ul>
                        </div>
                        <?php endif; ?>

                        <?php if (!empty($vaga->beneficios)): ?>
                        <div class="job-section">
                            <h3>Benefícios</h3>
                            <ul class="benefits-list">
                                <?php 
                                $beneficios = explode("\n", $vaga->beneficios);
                                foreach ($beneficios as $beneficio): 
                                    if (!empty(trim($beneficio))):
                                ?>
                                <li><?= trim($beneficio) ?></li>
                                <?php 
                                    endif;
                                endforeach; 
                                ?>
                            </ul>
                        </div>
                        <?php endif; ?>

                        <!-- <div class="job-actions">
                            <a href="<?= route_to('site.candidatura', $vaga->id) ?>" class="btn-apply">
                                <i class="fas fa-paper-plane"></i>
                                Candidatar-se Agora
                            </a>

                        </div> -->
                    </div>

                    <div class="job-sidebar">


                        <div class="sidebar-section">
                            <h3>Informações da Vaga</h3>
                            <ul class="job-stats">
                                <li>
                                    <span>Data de Publicação</span>
                                    <span><?= date('d/m/Y', strtotime($vaga->data_publicacao)) ?></span>
                                </li>


                                <li>
                                    <span>Modalidade</span>
                                    <span><?= $vaga->modalidade ?></span>
                                </li>
                                <li>
                                    <span>Nível de Experiência</span>
                                    <span><?= $vaga->nivel_experiencia ?? 'Não especificado' ?></span>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar-section">
                            <h3>Compartilhar Vaga</h3>
                            <div style="display: flex; gap: 10px;">
                                <!-- LinkedIn -->
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?= urlencode(base_url('vaga/' . $vaga->slug)) ?>"
                                    target="_blank" class="btn-save" style="flex: 1; text-align: center;"
                                    title="Compartilhar no LinkedIn" onclick="event.stopPropagation(); return true;">
                                    <i class="fab fa-linkedin"></i>
                                </a>

                                <!-- Facebook -->
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode(current_url()) ?>"
                                    target="_blank" class="btn-save" style="flex: 1; text-align: center;"
                                    title="Compartilhar no Facebook">
                                    <i class="fab fa-facebook"></i>
                                </a>

                                <!-- WhatsApp -->
                                <a href="https://wa.me/?text=<?= urlencode('Confira esta vaga: ' . current_url()) ?>"
                                    target="_blank" class="btn-save" style="flex: 1; text-align: center;"
                                    title="Compartilhar no WhatsApp">
                                    <i class="fab fa-whatsapp"></i>
                                </a>

                                <!-- Email -->
                                <a href="mailto:?subject=<?= urlencode('Vaga: ' . $vaga->cargo) ?>&body=<?= urlencode('Confira esta vaga: ' . current_url()) ?>"
                                    class="btn-save" style="flex: 1; text-align: center;"
                                    title="Compartilhar por Email">
                                    <i class="fas fa-envelope"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Vagas Relacionadas -->
                <?php if (isset($vagas_relacionadas) && !empty($vagas_relacionadas)): ?>
                <div class="related-jobs">
                    <h2>Vagas Relacionadas</h2>
                    <div class="related-jobs-grid">
                        <?php foreach ($vagas_relacionadas as $vaga_rel): ?>
                        <div class="related-job-card">
                            <h3><?= $vaga_rel->cargo ?></h3>

                            <div class="location"><?= $vaga_rel->cidade ?>, <?= $vaga_rel->estado ?></div>

                            <a href="<?= route_to('site.detalhesVaga', $vaga_rel->slug) ?>" class="btn-view">
                                Ver Detalhes
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </section>

        <section class="newsletter-section" id="newsletter">
            <div class="container">
                <div class="newsletter-content">
                    <h2>Receba alertas de novas vagas</h2>
                    <p>Cadastre-se para receber notificações sobre novas oportunidades que correspondam ao seu perfil
                        profissional.</p>

                    <!-- Notificação de Sucesso -->
                    <?php if (session('newsletter_success')): ?>
                    <div class="newsletter-alert newsletter-alert-success">
                        <i class="fas fa-check-circle"></i>
                        <?= session('newsletter_success') ?>
                    </div>
                    <?php endif ?>

                    <!-- Notificação de Erro -->
                    <?php if (session('newsletter_errors')): ?>
                    <div class="newsletter-alert newsletter-alert-error">
                        <i class="fas fa-exclamation-circle"></i>
                        <?php 
                if (is_array(session('newsletter_errors'))) {
                    foreach (session('newsletter_errors') as $error) {
                        echo $error . '<br>';
                    }
                } else {
                    echo session('newsletter_errors');
                }
                ?>
                    </div>
                    <?php endif ?>

                    <form class="newsletter-form" action="<?= base_url('newsletter/inscrever') ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="email" name="email" placeholder="Seu e-mail" class="newsletter-input"
                            value="<?= old('email', session('newsletter_old')['email'] ?? '') ?>" required>

                        <input type="text" name="nome" placeholder="Seu nome (opcional)" class="newsletter-input"
                            value="<?= old('nome', session('newsletter_old')['nome'] ?? '') ?>">
                        <button type="submit" class="newsletter-button">Inscrever-se</button>
                    </form>
                    <p class="text-xs" style="color: var(--text-light); margin-top: 10px;">Ao se inscrever, você
                        concorda com nossa Política de Privacidade.</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <?= $this->include('site/layouts/footer') ?>
    </footer>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Menu mobile toggle
        const mobileMenuBtn = document.getElementById('mobileMenu');
        if (mobileMenuBtn) {
            mobileMenuBtn.addEventListener('click', function() {
                const menu = document.getElementById('menu');
                if (menu) {
                    menu.classList.toggle('active');
                }
            });
        }

        // Funcionalidade de salvar vaga
        const saveButton = document.querySelector('.btn-save');
        if (saveButton) {
            saveButton.addEventListener('click', function(e) {
                e.preventDefault();
                const icon = this.querySelector('i');

                if (icon.classList.contains('fa-heart')) {
                    icon.classList.remove('fa-heart');
                    icon.classList.add('fa-check');
                    this.innerHTML = '<i class="fas fa-check"></i> Vaga Salva';
                    this.style.backgroundColor = 'var(--success)';
                    this.style.borderColor = 'var(--success)';
                    this.style.color = 'var(--white)';
                } else {
                    icon.classList.remove('fa-check');
                    icon.classList.add('fa-heart');
                    this.innerHTML = '<i class="fas fa-heart"></i> Salvar Vaga';
                    this.style.backgroundColor = '';
                    this.style.borderColor = '';
                    this.style.color = '';
                }
            });
        }
    });
    // Remover event listeners conflitantes temporariamente
    document.querySelectorAll('a.btn-save').forEach(link => {
        link.addEventListener('click', function(e) {
            if (this.href.includes('linkedin.com')) {
                e.stopImmediatePropagation();
            }
        }, true);
    });
    // Rolagem automática para a newsletter quando há mensagens
    document.addEventListener('DOMContentLoaded', function() {
        <?php if (session('newsletter_success') || session('newsletter_errors')): ?>
        const newsletterSection = document.getElementById('newsletter');
        if (newsletterSection) {
            newsletterSection.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
        }
        <?php endif ?>
    });
    </script>
</body>

</html>