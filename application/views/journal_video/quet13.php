
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
                                Why do you think it is important to be able to view any situation from different
                                perspectives?

                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="opts" id="back">

                                <div class="row option1 opt_que" id="opt1" onclick="select1(this)">
                                    <div class="col-lg-11 col-md-11">To know that we are not always right</div>
                                    <div class="col-lg-1 col-md-1">
                                        <p class="ex wrg1" style="display: none; ">
                                            &#215;
                                        </p>
                                    </div>
                                </div>

                                <div class=" row option3 opt_que" id="opt3" onclick="select1(this)">
                                    <div class="col-lg-11 col-md-11">To make better decisions in future</div>
                                    <div class="col-lg-1 col-md-1">
                                        <p class="ex wrg2" style="display: none;">
                                            &#215;
                                        </p>
                                    </div>
                                </div>
                                <div class="row option2 opt_que" id="opt2" onclick="select1(this)">
                                    <div class="col-lg-11 col-md-11">To enable your child to be the compassionate and
                                        empathetic towards others who are different than us </div>
                                    <div class="col-lg-1 col-md-1">
                                        <p class="check rht" style="display: none; ">
                                            &#x2714;
                                        </p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>


                    <div id="mcq2" class="que_bg bg-yellow" style="display: none;">
                        <div class="row">
                            <div class="que txt-grey-dark">
                                You pick up an argument with your partner in front of your child. Once things settle down, what
                                do you think you should do?

                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="opts" id="back">
                                <div class="row option1 opt_que snqe" id="q2opt1">
                                    <div class="col-lg-11 col-md-11">Ignore the fact that your child watched you argue</div>
                                    <div class="col-lg-1 col-md-1">
                                        <p class="ex que2_op1_w1" style="display: none;"> &#215;</p>
                                    </div>

                                </div>
                               
                                <div class=" row option3 opt_que snqe" id="q2opt3">
                                    <div class="col-lg-11 col-md-11"> Explain to him/her the differences in opinion that led to
                                        the argument (in a way that he/she can understand)
                                    </div>
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
                <div class="col-lg-1 col-md-1">
                    <button type="button" class="back bg-grey-dark tools" id="qe11" disabled >
                        <div class="top hide_tool">
                            <h3>Input Required </h3>
                            <i></i>
                        </div>
                        <i class="txt_wht allow" id="second" data-feather="arrow-right-circle" style="cursor:not-allowed;" ></i>
                    </button>
                    
                    <button type="button" class="next bg-grey-dark txt_wht tools" id="qe22" style="display: none; cursor:not-allowed;">

                        <div class="top">
                            <h3>Input Required </h3>
                            <i></i>
                        </div>
                        <a href="#0"class="next_pop" style="pointer-events:none;">
                            <i class="txt_wht" data-feather="arrow-right-circle" id="second2"></i>
                        </a>

                        <div class="cd-popup" role="alert">
                            <div class="cd-popup-container">
                                <p>Every human being is a creative work in progress. Time to progress to the next segment.</p>
                                <ul class="cd-buttons">
                                    <li><a href="seg14.html">Yes</a></li>
                                    <li><a href="index.html">No</a></li>
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
                        <center class="seg_clr txt_seg">Segment 13</center>
                        <center class="txt-yellow txt2_seg">Why is looking at a situation from various perspectives important?</center>
                    </div>
                </div>
            </div>
            <footer>
                <button type="button" onclick='window.location.href="<?php echo base_url(); ?>video_journal/seg14"' class=" crcl card-yellow tools" id="btn" style="float:right;  margin-right: 34px;"  disabled>
                    <div class="left hide_tool_2">
                        <h3>Input Required </h3>
                        <i></i>
                    </div>
                    <i class="txt-grey-dark btn_tool" style="cursor: not-allowed;" data-feather="chevron-down" ></i>
                        
                </button>

                <button  type="button" class="crcl card-yellow" style="float: right; margin-right: 20px; ">
                    <a href="<?php echo base_url(); ?>video_journal/seg13">
                        <i class="txt-grey-dark" data-feather="chevron-up"></i>
                    </a>
                </button>
            </footer>
        </div>

       
    </div>



    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.ui.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/video_journal/assets/js/modal.js"></script>

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
            $(".que2_op1_rht").show();
            $('#q2opt2').css('background', '#FEC3C3');
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
            $('#second2').css('cursor','pointer');
            $('#q2opt3').css('background', '#9EFB87');
            $('#btn').prop('disabled', false);
            $('.hide_tool_2').hide();
            $('.top').hide();
            $('.btn_tool').css('cursor','pointer');
            $('.next_pop').css('pointer-events','visible');
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
    <script>
        function save1() {
            var a = document.getElementById("t1").value;

            document.getElementById("r1").innerHTML = a;

        }
        function save2() {
            var a = document.getElementById("t2").value;

            document.getElementById("r2").innerHTML = a;

        }
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