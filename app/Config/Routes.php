<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/halodunia', 'Page::halodunia');
$routes->match(['get', 'post'], 'form', 'FormController::form');
$routes->post('process-form', 'FormController::process_form');
$routes->get('/latihanview', 'HelloWorld::index');
$routes->get('layouting', 'LayoutingController::layouting');
$routes->get('/', 'Pages::profile');
$routes->get('/skills', 'Pages::profile');
$routes->get('/crud', 'Crud::index');
$routes->match(['get', 'post'], 'crud/tambah', 'Crud::tambah'); // ← ini penting
$routes->get('crud/edit', 'Crud::edit');
$routes->post('crud/update', 'Crud::update'); // ← kalau form edit pakai POST
$routes->get('crud/hapus/(:segment)', 'Crud::hapus/$1'); // ← tambahkan segment untuk parameter
$routes->get('crud/edit/(:segment)', 'Crud::edit/$1');
$routes->post('crud/editan', 'Crud::editan');
$routes->get('crud/delete/(:segment)', 'Crud::delete/$1');
$routes->get('/crud/tambah', 'Crud::tambah'); // tampilkan form tambah
$routes->post('/crud/simpan', 'Crud::simpan'); // proses simpan data