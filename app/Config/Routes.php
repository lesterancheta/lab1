<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ProductController::index');
$routes->get('products/create', 'ProductController::create');
$routes->post('producs/store', 'ProductController::store');
$routes->get('products/edit/(:num)', 'ProductController::store');
