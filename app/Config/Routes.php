<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Dashboard');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

// Set Config Modules
$router = service('router');
$module = $router->controllerName();
$routes->get('/','\App\Modules\\'.$module.'\Controllers\\'.$module.'::index');

$dir =  scandir('app/Modules/');
foreach ($dir as $module) 
{
	if ($module == '.' || $module == '..') {
		continue;
	}
	
	$file = scandir('app/Modules/' . $module);
	if (in_array('Routes.php', $file)) {
		include 'app/Modules/' . $module . '/Routes.php';
	}
}

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Root
$routes->get('/', 'Home::index');
$routes->get('/lang/{locale}', 'SelectLanguage::index');

// Add Routes Modules
// Admin
$routes->group('admin', ['namespace' => '\App\Modules\Admin\Controllers'], function ($routes) {
	$routes->add('', 'Admin::index');
	$routes->add('login', 'Admin::login');
});

// Dashboard
$routes->group('', ['namespace' => '\App\Modules\Dashboard\Controllers'], function ($routes) {
	$routes->add('', 'Dashboard::index');
	$routes->add('email', 'Dashboard::send_email');
});

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
