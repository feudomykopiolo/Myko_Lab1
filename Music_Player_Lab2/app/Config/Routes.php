<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/main', 'MusicController::index');
$routes->get('/playlist', 'MusicController::add');
// $routes->get('/playlist', 'MusicController::playlist');
