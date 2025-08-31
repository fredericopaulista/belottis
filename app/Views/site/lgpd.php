<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belottis - Autorização de Dados</title>
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
            --accent: #E74C3C;
            --light: #ECF0F1;
            --dark: #2C3E50;
            --text: #2C3E50;
            --text-light: #7F8C8D;
            --white: #FFFFFF;
            --success: #27AE60;
        }
        
        /* Overlay do popup */
        .lgpd-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 10000;
            padding: 20px;
            animation: fadeIn 0.3s ease;
        }
        
        /* Popup principal */
        .lgpd-popup {
            background-color: var(--white);
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            animation: slideUp 0.4s ease;
        }
        
        /* Cabeçalho do popup */
        .lgpd-header {
            background: linear-gradient(135deg, var(--primary) 0%, #2C3E50 100%);
            color: var(--white);
            padding: 20px;
            border-radius: 10px 10px 0 0;
            display: flex;
            align-items: center;
        }
        
        .lgpd-header-icon {
            font-size: 24px;
            margin-right: 15px;
        }
        
        .lgpd-header h2 {
            font-size: 1.5rem;
            font-weight: 600;
        }
        
        /* Conteúdo do popup */
        .lgpd-content {
            padding: 25px;
        }
        
        .lgpd-content p {
            color: var(--text-light);
            margin-bottom: 15px;
            line-height: 1.6;
        }
        
        .lgpd-content ul {
            margin: 15px 0;
            padding-left: 20px;
        }
        
        .lgpd-content li {
            color: var(--text-light);
            margin-bottom: 8px;
            line-height: 1.5;
        }
        
        .lgpd-highlight {
            background-color: var(--light);
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
            border-left: 4px solid var(--accent);
        }
        
        /* Opções de consentimento */
        .lgpd-consent-options {
            margin: 20px 0;
        }
        
        .consent-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }
        
        .consent-item input {
            margin-right: 12px;
            margin-top: 3px;
        }
        
        .consent-item label {
            color: var(--text);
            font-weight: 500;
            line-height: 1.4;
        }
        
        .consent-description {
            font-size: 0.9rem;
            color: var(--text-light);
            margin-top: 5px;
            margin-left: 28px;
        }
        
        /* Rodapé do popup */
        .lgpd-footer {
            padding: 20px 25px;
            background-color: var(--light);
            border-radius: 0 0 10px 10px;
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: space-between;
        }
        
        .lgpd-btn {
            padding: 12px 25px;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
            font-size: 1rem;
        }
        
        .lgpd-btn-primary {
            background-color: var(--accent);
            color: var(--white);
        }
        
        .lgpd-btn-primary:hover {
            background-color: #c0392b;
            transform: translateY(-2px);
        }
        
        .lgpd-btn-outline {
            background-color: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }
        
        .lgpd-btn-outline:hover {
            background-color: var(--primary);
            color: var(--white);
        }
        
        .lgpd-btn-secondary {
            background-color: var(--light);
            color: var(--text);
        }
        
        .lgpd-btn-secondary:hover {
            background-color: #dce4e8;
        }
        
        /* Links */
        .lgpd-links {
            margin-top: 20px;
            text-align: center;
        }
        
        .lgpd-links a {
            color: var(--secondary);
            text-decoration: none;
            font-size: 0.9rem;
            margin: 0 10px;
        }
        
        .lgpd-links a:hover {
            text-decoration: underline;
        }
        
        /* Animações */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideUp {
            from { 
                opacity: 0;
                transform: translateY(20px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Responsividade */
        @media (max-width: 768px) {
            .lgpd-popup {
                max-width: 100%;
            }
            
            .lgpd-footer {
                flex-direction: column;
            }
            
            .lgpd-btn {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- Conteúdo principal da página -->
    <div style="padding: 20px; max-width: 800px; margin: 0 auto;">
        <h1>Site da Belottis</h1>
        <p>Este é o conteúdo principal do site. O popup de LGPD aparecerá automaticamente ao carregar a página, a menos que você já tenha feito sua escolha anteriormente.</p>
        
        <!-- Botão para reabrir o popup (para testes) -->
        <button onclick="openLGPDPopup()" style="margin-top: 20px; padding: 10px 20px; background-color: #2C3E50; color: white; border: none; border-radius: 5px; cursor: pointer;">
            Abrir Popup LGPD (Teste)
        </button>
        
        <!-- Botão para resetar as preferências (para testes) -->
        <button onclick="resetPreferences()" style="margin-top: 10px; padding: 10px 20px; background-color: #E74C3C; color: white; border: none; border-radius: 5px; cursor: pointer;">
            Resetar Preferências (Teste)
        </button>
    </div>

    <!-- Popup de Autorização LGPD -->
    <div class="lgpd-overlay" id="lgpdOverlay">
        <div class="lgpd-popup">
            <div class="lgpd-header">
                <div class="lgpd-header-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h2>Privacidade e Proteção de Dados</h2>
            </div>
            
            <div class="lgpd-content">
                <p>A Belottis valoriza sua privacidade e está comprometida com a proteção de seus dados pessoais. Solicitamos sua autorização para coletar e processar suas informações de acordo com a Lei Geral de Proteção de Dados (LGPD).</p>
                
                <div class="lgpd-highlight">
                    <p><strong>Por que coletamos seus dados?</strong> Utilizamos suas informações para:</p>
                    <ul>
                        <li>Otimizar sua experiência em nosso site</li>
                        <li>Processar candidaturas e recrutamento</li>
                        <li>Enviar comunicações relevantes sobre vagas</li>
                        <li>Melhorar nossos serviços</li>
                    </ul>
                </div>
                
                <p>Você pode alterar suas preferências a qualquer momento através das configurações de privacidade.</p>
                
                <div class="lgpd-consent-options">
                    <div class="consent-item">
                        <input type="checkbox" id="consent-necessary" checked disabled>
                        <label for="consent-necessary">Cookies necessários</label>
                        <div class="consent-description">Essenciais para o funcionamento básico do site. Não podem ser desativados.</div>
                    </div>
                    
                    <div class="consent-item">
                        <input type="checkbox" id="consent-analytics">
                        <label for="consent-analytics">Cookies analíticos</label>
                        <div class="consent-description">Nos ajudam a entender como você interage com nosso site.</div>
                    </div>
                    
                    <div class="consent-item">
                        <input type="checkbox" id="consent-marketing">
                        <label for="consent-marketing">Cookies de marketing</label>
                        <div class="consent-description">Utilizados para personalizar anúncios e conteúdo relevantes.</div>
                    </div>
                    
                    <div class="consent-item">
                        <input type="checkbox" id="consent-preferences">
                        <label for="consent-preferences">Preferências</label>
                        <div class="consent-description">Permitem lembrar suas configurações e preferências.</div>
                    </div>
                </div>
            </div>
            
            <div class="lgpd-footer">
                <button class="lgpd-btn lgpd-btn-secondary" onclick="openPrivacySettings()">
                    Configurações Avançadas
                </button>
                <div>
                    <button class="lgpd-btn lgpd-btn-outline" onclick="rejectAll()">
                        Rejeitar Tudo
                    </button>
                    <button class="lgpd-btn lgpd-btn-primary" onclick="acceptSelected()">
                        Salvar Preferências
                    </button>
                </div>
            </div>
            
            <div class="lgpd-links">
                <a href="#" onclick="openPrivacyPolicy()">Política de Privacidade</a>
                <a href="#" onclick="openTerms()">Termos de Uso</a>
            </div>
        </div>
    </div>

    <script>
        // Verificar se o popup já foi aceito anteriormente
        function checkLGPDAcceptance() {
            const lgpdConsent = localStorage.getItem('belottisLGPD');
            return lgpdConsent ? JSON.parse(lgpdConsent) : null;
        }
        
        // Função para abrir o popup LGPD
        function openLGPDPopup() {
            document.getElementById('lgpdOverlay').style.display = 'flex';
            document.body.style.overflow = 'hidden'; // Impede scroll da página principal
        }
        
        // Função para fechar o popup LGPD
        function closeLGPDPopup() {
            document.getElementById('lgpdOverlay').style.display = 'none';
            document.body.style.overflow = 'auto'; // Restaura scroll da página principal
        }
        
        // Função para aceitar as seleções atuais
        function acceptSelected() {
            const analytics = document.getElementById('consent-analytics').checked;
            const marketing = document.getElementById('consent-marketing').checked;
            const preferences = document.getElementById('consent-preferences').checked;
            
            // Salvar as preferências do usuário
            const userConsent = {
                analytics: analytics,
                marketing: marketing,
                preferences: preferences,
                timestamp: new Date().getTime()
            };
            
            localStorage.setItem('belottisLGPD', JSON.stringify(userConsent));
            
            console.log('Preferências LGPD salvas:', userConsent);
            
            // Aplicar as preferências do usuário
            applyUserPreferences(userConsent);
            
            // Fechar o popup
            closeLGPDPopup();
        }
        
        // Função para aplicar as preferências do usuário
        function applyUserPreferences(consent) {
            // Aqui você implementaria a lógica real para aplicar as preferências
            // Por exemplo, inicializar ou não certos tipos de cookies e scripts
            
            if (consent.analytics) {
                console.log('Inicializando cookies analíticos...');
                // initializeAnalytics();
            }
            
            if (consent.marketing) {
                console.log('Inicializando cookies de marketing...');
                // initializeMarketing();
            }
            
            if (consent.preferences) {
                console.log('Salvando preferências do usuário...');
                // saveUserPreferences();
            }
            
            // Mensagem de confirmação
            showNotification('Suas preferências de privacidade foram salvas!');
        }
        
        // Função para rejeitar todos os cookies não essenciais
        function rejectAll() {
            document.getElementById('consent-analytics').checked = false;
            document.getElementById('consent-marketing').checked = false;
            document.getElementById('consent-preferences').checked = false;
            
            // Salvar as preferências do usuário (tudo rejeitado)
            const userConsent = {
                analytics: false,
                marketing: false,
                preferences: false,
                timestamp: new Date().getTime()
            };
            
            localStorage.setItem('belottisLGPD', JSON.stringify(userConsent));
            
            console.log('Todos os cookies opcionais rejeitados');
            
            // Aplicar as preferências do usuário
            applyUserPreferences(userConsent);
            
            // Fechar o popup
            closeLGPDPopup();
        }
        
        // Função para mostrar notificação
        function showNotification(message) {
            // Em uma implementação real, você usaria um sistema de notificação mais sofisticado
            alert(message);
        }
        
        // Função para abrir configurações avançadas
        function openPrivacySettings() {
            alert('Configurações avançadas de privacidade serão implementadas aqui.');
        }
        
        // Função para abrir política de privacidade
        function openPrivacyPolicy() {
            // Em uma implementação real, isso abriria a página de políticas
            window.open('#politica-de-privacidade', '_blank');
        }
        
        // Função para abrir termos de uso
        function openTerms() {
            // Em uma implementação real, isso abriria a página de termos
            window.open('#termos-de-uso', '_blank');
        }
        
        // Função para resetar preferências (apenas para testes)
        function resetPreferences() {
            localStorage.removeItem('belottisLGPD');
            showNotification('Preferências resetadas. O popup será exibido na próxima vez que você carregar a página.');
        }
        
        // Fechar o popup ao clicar fora do conteúdo
        document.getElementById('lgpdOverlay').addEventListener('click', function(e) {
            if (e.target === this) {
                closeLGPDPopup();
            }
        });
        
        // Inicializar quando a página carregar
        document.addEventListener('DOMContentLoaded', function() {
            const userConsent = checkLGPDAcceptance();
            
            if (userConsent) {
                // Usuário já fez sua escolha, aplicar preferências
                console.log('Preferências LGPD já salvas:', userConsent);
                applyUserPreferences(userConsent);
                
                // Não mostrar o popup
                document.getElementById('lgpdOverlay').style.display = 'none';
            } else {
                // Usuário ainda não fez sua escolha, mostrar popup
                console.log('Exibindo popup LGPD pela primeira vez');
                openLGPDPopup();
                
                // Pré-selecionar algumas opções como padrão
                document.getElementById('consent-analytics').checked = true;
                document.getElementById('consent-preferences').checked = true;
            }
        });
    </script>
</body>
</html>