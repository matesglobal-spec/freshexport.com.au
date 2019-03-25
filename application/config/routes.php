<?php defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'home';
$route['single'] = 'home/single';
$route['search/(:any)/(:number)/(:number)/(:number)/(:number)'] = 'home/search/$1/$2/$3/$4/$5';
$route['export'] = 'home/export';
$route['blog'] = 'home/blog';
$route['contact'] = 'home/contact';
$route['product'] = 'home/product';
$route['regular_price'] = 'home/regular_price';
$route['bidding_price'] = 'home/bidding_price';
$route['special_price'] = 'home/special_price';
$route['myaccount'] = 'home/myaccount';
$route['single_blog/(:any)'] = 'home/single_blog/$1';
$route['terms_condition'] = 'home/terms_condition';
$route['retrun_policy'] = 'home/retrun_policy';
$route['privacy'] = 'home/privacy';
$route['compare'] = 'home/compare';
$route['review'] = 'home/review';
$route['vendor'] = 'home/vendor';

$route['categories/(:number)'] = 'home/categories/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
