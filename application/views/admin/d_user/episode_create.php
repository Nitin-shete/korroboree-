
         <!-- Page Header Ends                              -->
         <!-- Page Body Start-->
         <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
               <div>
                  <div class="logo-wrapper">
                     <a href="#">
                        <img class="img-fluid for-light" src="<?php echo base_url(); ?>assets/admin/d_user/assets/images/logo/5thdt.png" alt="">
                </a>
                     <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                     <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
                  </div>
                  <div class="logo-icon-wrapper"><a href="#"><img class="img-fluid" src="<?php echo base_url(); ?>assets/admin/d_user/assets/images/logo/favicon_1.png" alt=""></a></div>

                 <?php include('side_bar.php'); ?>

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
                  <div class="row product-page-main p-0">
                     <div class="col-sm-12">
                        <div class="card">
                           <div class="card-header">
                             <h5>Create Page Segment</h5>
                           </div>
                           <form class="form theme-form" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/v5/video_save">
                             
                            <?php if (!empty($v)) { 
                               
                              foreach ($v as $row){ ?> 

                              <input type="hidden" value="<?php echo $row->id;?>" name="video_journal_id">
                              

                             <div class="card-body">
                               <div class="row">
                                   <div class="col">
                                   <div class="mb-3 row">
                                     <label class="col-sm-3 col-form-label">Select page title</label>
                                     <div class="col-sm-9">

                                       <select class="custom-select form-select" name="page_title">
                                          <option selected="">Select page title</option>
                                           <?php    $title=explode(',', $row->segment_titles); 
                                          foreach ($title as $key => $value){ ?>

                                          <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                          
                                        
                                      <?php } }}?>
                                      </select>

                                     </div>
                                   </div>
                                   <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label pt-0">Date</label>
                                    <div class="col-sm-9">
                                      <div class="form-control-static">
                                      <?php echo date("d/m/Y")?>
                                      <input type="hidden" value="<?php echo date("d/m/Y")?>" name="date" >
                                      </div>
                                    </div>
                                   </div>
                                   <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Upload segments video</label>
                                    <div class="col-sm-9">
                                 <input class="form-control" type="file" name="s_video">
                                    </div>
                                  </div>
                                  <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Enter no of question for segment</label>
                                    <div class="col-sm-9">
                                      <input class="form-control" name="no_question"id="q_number" type="number" placeholder="Enter no of question for segment" onkeydown="javascript: return event.keyCode == 69 ? false : true" placeholder="0" required tabindex="6">
                                    </div>
                                  </div>
                              
                             
                                  <!-- <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Create Options</label>
                                    <div class="col-sm-6">
                                      <input class="form-control" type="text" placeholder="Type your title in Placeholder">
                                    </div>
                                    <div class="col-sm-3">
                                       <select class="custom-select form-select">
                                          <option selected="">Select Answer Type</option>
                                          <option value="1">YES</option>
                                          <option value="2">NO</option>
                                        </select>
                                    </div>
                                  </div> -->

                                  <div id="view"></div>
                                  

                                  <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Select custom input (If Required - OPTIONAL)</label>
                                    <div class="col-sm-9">
                                      <select class="custom-select form-select" name="custom_input">
                                         <option selected="">Select custom input (If Required - OPTIONAL)</option>
                                         <option value="yes">YES</option>
                                         <option value="no">NO</option>
                                       </select>
                                    </div>
                                  </div>
                                  <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Clues</label>
                                    <div class="col-sm-9">
                                      <input class="form-control" name="clues" type="text" placeholder="Type your title in placeholder">
                                    </div>
                                  </div>
                                 </div>
                               </div>
                             </div>
                             <div class="card-footer text-end">
                               <div class="col-sm-9 offset-sm-3">
                                 <button class="btn btn-primary" type="submit">CREATE</button>
                                 <input class="btn btn-light"  type="reset" value="Cancel">
                               </div>
                             </div>
                           </form>
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

   <script>

$('#q_number').on('change keyup',function(){
  let inputs = '';
  let value = parseInt($(this).val());
 

  for(let i = 0;i<value;i++){
    inputs +=         `<div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Create question for segments</label>
                                    <div class="col-sm-9">
                                      <input class="form-control" name="question[]" type="text" placeholder="Create question for segments">
                                    </div>
                                  </div>
                                  <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Select question type</label>
                                    <div class="col-sm-9">
                                      <select class="custom-select form-select" name="question_type[]">
                                         <option selected="">Select question type</option>
                                         <option value="mcq">MCQ's</option>
                                         <option value="single_choice">Single Choice</option>
                                         <option value="three">Three</option>
                                       </select>
                                    </div>
                                  </div>
                                  <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Enter no of options for question</label>
                                    <div class="col-sm-9">
                                      <input class="form-control options_number" name="no_option[]"  placeholder="Enter no of options for question" type="number" onchange="add(this);"  placeholder="0" required tabindex="6">
                                    </div>
                                  </div> 
                                  
                                  <div class="optionsx" style="border:none "></div>
                                 
                                  </div>` 
  }
   $('#s_n').val(value);;
   $('#topnum').val(value)

  $('#s_n').html(value)
  $('#view').html(inputs)

})



function add(x){
  let inputs = '';
  let value = parseInt($(x).val());
  //alert(value);
     for(let i = 0;i<value;i++){
    inputs += ` <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Create Options</label>
                                    <div class="col-sm-6">
                                      <input class="form-control" type="text" name="option_title[]" placeholder="Type your title in Placeholder">
                                    </div>
                                    <div class="col-sm-3">
                                       <select class="custom-select form-select" name="ans_type[]">
                                          <option selected="">Select Answer Type</option>
                                          <option value="yes">YES</option>
                                          <option value="no">NO</option>
                                        </select>
                                  </div></div>` 
  }
    $('.optionsx').html(inputs)
}
</script>
</html>