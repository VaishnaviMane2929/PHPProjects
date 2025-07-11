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
$route['default_controller'] = 'Admin_Controller';
$route['add-emp'] = 'Admin_Controller/emp_add';
$route['insert-emp'] = 'Admin_Controller/insert_employee';
$route['all-emp'] = 'Admin_Controller/show_employee';
$route['delete_emp/(:num)'] = 'Admin_Controller/delete_employee/$1';
$route['login'] = 'Admin_Controller/login_form';
$route['add-product'] = 'Admin_controller/addProduct';
$route['product-list'] = 'Admin_controller/dis_Product';

$route['upload-photos'] = 'Admin_controller/show_photo_form';
$route['upload-photos-submit'] = 'Admin_controller/upload_photos';

$route['uploaded-images'] = 'Admin_controller/show_uploaded_images';
// $route['delete-photo-ajax'] = 'Admin_controller/delete_photo_ajax';
$route['delete-photo/(:num)'] = 'Admin_controller/delete_photo/$1';


$route['edit-photo/(:num)'] = 'Admin_controller/edit_photo/$1';
$route['update-photo'] = 'Admin_controller/update_photo';
$route['show-uploaded-images'] = 'Admin_controller/show_uploaded_images';
$route['upload-photos'] = 'Admin_controller/show_photo_form';





