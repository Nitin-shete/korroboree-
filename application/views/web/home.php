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
   <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/web/assets/css/main.css"/> -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/web/assets/css/retina.css" />
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

   <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>




   <!--Floating WhatsApp css-->
   <link rel="stylesheet"
      href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">


   <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
   <!-- Primary Page Layout
         ================================================== -->
   <div class="animsition">


      <!-- MENU
            ================================================== -->
      <div class="header-top">
         <header class="cd-main-header">
            <a class="cd-logo animsition-link" href="<?php echo base_url();?>Home">
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
  
         <section class="home">
            <a href="#scroll-link" class="arrow-down scroll">&#xf103;</a>
            <div class="slider-container">
               <div class="tp-banner-container">
                  <div class="tp-banner">
                     <ul> 
                      

                  <?php   foreach ($v as $d) {?>

                         <li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-saveperformance="on"
                           data-title="Intro Slide">
                           <img src="<?php echo base_url(); ?>assets/web/assets/pictures/website/homepage/home_banner/<?php echo $d->slider_name; ?>" alt="slidebg1"
                              data-lazyload="<?php echo base_url(); ?>assets/web/assets/pictures/website/homepage/home_banner/<?php echo $d->slider_name; ?>"                              data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"
                              style="background-color: #333; opacity: 0.7; z-index: 0; position: absolute; display: block;">
                          
                              <div class="overlay"></div>

                              <div class="tp-caption black-heavy randomrotate tp-resizeme slider_top" data-speed="200"
                              data-start="300" data-easing="Power3.easeInOut" data-elementdelay="0.1"
                              data-endelementdelay="0.1"
                              style="z-index: 500; max-width: auto; max-height: auto; white-space: nowrap;">
                              <span class="border-text" style="line-height: 187px;">
                               <?php echo $d->title;  ?></span>
                            <?php }?>
                           </div>
                           <div class="tp-caption color-small randomrotate tp-resizeme" data-speed="200"
                              data-start="300" data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none"
                              data-elementdelay="0.1" data-endelementdelay="0.1"
                              style="z-index: 500; max-width: auto; max-height: auto; white-space: nowrap;">

                           </div>
                        </li> 

                        <?php   foreach ($k as $s) { ?>  
                     <li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-saveperformance="on"
                           data-title="Intro Slide">
                           <img src="<?php echo base_url(); ?>uploads/web/Homepage/<?php echo $s->slider_name; ?>" alt="slidebg2"
                              data-lazyload="<?php echo base_url();?>uploads/web/Homepage/<?php echo $s->slider_name; ?>"
                              data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"
                              style="-webkit-filter: grayscale(100%);filter: grayscale(100%);">
                           
                              <div class="overlay"></div>
                              <div class="tp-caption black-heavy randomrotate tp-resizeme slider_top" data-speed="200"
                              data-start="300" data-easing="Power3.easeInOut" data-elementdelay="0.1"
                              data-endelementdelay="0.1"
                              style="z-index: 500; max-width: auto; max-height: auto; white-space: nowrap;">
                              <span class="border-text"style="line-height: 187px;"><?php echo $s->slider_text; ?></span>
                           </div>
                           <div class="tp-caption color-small randomrotate tp-resizeme" data-speed="200"
                              data-start="300" data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none"
                              data-elementdelay="0.1" data-endelementdelay="0.1"
                              style="z-index: 500; max-width: auto; max-height: auto; white-space: nowrap;">

                           </div>
                           
                           <div class="tp-caption color-small randomrotate tp-resizeme know_more"
                              style="z-index: 500; max-width: 240px; max-height: auto; white-space: normal; font-family: Lato;font-size: 30px;">
                              <a href="<?php if($s->slider_page_name=='parent'){ echo base_url('parent');}if($s->slider_page_name=='student'){ echo base_url('student');}if($s->slider_page_name=='teacher'){ echo base_url('teacher');}else{} ?>" class="cd-read-more top_read" style="line-height: 145px;">Know more</a>
                           </div>
                        </li>

                       <?php } ?>

                         <!-- <li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-saveperformance="on"
                           data-title="Intro Slide">
                           <img src="<?php echo base_url(); ?>assets/web/assets/pictures/website/homepage/teachers/homepage teacher.jpg" alt="slidebg3"
                              data-lazyload="<?php echo base_url(); ?>assets/web/assets/pictures/website/homepage/teachers/homepage teacher.jpg"
                              data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                              
                              <div class="overlay"></div>
                           
                              <div class="tp-caption black-heavy randomrotate tp-resizeme slider_top" data-speed="200"
                              data-start="300" data-easing="Power3.easeInOut" data-elementdelay="0.1"
                              data-endelementdelay="0.1"
                              style="z-index: 500; max-width: auto; max-height: auto; white-space: nowrap;">
                              <span class="border-text"style="line-height: 187px;">Teacher</span>
                           </div>
                           <div class="tp-caption color-small randomrotate tp-resizeme slider_top" data-speed="200"
                              data-start="300" data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none"
                              data-elementdelay="0.1" data-endelementdelay="0.1"
                              style="z-index: 500; max-width: auto; max-height: auto; white-space: nowrap;">

                           </div>
                           <div class="tp-caption color-small randomrotate tp-resizeme know_more"
                              style="z-index: 500; max-width: 240px; max-height: auto; white-space: normal; font-family: Lato;font-size: 30px;">
                              <a href="teacher.html" class="cd-read-more top_read" style="line-height: 145px;">Know more</a>
                           </div>
                        </li> 

                      <li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-saveperformance="on"
                           data-title="Intro Slide">
                           <img src="<?php echo base_url(); ?>assets/web/assets/pictures/website/homepage/students/homepage - student.jpg" alt="slidebg1"
                              data-lazyload="<?php echo base_url(); ?>assets/web/assets/pictures/website/homepage/students/homepage - student.jpg"
                              data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                              
                              <div class="overlay"></div>
                          
                              <div class="tp-caption black-heavy randomrotate tp-resizeme slider_top" data-speed="200"
                              data-start="300" data-easing="Power3.easeInOut" data-elementdelay="0.1"
                              data-endelementdelay="0.1"
                              style="z-index: 500; max-width: auto; max-height: auto; white-space: nowrap;">
                              <span class="border-text" style="line-height: 187px;">Student</span>
                           </div>
                           <div class="tp-caption color-small randomrotate tp-resizeme" data-speed="200"
                              data-start="300" data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none"
                              data-elementdelay="0.1" data-endelementdelay="0.1"
                              style="z-index: 500; max-width: auto; max-height: auto; white-space: nowrap;">

                           </div>
                           <div class="tp-caption color-small randomrotate tp-resizeme know_more"
                              style="z-index: 500; max-width: 240px; max-height: auto; white-space: normal; font-family: Lato;font-size: 30px;">
                              <a href="student.html" class="cd-read-more top_read" style="line-height: 145px;">Know more</a>
                           </div>
                        </li>  -->
                     </ul>
                  </div>
               </div>
            </div>
         </section>
         <!-- SECTION
               ================================================== -->

         <section id="scroll-link" class="section white-section section-padding-bottom">
            <div class="container" style="padding-top: 6rem !important;">

               <div class="row">
                  <div class="col-md-3 col-lg-3">

                     <div class="four columns" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
                        <div class="post-sidebar">
                           <div>
                              <h6>Home</h6>
                           </div>
                           <ul class="link-recents shortcodes-carousel">
                              <li class="tab tablinks" onclick="show(event, 'learn')" id="defaultOpen"><a>THOUGHT LEADER OF
                                    THE WEEK</a></li>

                              <li class="tab tablinks" onclick="show(event, 'why')"><a>Why We Exist</a></li>
                              <li class="tab tablinks" onclick="show(event, 'how')"><a>How We Began</a></li>
                              <li class="tab tablinks" onclick="show(event, 'what')"><a>What We Offer</a></li>
                              <li class="tab tablinks" onclick="show(event, 'who')"><a>Who We Are</a></li>
                              <li class="tab tablinks">
                                 <a href="sign_up.html">
                                    <div class="button-shortcodes text-size-8 text-padding-8 version-2 big-button">Join Our
                                       Community</div>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>

              <div class="col-md-9 col-lg-9" >
                     <div class="twelve columns">
                        <section id="why" class="tabcontent">
                           <div class="blog-big-wrapper grey-section">
                              <h5 class="heading">
                                 Why We Exist
                              </h5>
                              <img src="<?php echo base_url(); ?>assets/web/assets/pictures/website/homepage/why.png" alt="">
                              <p>


                                 Human beings are capable of doing so much more than they know. We want the next generation
                                 to
                                 know that the seemingly impossible is possible. We want them to stretch their beliefs that
                                 their talent, skill and motivation is not limited; it is limitless. We want parents and
                                 teachers to have the research and the science of success at their fingertips so they can
                                 use
                                 this to mindfully parent and teach children.
                              </p>
                              <p>
                                 Korroboree is built upon cutting-edge neuroscience and behavioural science. It provides
                                 teachers and parents with rich research based learning experiences to bring the vast body
                                 of
                                 research and expertise in bite-sized, self-paced learning nuggets.
                              </p>
                              <p>
                                 We are excited for parents and teachers to influence and coach children to think in
                                 paradigm
                                 shifting breakthroughs. In Moonshots. We will take the entire neuroscience and behavioural
                                 science of the famous 4 minute mile, and give you the scientific understanding and tools
                                 to
                                 parent and teach so that children know that the 4 minute mile is absolutely impossible
                                 when
                                 you believe it to be.
                              </p>
                           </div>
                        </section>
   
                        <section id="how" class="tabcontent">
                           <div class="blog-big-wrapper grey-section">
                              <h5 class="heading">
                                 How We Began
                              </h5>
                              <img src="<?php echo base_url(); ?>assets/web/assets/pictures/website/homepage/how.png" alt="">
                              <p>
                                 A year ago a journey called 'Moonshot Conversations' began on Facebook. Agnelorajesh and I
                                 believed that armed with moonshot thinking anything and everything is possible. These
                                 conversations explained the neuroscience and research on how the brain develops and why
                                 the
                                 brain's goals are not aligned with each one of us becoming the best versions of ourselves.
                                 The fact is that the brain has evolved to keep us alive and to survive; not to thrive.
                              </p>
                              <p>
                                 Each conversation spoke to parents and teachers on how we can hack the brain's goals and
                                 break away from disempowering thoughts, feelings and beliefs that don't allow us to live
                                 our
                                 best life. This time has taught us that we need less math, history and geography and more
                                 learning about how the brain works, how it can be motivated, and how to create neural
                                 circuitry that can help every individual to create the best version of themselves. We
                                 aspire
                                 for all children to grow up believing and knowing that anything and everything is
                                 possible.
                              </p>
                              <p>
                                 This time has taught us that what we are doing in schools is not going to cut it in the
                                 world
                                 of tomorrow and if we continue on this conventional education path <span
                                    style="font-weight: 700 !important; color: #0D0D0D !important;">our children may at
                                    best
                                    survive in a world that has increasing amounts of uncertainty but will not thrive and
                                    be
                                    able to live a meaningful, fulfilled life</span>.
                              </p>
                              <p>
                                 Once parents and teachers understand why some people stay stuck while others aspire, grow,
                                 persevere and find meaning, happiness and success they will change seeing their child???s
                                 potential as finite and begin to see it as infinite. We have all the tools you need for
                                 understanding this, and empowering your parenting and teaching, on Korroboree.
                              </p>
                           </div>
                        </section>
                        <section id="what" class="tabcontent">
                           <div class="blog-big-wrapper grey-section">
                              <h5 class="heading">
                                 What We Offer
                              </h5>
                              <img src="<?php echo base_url(); ?>assets/web/assets/pictures/website/homepage/what.png" alt="">
                              <p>
                                 Parents, Teachers and students will have access to courses that are self-paced. that they
                                 can
                                 choose themselves and be intrinsically motivated to complete. They will have information,
                                 tools and resources that will have them:
                              </p>
                              <p class="text-border-left">
                                 Thinking about inner purpose, <br />
                                 Keeping natural curiosity insanely alive, <br />
                                 Questioning the status quo, <br />
                                 Develop ways of thinking and inner dialogue that is empowering, <br />
                                 Develop the right mindset that is motivating to keep building character, intelligence,
                                 optimism and creative abilities <br />
                                 Set goals and direct focus, <br />
                                 Be emotionally resilient <br />
                                 Cultivate self-awareness of- values, needs, definition of success
                              </p>
                              <p>
                                 Most people who live fulfilled, engaged, and meaningful lives have cracked one thing.
                                 Personal and purpose mastery. <br />
                                 <span style="font-weight: 700 !important; color: #0D0D0D !important;">
                                    ???The fact is that given the challenges we face; education doesn???t need to be reformed ???
                                    it
                                    needs to be transformed. The key to this transformation is not to standardize
                                    education,
                                    but to personalize it, to build achievement on discovering the individual talents of
                                    each
                                    child, to put students in an environment where they want to learn and where they can
                                    naturally discover their true passions.??? Ken Robinson
                                 </span>
                              </p>
                              <p>
                                 Welcome Parents and Teachers to Korroboree. We create tools and learning resources and
                                 collaborate with platforms that share our vision to promote self-directed learning. When
                                 learners are offered the right resources that don???t dictate ???A for apple??? to them, they
                                 start
                                 gaining interest to keep learning- much like adults.
                              </p>
                              <p>
                                 It only takes that one intrinsic spark to guide the youth of India towards gaining life
                                 skills, leadership and an entrepreneurial mindset. With Korroboree, let???s enable our young
                                 learners to unleash their best versions.
                              </p>
                           </div>
                        </section>
                        <section id="who" class="tabcontent">
                           <div class="blog-big-wrapper grey-section" style="display:inline-block ;">
                              <h5 class="lina heading" style="padding: 15px;">
                                 Who We Are
                              </h5>
                              <div class="row leaderhead" style="overflow-x:auto;">
                                 <div class="col-md-6  col-sm-6 ">
                                    <img src="<?php echo base_url(); ?>assets/web/assets/pictures/website/homepage/lina_p.jpg" alt="">
                                    <h5 class="lina">Lina Ashar</h5>
                                    
                                   <p class="lina" style="font-size: 16px;">Co-Founder Korroboree</p>
                                    <center>
                                       <a href="lina_bio.html" class="heading">
                                          <div class="button-shortcodes text-size-8 text-padding-1 version-2  "  id="lina_bio">See Full Bio</div>
                                       </a>
                                    </center>
                                 </div>
                                 <div class="col-md-6  col-sm-6">
                                    <img src="<?php echo base_url(); ?>assets/web/assets/pictures/website/homepage/ar_p.jpg" alt="">
                                    <h5 class="lina">Agnelorajesh Athaide</h5>
                                    
                                   <p class="lina" style="font-size: 16px;">Co-Founder Korroboree</p>
                                   
                                    <center>
                                       <a href="ar_bio.html" class="heading" >
                                          <div class="button-shortcodes text-size-8 text-padding-1 version-2  " id="ar_bio">See Full Bio</div>
                                       </a>
                                    </center>
                                 </div>
                              </div>
                           </div>
                        </section>
                        <section id="learn" class="tabcontent">
                           <div class="blog-big-wrapper wrapper2 grey-section">
                              <h5 class="heading">
                                 THOUGHT LEADER OF THE WEEK
                              </h5>
                              <img src="<?php echo base_url(); ?>assets/web/assets/pictures/website/digital-learning/rick/rick_img.jpg" alt="">
                           
   
                              <p class="heading rick" style="padding: 0px;margin-bottom: 0px;"> Rick Hanson</p>
                              <center>
                                 <a href="sign_up.html" class="heading">
                                    <div class="button-shortcodes text-size-8 text-padding-8 version-2 big-button ">
                                       Register
                                       Now</div>
                                 </a>
                              </center>
                           </div>
                        <!-- </section>

                        <section id="linabio" class="tabcontent" style="display: none;">
                           <div class="blog-big-wrapper grey-section">
                              <h5>
                                 Lina Ashar
                              </h5>
                             
                              <p>
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse unde similique numquam. Ullam ex omnis placeat dolore rem laboriosam quidem veritatis eius soluta quod repellendus, porro voluptatem dolorum quisquam iure fugiat? Repellendus sapiente, ex obcaecati, natus libero ipsum dignissimos consequuntur rerum omnis doloremque quam ea vel numquam veniam alias atque.
                              </p>
                              <p class="text-border-left">
                                 Thinking about inner purpose, <br />
                                 Keeping natural curiosity insanely alive, <br />
                                 Questioning the status quo, <br />
                                 Develop ways of thinking and inner dialogue that is empowering, <br />
                                 Develop the right mindset that is motivating to keep building character, intelligence,
                                 optimism and creative abilities <br />
                                 Set goals and direct focus, <br />
                                 Be emotionally resilient <br />
                                 Cultivate self-awareness of- values, needs, definition of success
                              </p>
                              
                           </div>
                        </section> 

                        <section id="arbio" class="tabcontent" style="display: none;">
                           <div class="blog-big-wrapper grey-section">
                              <h5>
                                 Agnelorajesh Athaide
                              </h5>
                             
                              <p>
                                 Parents, Teachers and students will have access to courses that are self-paced. that they
                                 can
                                 choose themselves and be intrinsically motivated to complete. They will have information,
                                 tools and resources that will have them:
                              </p>
                              <p class="text-border-left">
                                 Thinking about inner purpose, <br />
                                 Keeping natural curiosity insanely alive, <br />
                                 Questioning the status quo, <br />
                                 Develop ways of thinking and inner dialogue that is empowering, <br />
                                 Develop the right mindset that is motivating to keep building character, intelligence,
                                 optimism and creative abilities <br />
                                 Set goals and direct focus, <br />
                                 Be emotionally resilient <br />
                                 Cultivate self-awareness of- values, needs, definition of success
                              </p>
                              
                           </div>
                        </section>  -->
                        

                     </div>
                  </div>
               </div>
               </div>
         </section>
