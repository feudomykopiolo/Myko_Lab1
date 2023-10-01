<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->post('/main', 'Home::index');
$routes->get('/', 'UserController::index');


// log in form(start)
$routes->get('/fPass', 'AdminController::fPass');
$routes->get('/signup', 'UserController::signup/$id');
$routes->get('/adminlogin', 'UserController::adminlogin/$id');
// log in form(end)



$routes->get('/adminDash', 'AdminController::adminDash');
$routes->get('/table_data', 'AdminController::table');
$routes->get('/table_data/(:any)', 'AdminController::table_data/$1');

// actions performed
$routes->get('/insert', 'AdminController::insert');
$routes->post('/save', 'AdminController::save/$id');
$routes->post('/update', 'AdminController::update/$id');
$routes->get('/delete/(:any)', 'AdminController::delete/$1');
$routes->get('/edit/(:any)', 'AdminController::edit/$1'); 

// websites designs
$routes->get('/about', 'UserController::about');
$routes->get('/contact', 'UserController::contact');
$routes->get('/purchase1', 'UserController::purchase1');
$routes->get('/purchase2', 'UserController::purchase2');
$routes->get('/purchase3', 'UserController::purchase3');
$routes->get('/salates', 'UserController::salates');
$routes->get('/drinks', 'UserController::drinks');
$routes->get('/rice', 'UserController::rice');
$routes->get('/chicken', 'UserController::chicken');
$routes->get('/menu_1', 'UserController::menu_1');
$routes->get('/menu_2', 'UserController::menu_2');
$routes->get('/menu_3', 'UserController::menu_3');
$routes->get('/order', 'UserController::order');













