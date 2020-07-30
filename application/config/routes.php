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
$route['default_controller'] = 'login';
$route['404_override'] = 'pages/page_404';
$route['translate_uri_dashes'] = FALSE;

// Dashboard
$route['dashboard'] = 'dashboard';
$route['dashboard/v2'] = 'dashboard/v2';
$route['dashboard/v3'] = 'dashboard/v3';

// Blank Pages
$route['blank'] = 'blank';

// Forms
$route['form'] = 'form';

// Tables
$route['tables'] = 'tables';
$route['tables/dynamic'] = 'tables/dynamic';

// Pages
$route['403'] = 'pages/page_403';
$route['404'] = 'pages/page_404';
$route['500'] = 'pages/page_500';
$route['pages/plain'] = 'pages/plain_page';
$route['pages/pricing'] = 'pages/pricing_tables';
$route['ecommerce'] = 'pages/ecommerce';

// Profiles
$route['profile'] = 'profile';
$route['profile/contacts'] = 'profile/contacts';

// Projects
$route['project'] = 'project';
$route['project/detail'] = 'project/detail';

// Elements
$route['element'] = 'elements';
$route['element/media'] = 'elements/media';
$route['element/typography'] = 'elements/typography';
$route['element/icons'] = 'elements/icons';
$route['element/glyphicons'] = 'elements/glyphicons';
$route['element/widgets'] = 'elements/widgets';
$route['element/invoice'] = 'elements/invoice';
$route['element/inbox'] = 'elements/inbox';
$route['element/calendar'] = 'elements/calendar';

// Charts
$route['chart'] = 'charts';
$route['chart/v2'] = 'charts/v2';
$route['chart/moris'] = 'charts/moris';
$route['chart/echarts'] = 'charts/echarts';
$route['chart/other'] = 'charts/other';