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

$route['default_controller'] = "welcome";
$route['404_override'] = '';

/*Order index*/
$route['request/kaigisho-dt'] = "request/index";
$route['request/kaigisho-dt/order'] = "request/index";

/*Order-L*/
$route['request/kaigisho-dt/order_l/input'] = "request/inputL";
$route['request/kaigisho-dt/order_l/confirm'] = "request/confirmL";
$route['request/kaigisho-dt/order_l/complete'] = "request/completeL";

/*Order-Y*/
$route['request/kaigisho-dt/order_y/input'] = "request/inputY";
$route['request/kaigisho-dt/order_y/confirm'] = "request/confirmY";
$route['request/kaigisho-dt/order_y/complete'] = "request/completeY";

/*Order-C*/
$route['request/kaigisho-dt/order_c/input'] = "request/inputC";
$route['request/kaigisho-dt/order_c/confirm'] = "request/confirmC";
$route['request/kaigisho-dt/order_c/complete'] = "request/completeC";

/*Order-F*/
$route['request/kaigisho-dt/order_f/input'] = "request/inputF";
$route['request/kaigisho-dt/order_f/confirm'] = "request/confirmF";
$route['request/kaigisho-dt/order_f/complete'] = "request/completeF";

/* End of file routes.php */
/* Location: ./application/config/routes.php */