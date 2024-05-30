<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->group('', ['filter' => ['session', \App\Filters\AccessFilter::class]], static function ($routes) {
    $routes->get('/', 'MainController::index');
});

$routes->setAutoRoute(true);

service('auth')->routes($routes);
