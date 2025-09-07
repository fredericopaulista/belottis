<div class="container">
    <div class="footer-grid">
        <div>
            <div class="footer-logo">
                <div class="footer-logo-text">
                    <img src="<?php echo base_url(); ?>public/assets/img/Logo_estagio.png" height=110px"
                        alt="Belottis Estagios">

                </div>
            </div>
            <p class="footer-about">Conectando talentos e oportunidades. Especializados em recrutamento, seleção e
                estágios.</p><br>
            <div class="footer-social">
                <a href="https://www.facebook.com/share/16xinyWmin/" title="Facebook Belottis" target="_blank"><i
                        class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/belottis_rh?utm_source=qr&igsh=dTkxdG5ueW9vYzV5"
                    title="Instagram Belottis" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.tiktok.com/@belottisrh?_t=ZM-8zEFTC1bg4z&_r=1" title="TikTok Belottis"
                    target="_blank"><i class="fab fa-tiktok"></i></a>
                <a href="https://wa.me/5511946326003?text=Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20obter%20mais%20informa%C3%A7%C3%B5es"
                    title="Whatsapp Belottis" target="_blank"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>

        <div>
            <h3 class="footer-title">Links Rápidos</h3>
            <ul class="footer-links">
                <li><a href="<?php echo route_to('site.home');?>" title="Início">Início</a></li>
                <li><a href="<?php echo route_to('site.sobre');?>" title="Quem Somos">Quem Somos</a></li>
                <li><a href="<?php echo route_to('site.servicos');?>" title="Nossos Serviços">Serviços</a></li>
                <li><a href="<?php echo route_to('site.vagas');?>" title="Vagas Disponíveis">Vagas</a></li>
                <li><a href="<?php echo route_to('site.cadastre');?>" title="Cadastrar Currículo">Cadastrar
                        Currículo</a></li>
            </ul>
        </div>

        <div>
            <h3 class="footer-title">Serviços</h3>
            <ul class="footer-links">
                <li><a href="<?php echo route_to('site.servicos');?>">Recrutamento sob medida</a></li>
                <li><a href="<?php echo route_to('site.servicos');?>">Seleção personalizada</a></li>
                <li><a href="<?php echo route_to('site.servicos');?>">Intermediação completa</a></li>
                <li><a href="<?php echo route_to('site.servicos');?>">Gestão de contratos</a></li>
                <li><a href="<?php echo route_to('site.servicos');?>">Seguro de acidentes incluso</a></li>
            </ul>
        </div>

        <div>
            <h3 class="footer-title">Contato</h3>
            <ul class="footer-contact">
                <li><i class="fas fa-map-marker-alt"></i> Rua Jamil João Zarif, 264 - 1º andar - Guarulhos/SP</li>
                <li><i class="fas fa-phone"></i> (11) 2600-1607</li>
                <li><i class="fas fa-phone"></i> (11) 94632-6003</li>
                <li><i class="fas fa-envelope"></i> contato@belottis.com.br</li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="flex">
            <a href="<?php echo route_to('site.politicas');?>" title="Política de Privacidade">Política de
                Privacidade</a> /
            <a href="<?php echo route_to('site.termos');?>" title="Termos de Uso">Termos de Uso</a> /

            <span class="hover:text-white cursor-pointer">Cookies</span>
        </div>
        <p>© <?= date('Y') ?> Belottis. Todos os direitos reservados. Desenvolvido por <a
                href="https://fredericomoura.com.br" title="Consultor SEO" target="_blank">Frederico Moura</a></p>

    </div>
    <br>
</div>