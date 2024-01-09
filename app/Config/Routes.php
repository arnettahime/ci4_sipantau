<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('user/anak/tambah', 'AnakController::tambah');
$routes->post('user/anak/simpan', 'AnakController::simpan');
$routes->get('formats', 'FormATSController::index');
$routes->get('formats', 'Home::formats');
$routes->get('tabel_ats','Home::tabel_ats');
// $routes->post('formats/processForm', 'FormATSController::processForm');
