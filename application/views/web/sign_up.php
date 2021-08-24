<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
   <meta charset="utf-8">
   <title>Korroboree</title>
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Mobile Specific Metas
         ================================================== -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <!-- CSS
         ================================================== -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/web/assets/css/base.css" />
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/web/assets/css/skeleton.css" />
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/web/assets/css/layout.css" />
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/web/assets/css/settings.css" />
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/web/assets/css/font-awesome.css" />
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/web/assets/css/owl.carousel.css" />
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/web/assets/css/main.css" />
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/web/assets/css/retina.css" />
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/web/assets/css/login.css" />
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/web/assets/css/animsition.min.css" />
   <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/web/assets/css/colors/color-gold.css" title="1">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/web/assets/css/own.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/web/assets/css/responsive.css">
   <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/web/assets/css/colors/color-2.css" title="2">
   <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/web/assets/css/colors/color-3.css" title="3">
   <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/web/assets/css/colors/color-4.css" title="4">
   <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/web/assets/css/colors/color-5.css" title="5">
   <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/web/assets/css/colors/color-6.css" title="6">
   <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/web/assets/css/colors/color-7.css" title="7">
   <!-- Favicons
         ================================================== -->
   <!--Jquery-->

   <!--Floating WhatsApp css-->
   <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>




   <!--Floating WhatsApp css-->
   <link rel="stylesheet"
      href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
 
 
   <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>



   <!-- <link rel="shortcut icon" type="image/png" href="https://via.placeholder.com/16x16" > -->
   <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css'>
   <script src="<?php echo base_url(); ?>assets/web/assets/js/uikit.js"></script>


   
   <script>
      $(document).ready(function(){
         $("#myModal").modal('show');
      });
   </script>
   <style>
       .bs-example{
          margin: 20px;
       }
      body.modal-open {
     height: 100vh;
     overflow-y: hidden;
   }
   .otp_width{
   max-width: 330px !important;
   margin-top: 220px !important;
}
.resend{
   font-size: 10px;
   margin-left: 100px;
}
.button, button, input[type="submit"], input[type="reset"], input[type="button"]{
   background-color: transparent !important;
   padding: 0px;
}
   </style>
</head>

<body>
   <!-- Primary Page Layout
         ================================================== -->
   <div class="animsition">
      <!-- MENU
            ================================================== -->
      <div class="header-top">
         <header class="cd-main-header">
            <a class="cd-logo animsition-link" href="<?php echo base_url(); ?>Home">
               <img src="<?php echo base_url(); ?>assets/web/assets/images/new_logo.png" alt="Logo">
            </a>
            <ul class="cd-header-buttons">
               <!--<li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>-->
               <li><a class="cd-nav-trigger" href="#cd-primary-nav"><span></span></a></li>
            </ul>
            <!-- cd-header-buttons -->
         </header>
          <nav class="cd-nav">
            <ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
               <li>
                  <i class="pdng_left_8"> <img src="<?php echo base_url(); ?>assets/web/assets/images/icons/home_icon.png" height="auto"
                        width="17px" /></i>
                  <a href="<?php echo base_url();?>Home" class="animsition-link">Home</a>
               </li>
               <li>
                  <i class="pdng_left_8"> <img src="<?php echo base_url(); ?>assets/web/assets/images/icons/parent_icon.png" height="auto" width="17px" /></i>
                  <a href="<?php echo base_url(); ?>parent"class="animsition-link">Parent</a>
               </li>
               <li>
                  <i class="pdng_left_8"><img src="<?php echo base_url(); ?>assets/web/assets/images/icons/teacher_icon.png" height="auto" width="17px" /></i>
                  <a href="<?php echo base_url();?>teacher" class="animsition-link">Teacher</a>
               </li>
               <li>
                  <i class="pdng_left_8"> <img src="<?php echo base_url(); ?>assets/web/assets/images/icons/students_icon.png" height="auto" width="17px" /></i>
                  <a href="<?php echo base_url();?>student" class="animsition-link">Student</a>
               </li>
               <li>
                  <i class="pdng_left_8"><img src="<?php echo base_url(); ?>assets/web/assets/images/icons/cart_icon.png" height="auto" width="17px" /></i>
                  <a href="<?php echo base_url(); ?>cart" class="">Cart</a>
               </li>

               <li>
                  <a href="<?php echo base_url(); ?>signin" class="">Login</a>
               </li>
            </ul>
         </nav>

      </div>
      <main class="cd-main-content">
         <!-- HOME SECTION
               ================================================== -->
         <div class="uk-grid-collapse" data-uk-grid>
            <div class="uk-width-1-2@m uk-padding-large uk-flex uk-flex-middle uk-flex-center" data-uk-height-viewport>
               <div class="uk-width-3-4@s">
                  <div class="uk-text-center uk-margin-bottom">
                     <a class="uk-logo uk-text-success uk-text-bold" href="<?php echo base_url(); ?>Home">
                        <!-- <img src="images/khoro_logo.png" alt=""> -->
                     </a>
                  </div>
                  <div class="uk-text-center uk-margin-medium-bottom">
                     <h1 class="uk-letter-spacing-small bord mbl_top">Start Boarding Process</h1>
                  </div>



                  <form action="<?php echo base_url(); ?>user_data" method="post">
                     <div class="login-box">
                        <div class="user-box">
                           <input type="text" name="username" required="">
                           <label>Full Name<span class="required-mark">*</span>
                           </label>
                        </div>
                        <div class="user-box">
                           <input type="text" name="email" required="">
                           <label>Email<span class="required-mark">*</span>
                           </label>
                        </div>
                        <div class="user-box">
                           <input type="" name="mnumber" required="">
                           <label>Phone No<span class="required-mark">*</span>
                           </label>
                        </div>
                        <div class="user-box">
                           <input type="password" name="cpassword" required="">
                           <label>Password<span class="required-mark">*</span>
                           </label>
                        </div>
                        <div class="user-box">
                           <input type="password" name="cpassword" required="">
                           <label>Confirm Password<span class="required-mark">*</span>
                           </label>
                        </div>
                      
                        <div class="user-box">
                           <input type="" name="rcode" required="">
                           <label>Referral Code
                           </label>
                        </div>
                        <div class="own_btn2  uk-width-1-1 uk-text-center" >
                           <a class="cd-read-more"  data-toggle="modal" data-target="#exampleModal"
                              style="color: black;padding: 15px 30px 15px 30px; font-size: 14px;font-weight: 700;">Submit</a>
                        </div>

                        <div class="uk-width-1-1 uk-margin uk-text-center">
                           <p class="uk-text-small uk-margin-remove">By signing up you agree to our <a
                                 class="uk-link-border" href="<?php echo base_url(); ?>privacy_policy">Privacy Policy</a></p>
                        </div>


                        <div class="uk-text-center uk-margin">
                           <p class="uk-margin-remove">Or use your email for registration:</p>
                        </div>    
                  <div data-uk-grid class="uk-child-width-auto uk-grid-small uk-flex uk-flex-center uk-margin">
                     <div>
                        <a href="#" data-uk-icon="icon: facebook"
                           class="uk-icon-button uk-icon-button-large facebook"></a>
                     </div>
                     <div>
                        <a href="#" data-uk-icon="icon: google"
                           class="uk-icon-button uk-icon-button-large google-plus"></a>
                     </div>
                     <div>
                        <a href="#" data-uk-icon="icon: linkedin"
                           class="uk-icon-button uk-icon-button-large linkedin"></a>
                     </div>
                  </div>
                
                     </div>
                  </form>
               </div>
            </div>
            <div class="uk-width-1-2@m uk-padding-large uk-flex uk-flex-middle uk-flex-center uk-light
                  uk-background-cover uk-background-norepeat uk-background-blend-overlay uk-background-primary"
               style=" opacity: 1; background-color: #f1c40f;" data-uk-height-viewport>
               <div>
                  <div class="uk-text-center">
                     <h2 class="uk-h1 uk-letter-spacing-small" style="font-family:lato; opacity:1;">Welcome Back</h2>
                  </div>
                  <div class="uk-margin-top uk-margin-medium-bottom uk-text-center">
                     <p style=" color: #fff !important; font-family: lato !important; font-size: 20px; opacity: 1;">Already signed up? Enter your details and start learning today
                     </p>
                  </div>
                 
                  <div class="own_btn  uk-width-1-1 uk-text-center" >
                     <a href="<?php echo base_url(); ?>signin" class="cd-read-more"
                        style="color:black;background-color: #fff; padding: 15px 30px 15px 30px; font-weight: 700; font-size: 14px;">Sign In</a>
                  </div>
               </div>
            </div>
         </div>



      
         <!-- FOOTER
               ================================================== -->
       <section class="section footer-1 section-padding-top-bottom">
      <div class="container">
         <div class="four columns" data-scroll-reveal="enter left move 200px over 0.5s after 0.8s">
            <a href="<?php echo base_url(); ?>Home" class="animsition-link">
               <div class="logo-footer"></div>
            </a>
            <div style="padding-top: 2rem;"></div>
            <div class="social-bottom">
               <ul class="list-social">
                  <li class="icon-soc">
                     <a href="https://www.facebook.com/Korroboree" target="_blank">&#xf09a;</a>
                  </li>
                  <li class="icon-soc">
                     <a href="https://www.linkedin.com/company/korroboree/" target="_blank">&#xf0e1;</a>
                  </li>
                  <li class="icon-soc">
                     <a href="https://www.instagram.com/korroboree/" target="_blank">&#xf16d;</a>
                  </li>
                  <li class="icon-soc">
                     <a href="https://www.youtube.com/channel/UC48jMdM7Jm39hq9M7AF-owA" target="_blank">&#xf16a;</a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="four columns" data-scroll-reveal="enter left move 200px over 0.5s after 0.3s">
            <h6>Information</h6>
            <p>
               <!-- <a href="#">About Us</a> <br/> <br/> -->
               <a href="<?php echo base_url(); ?>contact">Contact Us</a> <br /> <br />
               <a href="<?php echo base_url(); ?>terms_conditions">Terms of Service </a> <br /> <br />
               <a href="<?php echo base_url(); ?>privacy_policy">Privacy Policy</a>
            </p>
         </div>
         <div class="four columns" data-scroll-reveal="enter right move 200px over 0.5s after 0.3s">
            <h6>Contact Us</h6>
            <p>
               <a href="tel:+91 9820792077">+91 7045457777</a> <br />
               <a href="mailto:connect@korroboree.com">connect@korroboree.com</a>
            </p>
         </div>
         <div class="four columns" data-scroll-reveal="enter right move 200px over 0.5s after 0.8s">
            <h6>Subscribe to Our Newsletter</h6>
            <p>
               Get Regular Updates in your inbox
            </p>
            <div class="news-letter">
               <span class="wpcf7-form-control-wrap your-email">
                  <input type="email" name="your-email" value="" size="40"
                     class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                     aria-required="true" aria-invalid="false" placeholder="Your Email Address">
               </span>
            </div>
            <br><br>
            <div class="own_btn" style="margin-top: 15px; margin-bottom: 20px;">
               <a href="#" class="cd-read-more">Submit</a>
            </div>
         </div>
      </div>
   </section>
   <section class="section footer-bottom">
      <div class="container">
         <div class="sixteen columns">
            <a href="http://5thdt.com/" target="_blank"><p>© ALL RIGHTS RESERVED. MADE BY 5TH Dimension Technologies <span id="year"></span></p></a>
         </div>
      </div>
   </section>
   </main>
          <!-- Modal -->
 <!-- Modal -->
 

<div class="modal fade " id="exampleModal" tabindex="-1" style="z-index: 9999;" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog otp_width" >
     <div class="modal-content" align="center">
      <div class="row" style="padding-top: 30px;">
         <div class="col">
            Enter OTP <br>
            OTP has been sent to your email
         </div>
      </div>
      <div class="row">
         <div class="col">
            <input type="text" name="" id=""> <br>
            <span class="resend" align="right"></span>
         </div>
      </div>
      <div class="row" style="padding-bottom: 30px;">
         <div class="col">
            
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:none;text-shadow:none">
               <div class="own_btn" >
                  <a href="#" class="cd-read-more" style="color: black;">Verify OTP</a>
               </div>
              </button>
         </div>
      </div>
   
     </div>
   </div>
  </div>


   <!-- Modal -->

      <div id="WAButton"></div>
      <div class="scroll-to-top">&#xf106;</div>
   </div>
   <!-- JAVASCRIPT
         ================================================== -->
         <script type="text/javascript" src="<?php echo base_url(); ?>assets/web/assets/js/jquery-2.1.1.js"></script>
         <!--Jquery-->
         <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> -->
         <!--Floating WhatsApp javascript-->
         <script type="text/javascript"
            src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>
         

   <script type="text/javascript" src="<?php echo base_url(); ?>assets/web/assets/js/modernizr.custom.js"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/web/assets/js/jquery.mobile.custom.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/web/assets/js/retina-1.1.0.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/web/assets/js/jquery.animsition.min.js"></script>
   <script type="text/javascript">
      (function ($) {
         "use strict";
         $(document).ready(function () {

            $(".animsition").animsition({

               inClass: 'zoom-in-sm',
               outClass: 'zoom-out-sm',
               inDuration: 1500,
               outDuration: 800,
               linkElement: '.animsition-link',
               // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
               loading: true,
               loadingParentElement: 'body', //animsition wrapper element
               loadingClass: 'animsition-loading',
               unSupportCss: ['animation-duration',
                  '-webkit-animation-duration',
                  '-o-animation-duration'
               ],
               //"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser. 
               //The default setting is to disable the "animsition" in a browser that does not support "animation-duration".

               overlay: false,

               overlayClass: 'animsition-overlay-slide',
               overlayParentElement: 'body'
            });
         });
      })(jQuery);
   </script>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/web/assets/js/jquery.themepunch.tools.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/web/assets/js/jquery.themepunch.revolution.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/web/assets/js/jquery.easing.js"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/web/assets/js/jquery.hidescroll.min.js"></script>
   <script type="text/javascript">
      $('.header-top').hidescroll();
   </script>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/web/assets/js/smoothScroll.js"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/web/assets/js/jquery.parallax-1.1.3.js"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/web/assets/js/jquery.counterup.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/web/assets/js/waypoints.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/web/assets/js/scrollReveal.js"></script>

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
   <script type="text/javascript">
      (function ($) {
         "use strict";
         window.scrollReveal = new scrollReveal();
      })(jQuery);
   </script>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/web/assets/js/owl.carousel.min.js"></script>
   <script type="text/javascript">
      (function ($) {
         "use strict";
         jQuery(document).ready(function () {
            var offset = 450;
            var duration = 500;
            jQuery(window).scroll(function () {
               if (jQuery(this).scrollTop() > offset) {
                  jQuery('.scroll-to-top').fadeIn(duration);
               } else {
                  jQuery('.scroll-to-top').fadeOut(duration);
               }
            });

            jQuery('.scroll-to-top').click(function (event) {
               event.preventDefault();
               jQuery('html, body').animate({ scrollTop: 0 }, duration);
               return false;
            })
         });
      })(jQuery);
   </script>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/web/assets/js/styleswitcher.js"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/web/assets/js/custom-index.js"></script>
   <script type="text/javascript">
      document.getElementById("year").innerHTML = new Date().getFullYear();
   </script>

   <script type="text/javascript">
      $(function () {
         $('#WAButton').floatingWhatsApp({
            phone: '+91 7045457777',//WhatsApp Business phone number International format-
            //Get it with Toky at https://toky.co/en/features/whatsapp.
            headerTitle: 'Chat with us on WhatsApp!', //Popup Title
            popupMessage: 'Hello, how can we help you?', //Popup Message
            showPopup: true, //Enables popup display
            buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg"/>', //Button Image
            //headerColor: 'crimson', //Custom header color
            //backgroundColor: 'crimson', //Custom background button color
            position: "left"
         });
      });
   </script>
   <!-- End Document
            ================================================== -->
</body>

</html>