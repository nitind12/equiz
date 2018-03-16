<script>
    $('#wall_fade_me').delay(200).fadeOut(300);
    $('#wall_fade_me').delay(400).fadeIn(300);
    $('#wall_fade_me').transition({x: '100', delay: 400});
    $('#wall_fade_me').transition({x: '0'});
    $('#wall_fade_me').transition({scale: .6, delay: 400});
    $('#wall_fade_me').transition({rotate: '180deg', delay: 400});
    $('#wall_fade_me').transition({rotate: '0deg', delay: 400});
    $('#wall_fade_me').transition({rotate: '-180deg', delay: 400});
    $('#wall_fade_me').transition({rotate: '0deg', delay: 400});
    $('#wall_fade_me').transition({scale: 1, delay: 400});
    $('#wall_fade_me_').transition({rotate: '5deg', delay: 200});
    $('#wall_fade_me_').transition({rotate: '-5deg', delay: 300});
    $('#wall_fade_me_').transition({rotate: '0deg', delay: 400});
    $('#start_').click(function () {
        $('#wall_fade_me').hide();
        $('#wall_fade_me_').hide();
        $('#wall_fade_me_').css({background: 'url(<?php echo base_url('nitnav/img/rnj_problem_Cartoon.png'); ?>)'});
        $('#wall_fade_me_').fadeIn(200);
        ++nextCounter;
        clearTimer();
        $('#start_').hide();
        if (nextCounter > totalCount - 1) {
            $('#team_name_').hide();
            $('#Question').hide();
            $('#jumbled_Word').hide();
            $('#option_A').hide();
            $('#correct_ans').hide();
            $('#corrAnsBut_').hide();
            $('#nextBut_').hide();
            $('#end_').fadeIn(1000);
        } else {

            $('#media_buttons').show();
            $('#team_name_').html(teamName_[nextCounter]);
            $('#team_name_').delay(400).fadeIn(80);
            $('#Question').html('<div style="padding: 10px">' + 'Hint - ' + questions_[nextCounter] + '</div>');
            $('#Question').delay(400).fadeIn(100);
            $('#jumbled_Word').html('<img src="<?php echo base_url('nitnav/img/jumbledWordIs_.png'); ?>" />');
            $('#jumbled_Word').delay(800).fadeIn(200);
            $('#option_A').html('<div class="ans_">' + options_A[nextCounter] + '</div>');
            $('#option_A').delay(800).fadeIn(200);
            $('#correct_ans').html(correct_Ans[nextCounter]);
            $('#corrAnsBut_').delay(1200).fadeIn(500);
            $('#nextBut_').delay(1200).fadeIn(500);
        }
        ++breakCountTemp;
    });
    function isVisible(id) {
        var element = $('#' + id);
        if (element.length > 0 && element.css('visibility') !== 'hidden' && element.css('display') !== 'none') {
            return true;
        } else {
            return false;
        }
    }
    $('#corrAnsBut_').click(function () {
        $('#correct_ans').delay(100).fadeIn(800);
        stopCount();
    });
    $('#nextBut_').click(function () {
        //$('#option_A').removeClass('correct');
        $('#Question').hide();
        $('#option_A').hide();
        $('#jumbled_Word').hide();
        $('#correct_ans').hide();
        stopCount();
        clearTimer();
        $('#corrAnsBut_').hide();
        $('#nextBut_').hide();

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
            $('#NEXTT').show();
            $('#NEXTT').transition({x: '1000px'});
            $('#teamName_').hide();
            $('#question_no_').hide();
            $('.answerNo').hide();
        }
    });
    $('#rules_').click(function () {
        if ($('#view_rules_').is(":visible")) {
            $('#view_rules_').transition({x: '-500px'});
            $('#view_rules_').hide();
        } else {
            $('#view_rules_').show();
            $('#view_rules_').transition({x: '400px'});
            $('#view_ex_').hide();
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
    // Flip Question Action Below
    $('#fstart_').click(function () {
        if (fnextCounter > ftotalCount) {
            $('#fQuestion').hide();
            $('#foption_A').hide();
            $('#fcorrect_ans').hide();
            $('#fcorrAnsBut_').hide();
            $('#fnextBut_').hide();
            $('.fanswerNo_').hide();
            $('#flip_round').delay(100).fadeOut(400);
        } else {

            $('#fQuestion').html('<div style="padding: 20px">Q. ' + fquestions_[fnextCounter] + '</div>');
            $('#fQuestion').delay(400).fadeIn(100);
            $('#foption_A').html('<div style="float: left; font-size: 25 px">Jumbled Word is -&nbsp;&nbsp;</div><div class="fans_">' + foptions_A[fnextCounter] + '</div>');
            $('#foption_A').delay(800).fadeIn(200);
            //$('#correct_ans').html(fcorrect_Ans[nextCounter]);

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
        $('#foption_A').removeClass('correct_');
        $('#fcorrect_ans').removeClass('correct_');
        $('#foption_A').hide();
        $('#fcorrect_ans').hide();
        $('.fanswerNo_').hide();
        $('#fcorrAnsBut_').hide();
        $('#fnextBut_').hide();
        $('#fstart_').click();
    });
    $('#next_team').click(function () {
        $('#NEXTT').transition({x: '-1000px'});
        $('#NEXTT').hide();
        if (breakCountTemp > breakCount) {
            breakCountTemp = 1;
            $('#start_').click();
        }
    });
    $('#fcorrAnsBut_').click(function () {
        $('#fcorrect_ans').show();
        $('#fcorrect_ans').addClass('correct_');
        $('#fcorrect_ans').transition({scale: 1.1, delay: 50});
        $('#fcorrect_ans').transition({scale: 1, delay: 100});
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
    $('#rrule_btn').click(function () {
        $('#r_rules').fadeIn(400);
    });
    $('#close_rrule_btn').click(function () {
        $('#r_rules').fadeOut(400);
    });
    $('#example_').click(function () {
        $('#view_ex_').fadeIn(400);
    });
    $('#close_example_btn').click(function () {
        $('#view_ex_').fadeOut(400);
    });
</script>