<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'SecurityController::index');
$routes->post('/submit', 'SecurityController::submit');
$routes->get('/upload-form', 'UploadController::index');
$routes->post('/upload', 'UploadController::upload');
$routes->get('/send-email', 'EmailController::send');