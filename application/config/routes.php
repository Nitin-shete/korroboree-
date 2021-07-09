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

//admin D_team
$route['admin'] = 'admin/d_team/D_team';
$route['logout'] = 'admin/d_team/D_team/logout';

$route['admin/video_journal'] = 'admin/d_team/D_team/video_journal';
$route['admin/dashboard'] = 'admin/d_team/D_team/dashboard';
$route['adminlogin'] = 'admin/d_team/D_team/adminlogin';
$route['admin/video_create'] = 'admin/d_team/D_team/video_creat';
$route['admin/video_episod'] = 'admin/d_team/D_team/video_episod';
$route['video_journal_add'] = 'admin/d_team/D_team/video_journal_add';



//admin D_user
$route['admin/v5/dashboard'] = 'admin/d_user/D_user/dashboard';
$route['admin/v5/video_journal'] = 'admin/d_user/D_user/video_journal_dashboard';
$route['admin/v5/episode_view'] = 'admin/d_user/D_user/episode_view';
$route['admin/v5/episode_create'] = 'admin/d_user/D_user/episode_create';
$route['admin/v5/episode_update'] = 'admin/d_user/D_user/episode_update';






