
            <div class="row justify-content-center">

                <div class="p_sec">
                    <div class="progress">
                        <div class="progress-done" data-done="60">

                        </div>
                    </div>
                </div>

            </div>

            <div class="row justify-content-center  midrow">

                <div class="col-lg-1 col-md-1 ">

                    <button class="back bg-grey-dark" id="qe1" disabled >
                        <i class="txt_wht" id="first" data-feather="arrow-left-circle" style="cursor: not-allowed;"></i>
                    </button>

                </div>
                <div class="col-lg-7 col-md-7">

                    <div class="que_bg bg-yellow" id="mcq1">
                        <div class="row">
                            <div class="que txt-grey-dark">
                                Why is finding what’s sacred for your child important?
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="opts" id="back">
                                <div class="row option2 opt_que" id="opt1">
                                    <div class="col-lg-11 col-md-11">To help them perform well in exams</div>
                                    <div class="col-lg-1 col-md-1">
                                        <span class="ex wrg1" style="display: none;" aria-disabled="true">&#215;</span>
                                    </div>
                                </div>
                                <div class="row option2 opt_que" id="opt2">
                                    <div class="col-lg-11 col-md-11">To help them lead a purposeful life</div>
                                    <div class="col-lg-1 col-md-1">
                                        <p class="check rht" style="display: none; ">
                                            &#x2714;
                                        </p>
                                    </div>
                                </div>
                                <div class=" row option3  opt_que" id="opt3">
                                    <div class="col-lg-11 col-md-11">To make them excel in specific areas of life </div>
                                    <div class="col-lg-1 col-md-1">
                                        <p class="ex wrg2" style="display: none;">
                                            &#215;
                                        </p>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1">
                   
                   
                    
                    <button type="button" class="next bg-grey-dark txt_wht tools" id="qe22" style="cursor:not-allowed;">

                        <div class="top">
                            <h3>Input Required </h3>
                            <i></i>
                        </div>
                        <a href="#0"class="next_pop" style="pointer-events:none;">
                            <i class="txt_wht" data-feather="arrow-right-circle" id="second2" style="cursor:not-allowed;"></i>
                        </a>

                        <div class="cd-popup" role="alert">
                            <div class="cd-popup-container">
                                <p>Benjamin Franklin said ‘An investment in knowledge pays the best interest’. Let’s take his advice!</p>
                                <ul class="cd-buttons">
                                    <li><a href="<?php echo base_url(); ?>video_journal/seg13">Yes</a></li>
                                    <li><a href="<?php echo base_url(); ?>video_journal/index">No</a></li>
                                </ul>
                                <a href="#0" class="cd-popup-close img-replace">Close</a>
                            </div>
                        </div>
                    </button>
                </div>

            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-7 mt-10">
                    <div class="seg_back bg-grey-dark font_tahoma ">
                        <center class="seg_clr txt_seg">Segment 12</center>
                        <center class="txt-yellow txt2_seg">Finding what’s sacred and meaningful for kids</center>
                    </div>
                </div>
            </div>
            <footer>
                <button type="button" onclick='window.location.href="<?php echo base_url(); ?>video_journal/seg13"' class=" crcl card-yellow tools" id="btn" style="float:right;  margin-right: 34px;"  disabled>
                    <div class="left hide_tool_2">
                        <h3>Input Required </h3>
                        <i></i>
                    </div>
                    <i class="txt-grey-dark btn_tool" style="cursor: not-allowed;" data-feather="chevron-down" ></i>
                        
                </button>

                <button  type="button" class="crcl card-yellow" style="float: right; margin-right: 20px; ">
                    <a href="<?php echo base_url(); ?>video_journal/seg12">
                        <i class="txt-grey-dark" data-feather="chevron-up"></i>
                    </a>
                </button>
            </footer>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <!-- <script src="<?php echo base_url(); ?>assets/video_journal/assets/js/modal.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/video_journal/assets/js/pop.js"></script>
    <script src="<?php echo base_url(); ?>assets/video_journal/assets/js/myscript.js"></script>
    <script src="<?php echo base_url(); ?>assets/video_journal/assets/grids/js/jquery-3.5.1.slim.js"></script>
    <script src="<?php echo base_url(); ?>assets/video_journal/assets/grids/js/popper.js"></script>
    <script src="<?php echo base_url(); ?>assets/video_journal/assets/grids/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/video_journal/assets/fonts/js/all.js"></script>
    <script src="<?php echo base_url(); ?>assets/video_journal/assets/fonts/js/all.min.js"></script>

    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace()
    </script>

    <script type="text/javascript">
        $(".but").click(function () {
            $(this).toggleClass("right");
        });
    </script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#opt1').click(function () {
             
            $(".wrg1").show();
            $('#opt1').css('background', '#FEC3C3');
        });
       

        $('#opt3').click(function () {
            $(".wrg2").show();
            $('#opt3').css('background', '#FEC3C3');
        });

        $('.opt_que').click(function () {
            $('#qe11').prop('disabled', false);
            $('#second2').css('cursor','pointer');
            $('#opt2').css('background', '#9EFB87');
            $('.check').show();
            $(".hide_tool").hide();

            $('#second2').css('cursor','pointer');
            $('#btn').prop('disabled', false);
            $('.hide_tool_2').hide();
            $('.top').hide();
            $('.btn_tool').css('cursor','pointer');
            $('.next_pop').css('pointer-events','visible');
        });

        
    });
  


</script>

    



    <script>
        const progress = document.querySelector('.progress-done');

        setTimeout(() => {
            progress.style.opacity = 1;
            progress.style.width = progress.getAttribute('data-done') + '%';
        }, 500)


    </script>


</body>

</html>