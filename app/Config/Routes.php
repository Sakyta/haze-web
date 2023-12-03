<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard','Pages::dashboard');
$routes->get('/login','Users::login');
$routes->post('/login/process','Users::loginProcess');
$routes->get('/homepage','Pages::homepage');
$routes->get('/register','Users::register');
$routes->post('/register/process','Users::registerProcess');
$routes->get('/about','Pages::about');
$routes->get('/games/(:any)','Pages::games/$1');
$routes->get('/logout','Users::logout');
$routes->get('/profile','Pages::profile');
$routes->get('/profile/edit','Users::edit_profile');
$routes->post('/profile/edit/process','Users::edit_process');
$routes->get('/library','Pages::library');
$routes->get('/delete','Users::delete');
$routes->get('/cart','Pages::cart');

$routes->setAutoRoute(true);