<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'UserController::index');
$routes->post('/auth', 'UserController::auth');
$routes->get('/logout', 'UserController::logout');
$routes->get('/new', 'UserController::blank');
