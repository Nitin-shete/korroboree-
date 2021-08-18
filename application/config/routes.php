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
$route['admin/v5/video_save'] = 'admin/d_user/D_user/video_segment_save';
$route['admin/v5/video_segment_delete'] ='admin/d_user/D_user/video_segment_delete';



//web site  


$route['Home']='web/Home';
$route['parent']='web/Home/parent';
$route['parent_video']='web/Home/parent_video';

$route['student']='web/Home/student';
$route['student_video']='web/Home/student_video';

$route['teacher']='web/Home/teacher';
$route['teacher_video']='web/Home/teacher_video';
$route['signup']='web/Home/sign_up';
$route['signin']='web/Home/signin';
$route['AR']='web/Home/ar_bio';
$route['Lina']='web/Home/lina_bio';
$route['privacy_policy']='web/Home/privacy_policy';
$route['terms_conditions']='web/Home/terms_conditions';
$route['contact']='web/Home/contact';
$route['cart']='web/Home/cart';




//Student dashboard


$route['my_account'] = 'web/Sdashboard/my_account';
$route['shop_item'] = 'web/Sdashboard/shop_item';
$route['return'] = 'web/Sdashboard/return';
$route['account_info'] = 'web/Sdashboard/account_info';
$route['review_rating'] = 'web/Sdashboard/review_rating';
$route['modify_address'] = 'web/Sdashboard/modify_address';
$route['order_history'] = 'web/Sdashboard/order_history';
$route['change_password'] = 'web/Sdashboard/change_password';
$route['newsletter'] = 'web/Sdashboard/newsletter';


$route['user_data'] = 'web/Sdashboard/signup_process';
$route['signin_check'] = 'web/Sdashboard/signin_process';





//video_journal

$route['video_journal'] = 'journal_video/Video_j';
$route['video_journal/intro'] = 'journal_video/Video_j/intro';
$route['video_journal/seg1'] = 'journal_video/Video_j/seg1';
$route['video_journal/seg2'] = 'journal_video/Video_j/seg2';
$route['video_journal/seg3'] = 'journal_video/Video_j/seg3';
$route['video_journal/seg4'] = 'journal_video/Video_j/seg4';
$route['video_journal/seg5'] = 'journal_video/Video_j/seg5';
$route['video_journal/seg6'] = 'journal_video/Video_j/seg6';
$route['video_journal/seg7'] = 'journal_video/Video_j/seg7';
$route['video_journal/seg8'] = 'journal_video/Video_j/seg8';
$route['video_journal/seg9'] = 'journal_video/Video_j/seg9';
$route['video_journal/seg10'] = 'journal_video/Video_j/seg10';
$route['video_journal/seg11'] = 'journal_video/Video_j/seg11';
$route['video_journal/seg12'] = 'journal_video/Video_j/seg12';
$route['video_journal/seg13'] = 'journal_video/Video_j/seg13';
$route['video_journal/seg14'] = 'journal_video/Video_j/seg14';


$route['video_journal/quet1'] = 'journal_video/Video_j/quet1';
$route['video_journal/quet2'] = 'journal_video/Video_j/quet2';
$route['video_journal/quet3'] = 'journal_video/Video_j/quet3';
$route['video_journal/quet4'] = 'journal_video/Video_j/quet4';
$route['video_journal/quet5'] = 'journal_video/Video_j/quet5';
$route['video_journal/quet6'] = 'journal_video/Video_j/quet6';
$route['video_journal/quet7'] = 'journal_video/Video_j/quet7';
$route['video_journal/quet8'] = 'journal_video/Video_j/quet8';
$route['video_journal/quet9'] = 'journal_video/Video_j/quet9';
$route['video_journal/quet10'] = 'journal_video/Video_j/quet10';
$route['video_journal/quet11'] = 'journal_video/Video_j/quet11';
$route['video_journal/quet12'] = 'journal_video/Video_j/quet12';
$route['video_journal/quet13'] = 'journal_video/Video_j/quet13';
$route['video_journal/quet14'] = 'journal_video/Video_j/quet14';







