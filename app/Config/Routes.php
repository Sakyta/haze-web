<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard','Pages::dashboard');
$routes->post('/login','Login::index');
$routes->get('/login/process','Login::process');
$routes->get('/homepage','Pages::homepage');
$routes->post('/register','Register::index');
$routes->get('/register/process','Register::process');
$routes->get('/about','Pages::about');
$routes->get('/games','Pages::games');
$routes->get('/logout','Login::logout');
$routes->get('/profile','Pages::profile');
$routes->get('/profile/edit','Register::edit_profile');
$routes->get('/profile/edit/process','Register::edit_process');
$routes->get('/library','Pages::library');
$routes->get('/delete','Register::delete');

$routes->setAutoRoute(true);