<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('video', 'Home::video');

// routegroup download
$routes->group('download', function ($routes) {
    $routes->get('video/(:any)', 'Download::video/$1');
    $routes->get('music/(:any)', 'Download::music/$1');
});
