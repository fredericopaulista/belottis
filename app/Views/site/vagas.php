<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belottis - Vagas Disponíveis</title>
    <meta name="description"
        content="Encontre as melhores oportunidades de emprego e estágios na nossa empresa. Vagas abertas para diversos perfis profissionais com benefícios competitivos. Candidate-se agora!">
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

    /* Estilos específicos para a página de Vagas */
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

    .search-filters {
        background-color: var(--white);
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        margin-bottom: 40px;
    }

    .search-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-bottom: 20px;
    }

    .search-input {
        position: relative;
    }

    .search-input i {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--text-light);
    }

    .search-input input,
    .search-input select {
        width: 100%;
        padding: 12px 15px 12px 45px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1rem;
        transition: border-color 0.3s;
    }

    .search-input input:focus,
    .search-input select:focus {
        outline: none;
        border-color: var(--secondary);
    }

    .filter-options {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin-bottom: 20px;
    }

    .filter-option {
        display: flex;
        align-items: center;
    }

    .filter-option input {
        margin-right: 8px;
    }

    .filter-option label {
        color: var(--text);
        cursor: pointer;
    }

    .search-button {
        background-color: #55b2b4;
        color: var(--white);
        border: none;
        padding: 12px 25px;
        border-radius: 5px;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .search-button:hover {
        background-color: var(--secondary);
    }

    .search-button i {
        margin-right: 8px;
    }

    .job-listings-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        flex-wrap: wrap;
        gap: 20px;
    }

    .sort-options {
        display: flex;
        align-items: center;
    }

    .sort-options select {
        padding: 8px 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: var(--white);
    }

    .job-list {
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .job-card {
        background-color: var(--white);
        border-radius: 10px;
        padding: 25px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .job-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .job-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 15px;
        flex-wrap: wrap;
        gap: 15px;
    }

    .job-info {
        display: flex;
        align-items: flex-start;
        gap: 15px;
    }

    .job-icon {
        width: 50px;
        height: 50px;
        background-color: var(--light);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary);
        font-size: 20px;
        flex-shrink: 0;
    }

    .job-details h3 {
        font-size: 1.3rem;
        margin-bottom: 5px;
        color: var(--primary);
    }

    .job-company {
        color: var(--text-light);
        margin-bottom: 5px;
    }

    .job-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .job-tag {
        background-color: var(--light);
        color: var(--primary);
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
    }

    .job-description {
        color: var(--text-light);
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .job-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 15px;
        border-top: 1px solid #eee;
        flex-wrap: wrap;
        gap: 15px;
    }

    .job-salary {
        color: var(--primary);
        font-weight: 600;
    }

    .job-posted {
        color: var(--text-light);
        font-size: 0.9rem;
    }

    .job-actions {
        display: flex;
        gap: 10px;
    }

    .job-action {
        padding: 8px 15px;
        border-radius: 5px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s;
    }

    .job-action-save {
        border: 1px solid #ddd;
        color: var(--text);
        background-color: transparent;
    }

    .job-action-save:hover {
        background-color: var(--light);
    }

    .job-action-apply {
        background-color: #55b2b4;
        color: var(--white);
        border: none;
    }

    .job-action-apply:hover {
        background-color: var(--secondary);
    }

    .page-item {
        display: inline-block;
    }

    .page-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border: 1px solid #ddd;
        border-radius: 5px;
        color: var(--text);
        font-weight: 500;
        text-decoration: none;
        transition: all 0.3s;
    }

    .page-link:hover {
        background-color: var(--light);
    }

    .page-item.active .page-link {
        background-color: var(--accent);
        color: var(--white);
        border-color: var(--accent);
    }

    .page-item.disabled .page-link {
        color: #ccc;
        pointer-events: none;
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

        .job-footer {
            flex-direction: column;
            align-items: flex-start;
        }

        .job-actions {
            width: 100%;
            justify-content: space-between;
        }

        .newsletter-form {
            flex-direction: column;
        }

        .newsletter-input {
            min-width: auto;
        }
    }

    .nav-link.active {
        font-weight: 600;
    }

    /* Container principal da paginação */
    .pagination-container {
        width: 100%;
        margin: 40px 0;
        padding: 20px 0;
        border-top: 1px solid #eee;
        order: 4;
        /* Garante que fique após a lista de vagas */
    }

    /* PAGINAÇÃO DO CODEIGNITER */
    .pagination {
        display: flex;
        justify-content: center;
        margin-bottom: 15px;
    }

    .pagination .pagination {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0;
        gap: 8px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .pagination .pagination li {
        display: inline-block;
    }

    .pagination .pagination li a,
    .pagination .pagination li span {
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 44px;
        height: 44px;
        padding: 0 12px;
        border: 2px solid #e9ecef;
        border-radius: 8px;
        text-decoration: none;
        color: #2C3E50;
        font-weight: 600;
        transition: all 0.3s ease;
        background: white;
        font-size: 14px;
    }

    .pagination .pagination li.active a {
        background-color: #55b2b4;
        border-color: #55b2b4;
        color: white;
    }

    .pagination .pagination li a:hover {
        background-color: #f8f9fa;
        border-color: #55b2b4;
        color: #55b2b4;
    }

    .pagination .pagination li.disabled span {
        opacity: 0.5;
        cursor: not-allowed;
        background-color: #f8f9fa;
        color: #999;
        border-color: #ddd;
    }

    /* INFORMAÇÕES */
    .pagination-info {
        text-align: center;
        color: #6c757d;
        font-size: 14px;
        font-weight: 500;
    }

    /* MOBILE */
    @media (max-width: 768px) {
        .content-section .container {
            display: flex;
            flex-direction: column;
        }

        .search-filters {
            order: 1;
        }

        .job-listings-header {
            order: 2;
        }

        .job-list {
            order: 3;
        }

        .pagination-container {
            order: 4;
            margin: 20px 0;
            padding: 15px 0;
            border-top: 1px solid #eee;
        }

        .newsletter-section {
            order: 5;
        }

        /* Simplificar paginação mobile */
        .pagination .pagination {
            gap: 4px;
        }

        .pagination .pagination li a,
        .pagination .pagination li span {
            min-width: 36px;
            height: 36px;
            padding: 0 8px;
            font-size: 12px;
        }

        /* Esconder números de página, mostrar apenas navegação */
        .pagination .pagination li:not(.active):not(:has([aria-label*="previous"])):not(:has([aria-label*="next"])) {
            display: none;
        }

        .pagination-info {
            font-size: 12px;
            margin-top: 10px;
        }
    }

    /* Estilo para quando não há resultados */
    .no-results {
        text-align: center;
        padding: 40px 20px;
        color: var(--text-light);
    }

    .no-results i {
        font-size: 48px;
        margin-bottom: 15px;
        display: block;
        color: #ddd;
    }

    .no-results h3 {
        margin-bottom: 10px;
        color: var(--text);
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
                <h1>Vagas Disponíveis</h1>
                <p>Encontre a oportunidade ideal para impulsionar sua carreira</p>
            </div>
        </section>

        <section class="content-section bg-light">
            <div class="container">
                <div class="search-filters">
                    <form method="get" action="<?php echo route_to('site.buscaVagas');?>" class="search-form">
                        <div class="search-grid">
                            <div class="search-input">
                                <i class="fas fa-briefcase"></i>
                                <input type="text" name="search" placeholder="Cargo ou palavra-chave"
                                    value="<?php echo esc($search_term ?? ''); ?>">
                            </div>

                            <div class="search-input">
                                <i class="fas fa-location-dot"></i>
                                <input type="text" name="localidade" placeholder="Cidade ou estado"
                                    value="<?php echo esc($localidade_term ?? ''); ?>">
                            </div>
                        </div>

                        <div class="filter-options">
                            <div class="filter-option">
                                <input type="checkbox" id="remote">
                                <label for="remote">Ensino Médio</label>
                            </div>

                            <div class="filter-option">
                                <input type="checkbox" id="hybrid">
                                <label for="hybrid">Ensino Superior</label>
                            </div>
                        </div>

                        <button class="search-button" type="submit">
                            <i class="fas fa-search"></i>
                            Buscar vagas
                        </button>
                    </form>
                </div>

                <div class="job-listings-header">
                    <div>
                        <h2>Vagas disponíveis</h2>
                        <p><?php if(isset($total_vagas) && $total_vagas > 0): ?>
                            Encontramos <?= $total_vagas ?> vagas para você
                            <?php else: ?>
                            Nenhuma vaga encontrada
                            <?php endif; ?></p>
                    </div>

                    <div class="sort-options">
                        <span>Ordenar por:</span>
                        <select>
                            <option value="relevance">Relevância</option>
                            <option value="date">Data de publicação</option>
                            <option value="salary">Faixa salarial</option>
                        </select>
                    </div>
                </div>

                <div class="job-list">
                    <?php if(isset($jobs) && !empty($jobs)): ?>
                    <?php foreach($jobs as $job): ?>
                    <div class="job-card">
                        <div class="job-header">
                            <div class="job-info">
                                <div class="job-icon">
                                    <i class="fas fa-building"></i>
                                </div>
                                <div class="job-details">
                                    <h3><?php echo $job->cargo; ?></h3>

                                    <div class="job-location"><?php echo $job->cidade; ?>, <?php echo $job->estado; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="job-tags">
                                <span class="job-tag"><?php echo $job->tipo_contratacao; ?></span>
                            </div>
                        </div>

                        <div class="job-description">
                            <?php echo $job->descricao; ?>
                        </div>

                        <div class="job-footer">
                            <div>

                                <div class="job-posted">Publicada em:
                                    <?php echo date('d/m/Y', strtotime($job->data_publicacao)); ?></div>
                            </div>
                            <div class="job-actions">
                                <a href="<?= base_url('vaga/' . $job->slug) ?>" class="job-action job-action-apply">Ver
                                    detalhes</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                    <?php else: ?>
                    <div class="no-results">
                        <i class="fas fa-search"></i>
                        <h3>Nenhuma vaga encontrada</h3>
                        <p>Tente ajustar os filtros de busca</p>
                    </div>
                    <?php endif; ?>
                </div>

                <!-- Paginação - MOVIDA PARA DEPOIS DA LISTA DE VAGAS -->
                <?php if(isset($pager) && $pager->getPageCount() > 1): ?>
                <div class="pagination-container">
                    <div class="pagination">
                        <?php echo $pager->links('default', 'ptbr_pagination'); ?>
                    </div>
                    <div class="pagination-info">
                        Mostrando <?php echo count($jobs); ?> de <?php echo $pager->getTotal(); ?> vagas
                        (Página <?php echo $pager->getCurrentPage(); ?> de <?php echo $pager->getPageCount(); ?>)
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </section>

        <section class="newsletter-section">
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
    // Menu mobile toggle
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuBtn = document.getElementById('mobileMenu');
        if (mobileMenuBtn) {
            mobileMenuBtn.addEventListener('click', function() {
                const menu = document.getElementById('menu');
                if (menu) {
                    menu.classList.toggle('active');
                }
            });
        }

        // Traduzir os textos da paginação
        const pagination = document.querySelector('.pagination');
        if (pagination) {
            pagination.innerHTML = pagination.innerHTML
                .replace(/First/g, 'Primeira')
                .replace(/Previous/g, 'Anterior')
                .replace(/Next/g, 'Próxima')
                .replace(/Last/g, 'Última');
        }

        // Garantir que a paginação fique no final em mobile
        function fixMobilePagination() {
            const paginationContainer = document.querySelector('.pagination-container');
            const jobList = document.querySelector('.job-list');
            const container = document.querySelector('.content-section .container');

            if (window.innerWidth < 768 && paginationContainer && jobList && container) {
                // Verificar se a paginação não está após a lista de vagas
                if (paginationContainer.previousElementSibling !== jobList) {
                    container.insertBefore(paginationContainer, jobList.nextElementSibling);
                }
            }
        }

        fixMobilePagination();
        window.addEventListener('resize', fixMobilePagination);
    });
    </script>
</body>

</html>