<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="author" content="5THDT">
      <link rel="icon" href="<?php echo base_url(); ?>assets/admin/d_team/assets/images/favicon.png" type="image/x-icon">
      <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/admin/d_team/assets/images/favicon.png" type="image/x-icon">
      <title>Korroboree Admin Panel</title>
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/d_team/assets/css/font-awesome.css">
      <!-- ico-font-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/d_team/assets/css/vendors/icofont.css">
      <!-- Themify icon-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/d_team/assets/css/vendors/themify.css">
      <!-- Flag icon-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/d_team/assets/css/vendors/flag-icon.css">
      <!-- Feather icon-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/d_team/assets/css/vendors/feather-icon.css">
      <!-- Plugins css start-->
      <!-- Plugins css Ends-->
      <!-- Bootstrap css-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/d_team/assets/css/vendors/bootstrap.css">
      <!-- App css-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/d_team/assets/css/style.css">
      <link id="color" rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/d_team/assets/css/color-1.css" media="screen">
      <!-- Responsive css-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/d_team/assets/css/responsive.css">
   </head> 
   <body>
      <!-- login page start-->
      <div class="container-fluid">
         <div class="row">
            <div class="col-xl-7"><img class="bg-img-cover bg-center" src="<?php echo base_url(); ?>assets/admin/d_team/assets/images/login/2.png" alt="looginpage"></div>
            <div class="col-xl-5 p-0">
               <div class="login-card">
                  <div>
                     <div>
						 <a class="logo text-start" href="index.html">
							 <img class="img-fluid for-light" src="<?php echo base_url(); ?>assets/admin/d_team/assets/images/logo/logo2.png" alt="looginpage" />
							 <img class="img-fluid for-dark" src="<?php echo base_url(); ?>assets/admin/d_team/assets/images/logo/logo2.png" alt="looginpage" />
						 </a>
					 </div>
                     <div class="login-main">
                        <form class="theme-form" method="post" action="<?php echo base_url(); ?>adminlogin">
                           <h4>Sign in to account</h4>
                           <p>Enter your email &amp; password to login</p>
                           <div class="form-group">
                              <label class="col-form-label">Email Address</label>
                              <input class="form-control" name="username" type="email" placeholder="Test@gmail.com">
                           </div>
                           <div class="form-group">
                              <label class="col-form-label">Password</label>
                              <div class="form-input position-relative">
                                 <input class="form-control" type="password" name="password" placeholder="*********">
                                 <div class="show-hide"><span class="show">                         </span></div>
                              </div>
                           </div>
                           <div class="form-group mb-0">
                              <div class="checkbox p-0">
                                 <input id="checkbox1" type="checkbox">
                                 <label class="text-muted" for="checkbox1">Remember password</label>
                              </div>
                              <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- latest jquery-->
         <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/jquery-3.5.1.min.js"></script>
         <!-- Bootstrap js-->
         <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
         <!-- feather icon js-->
         <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/icons/feather-icon/feather.min.js"></script>
         <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/icons/feather-icon/feather-icon.js"></script>
         <!-- scrollbar js-->
         <!-- Sidebar jquery-->
         <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/config.js"></script>
         <!-- Plugins JS start-->
         <!-- Plugins JS Ends-->
         <!-- Theme js-->
         <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/script.js"></script>
         <!-- login js-->
         <!-- Plugin used-->
      </div>
   </body>
</html>