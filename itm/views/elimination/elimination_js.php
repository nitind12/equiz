<?php if ($qa_pkg['res_'] == TRUE) { ?>
    <script type="text/javascript">
        var teamCounter = 1;
        var nextCounter = -1;
        var totalCount = <?php echo $tot_count; ?>;
        var breakCount = <?php echo $break_count; ?>;
        var breakCountTemp = 1;
        var teamName_ = [];
        var questions_ = [];        
        var options_A = [];
        var options_B = [];
        var options_C = [];
        var options_D = [];
        var correct_Ans = [];
        var correct_Ans_NO = [];
        var team_ = [];

    <?php $loop1 = 0; ?>
    <?php foreach ($qa_pkg['data_'] as $item) { ?>
            teamName_[<?php echo $loop1; ?>] = "<?php echo $item->TeamName; ?>";
            questions_[<?php echo $loop1; ?>] = "<?php echo $item->QUESTION; ?>";
            
            options_A[<?php echo $loop1; ?>] = "<?php echo $item->A; ?>";
            options_B[<?php echo $loop1; ?>] = "<?php echo $item->B; ?>";
            options_C[<?php echo $loop1; ?>] = "<?php echo $item->C; ?>";
            options_D[<?php echo $loop1; ?>] = "<?php echo $item->D; ?>";
        <?php $i = $item->ANSWER; ?>
            correct_Ans[<?php echo $loop1; ?>] = "<?php echo $item->$i; ?>";
            correct_Ans_NO[<?php echo $loop1; ?>] = "<?php echo $item->ANSWER; ?>";
        <?php $loop1++; ?>
    <?php } ?>
        //$(function () {
        function p() {
            $('#start_').click();
            clearTimer();
            $('#teamName_').html("TEAM " + teamCounter);
            $('#teamName_').delay(100).fadeIn(100);
        }
        $('#hideAll_').click(function () {
            $('#teamName_').hide();
            $('#question').hide();
            $('#option_A').hide();
            $('#option_B').hide();
            $('#option_C').hide();
            $('#option_D').hide();
            $('#teamName_').hide();
            $('#roundName_').hide();
            $('#ques__').hide();
            $('#qBack').hide();

            $('#question_no_').hide();

            $('#corrAnsBut_').hide();
            $('#nextBut_').hide();
        });
        $('#start__').click(function () {
            $('#everything').show();
            $('#start__').hide();
            $('#ERules_').hide();
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
                $('#ques__').hide();
                $('#qBack').hide();

                $('#corrAnsBut_').hide();
                $('#nextBut_').hide();
                $('#start_').hide();
                $('#next_team').hide();
                //$('#flip_').hide();
                $('#demo').hide();

                $('#end_').fadeIn(1000);

            } else {

                //$('#teamName_').html(teamName_[nextCounter]);
                //$('#teamName_').delay(100).fadeIn(100);

                $('#roundName_').delay(100).fadeIn(100);

                $('#qBack').delay(100).fadeIn(100);
                $('#ques__').delay(100).fadeIn(100);

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

                //$('#correct_ans').html(correct_Ans[nextCounter]);
                //$('#corrAnsBut_').delay(2000).fadeIn(1000);
                //$('#corrAnsBut_').delay(2200).fadeIn(1200);
                //$('#nextBut_').delay(2400).fadeIn(1200);
            }
            ++breakCountTemp;
        });
        $('#corrAnsBut_').click(function () {
            //alert(correct_Ans[nextCounter]);
            stopCount();
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
            $('#ques__').hide();
            $('#qBack').hide();
            $('#option_A').hide();
            $('#option_B').hide();
            $('#option_C').hide();
            $('#option_D').hide();
            stopCount();
            clearTimer();
            //$('#correct_ans').transition({x: '-1000px'});
            // $('#correct_ans').hide();
            //$('#correct_ans').hide();

            //$('#corrAnsBut_').hide();
            //$('#nextBut_').hide();
            if (breakCountTemp <= breakCount) {
                $('#start_').click();
            } else {
                $('#NEXTT').show();
                $('#NEXTT').transition({x: '1000px'});

                $('#teamName_').hide();
                $('#question_no_').hide();
                $('#qBack').hide();
                $('#ques__').hide();
                $('.answerNo').hide();
            }
        });
        
        $('#next_team').click(function () {
            teamCounter++;
            $('#teamName_').html("TEAM " + teamCounter);
            $('#teamName_').delay(100).fadeIn(100);

            $('#NEXTT').transition({x: '-1000px'});
            stopCount();
            clearTimer();
            $('#NEXTT').hide();
            if (breakCountTemp > breakCount) {
                breakCountTemp = 1;
                $('#start_').click();
            }
        });

        $('#option_A').click(function () {
            stopCount();
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
            stopCount();
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
            stopCount();
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
            stopCount();
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

        $('#ERules_').click(function () {
            if ($('#rulesE').is(":visible")) {
                $('#rulesE').transition({x: '-1000px', delay: 100});
                $('#rulesE').hide();
            } else {
                $('#rulesE').show();
                $('#rulesE').transition({x: '1000px', delay: 100});
            }
        });
    </script>
<?php } ?>