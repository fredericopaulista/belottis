<div class="container header-container">
    <div class="logo">
        <div class="logo-text">
            <a href="<?php echo route_to('site.home');?>" title="Belottis">
                <img src="<?php echo base_url(); ?>public/assets/img/Logo_fundo_branco_estagios.png" height="50px"
                    alt="Belottis Estagios">
            </a>
        </div>
    </div>

    <nav>
        <ul id="menu">
            <li><a class="nav-link <?= url_is('/') ? 'active' : ''; ?>" href="<?php echo route_to('site.home');?>"
                    title="Início">Início</a></li>
            <li><a class="nav-link <?= url_is('quem-somos') ? 'active' : ''; ?>"
                    href="<?php echo route_to('site.sobre');?>" title="Quem Somos">Quem Somos</a></li>
            <li><a class="nav-link <?= url_is('servicos') ? 'active' : ''; ?>"
                    href="<?php echo route_to('site.servicos');?>" title="Nossos Serviços">Serviços</a></li>
            <li><a class="nav-link <?= url_is('vagas-de-emprego') ? 'active' : ''; ?>"
                    href="<?php echo route_to('site.vagas');?>" title="Vagas Disponíveis">Vagas</a></li>
            <li><a class="nav-link <?= url_is('contato') ? 'active' : ''; ?>"
                    href="<?php echo route_to('site.contato');?>" title="Contato">Contato</a></li>
        </ul>
    </nav>
    <div class="nav-buttons">
        <a href="<?php echo route_to('site.cadastre');?>" class="btn btn-outline" title="Enviar Currículo">Enviar
            Currículo</a>
        <a href="<?php echo route_to('site.cadastre');?>" class="btn btn-primary"
            title="Cadastrar Currículo">Cadastrar</a>
    </div>

    <button class="mobile-menu-btn" id="mobileMenu" aria-label="Abrir menu de navegação">
        <i class="fas fa-bars" style="margin-right:15px!important;"></i>
    </button>
</div>