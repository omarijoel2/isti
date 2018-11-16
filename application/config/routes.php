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
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$route['default_controller'] = 'user/index';
$route['404_override'] = '';

/*admin*/
$route['admin'] = 'user/index';
$route['admin/view'] = 'user/view';
$route['admin/signup'] = 'user/signup';
$route['admin/create_member'] = 'user/create_member';
$route['admin/login'] = 'user/index';
$route['admin/logout'] = 'user/logout';
$route['admin/login/validate_credentials'] = 'user/validate_credentials';

$route['admin/files']='admin_files/index';
$route['admin/files/add']='admin_files/add';
$route['admin/files/do_upload'] = 'admin_files/do_upload';
$route['admin/files/upload/(:any)'] = 'admin_files/upload/$1';


$route['admin/messages']='admin_messages/index';

$route['admin/elements']='admin_elements/index';
$route['admin/elements/add']='admin_elements/add';
$route['admin/elements/delete/(:any)']='admin_elements/delete/$1';
$route['admin/elements/update/(:any)']='admin_elements/update/$1';

$route['admin/events']='admin_events/index';
$route['admin/events/add']='admin_events/add';
$route['admin/events/load']='admin_events/loadEvents';
$route['admin/events/delete/(:any)']='admin_events/delete/$1';
$route['admin/events/update/(:any)']='admin_events/update/$1';


$route['courses/buyer/behavior']='courses/buyer_behavior';
$route['courses/consultative/selling']='courses/consultative_selling';
$route['courses/cross/selling']='courses/cross_selling';
$route['sales/process/skills']='courses/salesprocess_skills';
$route['courses/time/management']='courses/time_management';
$route['courses/communication/style']='courses/communication_style';
$route['courses/customer/satisfaction']='courses/customer_satisfaction';
$route['courses/business/etiquette']='courses/business_etiquette';
$route['courses/presentation/skills']='courses/presentation_skills';
$route['courses/change/management']='courses/change_management';
$route['courses/functional/teams']='courses/functional_teams';
$route['courses/motivating/sales']='courses/motivating_sales';

$route['benefits/value/proposition']='benefits/value_proposition';
$route['benefits/happy/clients']='benefits/happy_clients';

$route['admin/pages']='admin_pages/index';
$route['admin/pages/add']='admin_pages/add';
$route['admin/pages/delete/(:any)']='admin_pages/delete/$1';
$route['admin/pages/update/(:any)']='admin_pages/update/$1';

$route['admin/dashboard']='admin_dashboard/index';
$route['admin/products'] = 'admin_products/index';
$route['admin/products/add'] = 'admin_products/add';
$route['admin/products/update'] = 'admin_products/update';
$route['admin/products/update/(:any)'] = 'admin_products/update/$1';
$route['admin/products/delete/(:any)'] = 'admin_products/delete/$1';
$route['admin/products/(:any)'] = 'admin_products/index/$1'; //$1 = page number

$route['admin/manufacturers'] = 'admin_manufacturers/index';
$route['admin/manufacturers/add'] = 'admin_manufacturers/add';
$route['admin/manufacturers/update'] = 'admin_manufacturers/update';
$route['admin/manufacturers/update/(:any)'] = 'admin_manufacturers/update/$1';
$route['admin/manufacturers/delete/(:any)'] = 'admin_manufacturers/delete/$1';
$route['admin/manufacturers/(:any)'] = 'admin_manufacturers/index/$1'; //$1 = page number



/* End of file routes.php */
/* Location: ./application/config/routes.php */