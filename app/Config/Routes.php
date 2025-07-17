<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/', 'Proyek::index');
$routes->get('/proyek', 'Proyek::index');
$routes->get('/proyek/create', 'Proyek::create');
$routes->post('/proyek/store', 'Proyek::store');
$routes->get('/proyek/edit/(:num)', 'Proyek::edit/$1');
$routes->post('/proyek/update/(:num)', 'Proyek::update/$1');
$routes->get('/proyek/delete/(:num)', 'Proyek::delete/$1');