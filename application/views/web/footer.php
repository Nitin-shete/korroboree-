 
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

   
      <div id="WAButton">
   
      </div>

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

<script>
   $( "#lina_bio" ).click(function() {
     $("#linabio" ).show();
     $("#arbio" ).hide();
   });
   $( "#ar_bio" ).click(function() {
     $("#arbio" ).show();
     $("#linabio" ).hide();
   });
   </script>


   <script type="text/javascript" src="<?php echo base_url(); ?>assets/web/assets/js/styleswitcher.js"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/web/assets/js/custom-index.js"></script>
   <script type="text/javascript">
      function show(evt, cityName) {
         var i, tabcontent, tablinks;
         tabcontent = document.getElementsByClassName("tabcontent");
         for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
         }
         tablinks = document.getElementsByClassName("tablinks");
         for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
         }
         document.getElementById(cityName).style.display = "block";
         evt.currentTarget.className += " active";
      }


      document.getElementById("defaultOpen").click();
   </script>
   <script type="text/javascript">
      document.getElementById("year").innerHTML = new Date().getFullYear();
   </script>

   <script type="text/javascript">
      $(function () {
         $('#WAButton').floatingWhatsApp({
            phone: '+91 7045457777', //WhatsApp Business phone number International format-
            //Get it with Toky at https://toky.co/en/features/whatsapp.
            headerTitle: 'Chat with us on WhatsApp!', //Popup Title
            popupMessage: 'Hello, how can we help you?', //Popup Message
            showPopup: true, //Enables popup display
            buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
            //headerColor: 'crimson', //Custom header color
            //backgroundColor: 'crimson', //Custom background button color
            position: "left"
             
         });
      });
   </script>
 



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
         <script type="text/javascript" src="assets/js/jquery.easing.js"></script>
         <script type="text/javascript" src="assets/js/jquery.hidescroll.min.js"></script>
         <script type="text/javascript">
            $('.header-top').hidescroll();
         </script>
         <script type="text/javascript" src="assets/js/smoothScroll.js"></script>
         <script type="text/javascript" src="assets/js/jquery.parallax-1.1.3.js"></script>
         <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
         <script type="text/javascript" src="assets/js/scrollReveal.js"></script>
      
      
      
      
         <script type="text/javascript">
            (function ($) {
               "use strict";
               window.scrollReveal = new scrollReveal();
            })(jQuery);
         </script>
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
         
      <script src="assets/js/visible.min.js"></script>
         <script src="<?php echo base_url(); ?>assets/js/pro-bars.js"></script>
         <script src="<?php echo base_url(); ?>assets/js/jquery.counterup.min.js"></script>
         <script src="<?php echo base_url(); ?>assets/js/waypoints.min.js"></script>
         <script src="<?php echo base_url(); ?>assets/js/smk-accordion.js"></script>
         <script src="<?php echo base_url(); ?>assets/js/jquery.fitvids.js"></script>
         <script src="<?php echo base_url(); ?>assets/js/custom-about-2.js"></script>
      
   <!-- End Document
         ================================================== -->
</body>

</html>