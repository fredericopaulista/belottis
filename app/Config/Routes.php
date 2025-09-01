<?php

use App\Controllers\CurriculoController;
use App\Controllers\HomeController;
use App\Controllers\SiteController;
use App\Controllers\VagaController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Rotas públicas do site
$routes->get('/', [SiteController::class, 'index'], ['as' => 'site.home']);
$routes->get('/cadastre-se', [SiteController::class, 'cadastre'], ['as' => 'site.cadastre']);
$routes->post('/cadastre-se', [CurriculoController::class, 'enviarCurriculo'], ['as' => 'site.enviarCurriculo']);
$routes->get('/contato', [SiteController::class, 'contato'], ['as' => 'site.contato']);
$routes->get('/vagas/buscar', [SiteController::class, 'buscaVagas'], ['as' => 'site.buscaVagas']);
$routes->get('vaga/(:segment)', ['SiteController::detalhesVaga'], ['as' => 'site.detalhesVaga']);
$routes->post('/contato', [SiteController::class, 'enviaEmail'], ['as' => 'site.enviaEmail']);
$routes->get('/quem-somos', [SiteController::class, 'sobre'], ['as' => 'site.sobre']);
$routes->get('/servicos', [SiteController::class, 'servicos'], ['as' => 'site.servicos']);
$routes->get('/vagas-de-emprego', [SiteController::class, 'todasVagas'], ['as' => 'site.vagas']);
$routes->get('/politicas-de-privacidade', [SiteController::class, 'politicas'], ['as' => 'site.politicas']);
$routes->get('/termos-de-uso', [SiteController::class, 'termos'], ['as' => 'site.termos']);
$routes->get('/lgpd', [SiteController::class, 'lgpd'], ['as' => 'site.lgpd']);

// Rotas públicas de vagas


// Rotas de autenticação do Shield
service('auth')->routes($routes);

// Rotas administrativas (protegidas por auth)


// Rotas administrativas (protegidas por auth)
$routes->group('admin', ['filter' => 'auth'], function($routes) {
    // Dashboard do admin
    $routes->get('dashboard', 'AdminController::index', ['as' => 'admin.dashboard']);
    
    // Rotas de vagas administrativas
    $routes->group('vagas', function($routes) {
        $routes->get('/', 'VagaController::index', ['as' => 'admin.vagas.index']);
        $routes->get('cadastrar', 'VagaController::new', ['as' => 'admin.vagas.new']);
        $routes->post('cadastrar', 'VagaController::create', ['as' => 'admin.vagas.create']);
        $routes->get('editar/(:num)', 'VagaController::edit/$1', ['as' => 'admin.vagas.edit']);
        $routes->put('atualizar/(:num)', 'VagaController::update/$1', ['as' => 'admin.vagas.update']);
        $routes->post('toggle-status/(:num)', 'VagaController::toggleStatus/$1', ['as' => 'admin.vagas.toggleStatus']);
        $routes->get('apagar/(:num)', 'VagaController::delete/$1', ['as' => 'admin.vagas.delete']);
        $routes->post('apagar/(:num)', 'VagaController::destroy/$1', ['as' => 'admin.vagas.destroy']);
    });
    
    // Rotas de candidatos administrativas
    $routes->group('candidatos', function($routes) {
        $routes->get('/', 'CandidatosController::index', ['as' => 'admin.candidatos.index']);
        $routes->get('cadastrar', 'CandidatosController::new', ['as' => 'admin.candidatos.new']);
        $routes->post('cadastrar', 'CandidatosController::store', ['as' => 'admin.candidatos.store']);
        $routes->get('editar/(:num)', 'Admin\CandidatosController::edit/$1', ['as' => 'admin.candidatos.edit']);
        $routes->get('visualizar/(:num)', 'CandidatosController::visualizar/$1', ['as' => 'admin.candidatos.show']);
        $routes->post('atualizar/(:num)', 'Admin\CandidatosController::update/$1', ['as' => 'admin.candidatos.update']);
        $routes->post('atualizar-status/(:num)', 'CandidatosController::atualizarStatus/$1', ['as' => 'admin.candidatos.atualizarStatus']);
        $routes->get('download/(:num)', 'CandidatosController::downloadCurriculo/$1', ['as' => 'admin.candidatos.download']);
        $routes->get('excluir/(:num)', 'CandidatosController::excluir/$1', ['as' => 'admin.candidatos.destroy']);
    });
});