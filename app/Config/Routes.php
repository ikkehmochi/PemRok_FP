<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

service('auth')->routes($routes);

// API Routes
$routes->group("api", ["namespace" => "App\Controllers\Api"], function ($routes) {

  // Get
  $routes->get("invalid-access", "AuthController::accessDenied");
  // Post
  $routes->post("register", "AuthController::register");
  // Post
  $routes->post("login", "AuthController::login");
  // Get
  $routes->get("logout", "AuthController::logout", ["filter" => "auth"]);


  $routes->group("administrator", ["namespace" => "App\Controllers\Api"], function($routes) {
    // Post
    $routes->post("register", "AdministratorController::register");
  });

  
  $routes->group("manajer", ["namespace" => "App\Controllers\Api"], function($routes) {
    // Post
    $routes->post("register", "ManajerController::register", ["filter" => "auth"]);
    // Get
    $routes->get("list", "ManajerController::list", ["filter" => "auth"]);
    // Delete
    $routes->delete("delete/(:num)", "ManajerController::deleteManager/$1", ["filter" => "auth"]);
  });

  
  $routes->group("supplier", ["namespace" => "App\Controllers\Api"], function($routes) {
    // Get
    $routes->get("profile", "SupplierController::profile", ["filter" => "auth"]);
    // Get
    $routes->get("list", "SupplierController::list", ["filter" => "auth"]);
    // Get
    $routes->get("single/(:num)", "SupplierController::single/$1", ["filter" => "auth"]);
    // Put
    $routes->put("update", "SupplierController::updateData", ["filter" => "auth"]);
    // Delete
    $routes->delete("delete/(:num)", "SupplierController::deleteSupplier/$1", ["filter" => "auth"]);
  });


  $routes->group("news", ["namespace" => "App\Controllers\Api"], function($routes) {
    // Post
    $routes->post("add", "NewsController::addNews", ["filter" => "auth"]);
    // Get
    $routes->get("list", "NewsController::listNews");
    // Put
    $routes->put("update/(:num)", "NewsController::updateNews/$1", ["filter" => "auth"]);
    // Delete
    $routes->delete("delete/(:num)", "NewsController::deleteNews/$1", ["filter" => "auth"]);
  });
});

// View Routes
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