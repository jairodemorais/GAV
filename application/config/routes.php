<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|  example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|  http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|  $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|  $route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home";
$route['inicio'] = 'home';
$route['registro'] = 'register';
$route['perfil'] = "register/get";
$route['buscar/todos'] = "artist/index";
$route['buscar/todos/:num'] = "artist/index";
$route['buscar/([A-Z | -])/:num'] = "artist/find/$1";
$route['buscar/:any/(:num)/:num'] = "artist/find_by_category/$1";
$route['newsboard/(:num)'] = "newsboard/index";
$route['artista/:any/(:num)'] = "artist/get/$1";
$route['ampliar/(:num)'] = "ampliar/index/$1";
$route['register/updateOrCreate'] = 'register/updateOrCreate';
$route['noticia/(:num)'] = "newsboard/get/$1";
$route['habilitar/(:num)'] = 'register/enable/$1';
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */