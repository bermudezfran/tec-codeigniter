<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Main/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['user'] = 'UserController/get_user';

// Rutas públicas para la visualización de eventos
// $route['default_controller'] = 'EventController/indexApp';  // GET y POST para '/'
$route['events'] = 'EventController/index';                // GET: Listar eventos

// Rutas protegidas para la administración
$route['events/create'] = 'EventController/create';        // GET: Formulario de creación
$route['events/store'] = 'EventController/store';          // POST: Guardar evento
$route['events/edit/(:num)'] = 'EventController/edit/$1';  // GET: Formulario de edición
$route['events/update/(:num)'] = 'EventController/update/$1'; // POST: Actualizar evento
$route['events/delete/(:num)'] = 'EventController/destroy/$1'; // POST: Eliminar evento
// Reordenamiento con flechas
// Reordenamiento de eventos
$route['events/move_up/(:num)']   = 'EventController/move_up/$1';
$route['events/move_down/(:num)'] = 'EventController/move_down/$1';



$route['auth/login'] = 'AuthController/login';
$route['auth/logout'] = 'AuthController/logout';
