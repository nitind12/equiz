<script>
    function startround() {
        $('#pickAlphabet').show();
        stopCount();
        clearTimer();
    }
    $('#hideAll_').click(function () {
        $('#team_name_').hide();
        $('#Question').hide();

        $('#option_A').hide();
        $('#option_B').hide();
        $('#option_C').hide();
        $('#option_D').hide();
        $('#correct_ans').hide();
        $('.answerNo_').hide();
        //$('#corrAnsBut_').hide();
        //$('#nextBut_').hide();
    });
    $('#start_').click(function () {
        $('#theme__').hide();
        if (nextCounter > totalCount) {
            $('#team_name_').hide();
            $('#Question').hide();
            $('#option_A').hide();
            $('#option_B').hide();
            $('#option_C').hide();
            $('#option_D').hide();
            $('#correct_ans').hide();
            //$('#corrAnsBut_').hide();
            //$('#nextBut_').hide();
            $('.answerNo_').hide();

            if (global_Count < 6) {
                $('#pickAlphabet').show();
                $('#Qs_').hide();
                $('.playBut').hide();
            } else {
                $('.playBut').hide();
                $('#pickAlphabet').hide();
                $('#Qs_').hide();
                $('#_end_').show();
            }

        } else {
            $('#view_rules_').hide();
            $('#view_ex_').hide();
            $('#rules_').hide();
            $('#example_').hide();

            $('#team_name_').html(teamName_[teamCounter]);
            $('#team_name_').delay(400).fadeIn(80);

            $('#Question').html(questions_[nextCounter]);
            $('#Question').delay(400).fadeIn(100);

            $('#question_no_').html(nextCounter + 1);
            $('#question_no_').delay(400).fadeIn(100);

            $('#option_A').html(options_A[nextCounter]);
            $('#option_A').delay(400).fadeIn(200);

            $('#option_B').html(options_B[nextCounter]);
            $('#option_B').delay(400).fadeIn(400);

            $('#option_C').html(options_C[nextCounter]);
            $('#option_C').delay(400).fadeIn(600);

            $('#option_D').html(options_D[nextCounter]);
            $('#option_D').delay(400).fadeIn(800);

            $('.answerNo_').delay(400).fadeIn(800);

            $('#correct_ans').html(correct_Ans[nextCounter]);

            $('#corrAnsBut_').delay(500).fadeIn(1000);
            $('#corrAnsBut_').delay(500).fadeIn(1200);

            $('#nextBut_').delay(500).fadeIn(1200);
        }
        corrAns = nextCounter;
        ++nextCounter;
    });
    $('#corrAnsBut_').click(function () {
        $('#correct_ans').delay(100).fadeIn(800);
        stopCount();
        //alert(correct_Ans_NO[corrAns]);
        if (correct_Ans_NO[corrAns] == 'A') {
            $('#option_A').addClass('correct_');
            $('#option_A').transition({scale: 1.1, delay: 50});
            $('#option_A').transition({scale: 1, delay: 100});
        } else if (correct_Ans_NO[corrAns] == 'B') {
            $('#option_B').addClass('correct_');
            $('#option_B').transition({scale: 1.1, delay: 50});
            $('#option_B').transition({scale: 1, delay: 100});
        } else if (correct_Ans_NO[corrAns] == 'C') {
            $('#option_C').addClass('correct_');
            $('#option_C').transition({scale: 1.1, delay: 50});
            $('#option_C').transition({scale: 1, delay: 100});
        } else if (correct_Ans_NO[corrAns] == 'D') {
            $('#option_D').addClass('correct_');
            $('#option_D').transition({scale: 1.1, delay: 50});
            $('#option_D').transition({scale: 1, delay: 100});
        } else {
            alert("no Correct Answer")
        }
    });
    $('#nextBut_').click(function () {
        stopCount();
        clearTimer();
        $('#Question').hide();
        $('#option_A').removeClass('correct_');
        $('#option_B').removeClass('correct_');
        $('#option_C').removeClass('correct_');
        $('#option_D').removeClass('correct_');
        $('#option_A').removeClass('incorrect_');
        $('#option_B').removeClass('incorrect_');
        $('#option_C').removeClass('incorrect_');
        $('#option_D').removeClass('incorrect_');
        $('#option_A').hide();
        $('#option_B').hide();
        $('#option_C').hide();
        $('#option_D').hide();
        $('#correct_ans').hide();
        $('.answerNo_').hide();
        $('#corrAnsBut_').hide();
        $('#nextBut_').hide();

        $('#start_').click();
    });

    $('#option_A').click(function () {
        stopCount();
        if (correct_Ans_NO[corrAns] == 'A') {
            $('#option_A').addClass('correct_');
            $('#option_A').transition({scale: 1.1, delay: 50});
            $('#option_A').transition({scale: 1, delay: 100});
        } else {
            $('#option_A').addClass('incorrect_');
            $('#option_A').transition({scale: 1.1, delay: 50});
            $('#option_A').transition({scale: 1, delay: 100});
        }
    });

    $('#option_B').click(function () {
        stopCount();
        if (correct_Ans_NO[corrAns] == 'B') {
            $('#option_B').addClass('correct_');
            $('#option_B').transition({scale: 1.1, delay: 50});
            $('#option_B').transition({scale: 1, delay: 100});
        } else {
            $('#option_B').addClass('incorrect_');
            $('#option_B').transition({scale: 1.1, delay: 50});
            $('#option_B').transition({scale: 1, delay: 100});
        }
    });
    $('#option_C').click(function () {
        stopCount();
        if (correct_Ans_NO[corrAns] == 'C') {
            $('#option_C').addClass('correct_');
            $('#option_C').transition({scale: 1.1, delay: 50});
            $('#option_C').transition({scale: 1, delay: 100});
        } else {
            $('#option_C').addClass('incorrect_');
            $('#option_C').transition({scale: 1.1, delay: 50});
            $('#option_C').transition({scale: 1, delay: 100});
        }
    });
    $('#option_D').click(function () {
        stopCount();
        if (correct_Ans_NO[corrAns] == 'D') {
            $('#option_D').addClass('correct_');
            $('#option_D').transition({scale: 1.1, delay: 50});
            $('#option_D').transition({scale: 1, delay: 100});
        } else {
            $('#option_D').addClass('incorrect_');
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

    // ---
    $('#theme__').click(function () {
        $('#theme__').show();
        $('#theme__').html(theme_[nextCounter]);
    })
    $('#A_').click(function () {
        (teamCounter <= 5) ? teamCounter++ : 6;
        nextCounter = a_start;
        fnextCounter = 0;
        $('#A_').html("-");
        $('#play_A').show();
        $('#play_B').hide();
        $('#play_C').hide();
        $('#play_D').hide();
        $('#play_E').hide();
        $('#play_F').hide();
        $('#play_G').hide();
        $('#theme__').click();
    });
    $('#play_A').click(function () {
        $('#play_buttons').hide();
        $('#A_').hide();
        totalCount = a_end;
        ftotalCount = 1; // For Flip round
        ++global_Count;
        $('#pickAlphabet').hide();
        $('#Qs_').show();
        $(this).hide();
        $('#start_').click();
    });
    // ---
    $('#B_').click(function () {
        (teamCounter <= 5) ? teamCounter++ : 6;
        nextCounter = b_start;
        fnextCounter = 2;

        $('#B_').html("-");
        $('#play_A').hide();
        $('#play_B').show();
        $('#play_C').hide();
        $('#play_D').hide();
        $('#play_E').hide();
        $('#play_F').hide();
        $('#play_G').hide();
        $('#theme__').click();
    });
    $('#play_B').click(function () {
        $('#play_buttons').hide();
        $('#B_').hide();
        totalCount = b_end;
        ftotalCount = 3;
        ++global_Count;
        $('#pickAlphabet').hide();
        $('#Qs_').show();
        $(this).hide();
        $('#start_').click();
    });
    // ---
    $('#C_').click(function () {
        (teamCounter <= 5) ? teamCounter++ : 6;
        nextCounter = c_start;
        fnextCounter = 4;
        $('#C_').html("-");
        $('#play_A').hide();
        $('#play_B').hide();
        $('#play_C').show();
        $('#play_D').hide();
        $('#play_E').hide();
        $('#play_F').hide();
        $('#play_G').hide();
        $('#theme__').click();
    });
    $('#play_C').click(function () {
        $('#play_buttons').hide();
        $('#C_').hide();
        totalCount = c_end;
        ftotalCount = 5;
        ++global_Count;
        $('#pickAlphabet').hide();
        $('#Qs_').show();
        $(this).hide();
        $('#start_').click();
    });
    // ---
    $('#D_').click(function () {
        (teamCounter <= 5) ? teamCounter++ : 6;
        nextCounter = d_start;
        fnextCounter = 6;
        $('#D_').html("-");
        $('#play_A').hide();
        $('#play_B').hide();
        $('#play_C').hide();
        $('#play_D').show();
        $('#play_E').hide();
        $('#play_F').hide();
        $('#play_G').hide();
        $('#theme__').click();
    });
    $('#play_D').click(function () {
        $('#play_buttons').hide();
        $('#D_').hide();
        totalCount = d_end;
        ftotalCount = 7;
        ++global_Count;
        $('#pickAlphabet').hide();
        $('#Qs_').show();
        $(this).hide();
        $('#start_').click();
    });
    // ---
    $('#E_').click(function () {
        (teamCounter <= 5) ? teamCounter++ : 6;
        nextCounter = e_start;
        fnextCounter = 8;
        $('#E_').html("-");
        $('#play_A').hide();
        $('#play_B').hide();
        $('#play_C').hide();
        $('#play_D').hide();
        $('#play_E').show();
        $('#play_F').hide();
        $('#play_G').hide();
        $('#theme__').click();
    });
    $('#play_E').click(function () {
        $('#play_buttons').hide();
        $('#E_').hide();
        totalCount = e_end;
        ftotalCount = 9;
        ++global_Count;
        $('#pickAlphabet').hide();
        $('#Qs_').show();
        $(this).hide();
        $('#start_').click();
    });
    // ---
    $('#F_').click(function () {
        (teamCounter <= 5) ? teamCounter++ : 6;
        nextCounter = f_start;
        fnextCounter = 10;
        $('#F_').html("-");
        $('#play_A').hide();
        $('#play_B').hide();
        $('#play_C').hide();
        $('#play_D').hide();
        $('#play_E').hide();
        $('#play_F').show();
        $('#play_G').hide();
        $('#theme__').click();
    });
    $('#play_F').click(function () {
        $('#play_buttons').hide();
        $('#F_').hide();
        totalCount = f_end;
        ftotalCount = 11;
        ++global_Count;
        $('#pickAlphabet').hide();
        $('#Qs_').show();
        $(this).hide();
        $('#start_').click();
    });
    // ---
    $('#G_').click(function () {
        (teamCounter <= 5) ? teamCounter++ : 6;
        nextCounter = g_start;
        fnextCounter = 12;
        $('#G_').html("-");
        $('#play_A').hide();
        $('#play_B').hide();
        $('#play_C').hide();
        $('#play_D').hide();
        $('#play_E').hide();
        $('#play_F').hide();
        $('#play_G').show();
        $('#theme__').click();
    });
    $('#play_G').click(function () {
        $('#play_buttons').hide();
        $('#G_').hide();
        totalCount = g_end;
        ftotalCount = 13;
        ++global_Count;
        $('#pickAlphabet').hide();
        $('#Qs_').show();
        $(this).hide();
        $('#start_').click();
    });
    $('#H_').click(function () {
        (teamCounter <= 5) ? teamCounter++ : 6;
        nextCounter = h_start;
        fnextCounter = 14;
        $('#H_').html("-");
        $('#play_A').hide();
        $('#play_B').hide();
        $('#play_C').hide();
        $('#play_D').hide();
        $('#play_E').hide();
        $('#play_F').hide();
        $('#play_G').hide();
        $('#play_H').show();
        $('#theme__').click();
    });
    $('#play_H').click(function () {
        $('#play_buttons').hide();
        $('#H_').hide();
        totalCount = h_end;
        ftotalCount = 15;
        ++global_Count;
        $('#pickAlphabet').hide();
        $('#Qs_').show();
        $(this).hide();
        $('#start_').click();
    });
    // ---
    $('#PickYourChoice').children().not('#no').mouseenter(function () {
        $(this).transition({perspective: '0px', rotateY: '180deg'});
        //$(this).children().css("background", "yellow");
    });

    $('#PickYourChoice').children().not('#no').mouseleave(function () {
        $(this).transition({perspective: '0px', rotateY: '0deg'});
        // $(this).children().css("background", "white");
    });

    $('.play_buttons').mouseenter(function () {
        $('.play_buttons').transition({x: '20px'});
    });

    $('.play_buttons').mouseleave(function () {
        $('.play_buttons').transition({x: '0px'});
    });
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
        $('#foption_A').removeClass('correct_');
        $('#foption_B').removeClass('correct_');
        $('#foption_C').removeClass('correct_');
        $('#foption_D').removeClass('correct_');

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
            $('#foption_A').addClass('correct_');
            $('#foption_A').transition({scale: 1.1, delay: 50});
            $('#foption_A').transition({scale: 1, delay: 100});
        } else if (fcorrect_Ans_NO[fcorrAns] == 'B') {
            $('#foption_B').addClass('correct_');
            $('#foption_B').transition({scale: 1.1, delay: 50});
            $('#foption_B').transition({scale: 1, delay: 100});
        } else if (fcorrect_Ans_NO[fcorrAns] == 'C') {
            $('#foption_C').addClass('correct_');
            $('#foption_C').transition({scale: 1.1, delay: 50});
            $('#foption_C').transition({scale: 1, delay: 100});
        } else if (fcorrect_Ans_NO[fcorrAns] == 'D') {
            $('#foption_D').addClass('correct_');
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
    shortcut.add("F5", function () {
        return false;
    });
</script>