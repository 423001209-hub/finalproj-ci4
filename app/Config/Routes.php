<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'SecurityController::index');
$routes->post('/submit', 'SecurityController::submit');
