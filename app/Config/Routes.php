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
$routes->get('/', 'Home::index');
$routes->add('home/login', 'Home::login');
$routes->add('home/logout', 'Home::logout');
$routes->add('dashboard', 'Dashboard::index');
$routes->add('mahasiswa', 'Mahasiswa::index');
$routes->add('mahasiswa/data_mahasiswa_json', 'Mahasiswa::data_mahasiswa_json');
$routes->add('mahasiswa/add', 'Mahasiswa::add');
$routes->add('mahasiswa/edit/(:num)', 'Mahasiswa::edit/$1');
$routes->add('mahasiswa/delete/(:num)', 'Mahasiswa::delete/$1');
$routes->add('mahasiswa/pro_add', 'Mahasiswa::pro_add');
$routes->add('mahasiswa/pro_edit', 'Mahasiswa::pro_edit');

$routes->add('grafik_gender', 'Grafik_gender::index');
$routes->add('grafik_gender/grafik_gender_json', 'Grafik_gender::grafik_gender_json');

$routes->add('grafik_gender_1', 'Grafik_gender_1::index');
$routes->add('grafik_gender_1/grafik_gender_1_json', 'Grafik_gender_1::grafik_gender_1_json');

$routes->add('grafik_agama', 'Grafik_agama::index');
$routes->add('grafik_agama/grafik_agama_json', 'Grafik_agama::grafik_agama_json');

$routes->add('grafik_agama_1', 'Grafik_agama_1::index');
$routes->add('grafik_agama_1/grafik_agama_1_json', 'Grafik_agama::grafik_agama_1_json');

$routes->add('grafik_provinsi', 'Grafik_provinsi::index');
$routes->add('grafik_provinsi/grafik_provinsi_json', 'Grafik_provinsi::grafik_provinsi_json');

$routes->add('grafik_provinsi_1', 'Grafik_provinsi_1::index');
$routes->add('grafik_provinsi_1/grafik_provinsi_1_json', 'Grafik_provinsi_1::grafik_provinsi_1_json');

$routes->add('grafik_prodi', 'Grafik_prodi::index');
$routes->add('grafik_prodi/grafik_prodi_json', 'Grafik_prodi::grafik_prodi_json');

$routes->add('grafik_prodi_1', 'Grafik_prodi_1::index');
$routes->add('grafik_prodi_1/grafik_prodi_1_json', 'Grafik_prodi_1::grafik_prodi_1_json');

$routes->add('grafik_angkatan', 'Grafik_angkatan::index');
$routes->add('grafik_angkatan/grafik_angkatan_json', 'Grafik_angkatan::grafik_angkatan_json');

$routes->add('grafik_angkatan_1', 'Grafik_angkatan_1::index');
$routes->add('grafik_angkatan_1/grafik_angkatan_1_json', 'Grafik_angkatan_1::grafik_angkatan_1_json');
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
