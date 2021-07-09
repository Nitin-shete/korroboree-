<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="author" content="5THDT">
      <link rel="icon" href="<?php echo base_url(); ?>assets/admin/d_user/assets/images/logo/favicon.ico" type="image/x-icon">
      <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/admin/d_user/assets/images/logo/favicon.ico" type="image/x-icon">
      <title>Korroboree Admin Panel</title>

      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">

      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/d_user/assets/css/font-awesome.css">
      <!-- ico-font-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/d_user/assets/css/vendors/icofont.css">
      <!-- fontawesome-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/d_user/assets/css/fontawesome.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/d_user/assets/css/fontawesome.min.css">
      <!-- Themify icon-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/d_user/assets/css/vendors/themify.css">
      <!-- Flag icon-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/d_user/assets/css/vendors/flag-icon.css">
      <!-- Feather icon-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/d_user/assets/css/vendors/feather-icon.css">
      <!-- Plugins css start-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/d_user/assets/css/vendors/scrollbar.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/d_user/assets/css/vendors/datatables.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/d_user/assets/css/vendors/animate.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/d_user/assets/css/vendors/date-picker.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/d_user/assets/css/vendors/dropzone.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/d_user/assets/css/vendors/select2.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/d_user/assets/css/vendors/rating.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/d_user/assets/css/vendors/todo.css">
      <!-- Plugins css Ends-->
      <!-- Bootstrap css-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/d_user/assets/css/vendors/bootstrap.css">
      <!-- App css-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/d_user/assets/css/style.css">
      <link id="color" rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/d_user/assets/css/color-1.css" media="screen">
      <!-- Responsive css-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/d_user/assets/css/responsive.css">
   </head>
   <body>
      <!-- page-wrapper Start-->
      <div class="page-wrapper compact-wrapper" id="pageWrapper">
         <!-- Page Header Start-->
         <div class="page-header">
            <div class="header-wrapper row m-0">
               <div class="header-logo-wrapper col-auto p-0">
                  <div class="logo-wrapper">
                                <a href="../index.html">
                                      <img class="img-fluid" src="<?php echo base_url(); ?>assets/admin/d_user/assets/images/logo/logo2.png" alt="" />
                                </a>
                          </div>
                  <div class="toggle-sidebar">
                                <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                          </div>
               </div>
               <div class="left-header col horizontal-wrapper ps-0">
                  <ul class="horizontal-menu"></ul>
               </div>
               <div class="nav-right col-8 pull-right right-header p-0">
                  <ul class="nav-menus">
                     <li class="onhover-dropdown">
                        <div class="notification-box"><i data-feather="bell"> </i><span class="badge rounded-pill badge-secondary">4                                </span></div>
                        <ul class="notification-dropdown onhover-show-div">
                           <li>
                              <i data-feather="bell"></i>
                              <h6 class="f-18 mb-0">Notitications</h6>
                           </li>
                           <li>
                              <p><i class="fa fa-circle-o me-3 font-primary"> </i>Delivery processing <span class="pull-right">10 min.</span></p>
                           </li>
                           <li>
                              <p><i class="fa fa-circle-o me-3 font-success"></i>Order Complete<span class="pull-right">1 hr</span></p>
                           </li>
                           <li>
                              <p><i class="fa fa-circle-o me-3 font-info"></i>Tickets Generated<span class="pull-right">3 hr</span></p>
                           </li>
                           <li>
                              <p><i class="fa fa-circle-o me-3 font-danger"></i>Delivery Complete<span class="pull-right">6 hr</span></p>
                           </li>
                           <li><a class="btn btn-primary" href="#">Check all notification</a></li>
                        </ul>
                     </li>
                     <li class="profile-nav onhover-dropdown p-0 me-0">
                        <div class="media profile-media">
                           <img class="b-r-10" src="<?php echo base_url(); ?>assets/admin/d_user/assets/images/dashboard/profile.jpg" alt="">
                           <div class="media-body">
                              <span>Admin</span>
                              <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                           </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                           <li>
                              <a href="#">
                                 <i data-feather="user"></i>
                                 <span>Account </span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <i data-feather="settings"></i>
                                 <span>Settings</span>
                              </a>
                           </li>
                           <li><a href="../index.html"><i data-feather="log-in"> </i><span>Logout</span></a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </div>