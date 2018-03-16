<script>
    $('#wall_fade_me').hide();
    $('#wall_fade_me').delay(400).fadeIn(300);
    $('#wall_fade_me').transition({y: '10'});
    $('#wall_fade_me').transition({rotate: '2deg', delay: 1});
    $('#wall_fade_me').transition({rotate: '-2deg', delay: 1});
    $('#wall_fade_me').transition({rotate: '2deg', delay: 1});
    $('#wall_fade_me').transition({rotate: '-2deg', delay: 1});
    $('#wall_fade_me').transition({scale: 1, delay: 1});
    $('#wall_fade_me_').transition({rotate: '2deg', delay: 1});
    $('#wall_fade_me_').transition({rotate: '-2deg', delay: 1});
    $('#wall_fade_me_').transition({rotate: '2deg', delay: 1});
    $('#wall_fade_me').transition({y: '0'});
    $('#wall_fade_me').transition({y: '10'});
    $('#wall_fade_me').transition({rotate: '2deg', delay: 1});
    $('#wall_fade_me').transition({rotate: '-2deg', delay: 1});
    $('#wall_fade_me').transition({rotate: '2deg', delay: 1});
    $('#wall_fade_me').transition({rotate: '-2deg', delay: 1});
    $('#wall_fade_me').transition({scale: 1, delay: 1});
    $('#wall_fade_me_').transition({rotate: '2deg', delay: 1});
    $('#wall_fade_me_').transition({rotate: '-2deg', delay: 1});
    $('#wall_fade_me_').transition({rotate: '2deg', delay: 1});
    $('#wall_fade_me').transition({y: '0'});
    $('#wall_fade_me').transition({y: '10'});
    $('#wall_fade_me').transition({rotate: '2deg', delay: 1});
    $('#wall_fade_me').transition({rotate: '-2deg', delay: 1});
    $('#wall_fade_me').transition({rotate: '2deg', delay: 1});
    $('#wall_fade_me').transition({rotate: '-2deg', delay: 1});
    $('#wall_fade_me').transition({scale: 1, delay: 1});
    $('#wall_fade_me_').transition({rotate: '2deg', delay: 1});
    $('#wall_fade_me_').transition({rotate: '-2deg', delay: 1});
    $('#wall_fade_me_').transition({rotate: '2deg', delay: 1});
    $('#wall_fade_me').transition({y: '0'});
    
    $('#start_').click(function () {
        $('#wall_fade_me').fadeOut(200);
         $('.welcome_text_small').fadeIn(400);
        ++nextCounter;
        clearTimer();
        $('#start_').hide();

        if (nextCounter > totalCount - 1) {
            $('#team_name_').hide();
            $('#Question').hide();
            $('#correct_ans').hide();
            $('#corrAnsBut_').hide();
            $('#nextBut_').hide();
            $('#end_').fadeIn(1000);
        } else {
            $('#media_buttons').show();
            $('#counterbuzz').show();
            $('#counterbuzz').html(nextCounter+1);
            //$('#team_name_').html(teamName_[nextCounter]);
            //$('#team_name_').delay(400).fadeIn(80);
            $('#Question').html('<img src="<?php echo base_url('nitnav/img/buzz/');?>/' + questions_[nextCounter] + '" width="600" />');
            $('#Question').delay(400).fadeIn(100);

            $('#correct_ans').html(correct_Ans[nextCounter]);
            $('#corrAnsBut_').delay(1200).fadeIn(500);
            
            $('#nextBut_').delay(1200).fadeIn(500);
        }
    });

    $('#corrAnsBut_').click(function () {
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