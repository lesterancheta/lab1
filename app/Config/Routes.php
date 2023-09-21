<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ProductController::index');
$routes->get('product/create', 'ProductController::create');
$routes->post('product/store', 'ProductController::store');
$routes->get('product/edit/(:num)', 'ProductController::edit/$1');
$routes->post('product/update/(:num)', 'ProductController::update/$1');
$routes->get('product/delete/(:num)', 'ProductController::delete/$1');
