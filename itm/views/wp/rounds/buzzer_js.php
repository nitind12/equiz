<?php if ($qa_pkg['res_'] == TRUE) { ?>
    <script type="text/javascript">
        var nextCounter = -1;
        var totalCount = <?php echo $tot_count; ?>;
        var breakCount = <?php echo $break_count; ?>;
        var breakCountTemp = 1;
        var teamName_ = [];
        var questions_ = [];
        var font_size_Q = [];
        var options_A = [];
        var options_B = [];
        var options_C = [];
        var options_D = [];
        var correct_Ans = [];
        var correct_Ans_NO = [];
        var font_size_A = [];
        var team_ = [];
        var round_ = [];

    <?php $loop1 = 0; ?>
    <?php foreach ($qa_pkg['data_'] as $item) { ?>
            teamName_[<?php echo $loop1; ?>] = "<?php echo $item->TeamName; ?>";
            questions_[<?php echo $loop1; ?>] = "<?php echo $item->QUESTION; ?>";
            font_size_Q[<?php echo $loop1; ?>] = "<?php echo $item->FSFQ; ?>";
            options_A[<?php echo $loop1; ?>] = "<?php echo $item->A; ?>";
            options_B[<?php echo $loop1; ?>] = "<?php echo $item->B; ?>";
            options_C[<?php echo $loop1; ?>] = "<?php echo $item->C; ?>";
            options_D[<?php echo $loop1; ?>] = "<?php echo $item->D; ?>";
        <?php $i = $item->ANSWER; ?>
            correct_Ans[<?php echo $loop1; ?>] = "<?php echo $item->$i; ?>";
            correct_Ans_NO[<?php echo $loop1; ?>] = "<?php echo $item->ANSWER; ?>";
            font_size_A[<?php echo $loop1; ?>] = "<?php echo $item->FSFA; ?>";

        <?php $loop1++; ?>
    <?php } ?>

        //$(function () {
        function p() {
            $('#start_').click();
            $('#next_team').hide()
            //clearTimer();
        }
        $('#hideAll_').click(function () {
            $('#teamName_').hide();
            $('#question').hide();
            $('#option_A').hide();
            $('#option_B').hide();
            $('#option_C').hide();
            $('#option_D').hide();
            //$('#correct_ans').transition({x: '-1000px'});
            //$('#correct_ans').hide();
            $('#teamName_').hide();
            $('#roundName_').hide();
            $('#question_no_').hide();

            $('#corrAnsBut_').hide();
            $('#nextBut_').hide();
        });
        $('#start__').click(function () {
            $('#everything').show();
            $('#start__').hide();
        });
        $('#start_').click(function () {
            ++nextCounter;
            if (breakCountTemp > breakCount) {
                // yet to code
            }
            //$('#start_').hide();
            if (nextCounter > totalCount - 1) {
                $('#teamName_').hide();
                $('#question').hide();
                $('#option_A').hide();
                $('#option_B').hide();
                $('#option_C').hide();
                $('#option_D').hide();
                $('#teamName_').hide();
                $('#roundName_').hide();
                $('#question_no_').hide();

                $('#corrAnsBut_').hide();
                $('#nextBut_').hide();
                $('#start_').hide();
                $('#next_team').hide();
                $('#flip_').hide();
                $('#demo').hide();

                $('#end_').fadeIn(1000);

            } else {

                $('#teamName_').html(teamName_[nextCounter]);
                $('#teamName_').delay(100).fadeIn(100);

                $('#roundName_').delay(100).fadeIn(100);

                $('#question_no_').html(breakCountTemp);
                $('#question_no_').delay(100).fadeIn(100);

                $('#question').html(questions_[nextCounter]);
                $('#question').delay(100).fadeIn(100);

                $('.answerNo').delay(200).fadeIn(200);

                $('#option_A').html(options_A[nextCounter]);
                $('#option_A').delay(200).fadeIn(200);

                $('#option_B').html(options_B[nextCounter]);
                $('#option_B').delay(300).fadeIn(400);

                $('#option_C').html(options_C[nextCounter]);
                $('#option_C').delay(400).fadeIn(600);

                $('#option_D').html(options_D[nextCounter]);
                $('#option_D').delay(500).fadeIn(800);
            }
            ++breakCountTemp;
        });
        $('#corrAnsBut_').click(function () {
            //stopCount();
            if (correct_Ans_NO[nextCounter] == 'A') {
                $('#option_A').addClass('correct');
                $('#option_A').transition({scale: 1.1, delay: 50});
                $('#option_A').transition({scale: 1, delay: 100});
            } else if (correct_Ans_NO[nextCounter] == 'B') {
                $('#option_B').addClass('correct');
                $('#option_B').transition({scale: 1.1, delay: 50});
                $('#option_B').transition({scale: 1, delay: 100});
            } else if (correct_Ans_NO[nextCounter] == 'C') {
                $('#option_C').addClass('correct');
                $('#option_C').transition({scale: 1.1, delay: 50});
                $('#option_C').transition({scale: 1, delay: 100});
            } else if (correct_Ans_NO[nextCounter] == 'D') {
                $('#option_D').addClass('correct');
                $('#option_D').transition({scale: 1.1, delay: 50});
                $('#option_D').transition({scale: 1, delay: 100});
            } else {
                alert("no Correct Answer")
            }
            // $('#correct_ans').html(correct_Ans_NO[nextCounter]);
            //$('#correct_ans').delay(100).fadeIn(100);
            // $('#correct_ans').transition({x: '1300px'});
        });
        $('#nextBut_').click(function () {
            $('#option_A').removeClass('correct');
            $('#option_B').removeClass('correct');
            $('#option_C').removeClass('correct');
            $('#option_D').removeClass('correct');
            $('#option_A').removeClass('incorrect');
            $('#option_B').removeClass('incorrect');
            $('#option_C').removeClass('incorrect');
            $('#option_D').removeClass('incorrect');
            $('#question').hide();
            $('#option_A').hide();
            $('#option_B').hide();
            $('#option_C').hide();
            $('#option_D').hide();
            //stopCount();
            //clearTimer();

            if (breakCountTemp <= breakCount) {
                $('#start_').click();
            } else {
                fglobal_Count++;
                if (fglobal_Count == 0) {
                    fnextCounter = 0;
                    ftotalCount = 1;
                } else if (fglobal_Count == 1) {
                    fnextCounter = 2;
                    ftotalCount = 3;
                } else if (fglobal_Count == 2) {
                    fnextCounter = 4;
                    ftotalCount = 5;
                } else if (fglobal_Count == 3) {
                    fnextCounter = 6;
                    ftotalCount = 7;
                } else if (fglobal_Count == 4) {
                    fnextCounter = 8;
                    ftotalCount = 9;
                } else if (fglobal_Count == 5) {
                    fnextCounter = 10;
                    ftotalCount = 11;
                }
                //$('#NEXTT').show();
                // $('#NEXTT').transition({x: '1000px'});
                $('#teamName_').hide();
                $('#question_no_').hide();
                $('#next_team').show();
                $('.answerNo').hide();
                $('#qBack').hide();
                $('#start_').click();
            }
        });
        $('#next_team').click(function () {
            $('#NEXTT').transition({x: '-1000px'});
            $('#NEXTT').hide();
            //stopCount();
            //clearTimer();
            if (breakCountTemp > breakCount) {
                breakCountTemp = 1;
                $('#start_').click();
            }
        });

        $('#option_A').click(function () {
            //stopCount();
            if (correct_Ans_NO[nextCounter] == 'A') {
                $('#option_A').addClass('correct');
                $('#option_A').transition({scale: 1.1, delay: 50});
                $('#option_A').transition({scale: 1, delay: 100});
            } else {
                $('#option_A').addClass('incorrect');
                $('#option_A').transition({scale: 1.1, delay: 50});
                $('#option_A').transition({scale: 1, delay: 100});
            }
        });

        $('#option_B').click(function () {
            //stopCount();
            if (correct_Ans_NO[nextCounter] == 'B') {
                $('#option_B').addClass('correct');
                $('#option_B').transition({scale: 1.1, delay: 50});
                $('#option_B').transition({scale: 1, delay: 100});
            } else {
                $('#option_B').addClass('incorrect');
                $('#option_B').transition({scale: 1.1, delay: 50});
                $('#option_B').transition({scale: 1, delay: 100});
            }
        });
        $('#option_C').click(function () {
            //stopCount();
            if (correct_Ans_NO[nextCounter] == 'C') {
                $('#option_C').addClass('correct');
                $('#option_C').transition({scale: 1.1, delay: 50});
                $('#option_C').transition({scale: 1, delay: 100});
            } else {
                $('#option_C').addClass('incorrect');
                $('#option_C').transition({scale: 1.1, delay: 50});
                $('#option_C').transition({scale: 1, delay: 100});
            }
        });
        $('#option_D').click(function () {
            //stopCount();
            if (correct_Ans_NO[nextCounter] == 'D') {
                $('#option_D').addClass('correct');
                $('#option_D').transition({scale: 1.1, delay: 50});
                $('#option_D').transition({scale: 1, delay: 100});
            } else {
                $('#option_D').addClass('incorrect');
                $('#option_D').transition({scale: 1.1, delay: 50});
                $('#option_D').transition({scale: 1, delay: 100});
            }
        });

        //timer----------------------
        var c = <?PHP echo $timer; ?>;
        var t;
        var audioPlay = new Audio(BASE_URL + 'nitnav/audio/single2.mp3');
        var audioStop = new Audio(BASE_URL + 'nitnav/audio/LAST.mp3');
        function timedCount()
        {
            if (c > 0) {
                document.getElementById('demo').innerHTML = c;
                c = c - 1;
                t = setTimeout("timedCount()", 1000);
                audioPlay.play();
            } else {
                document.getElementById('demo').innerHTML = 0;
                audioStop.play();
            }
        }
        function stopCount()
        {
            clearTimeout(t);
        }
        function clearTimer()
        {
            document.getElementById('demo').innerHTML = "<img src='<?PHP echo base_url() . 'nitnav/img/timer.png'; ?>' width='60%' height='60%' style='margin-top:-20px;'>";
            c = <?PHP echo $timer; ?>;
        }
        //--------Timer------------------------------------------------
        //
        // Flip Question Action Below
        $('#fstart_').click(function () {
            if (fnextCounter > ftotalCount) {
                $('#fQuestion').hide();
                $('#foption_A').hide();
                $('#foption_B').hide();
                $('#foption_C').hide();
                $('#foption_D').hide();
                $('#fcorrect_ans').hide();
                $('#fcorrAnsBut_').hide();
                $('#fnextBut_').hide();
                $('.fanswerNo_').hide();

                $('#flip_round').delay(100).fadeOut(400);
            } else {

                $('#fQuestion').html(fquestions_[fnextCounter]);
                $('#fQuestion').delay(400).fadeIn(100);

                $('#foption_A').html(foptions_A[fnextCounter]);
                $('#foption_A').delay(800).fadeIn(200);

                $('#foption_B').html(foptions_B[fnextCounter]);
                $('#foption_B').delay(1200).fadeIn(400);

                $('#foption_C').html(foptions_C[fnextCounter]);
                $('#foption_C').delay(1600).fadeIn(600);

                $('#foption_D').html(foptions_D[fnextCounter]);
                $('#foption_D').delay(2000).fadeIn(800);

                $('.fanswerNo_').delay(2400).fadeIn(800);

                $('#fcorrect_ans').html(fcorrect_Ans[fnextCounter]);

                $('#fcorrAnsBut_').delay(2000).fadeIn(1000);
                $('#fcorrAnsBut_').delay(2200).fadeIn(1200);

                $('#fnextBut_').delay(2400).fadeIn(1200);
            }
            fcorrAns = fnextCounter;
            ++fnextCounter;
        });
        $('#fnextBut_').click(function () {
            $('#fQuestion').hide();
            $('#foption_A').removeClass('correct');
            $('#foption_B').removeClass('correct');
            $('#foption_C').removeClass('correct');
            $('#foption_D').removeClass('correct');

            $('#foption_A').hide();
            $('#foption_B').hide();
            $('#foption_C').hide();
            $('#foption_D').hide();
            $('#fcorrect_ans').hide();
            $('.fanswerNo_').hide();
            $('#fcorrAnsBut_').hide();
            $('#fnextBut_').hide();

            $('#fstart_').click();
        });
        $('#fcorrAnsBut_').click(function () {
            if (fcorrect_Ans_NO[fcorrAns] == 'A') {
                $('#foption_A').addClass('correct');
                $('#foption_A').transition({scale: 1.1, delay: 50});
                $('#foption_A').transition({scale: 1, delay: 100});
            } else if (fcorrect_Ans_NO[fcorrAns] == 'B') {
                $('#foption_B').addClass('correct');
                $('#foption_B').transition({scale: 1.1, delay: 50});
                $('#foption_B').transition({scale: 1, delay: 100});
            } else if (fcorrect_Ans_NO[fcorrAns] == 'C') {
                $('#foption_C').addClass('correct');
                $('#foption_C').transition({scale: 1.1, delay: 50});
                $('#foption_C').transition({scale: 1, delay: 100});
            } else if (fcorrect_Ans_NO[fcorrAns] == 'D') {
                $('#foption_D').addClass('correct');
                $('#foption_D').transition({scale: 1.1, delay: 50});
                $('#foption_D').transition({scale: 1, delay: 100});
            } else {
                alert("no Correct Answer")
            }
        });
        $('#flip_').click(function () {
            if (fnextCounter > ftotalCount) {
                $('#flip_round').delay(100).fadeIn(400);
                $('#flip_round').delay(50).fadeOut(200);
            } else {
                if ($('#flip_round').css("display") == "none") {
                    $('#flip_round').delay(100).fadeIn(400);
                    $('#fnextBut_').click();
                } else {
                    $('#flip_round').delay(100).fadeOut(400);
                }
            }
        });
        //});
    </script>
<?php } ?>