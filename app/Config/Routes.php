<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
$routes->get('/', 'Home::index');

$routes->get('/home','Homeshop::index',['as'=>'HomePage']);
// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->group('', ['filter' => 'UserFilter'], function($routes)
{
   
    $routes->get('/dashboard','Dashboard::index',['as' => 'dashboard']);
    $routes->get('/create','Dashboard::create',['as' => 'create']);
    $routes->post('/save','Dashboard::save',['as' => 'save']);
    $routes->get('/delete/(:num)','Dashboard::delete/$1',['as' => 'delete']);
    $routes->get('/edit/(:num)','Dashboard::edit/$1',['as' => 'edit']);
    $routes->post('/update/(:num)','Dashboard::update/$1',['as' => 'update']);
    $routes->get('/logout','Login::Logout',['as' => 'Logout']);
    $routes->get('/manage','Homeshop::ManagePage',['as'=>'ManagePage']);
    $routes->post('/manage/create','Homeshop::CreateItemClick',['as'=>'CreateItemClick']);
});


$routes->group('', ['filter' => 'GuestFilter'], function($routes)
{
    $routes->get('/login','Login::LoginView',['as'=>'LoginPage']);
    $routes->post('/login/go','Login::LoginClick',['as'=>'LoginClick']);
    $routes->get('/register','Login::RegisterPage',['as'=>'RegisterPage']);
    $routes->post('/register/create','Login::RegisterClick',['as'=>'RegisterClick']);

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
