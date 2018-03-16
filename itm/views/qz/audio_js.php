<?php if ($qa_pkg['res_'] == TRUE) { ?>
    <script type="text/javascript">
        var nextCounter = -1;
        var totalCount = <?php echo $tot_count; ?>;
        var breakCount = <?php echo $break_count; ?>;
        var breakCountTemp = 1;
        var teamName_ = [];
        var questions_ = [];
        var font_size_Q = [];
        var source_ = [];
        var correct_Ans = [];
        var font_size_A = [];
        var team_ = [];
        var round_ = [];
    <?php $loop1 = 0; ?>
    <?php foreach ($qa_pkg['data_'] as $item) { ?>
            teamName_[<?php echo $loop1; ?>] = "<?php echo $item->TeamName; ?>";
            questions_[<?php echo $loop1; ?>] = "<?php echo $item->QUESTION; ?>";
            font_size_Q[<?php echo $loop1; ?>] = "<?php echo $item->FSFQ; ?>";
            source_[<?php echo $loop1; ?>] = "<?php echo $item->SOURCE; ?>";
            correct_Ans[<?php echo $loop1; ?>] = "<?php echo $item->ANSWER; ?>";
            font_size_A[<?php echo $loop1; ?>] = "<?php echo $item->FSFA; ?>";
        <?php $loop1++; ?>
    <?php } ?>

        //$(function () {
        function p() {
            $('#start_').click();
            $('#question').hide();
            $('#qBack').hide();
            $('#next_team').hide();
            clearTimer();
        }
        $('#hideAll_').click(function () {
            $('#teamName_').hide();
            $('#question').hide();
            $('#player').hide();
            $('#option_Correct').hide();
            $('#teamName_').hide();
            $('#roundName_').hide();
            $('#question_no_').hide();

            $('#corrAnsBut_').hide();
            $('#nextBut_').hide();
        });
        $('#start_').click(function () {
            ++nextCounter;
            
            if (nextCounter > totalCount - 1) {
                $('#teamName_').hide();
                $('#question').hide();
                $('#player').hide();
                $('#teamName_').hide();
                $('#roundName_').hide();
                $('#question_no_').hide();
                $('#demo').hide();
                $('#end_').fadeIn(1000);

            } else {

                $('#teamName_').html(teamName_[nextCounter]);
                $('#teamName_').delay(100).fadeIn(100);

                $('#roundName_').delay(100).fadeIn(100);

                $('#question_no_').html(breakCountTemp);
                $('#question_no_').delay(100).fadeIn(100);

                audioURL = BASE_URL + "nitnav/audio/" + source_[nextCounter]
                changeURL(audioURL);

                $('.answerNo').delay(200).fadeIn(200);

            }
            ++breakCountTemp;
        });
        $('#corrAnsBut_').click(function () {
            $('#option_Correct').html(correct_Ans[nextCounter]);
            $('#option_Correct').transition({x: '240px'});
            $('#option_Correct').delay(100).fadeIn(100);
            stopCount();
        });

        $('#showQues_').click(function () {
            $('#qBack').delay(100).fadeIn(100);
            $('#question').html(questions_[nextCounter]);
            $('#question').delay(100).fadeIn(100);
            $('#think_').delay(100).fadeIn(100);
        });

        $('#nextBut_').click(function () {
            $('#question').hide();
            $('#qBack').hide();
            $('#think_').hide();
            stopCount();
            clearTimer();
            $('#option_Correct').transition({x: '-1000px'});
            $('#option_Correct').hide();

            if (breakCountTemp <= breakCount) {
                $('#start_').click();
            } else {
                fglobal_Count++;
                $('#NEXTT').show();
                $('#NEXTT').transition({x: '1000px'});
                $('#next_team').show();
                $('#teamName_').hide();
                $('#question_no_').hide();
                $('.answerNo').hide();
                
                if (fglobal_Count == 0) {
                    fnextCounter = 0;
                    ftotalCount = 0;
                } else if (fglobal_Count == 1) {
                    fnextCounter = 1;
                    ftotalCount = 1;
                } else if (fglobal_Count == 2) {
                    fnextCounter = 2;
                    ftotalCount = 2;
                } else if (fglobal_Count == 3) {
                    fnextCounter = 3;
                    ftotalCount = 3;
                } else if (fglobal_Count == 4) {
                    fnextCounter = 4;
                    ftotalCount = 4;
                } else if (fglobal_Count == 5) {
                    fnextCounter = 5;
                    ftotalCount = 5;
                }
            }
        });
        $('#next_team').click(function () {
            $('#NEXTT').transition({x: '-1000px'});
            $('#NEXTT').hide();
            $('#next_team').hide();
            clearTimer();
            if (breakCountTemp > breakCount) {
                breakCountTemp = 1;
                $('#start_').click();
            }
        });
        //});

        function changeURL(sourceUrl) {
            var audio = $("#player");
            $("#audioSrc").attr("src", sourceUrl);
            /****************/
            audio[0].pause();
            audio[0].load();//suspends and restores all audio element
        }


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
        // Flip Question Action Below
        $('#fstart_').click(function () {
            if (fnextCounter > ftotalCount) {
                $('#fQuestion').hide();
                $('#fcorrect_ans').hide();
                $('#fcorrAnsBut_').hide();
                $('#fnextBut_').hide();
                $('.fanswerNo_').hide();

                $('#flip_round').delay(100).fadeOut(400);
            } else {

                $('#fQuestion').html(fquestions_[fnextCounter]);
                $('#fQuestion').delay(400).fadeIn(100);

                $('.fanswerNo_').delay(2400).fadeIn(800);

                $('#fcorrect_ans').html(fcorrect_Ans[fnextCounter]);
                
                $('#fcorrAnsBut_').delay(2200).fadeIn(1200);

                $('#fnextBut_').delay(2400).fadeIn(1200);
            }
            fcorrAns = fnextCounter;
            ++fnextCounter;
        });
        $('#fnextBut_').click(function () {
            $('#fQuestion').hide();

            $('#fcorrect_ans').hide();
            $('.fanswerNo_').hide();
            $('#fcorrAnsBut_').hide();
            $('#fnextBut_').hide();

            $('#fstart_').click();
        });
        $('#fcorrAnsBut_').click(function () {
            $('#fcorrect_ans').show();
            $('#fcorrect_ans').addClass('correct_');
            $('#fcorrect_ans').transition({scale: 1.05, delay: 50});
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

    </script>
<?php } ?>