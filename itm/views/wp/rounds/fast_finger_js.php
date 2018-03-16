<script>
    
    function show_annimbanner(){
        $('#annim_banner').show();
        $('#wall_fade_me').hide();
        $('#wall_fade_me').delay(400).fadeIn(300);
        $('#wall_fade_me').transition({x: '10'});
        $('#wall_fade_me').transition({y: '10'});
        $('#wall_fade_me').delay(400).fadeIn(300);
        $('#wall_fade_me').transition({y: '0'});
        $('#wall_fade_me').transition({x: '0'});
    }
    function hide_annimbanner(){
        $('#annim_banner').hide();
        $('#wall_fade_me').hide();
    }
    
    $('#start_').click(function () {
        show_annimbanner();
        //$('#counterbuzz').fadeIn(400);
        $('.welcome_text_small').fadeIn(400);
        ++nextCounter;
        clearTimer();
        $('#start_').hide();

        if (nextCounter > totalCount - 1) {
            $('#annim_banner').hide();
            $('#counterbuzz').hide();
            $('#team_name_').hide();
            $('#Question').hide();
            $('#correct_ans').hide();
            $('#corrAnsBut_').hide();
            $('#nextBut_').hide();
            $('#end_').delay(400).fadeIn(100);
        } else {
            $('#media_buttons').show();

            $('#counterbuzz').hide();
            $('#counterbuzz').delay(100).fadeIn(800);
            $('#counterbuzz').addClass('counterbuzz_1');

            $('#counterbuzz').show();
            $('#counterbuzz').html(nextCounter+1);
            $('#Question').html(questions_[nextCounter]);
            $('#Question').delay(400).fadeIn(100);

            $('#correct_ans').html(correct_Ans[nextCounter]);
            $('#corrAnsBut_').delay(1200).fadeIn(500);
            
            $('#nextBut_').delay(1200).fadeIn(500);
        }
    });

    $('#corrAnsBut_').click(function () {
        hide_annimbanner();
        $('#Question').hide();
        $('#counterbuzz').hide();
        $('#counterbuzz').delay(100).fadeIn(800);
        $('#counterbuzz').html('Correct Order is:');
        $('#counterbuzz').addClass('counterbuzz_2');
        $('#correct_ans').delay(100).fadeIn(800);

        stopCount();
    });
    $('#nextBut_').click(function () {
        
        $('#Question').hide();
        $('#correct_ans').hide();
        stopCount();
        clearTimer();
        $('#corrAnsBut_').hide();
        $('#nextBut_').hide();

        $('#counterbuzz').removeClass();
        $('#counterbuzz').hide();
        //$('#counterbuzz').delay(100).fadeIn(800);
        $('#counterbuzz').addClass('counterbuzz_1');

        $('#start_').click();
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
    /*
      
    $('#example_').click(function () {
        $('#view_ex_').fadeIn(400);
    });
    $('#close_example_btn').click(function () {
        $('#view_ex_').fadeOut(400);
    });
    */
</script>