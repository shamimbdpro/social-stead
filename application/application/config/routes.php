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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['all-services'] 				= "AllService/all_service";
$route['faq'] 						= "Faq/faqs";
$route['contact-us'] 				= "Contact/contacts";


$route['CartDadd'] 	       = "CartD/CartDload";
$route['social-admin'] =   "Admin/Login";
$route['admin/dashboard'] 			= 	"Dashboard/admin_dashboard";
$route['login/check']   			=   "Admin/Login/login_user_data_check";
$route['profile'] 					= 	"Admin/Users/profile";
$route['edit/profile'] 				= 	"Admin/Users/edit_profile";
$route['profile/update'] 			= 	"Admin/Users/edit_profile_user_data_check";
$route['profile/image/change'] 		= 	"Admin/Users/profile_image_upload";
$route['admin/dashboard'] 			= 	"Dashboard/admin_dashboard";
$route['admin/add'] 				= 	"Admin/Users/add_user";
$route['add/user/check'] 			= 	"Admin/Users/add_user_data_check";
$route['admin/manage'] 				= 	"Admin/Users/manage_user";
$route['admin/delete/(:any)'] 		= 	"Admin/Users/user_delete/$1";
$route['edit/admin/(:any)'] 		= 	"Admin/Users/edit_user/$1";
$route['update/admin/info/(:any)'] 	= 	"Admin/Users/edit_user_data_check/$1";
$route['Admin/logout']  			= 	"Admin/Login/logout";
$route['products'] 					= 	"Admin/Products/add_product";
$route['check/service'] 			= 	"AllService/service_add";
$route['service/(:any)'] 			= 	"AllService/service_datails/$1";


$route['check/service_type'] 	    = 	"Admin/Products/aservice_types";
$route['service-pack/(:any)'] 	 = 	"AllService/service_packag/$1";
$route['service-packs'] 			    = 	"Admin/Products/aservice_pack";
$route['service-packs/manage'] 		= 	"Admin/Products/aservice_pack_manage";

$route['check/service_pack'] 	     = 	"Admin/Products/aservice_packs";


$route['manage/products'] 			= 	"Admin/Products/manage_product";

$route['publish/service/(:any)'] 	= 	"Admin/Products/publish/$1";
$route['unpublish/service/(:any)'] 	= 	"Admin/Products/unpublish/$1";
$route['delete/service/(:any)'] 	= 	"AllService/service_delet/$1";
$route['service-type'] 			    = 	"Admin/Products/aservice_type";
$route['service-type/manage'] 	   = 	"Admin/Products/aservice_typem";

$route['publish/service-type/(:any)'] 	= 	"Admin/Products/type_publish/$1";
$route['unpublish/service-type/(:any)'] = 	"Admin/Products/type_unpublish/$1";
$route['delete/service-type/(:any)'] 	= 	"Admin/Products/service_type_delet/$1";

$route['logo'] 						= 	"Admin/Setting/store_logo";
$route['logo/check'] 				= 	"Admin/Setting/company_logo_check";

//store setting  route
$route['storesetting'] 				= 	"Admin/Setting/store_setting";
$route['storesetting/view'] 		= 	"Admin/Setting/store_view";
$route['insert/setting'] 			= 	"Admin/Setting/store_setting_check";


$route['order'] 					= 	"Admin/Orders/order";


$route['product/(:any)'] 	= "AllService/addCart/$1";

$route['addtocart'] 					= 	"CartD/cartddd";

$route['coustomer/contact'] 				= "Contact/customer_contact";


$route['cart'] 				= "CartD/carpageload";
$route['buy/(:any)'] 				= "Productss/buy/$1";

$route['serpack/publishe/(:any)'] 		= "Admin/Products/serpublish/$1";
$route['serpack/unpublish/(:any)'] 		= "Admin/Products/serunpublish/$1";

$route['delete/spack/(:any)'] 		= "Admin/Products/packdelet/$1";



$route['cart/remove/(:any)'] 		= "CartD/remove/$1";

$route['update/cart'] 		= "CartD/update";


$route['payment'] 		= "Admin/Setting/payment_method_integration";

$route['check/payment'] 		= "Admin/Setting/payment";


$route['order/details/(:any)'] 		= "Admin/Orders/order_details/$1";

$route['message'] 		        = "Admin/Setting/message";
$route['view/message/(:any)'] 		= "Admin/Setting/message_view_details/$1";








$route['payment/success.php'] 		= "Paypal/ipn";
$route['payment/cancel.php'] 		= "Paypal/cancel";


$route['order/confirm'] = "Checkout/checkou_data";
$route['confirm'] 		= "Checkout/confirm";
