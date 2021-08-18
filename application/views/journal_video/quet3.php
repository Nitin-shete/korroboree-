
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

                    <button class="back bg-grey-dark" id="qe1" disabled>
                        <i class="txt_wht" id="first" data-feather="arrow-left-circle" style="cursor: not-allowed;"></i>
                    </button>

                </div>
                <div class="col-lg-7 col-md-7">

                    <div class="que_bg bg-yellow" id="mcq1">
                        <div class="row">
                            <div class="que txt-grey-dark">
                                Rick Hanson suggests that <span style="font-weight: bold;">‘we need to draw our children
                                    to experiences that feel good’. </span>
                                List down two things that you can try to support the same

                            </div>

                        </div>
                        <div class="row justify-content-center">
                            <div class="opts " id="back">

                                <a href="#costumModal1" data-toggle="modal">
                                    <textarea name="" id="r1" placeholder="Click here to write your response"
                                        class="btn btn-default  option1 opt_que_input" rows="4" cols="30"
                                        maxlength="20"></textarea>
                                </a>

                                <a href="#costumModal1" data-toggle="modal">
                                    <textarea name="" cols="30" rows="10" name="" id="r2"
                                        placeholder="Click here to write your response"
                                        class="btn btn-default  option1 opt_que_input"></textarea>
                                </a>

                            </div>
                        </div>
                    </div>


                    <div id="mcq2" class="que_bg bg-yellow" style="display: none;">
                        <div class="row">
                            <div class="que txt-grey-dark">
                                Your child returns from school and shares that he/she has been bullied and doesn’t want
                                to go back
                                the next day. What would you do to comfort him/her?
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="opts" id="back">
                                <div class="row option1 opt_que  snqe " id="q2opt1">
                                    <div class="col-lg-11 col-md-11">Tell your child to face challenges.</div>
                                    <div class="col-lg-1 col-md-1">
                                        <span class="ex que2_op1_w1" style="display: none;">&#215;</span>
                                    </div>

                                </div>
                                <div class="row option2 opt_que  snqe  " id="q2opt2">
                                    <div class="col-lg-11 col-md-11">Tell your child to hit the bullies. </div>
                                    <div class="col-lg-1 col-md-1">
                                        <p class="ex que2_op1_w2" style="display: none;">
                                            &#215;
                                        </p>
                                    </div>


                                </div>
                                <div class=" row option3 opt_que  snqe " id="q2opt3">
                                    <div class="col-lg-11 col-md-11">Tell your child that ‘we can train our minds to be
                                        strong so that no one can bully us easily’.</div>
                                    <div class="col-lg-1 col-md-1">
                                        <p class="que2_op1_rht" style="display: none;">
                                            &#x2714;
                                        </p>
                                    </div>
                                </div>
                                <div class=" row option3 opt_que " id="q2opt4">
                                    <div class="col-lg-11 col-md-11">Tell your child that you will raise a complaint
                                        against
                                        them with the teacher.</div>
                                    <div class="col-lg-1 col-md-1">
                                        <p class=" ex que2_op1_w3" style="display: none;">&#215;</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1">
                    <button type="button" class="back bg-grey-dark tools" id="qe11" disabled>
                        <div class="top hide_tool">
                            <h3>Input Required</h3>
                            <i></i>
                        </div>
                        <i class="txt_wht allow" id="second" data-feather="arrow-right-circle"
                            style="cursor:not-allowed;"></i>
                    </button>

                    <button type="button" class="next bg-grey-dark txt_wht tools" id="qe22"
                        style="display: none; cursor:not-allowed;">

                        <div class="top">
                            <h3>Input Required</h3>
                            <i></i>
                        </div>
                        <a href="#0" class="next_pop" style="pointer-events:none; ">
                            <i class="txt_wht" data-feather="arrow-right-circle" id="second2"></i>
                        </a>

                        <div class="cd-popup" role="alert">
                            <div class="cd-popup-container">
                                <p>Don’t watch the clock, do what it does. Keep going.</p>
                                <ul class="cd-buttons">
                                    <li><a href="<?php echo base_url(); ?>video_journal/seg4">Yes</a></li>
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
                        <center class="seg_clr txt_seg">Segment 3</center>
                        <center class="txt-yellow txt2_seg">Introducing the “Brain-Mind” Concept to the children
                        </center>
                    </div>
                </div>
            </div>
            <footer>

                <button type="button" onclick='window.location.href="<?php echo base_url(); ?>video_journal/seg4"' class=" crcl card-yellow tools"
                    id="btn" style="float:right;  margin-right: 34px;" disabled>
                    <div class="left hide_tool_2">
                        <h3>Input Required</h3>
                        <i></i>
                    </div>
                    <i class="txt-grey-dark btn_tool" style="cursor: not-allowed;" data-feather="chevron-down"></i>

                </button>

                <button type="button" class="crcl card-yellow" style="float: right; margin-right: 20px; ">
                    <a href="<?php echo base_url(); ?>video_journal/seg3">
                        <i class="txt-grey-dark" data-feather="chevron-up"></i>
                    </a>
                </button>
            </footer>
        </div>

        <div id="costumModal1" class="modal" data-easein="flipXIn" tabindex="-1" role="dialog"
            aria-labelledby="costumModalLabel" aria-hidden="true">
            <div class="modal-dialog model_top">
               <center>
                <div class="modal-content modal_body">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            ×
                        </button>
                        <h4 class="modal-title">

                        </h4>
                    </div>
                    <div class="modal-body">
                        <div id="hint" style="color:rgb(243, 7, 7);"></div>
                        <div class="input_size"> input 1</div>
                        <textarea name="" id="t1" maxlength="250" rows="6" cols="70" class="opt_que"></textarea>
                        <div class="input_size">input 2</div>
                        <textarea name="" id="t2" maxlength="250" rows="6" cols="70" class="opt_que"></textarea>
                    </div>
                    <div class="modal-footer">
                        <div>Click on same space to edit your response</div>
                        <button class="btn btnsave " data-dismiss="modal" onclick="save1(); save2()">
                            Save
                        </button>
                        <button class="btn btnclose " data-dismiss="modal" aria-hidden="true">
                            Close
                        </button>
                    </div>
                </div>
               </center>
            </div>
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
                $(".que2_op1_w2").show();
                $('#q2opt2').css('background', '#FEC3C3');
            });

            $('#q2opt4').click(function () {
                $(".que2_op1_w3").show();
                $('#q2opt4').css('background', '#FEC3C3');

            });




            $('.opt_que').click(function () {
                $('#qe11').prop('disabled', false);
                $('#second').css('cursor', 'pointer');
                $('#opt2').css('background', '#9EFB87');
                $('.check').show();
                $(".hide_tool").hide();
            });


            $('.snqe').click(function () {
                $('.que2_op1_rht').show();
                $('#second2').css('cursor', 'pointer');
                $('#q2opt3').css('background', '#9EFB87');
                $('#btn').prop('disabled', false);
                $('.hide_tool_2').hide();
                $('.top').hide();
                $('.btn_tool').css('cursor', 'pointer');
                $('.next_pop').css('pointer-events', 'visible');
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
                $('#first').css('cursor', 'pointer');
                $('#qe1').prop('disabled', false);

            });
            $("#qe1").click(function () {
                $('#mcq2').hide();
                $('#mcq1').show();
                $('#qe11').show();
                $('#qe22').hide();
                $('#first').css('cursor', 'not-allowed');

            });
        });
    </script>

    <script>
        // function save1() {
        //     var a = document.getElementById("t1").value;

        //     document.getElementById("r1").innerHTML = a;

        // }

        function save1() {
            var a = document.getElementById("t1").value;
            document.getElementById("r1").value = a;

        }
        function save2() {
            var a = document.getElementById("t2").value;

            document.getElementById("r2").value = a;

        }
    </script>


    <script>
        const progress = document.querySelector('.progress-done');

        setTimeout(() => {
            progress.style.opacity = 1;
            progress.style.width = progress.getAttribute('data-done') + '%';
        }, 500)


    </script>

    <script>
        $('textarea#t1,textarea#t2').on('keyup', function () {
            var maxlen = $(this).attr('maxlength');

            var length = $(this).val().length;
            if (length > (maxlen - 10)) {
                $('#hint').text('Max length ' + maxlen + ' characters only!')
            }
            else {
                $('#t1.#t2').text('');
            }
        });
    </script>


</body>

</html>