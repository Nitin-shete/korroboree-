<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    
            <div class="row justify-content-center">

                <div class="p_sec">
                    <div class="progress">
                        <div class="progress-done" data-done="60">

                        </div>
                    </div>
                </div>

            </div>

            <div class="row justify-content-center midrow">

                <div class="col-lg-1 col-md-1 ">

                    <button class="back bg-grey-dark" id="qe1" disabled >
                        <i class="txt_wht" id="first" data-feather="arrow-left-circle" style="cursor: not-allowed;"></i>
                    </button>
                    
                </div>
                <div class="col-lg-7 col-md-7">

                    <div class="que_bg bg-yellow" id="mcq1">
                        <div class="row">
                            <div class="que txt-grey-dark">
                                The media focuses on negative aspects of news because our brain gets easily attracted to
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="opts" id="back">
                                <div class="row  option1 opt_que " id="opt1" >
                                    <div class="col-lg-11 col-md-11 allow">Good News</div>
                                    <div class="col-lg-1 col-md-1">
                                        <div class="ex wrg1" style="display: none;" aria-disabled="true">
                                            &#215;
                                        </div>
                                    </div>
                                </div>
                                <div class="row option2 opt_que" id="opt2">
                                    <div class="col-lg-11 col-md-11 allow"> Bad News</div>
                                    <div class="col-lg-1 col-md-1">
                                        <p class="check rht" style="display: none; ">
                                            &#x2714;
                                        </p>
                                    </div>
                                </div>
                                <div class="row option3 opt_que " id="opt3" >
                                    <div class="col-lg-11 col-md-11 allow"> Unbiased News</div>
                                    <div class="col-lg-1 col-md-1">
                                        <p class="ex wrg2" style="display: none;">
                                            &#215;
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div id="mcq2" class="que_bg bg-yellow" style="display: none;">
                        <div class="row">
                            <div class="que txt-grey-dark">
                                Your child watches / hears about some disturbing news on TV and asks you about the
                                incident with a
                                certain concern or worry. How are you most likely to handle the situation ?
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="opts" id="back">
                                <div class="row option1 opt_que snqe " id="q2opt1">
                                    <div class="col-lg-11 col-md-11 allow"> Tell your child to forget about it and not
                                        worry
                                        so much.</div>
                                    <div class="col-lg-1 col-md-1">
                                        <p class="ex que2_op1_w1" style="display: none;"> &#215;</p>
                                    </div>

                                </div>
                                <div class="row option2 opt_que snqe" id="q2opt2">
                                    <div class="col-lg-11 col-md-11 allow">Tell your child about the two sides of the
                                        coin and
                                        focus on the positive aspect of the news.</div>
                                    <div class="col-lg-1 col-md-1">
                                        <p class="ex que2_op1_w2" style="display: none;">
                                            &#215;
                                        </p>
                                    </div>


                                </div>
                                <div class=" row option3 opt_que snqe" id="q2opt3">
                                    <div class="col-lg-11 col-md-11 allow"> Explain how a few news channels focus on
                                        negativity
                                        to attract our brains.</div>
                                    <div class="col-lg-1 col-md-1">
                                        <p class="que2_op1_rht" style="display: none;">
                                            &#x2714;
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1" >
                    <button type="button" class="back bg-grey-dark tools" id="qe11" disabled >
                        <div class="top hide_tool">
                            <h3>Input Required</h3>
                            <i></i>
                        </div>
                        <i class="txt_wht allow" id="second" data-feather="arrow-right-circle" style="cursor:not-allowed;" ></i>
                    </button>
                    
                    <button type="button" class="next bg-grey-dark txt_wht tools" id="qe22" style="display: none; cursor:not-allowed;" >

                        <div class="top hide_too">
                            <h3>Input Required</h3>
                            <i></i>
                        </div>
                        
                        <a href="#0" class="next_pop" style="pointer-events:none; " >
                            <i class="txt_wht" data-feather="arrow-right-circle" id="second2" style="cursor:not-allowed;" ></i>
                        </a>

                        <div class="cd-popup" role="alert">
                            <div class="cd-popup-container">
                                <p>Keep moving forward.</p>
                                <ul class="cd-buttons">
                                    <li><a href="<?php echo base_url(); ?>video_journal/seg2">Yes</a></li>
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
                        <center class="seg_clr txt_seg">Segment 1</center>
                        <center class="txt-yellow txt2_seg">Dealing with the brain’s pre-programmed “Negativity Bias”
                        </center>
                    </div>
                </div>
            </div>
            <footer>

                <button type="button" onclick='window.location.href="<?php echo base_url(); ?>video_journal/seg2"' class=" crcl card-yellow tools" id="btn" style="float:right;  margin-right: 34px;"  disabled>
                    <div class="left hide_tool_2">
                        <h3>Input Required</h3>
                        <i></i>
                    </div>
                    <i class="txt-grey-dark btn_tool" style="cursor: not-allowed;" data-feather="chevron-down" ></i>
                        
                </button>

                <button  type="button" class="crcl card-yellow" style="float: right; margin-right: 20px; ">
                    <a href="<?php echo base_url(); ?>video_journal/seg1">
                        <i class="txt-grey-dark" data-feather="chevron-up"></i>
                    </a>
                </button>
            </footer>
        </div>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Bootstrap JS -->
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
        const totalItems = 14;
        const itemsDone = 8;
        var percentage = (itemsDone * 100) / totalItems;
        const $circle = document.querySelector(".bar");
        $circle.style.transform = `rotate(${45 + (percentage * 1.8)}deg)`;
        const percentageProgress = document.querySelector(".number");
        percentageProgress.textContent = `${itemsDone} Documents`;
    </script>
    <script>
        const progress = document.querySelector('.progress-done');

        setTimeout(() => {
            progress.style.opacity = 1;
            progress.style.width = progress.getAttribute('data-done') + '%';
        }, 500)


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

            $('#opt4').click(function () {
                $(".wrg3").show();
                $('#opt4').css('background', '#FEC3C3');
                

            });
        });


    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#q2opt1').click(function () {
                $(".que2_op1_w1").show();
                $('#q2opt1').css('background', '#FEC3C3');
            });


            $('#q2opt2').click(function () {
                $(".que2_op1_w2").show();
                $('#q2opt2').css('background', '#FEC3C3');
            });

            $('#q2opt4').click(function () {
                $(".que2_op1_w3").show();
                $('#q2opt4').css('background', '#FEC3C3');
                
            });




            $('.opt_que').click(function () {
                $('#qe11').prop('disabled', false);
                $('#second').css('cursor','pointer');
                $('#opt2').css('background', '#9EFB87');
                $('.check').show();
                $(".hide_tool").hide();
            });


            $('.snqe').click(function () {
                $('.que2_op1_rht').show();
                $('#qe22').prop('disabled', false);
                $('#second2').css('cursor','pointer');
                $('#q2opt3').css('background', '#9EFB87');
                $('#btn').prop('disabled', false);
                $('.hide_tool_2').hide();
                $('.hide_too').hide();
                $('.left').hide();
                $('.next_pop').css('pointer-events','visible');
                $('.btn_tool').css('cursor','pointer');

            });

        });
    </script>
  <script>
    $(document).ready(function () {
       $("#qe11").click(function () {
          $('#mcq1').hide();
          $('#mcq2').show();
          $('#qe11').hide();
          $('#qe22').show();
          $('#first').css('cursor','pointer');
          $('#qe1').prop('disabled', false);

       });
       $("#qe1").click(function () {
          $('#mcq2').hide();
          $('#mcq1').show();
          $('#qe11').show();
          $('#qe22').hide();
          $('#first').css('cursor','not-allowed');

       });
    });
 </script>
 <!-- <script>
    var count;
    count = 0;
    function select1(x) {

      if (count == 0) {
        x.style.background = '#9EFB87';

      }
      count = count + 1;
    }
  </script> -->

</body>

</html>