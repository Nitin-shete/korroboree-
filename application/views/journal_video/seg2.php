
            <div class="row justify-content-center  midrow_vid ">

                <div class="col-lg-7 col-md-7">
                    <a id="playvideo" class="video-play-button active" href="#">
                        <span></span>
                      </a>

                      <div class="plyr__video-embed" id="banner-video">
                        <video class="video_size" id="vid_play" controls onended="setTimeout(ends, 1000)"  onplay="myfunction()">
                          <source src="<?php echo base_url(); ?>assets/video_journal/assets/videos/Segment 1.mp4" type="video/mp4" />
                        </video>
                      </div>
                </div> 

            </div>
 
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-7">
                    <div class="seg_back bg-grey-dark font_tahoma ">
                        <center class="seg_clr txt_seg">Segment 2</center>
                        <center class="txt-yellow txt2_seg">Train the mind to train the brain to train the mind!
                        </center>
                    </div>
                </div>
            </div>
            
            <footer>

                <div class=" crcl card-yellow" style="float: right;  margin-right: 34px;">
                    <a href="<?php echo base_url(); ?>video_journal/quet2">
                        <i class="txt-grey-dark" data-feather="chevron-down"></i>
                    </a>
                </div>

                <div class="crcl card-yellow" style="float: right;  margin-right: 20px;">
                    <a href="<?php echo base_url(); ?>video_journal/quet1">

                        <i class="txt-grey-dark" data-feather="chevron-up"></i>
                    </a>
                </div>
            </footer>
        </div>
    </div>



    <script src="https://use.fontawesome.com/89c5d0e030.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/video_journal/assets/js/myscript.js"></script>
    <script src="<?php echo base_url(); ?>assets/video_journal/assets/grids/js/jquery-3.5.1.slim.js"></script>
    <script src="<?php echo base_url(); ?>assets/video_journal/assets/grids/js/popper.js"></script>
    <script src="<?php echo base_url(); ?>assets/video_journal/assets/grids/js/bootstrap.js"></script>

    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace()
    </script>

    <script type="text/javascript">
        $(document).ready(function () {



        });


        function ends() {
            window.location.href = "<?php echo base_url(); ?>video_journal/quet2"

        }
    </script>
   
   <script>
    $(document).ready(function () {
      var ctrlVideo = document.getElementById("vid_play");


      $('#playvideo').click(function () {
        if ($('#playvideo').hasClass("active")) {

          ctrlVideo.play();

          
          
        } else {

          ctrlVideo.pause();

        }
      });


    });
  </script>
   <script>
    function myfunction() {
      document.getElementById("playvideo").style.display="none";

  }
</script>
</body>

</html>