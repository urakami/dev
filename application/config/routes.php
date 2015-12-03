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

$route['default_controller'] = "request";
$route['404_override'] = '';

/*Order index*/
$route['kaigisho-dt'] = "request/index";
//$route['request/kaigisho-dt/order'] = "request/index";
$route['back_home'] = "request/backHome";

/*Order-L*/
$route['order_l/input'] = "request/inputL";
$route['order_l/confirm'] = "request/confirmL";
$route['order_l/complete'] = "request/completeL";

/*Order-Y*/
$route['order_y/input'] = "request/inputY";
$route['order_y/confirm'] = "request/confirmY";
$route['order_y/complete'] = "request/completeY";

/*Order-C*/
$route['order_c/input'] = "request/inputC";
$route['order_c/confirm'] = "request/confirmC";
$route['order_c/complete'] = "request/completeC";

/*Order-F*/
$route['order_f/input'] = "request/inputF";
$route['order_f/confirm'] = "request/confirmF";
$route['order_f/complete'] = "request/completeF";

/* End of file routes.php */
/* Location: ./application/config/routes.php */
