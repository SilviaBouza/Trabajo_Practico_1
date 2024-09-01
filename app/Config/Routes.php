<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Productos::index');
$routes->get('/productos', 'Productos::index');
$routes->get('productos/detalle/(:num)', 'Productos::detalle/$1');
