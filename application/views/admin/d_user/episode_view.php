
         <!-- Page Header Ends                              -->
         <!-- Page Body Start-->
         <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
               <div>
                  <div class="logo-wrapper">
                     <a href="../dashboard.html">
                        <img class="img-fluid for-light" src="<?php echo base_url(); ?>assets/admin/d_user/assets/images/logo/logo1.png" alt="">
                </a>
                     <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                     <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
                  </div>
                  <div class="logo-icon-wrapper"><a href="../dashboard.html"><img class="img-fluid" src="<?php echo base_url(); ?>assets/admin/d_user/assets/images/logo/favicon_1.png" alt=""></a></div>

                 <?php include('side_bar.php') ?>

               </div>
            </div>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
               <div class="container-fluid">
                  <div class="page-title">
                     <div class="row">
                        <div class="col-6">
                           <h3></h3>
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
                            <div class="row">
                              <div class="col-md-6">
                                 <h6 class="product-title">StoryBoard Uploaded</h6> 
                                <div>
                                 <table class="product-page-width">
                                    <tbody>
                                      <tr>
                                        <td> 
                                            <b>StoryBoard Name &nbsp;&nbsp;&nbsp;:</b>
                                        </td>
                                        <td> Rick Hanson</td>
                                      </tr>
                                      <tr>
                                        <td>
                                            <b>Document Type &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b>
                                        </td>
                                        <td>
                                        <?php    $filetype=explode(',', $row->storyboard_file); 
                                          foreach ($filetype as $key => $file){ ?>

                                          
                     <?php if(substr($file,-3)=='pdf' ){?>
                    
                        <samp>PDF,</samp> 
                    <?php }?>
                       <?php if(substr($file ,-3)=='doc' ){?>
                        <samp>word,</samp>
                    <?php }?>
                       <?php if(substr($file ,-4)=='docx' ){?>
                        <samp>word,</samp>
                    <?php }?>
                       <?php if(substr($file ,-3)=='ppt' ){?>
                      <samp>PPT,</samp>
                      <?php }?>
                      <?php if(substr($file ,-4)=='pptx'){?>
                        <samp>PPT,</samp>
                      <?php }?>

                      <?php } ?>
                    </td>
                                      </tr>
                                      <tr>
                                        <td>
                                            <b>View Document &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b>
                                        </td>
                                        <td>
                                          <!-- <a href="#" style="color:#f03f37; cursor: pointer;" type="button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">
                                             <i class="far fa-file-pdf fa-2x"></i>
                                          </a> -->

                                          
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
                      <?php if(substr($row->storyboard_file ,-4)=='pptx'){?>
                        <i class="far fa-file-powerpoint fa-2x"></i>
                        <?php }?>
                   
                     
                    </a>   
                    
                                          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                             <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                      <div class="modal-header">
                                                         <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                                         <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">
                                                         <!-- <embed src="<?php echo base_url(); ?>assets/admin/d_user/assets/doc/document.pdf" type="application/pdf" width="100%" height="600px" /> -->
                                                         <iframe src="<?php echo base_url();?>uploads/files/<?php echo $row->storyboard_file;?>"    frameborder="0" width="100%" height="700px"></iframe>
                                                      </div>
                                                </div>
                                             </div>
                                          </div>
                                          <?php } ?>
                                        </td>                                        
                                      </tr>
                                    </tbody>
                                  </table>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>                    
                  </div>
                  <div class="row">
                     <div class="col-xl-12">
                       <div class="card">
                         <div class="card-header">
                           <h5>List of Segments</h5>
                         </div>
                         <div class="card-body">
                           <div class="todo">
                             <div class="todo-list-wrapper">
                               <div class="todo-list-container">
                                 <div class="mark-all-tasks">
                                   <div class="add-task-btn-wrapper">
                                      <span class="add-task-btn">

                                        <form  method="post" id="<?php echo $row->id ?>" novalidate="" enctype="   multipart/form-data" action="<?php base_url(); ?>episode_create"> 
                                        <input type="hidden" value="<?php echo $row->id;?>" name="id">
                                          <a  style="color:#337eb0; cursor: pointer; font-weight: 600;"onclick="document.getElementById('<?php echo $row->id ?>').submit();">
                                             <button class="btn btn-primary"><i class="icon-plus"></i> Create New Episode</button>
                                          </a> </form>

                                          <?php }} ?>

<!-- 
                                          <form  method="post" id="<?php echo $row->id ?>" novalidate="" enctype="multipart/form-data" action="<?php base_url(); ?>episode_view"> 
                     <input type="hidden" value="<?php echo $row->id;?>" name="id">
                    <a  style="color:#337eb0; cursor: pointer; font-weight: 600;"onclick="document.getElementById('<?php echo $row->id ?>').submit();">
                                            View
                                        </a></form> -->

                                       </span>
                                    </div>
                                 </div>
                                 <div class="todo-list-body">
                                   <ul id="todo-list">
                                     <li class="task">
                                       <div class="task-container">
                                         <h4 class="task-label">Weekly Bigbazar Shopping </h4>
                                         <span class="task-action-btn">
                                            <span class="action-box large delete-btn" title="Delete Task"><i class="icon"><i class="icon-trash"></i></i></span>
                                            <a href="<?php echo base_url(); ?>admin/v5/episode_update">
                                             <span class="action-box large complete-btn" title="Edit Task"><i class="icon"><i class="icon-pencil"></i></i></span>
                                            </a>
                                            <span class="action-box large complete-btn" title="View Task"><i class="icon"><i class="icon-desktop"></i></i></span>
                                         </span>
                                       </div>
                                     </li>
                                     <li class="task">
                                       <div class="task-container">
                                         <h4 class="task-label">Go Outside Picnic on Sunday</h4>
                                         <span class="task-action-btn">
                                            <span class="action-box large delete-btn" title="Delete Task"><i class="icon"><i class="icon-trash"></i></i></span>
                                            <a href="episode_update.html">
                                             <span class="action-box large complete-btn" title="Edit Task"><i class="icon"><i class="icon-pencil"></i></i></span>
                                            </a>
                                            <span class="action-box large complete-btn" title="View Task"><i class="icon"><i class="icon-desktop"></i></i></span>
                                         </span>
                                       </div>
                                     </li>
                                     <li class="task">
                                       <div class="task-container">
                                         <h4 class="task-label">Write a blog post </h4>
                                         <span class="task-action-btn">
                                            <span class="action-box large delete-btn" title="Delete Task"><i class="icon"><i class="icon-trash"></i></i></span>
                                            <a href="episode_update.html">
                                             <span class="action-box large complete-btn" title="Edit Task"><i class="icon"><i class="icon-pencil"></i></i></span>
                                            </a>
                                            <span class="action-box large complete-btn" title="View Task"><i class="icon"><i class="icon-desktop"></i></i></span>
                                         </span>
                                       </div>
                                     </li>
                                   </ul>
                                 </div>
                               </div>
                             </div>
                             <div class="notification-popup hide">
                               <p><span class="task"></span><span class="notification-text"></span></p>
                             </div>
                           </div>
                           <!-- HTML Template for tasks-->
                           <script id="task-template" type="tect/template">
                             <li class="task">
                             <div class="task-container">
                             <h4 class="task-label"></h4>
                             <span class="task-action-btn">
                             <span class="action-box large delete-btn" title="Delete Task">
                             <i class="icon"><i class="icon-trash"></i></i>
                             </span>
                             <span class="action-box large complete-btn" title="Mark Complete">
                             <i class="icon"><i class="icon-check"></i></i>
                             </span>
                             </span>
                             </div>
                             </li>
                           </script>
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
      <script src="<?php echo base_url(); ?>assets/admin/d_user/assets/js/jquery-3.5.1.min.js"></script>
      <!-- Bootstrap js-->
      <script src="<?php echo base_url(); ?>assets/admin/d_user/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="<?php echo base_url(); ?>assets/admin/d_user/assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_user/assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- Fontawesome js-->
      <script src="<?php echo base_url(); ?>assets/admin/d_user/assets/js/icons/fontawesome.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_user/assets/js/icons/fontawesome.min.js"></script>
      <!-- scrollbar js-->
      <script src="<?php echo base_url(); ?>assets/admin/d_user/assets/js/scrollbar/simplebar.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_user/assets/js/scrollbar/custom.js"></script>
      <!-- Sidebar jquery-->
      <script src="<?php echo base_url(); ?>assets/admin/d_user/assets/js/config.js"></script>
      <!-- Plugins JS start-->
      <script src="../<?php echo base_url(); ?>assets/admin/d_user/assets/js/sidebar-menu.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_user/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_user/assets/js/datatable/datatables/datatable.custom.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_user/assets/js/notify/bootstrap-notify.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_user/assets/js/dashboard/default.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_user/assets/js/datepicker/date-picker/datepicker.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_user/assets/js/datepicker/date-picker/datepicker.en.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_user/assets/js/datepicker/date-picker/datepicker.custom.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_user/assets/js/typeahead/handlebars.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_user/assets/js/typeahead/typeahead.bundle.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_user/assets/js/typeahead/typeahead.custom.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_user/assets/js/typeahead-search/handlebars.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_user/assets/js/typeahead-search/typeahead-custom.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_user/assets/js/rating/jquery.barrating.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_user/assets/js/rating/rating-script.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_user/assets/js/ecommerce.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_user/assets/js/todo/todo.js"></script>
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="<?php echo base_url(); ?>assets/admin/d_user/assets/js/script.js"></script>
    <script type="text/javascript">
      document.getElementById("year").innerHTML = new Date().getFullYear();
    </script> 
      <!-- login js-->
      <!-- Plugin used-->
      <script src="https://kit.fontawesome.com/3b1776a051.js" crossorigin="anonymous"></script>
   </body>
</html>