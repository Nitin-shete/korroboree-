 
 
      <!-- page-wrapper Start-->
      
         <!-- Page Header Ends                              -->
         <!-- Page Body Start-->
         <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
               <div>
                  <div class="logo-wrapper">
                     <a href="../dashboard.html">
                        <img class="img-fluid for-light" src="<?php echo base_url(); ?>assets/admin/d_team/assets/images/logo/logo1.png" alt="">
                </a>
                     <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                     <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
                  </div>
                  <div class="logo-icon-wrapper"><a href="../dashboard.html"><img class="img-fluid" src="<?php echo base_url(); ?>assets/admin/d_team/assets/images/logo/favicon_1.png" alt=""></a></div>
                  
                  <?php include('side_bar.php'); ?>
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
                              <li class="breadcrumb-item">Video Journal</li>
                              <li class="breadcrumb-item active">Create New Episode</li>
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
                            <h5>Create Video Journal Episode</h5>
                          </div>
                          <div class="card-body">

                            <form class="f1" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>video_journal_add" >
                              <div class="f1-steps">
                                <div class="f1-progress">
                                  <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3"></div>
                                </div>
                                <div class="f1-step active">
                                  <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                                  <p>Interviewee Info</p>
                                </div>
                                <div class="f1-step">
                                  <div class="f1-step-icon"><i class="fa fa-folder"></i></div>
                                  <p>Segment Info</p>
                                </div>
                                <div class="f1-step">
                                  <div class="f1-step-icon"><i class="fa fa-eye"></i></div>
                                  <p>Preview</p>
                                </div>
                              </div>
                              <fieldset>
                                <div class="mb-2">
                                  <label for="f1-first-name">Interviewee Name</label>
                                  <input class="form-control" id="f1-first-name" type="text" name="interviewee_name" placeholder="Enter Interviewee Name Here" onchange="document.getElementById('iname').innerHTML=this.value;">
                                </div>  
                                <div class="mb-2">
                                  <label for="f1-last-name">Interviewee Image</label>
                                  <input class="f1-last-name form-control" id="f1-last-name" type="file" name="interviewee_image" accept="gif|jpg|png"  onchange="readURL(this);">
                                </div>
                                <div class="mb-2">
                                    <label class="col-form-label" for="">Date</label>
                                    <h5><?php echo date("d/m/Y")?></h5>
              
                                <input class="form-control" id="f1-date" name="date" type="hidden" value="<?php echo date("d/m/Y")?>" onchange="document.getElementById('iimage').src = window.URL.createObjectURL(this.files[1])">

                                </div>
                                <div class="f1-buttons">
                                  <button class="btn btn-primary btn-next" type="button">Next</button>
                                </div>
                              </fieldset>
                              <fieldset>
                                <div class="mb-2">
                                    <label for="f1-last-name">Upload Story Board</label>
                                    <input class="f1-last-name form-control" id="f1-last-name" multiple="multiple"  type="file" name="inner_image[]" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"> 
                                </div>

                                <div class="mb-2">
                                    <div id="container"> 

                                  <label class="sr-only" for="">No of Segments</label>
                                  <input class="f1-email form-control" id="number" type="number" placeholder="Enter No of Segments"min="1" max="20" onkeydown="javascript: return event.keyCode == 69 ? false : true" placeholder="0" required tabindex="6">
                                   <input id="topnum" type="hidden" name="segment_no" >

                                </div>
                                </div>
                                <!-- <div class="mb-2">
                                  <label class="sr-only" for="">Segments</label>
                                  <input class="f1-password form-control" id="f1-password" type="text" name="segment_title[]" placeholder="Enter Segment Title" onchange="document.getElementById('st1').innerHTML=this.value;">
                                </div> -->
                                
                                <div id="view"></div>

                               
                                <div class="f1-buttons">
                                  <button class="btn btn-primary btn-previous" type="button">Previous</button>
                                  <button class="btn btn-primary btn-next" type="button">Next</button>
                                </div>
                              </fieldset>
                              <fieldset>
                                <div class="mb-2">
                                    <label for="f1-first-name">Interviewee Name</label>
                                    <h5 id="iname"></h5>
                                </div>
                                <div class="mb-2">
                                    <label for="f1-last-name">Interviewee Image</label>
                                    <img class="b-r-10 f1-last-name" id="abc" style="height:40px;width:40px;"   alt="profile">
                                </div>
                                <div class="mb-2">
                                    <label class="col-form-label">Date</label>
                                    <h5 id="dt"><?php echo date("d/m/Y")?></h5>
                                </div>
                             
                                <div class="mb-2">
                                    <label for="f1-last-name">Storyboard Uploaded</label>
                                    <iframe id="blah" frameborder="0" width="100%" height="900px"></iframe>
                                   <!--  <iframe src="<?php echo base_url();?>assets/admin/d_team/assets/doc/document.pdf" frameborder="0" width="100%" height="900px"></iframe>  -->                                   
                                </div>
                                <div class="mb-2">
                                    <label class="col-form-label" for="">No of Segments</label>
                                    <h5 id="s_n"></h5>
                                </div>  
 
                                <div id="views"> </div>

                                <div class="f1-buttons">
                                  <button class="btn btn-primary btn-previous" type="button">Previous</button>
                                  <button class="btn btn-primary btn-submit" type="submit">Submit</button>
                                </div>
                              </fieldset>
                            </form>
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

<script type="text/javascript">
  
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#abc').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>


<script>

$('#number').on('change keyup',function(){
  let inputs = '';
  let value = parseInt($(this).val());
 

  for(let i = 0;i<value;i++){
    inputs += `<input class="f1-password form-control" id="f1-password" type="text" name="segment_title[]" placeholder="Enter Segment Title" onchange="document.getElementById('st${i+1}').innerHTML=this.value;">`
  }
   $('#s_n').val(value);
   $('#topnum').val(value)

  $('#s_n').html(value)
  $('#view').html(inputs)

})
// <input autocomlete="off" type="text" id="server_name${i+1}" name="server_name${i+1}" maxlength="8" tabindex="${i+6+1}" required /></br>


</script>


<script>


$('#number').on('change keyup',function(){
  let inputs = '';
  let value = parseInt($(this).val());
 

  for(let i = 0;i<value;i++){
    inputs += `<div class="mb-2">
                                    <label class="col-form-label" for="">Segment Title</label>
                                    <div id=vi">
                                    <h5 id="st${i+1}"></h5> </div>
                                </div>` 
  }
   $('#s_n').val(value);
   $('#topnum').val(value)

  // $('#s_n').html(value)
  $('#views').html(inputs)
    

})
</script>


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
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/form-wizard/form-wizard-three.js"></script>
      <script src="<?php echo base_url(); ?>assets/admin/d_team/assets/js/form-wizard/jquery.backstretch.min.js"></script>
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