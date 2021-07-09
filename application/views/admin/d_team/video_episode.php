 
         <!-- Page Header Ends                              -->
         <!-- Page Body Start-->
         <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
               <div>
                  <div class="logo-wrapper">
                     <a href="<?php echo base_url(); ?>dashboard">">
                        <img class="img-fluid for-light" src="<?php echo base_url(); ?>assets/admin/d_team/assets/images/logo/logo1.png" alt="">
					      </a>
                     <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                     <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
                  </div>
                  <div class="logo-icon-wrapper"><a href="<?php echo base_url(); ?>dashboard"><img class="img-fluid" src="<?php echo base_url();?>assets/admin/d_team/assets/images/logo/favicon_1.png" alt=""></a></div>
                  
             <?php  include('side_bar.php'); ?>

               </div>
            </div>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
               <div class="container-fluid">
                  <div class="page-title">
                     <div class="row">
                        <div class="col-6">
                           <h3>Video Episode</h3>
                        </div>
                        <div class="col-6">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item">
                                 <a href="../dashboard.html">
                                    <i data-feather="home"></i>
                                 </a>
                              </li>
                              <li class="breadcrumb-item">Dashboard</li>
                              <li class="breadcrumb-item active">Video Journal</li>
                           </ol>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container-fluid starts-->
               <div class="container-fluid">
                <div class="row product-page-main p-0">
                    <div class="col-xl-6 xl-100 box-col-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="product-page-details">
                            <h3>Video Journal</h3>
                          </div>
                          <hr>
                          <div>
                             <?php if (!empty($v)) { 
                              foreach ($v as $row){ ?>

                            <table class="product-page-width">
                              <tbody>
                                <tr>
                                  <td> 
                                      <b>Interviewee Name &nbsp;&nbsp;&nbsp;:</b>
                                  </td>
                                  <td><?php echo $row->interviewee_name;?></td>
                                </tr>
                                <tr>
                                  <td>
                                      <b>Date Creation &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b>
                                  </td>
                                  <td class="txt-success"><?php echo $row->c_date;?></td>
                                </tr>
                                <tr>
                                  <td>
                                      <b>No of Segments &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b>
                                  </td>
                                  <td><?php echo $row->segment_no;?></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <hr>
                          <!-- <div class="row">
                            <div class="col-md-6">
                              <h6 class="product-title">Rate Now</h6>
                            </div>
                            <div class="col-md-6">
                              <div class="d-flex">
                                <select id="u-rating-fontawesome" name="rating" autocomplete="off">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                </select><span>(250 review)</span>
                              </div>
                            </div>
                          </div> -->
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 xl-cs-35 box-col-6">
                      <div class="card">
                        <div class="card-body">
                          <!-- side-bar colleps block stat-->
                          <div class="filter-block">
                            <h4>List of Segments</h4>

                          <?php    $title=explode(',', $row->segment_titles); 
                             foreach ($title as $key => $value){

                          ?>

                            <ul>
                              <li>
                                  <a href="#segment"><?php echo $value; ?></a>
                              </li>
                              <!-- <li>
                                  <a href="#"><?php echo $title[1]; ?> </a>
                              </li>
                              <li>
                                  <a href="#"><?php echo $title[2]; ?> </a>
                              </li>
                              <li>
                                  <a href="#"><?php echo $title[3]; ?> </a>
                              </li>
                              <li> -->
                                  
                              </li>
                            <?php } ?>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> 
                <?php } }?>
                  <div class="row">
                    <div class="col-xl-12 xl-100 box-col-6">
                        <div class="card">
                          <div class="card-body" id="segment">
                            <div class="product-page-details">
                              <h3>Segment One</h3>
                            </div>
                            <hr>
                            <div>
                              <h5>Question 1:</h5>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-md-6">
                                <h6 class="product-title">Neuroplastic changes stop at what age?</h6>
                                <p>
                                    Answer : After 18
                                </p>
                              </div>
                            </div>
                            <hr>
                            <div>
                              <h5>Question 2:</h5>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-md-6">
                                <h6 class="product-title">
                                    Your child returns from school and shares that he/she has been bullied and doesn’t want to go back tomorrow. 
                                    What would you do to comfort him/her?
                                </h6>
                                <p>
                                    Answer : Try to tell him/her to be nice to the bullies and at bedtime tell her about how your best-friendship started with an argument
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
               </div>
               <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            
         </div>
      </div>
      <!-- latest jquery-->
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/jquery-3.5.1.min.js"></script>
      <!-- Bootstrap js-->
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- Fontawesome js-->
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/icons/fontawesome.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/icons/fontawesome.min.js"></script>
      <!-- scrollbar js-->
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/scrollbar/simplebar.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/scrollbar/custom.js"></script>
      <!-- Sidebar jquery-->
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/config.js"></script>
      <!-- Plugins JS start-->
      <script src="../<?php echo base_url(); ?>assets/admin/d_team/assets/js/sidebar-menu.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/datatable/datatables/datatable.custom.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/notify/bootstrap-notify.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/dashboard/default.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/datepicker/date-picker/datepicker.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/datepicker/date-picker/datepicker.en.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/datepicker/date-picker/datepicker.custom.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/typeahead/handlebars.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/typeahead/typeahead.bundle.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/typeahead/typeahead.custom.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/typeahead-search/handlebars.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/typeahead-search/typeahead-custom.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/rating/jquery.barrating.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/rating/rating-script.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/ecommerce.js"></script>
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/script.js"></script>
	  <script type="text/javascript">
		  document.getElementById("year").innerHTML = new Date().getFullYear();
	  </script> 
      <!-- login js-->
      <!-- Plugin used-->
      <script src="https://kit.fontawesome.com/3b1776a051.js" crossorigin="anonymous"></script>
   </body>
</html>