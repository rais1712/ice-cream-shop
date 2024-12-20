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
$routes->setDefaultController('Pages');
$routes->setDefaultMethod('loginPage');
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
$routes->get('/', 'Pages::loginPage');
$routes->post('/', 'Auth::index');
$routes->get('/about', 'Pages::aboutPage');
$routes->get('/contact', 'Pages::contactPage');

$routes->get('/logout', 'Auth::logout');

$routes->get('/register', 'Pages::registerPage');
$routes->post('/register', 'Auth::register');

$routes->get('/home', 'Pages::homePage');

$routes->get('/order', 'Pages::orderPage');
$routes->get('/order/(:num)', 'Order::createOrder/$1');
$routes->post('/order/confirm/(:num)', 'Order::confirmOrder/$1');

$routes->get('/product', 'IceCream::displayProduct');
$routes->get('/product/add', 'IceCream::addProduct');
$routes->post('/product/save', 'IceCream::saveProduct');
$routes->get('/product/edit/(:num)', 'IceCream::editProduct/$1');
$routes->post('/product/edit/(:num)', 'IceCream::updateProduct/$1');
$routes->get('/product/delete/(:num)', 'IceCream::deleteProduct/$1');

$routes->get('/transaction', 'Transaction::displayTransaction');
$routes->get('/transaction/add', 'Transaction::addTransaction');
$routes->post('/transaction/save', 'Transaction::saveTransaction');
$routes->get('/transaction/edit/(:num)', 'Transaction::editTransaction/$1');
$routes->post('/transaction/edit/(:num)', 'Transaction::updateTransaction/$1');
$routes->get('/transaction/delete/(:num)', 'Transaction::deleteTransaction/$1');

$routes->get('/pelanggan', 'Pelanggan::displayPelanggan');
$routes->get('/pelanggan/add', 'Pelanggan::addPelanggan');
$routes->post('/pelanggan/save', 'Pelanggan::savePelanggan');
$routes->get('/pelanggan/edit/(:num)', 'Pelanggan::editPelanggan/$1');
$routes->post('/pelanggan/edit/(:num)', 'Pelanggan::updatePelanggan/$1');
$routes->get('/pelanggan/delete/(:num)', 'Pelanggan::deletePelanggan/$1');
$routes->get('/pelanggan/admin/(:any)', 'Pelanggan::transformToAdmin/$1');

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
