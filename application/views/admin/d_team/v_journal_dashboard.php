


         <!-- Page Header Ends                              -->
         <!-- Page Body Start-->
         <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
               <div> 
                  <div class="logo-wrapper">
                     <a href="#">
                        <img class="img-fluid for-light" src="<?php echo base_url(); ?>assets/admin/d_team/assets/images/logo/logo1.png" alt="">
					      </a>
                     <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                     <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
                  </div>
                  <div class="logo-icon-wrapper"><a href="#"><img class="img-fluid" src="<?php echo base_url(); ?>assets/admin/d_team/assets/images/logo/favicon_1.png" alt=""></a></div>
                 <?php include("side_bar.php"); ?>

               </div>
            </div>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
               <div class="container-fluid">
                  <div class="page-title">
                     <div class="row">
                        <div class="col-6">
                           <h3>Video Journal</h3>
                           <div style="text-align: center;"><?php echo $this->session->flashdata("success"); ?></div>
                        </div>
                        <div class="col-6">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item">
                                 <a href="#">
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
                  <div class="row second-chart-list third-news-update">
                    <div class="col-sm-12">
						<div class="card">
						  <div class="card-header">
							  <h5 style="text-transform:none";>List of episodes created by korroboree team</h5>
							  <div class="card-header-right">
								  <h6>
									  <a href="<?php echo base_url(); ?>admin/video_create">Create new episode</a>
								  </h6>
							  </div> 
						  </div>
						  <div class="card-body">
							<div class="table-responsive">
							  <table class="display" id="basic-10">
								<thead>
								  <tr>
                 <th>Sl.No</th>  
									<th>Interviewee Name</th>
									<th>Interviewee Image</th>
									<th>Segments</th>
									<th>Date</th>
									<th>Story Board</th>
									<th>Actions</th>  
								  </tr>
								</thead>
								<tbody>
                  <?php if (!empty($v)) {
                                               $no = 1;
                                            foreach ($v as $row) {
                      //  $id= $row->episode_number;
                                            
                                          ?> 

								  
									<td><?php echo $no++; ?></td>
									<td style="font-weight: 700; color: #337eb0;"><?php echo $row->interviewee_name;?></td>
									<td>
                    <img name="image" style="height:40px; width:40px;" src="<?php echo base_url(); ?>uploads/images/<?php echo $row->interviewee_image ?>">
                      <!-- <img class="b-r-10" style="height:40px; width:40px;" src="uploads/<?php echo $row->interviewee_image;?>" alt=""> -->
                      </td>

									<td><?php echo $row->segment_no;?></td>
									<td>
										<?php echo $row->c_date;?>
									</td>
								

                    <td>


                     

                    
                    <?php    $sfile=explode(',', $row->storyboard_file); 
                         foreach ($sfile as $key => $row->storyboard_file){ ?>

                                          
                                          
                   <a target="_blank" id="myFrame" href="<?php echo base_url();?>uploads/files/<?php echo $row->storyboard_file;?>" style="color:#f03f37; cursor: pointer;" type="button">
                       <?php if(substr($row->storyboard_file,-3)=='pdf' ){?>
                    
                      <i class="far fa-file-pdf fa-2x"></i>
                    <?php }?>
                       <?php if(substr($row->storyboard_file ,-3)=='doc' ){?>
                      <i class="far fa-file-word fa-2x"></i>
                    <?php }?>
                       <?php if(substr($row->storyboard_file ,-4)=='docx' ){?>
                      <i class="far fa-file-word fa-2x"></i>
                    <?php }?>
                       <?php if(substr($row->storyboard_file ,-3)=='ppt' ){?>
                      <i class="far fa-file-powerpoint fa-2x"></i>
                      <?php }?>
                      <?php if(substr($row->storyboard_file ,-4)=='pptx' ){?>
                      <i class="far fa-file-powerpoint fa-2x"></i>
                      <?php }?>

                      <?php } ?>

                   
                    </a>
                    
                     


                                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- <embed src="<?php echo base_url(); ?>assets/admin/d_team/assets/doc/document.pdf" type="application/pdf" width="100%" height="600px" /> -->
                                                        
                                                        <iframe src="<?php echo base_url();?>uploads/<?php echo $row->storyboard_file;?>;" frameborder="0" width="100%" height="600px"></iframe>

                                                        <!-- <iframe src="<?php echo base_url(); ?>assets/admin/d_team/assets/doc/document.pdf" frameborder="0" width="100%" height="600px"></iframe> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
									</td>
									<td>
                    <form  method="post" id="<?php echo $row->id ?>" novalidate="" enctype="multipart/form-data" action="<?php base_url(); ?>video_episod"> 
                     <input type="hidden" value="<?php echo $row->id;?>" name="id">
										<a  style="color:#337eb0; cursor: pointer; font-weight: 600;"onclick="document.getElementById('<?php echo $row->id ?>').submit();">
                                            View
                                        </a></form>
									</td>
								  </tr>	
                <?php }} ?>
								</tbody>
                
								<tfoot>
								  <tr>
									<th>Sl.No</th>  
									<th>Interviewee Name</th>
									<th>Interviewee Image</th>
									<th>Segments</th>
									<th>Date</th>
									<th>Story Board</th>
									<th>Actions</th>
								  </tr>
								</tfoot>
							  </table>
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
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/sidebar-menu.js"></script>
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