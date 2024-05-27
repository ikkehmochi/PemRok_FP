<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/tentang', 'Home::tentang');
$routes->get('/users', 'User::index');
$routes->get('/add_user', 'User::add_user');
$routes->get('/edit_user/(:any)', 'User::edit_user/$1');
$routes->get('/delete_user/(:any)', 'User::delete_user/$1');
$routes->post('/proses_add_user', 'User::proses_add_user');
$routes->post('/proses_edit_user', 'User::proses_edit_user');
$routes->get('/DST', 'DST::index');
$routes->get('/remove_DST/(:any)', 'DST::remove_DST/$1');
$routes->get('/berita', 'Berita::index');
$routes->get('/add_berita', 'Berita::add_berita');
$routes->get('/edit_berita/(:any)', 'Berita::edit_berita/$1');
$routes->get('/delete_berita/(:any)', 'Berita::delete_berita/$1');
$routes->post('/proses_add_berita', 'Berita::proses_add_berita');
$routes->post('/proses_edit_berita', 'Berita::proses_edit_berita');