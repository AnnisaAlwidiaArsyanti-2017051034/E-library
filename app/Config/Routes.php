<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Login::index');
$routes->get('/login', 'Login::index');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/buku', 'BukuController::index');
$routes->get('/createBuku', 'BukuController::create');
$routes->post('/storeBuku', 'BukuController::store');
$routes->get('/editBuku/(:num)', 'BukuController::edit/$1');
$routes->post('/updateBuku/(:num)', 'BukuController::update/$1');
$routes->post('/deleteBuku/(:num)', 'BukuController::delete/$1');
$routes->get('/kategori', 'KategoriController::index');
$routes->get('/createKategori', 'KategoriController::create');
$routes->post('/storeKategori', 'KategoriController::store');
$routes->get('/editKategori/(:num)', 'KategoriController::edit/$1');
$routes->post('/updateKategori/(:num)', 'KategoriController::update/$1');
$routes->post('/deleteKategori/(:num)', 'KategoriController::delete/$1');
$routes->get('/penulis', 'PenulisController::index');
$routes->get('/createPenulis', 'PenulisController::create');
$routes->post('/storePenulis', 'PenulisController::store');
$routes->get('/editPenulis/(:num)', 'PenulisController::edit/$1');
$routes->post('/updatePenulis/(:num)', 'PenulisController::update/$1');
$routes->post('/deletePenulis/(:num)', 'PenulisController::delete/$1');
$routes->get('/penerbit', 'PenerbitController::index');
$routes->get('/createPenerbit', 'PenerbitController::create');
$routes->post('/storePenerbit', 'PenerbitController::store');
$routes->get('/editPenerbit/(:num)', 'PenerbitController::edit/$1');
$routes->post('/updatePenerbit/(:num)', 'PenerbitController::update/$1');
$routes->post('/deletePenerbit/(:num)', 'PenerbitController::delete/$1');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
