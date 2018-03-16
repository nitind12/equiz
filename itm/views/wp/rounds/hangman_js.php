<script>
    $('#start_').click(function () {
        var dash_ = [];
        var correct_place_ = [];
        var x, y;

        stopCount();
        clearTimer();
        $('#stop_').show();
        $('#hangStart').hide();
        if (globalCount >= 12) {
            $('#game__').hide();
            $('#end__').show();
        } else {
            dashes_ = '';
            ++globalCount;
            ++nextCounter;
            $('#start_').hide();
            if (nextCounter > totalCount - 1) {
                $('#team_name_').hide();
                $('#Question').hide();
                $('#jumbled_Word').hide();
                $('#dashes_with_1').hide();
                $('#correct_ans').hide();

                $('#corrAnsBut_').hide();
                $('#nextBut_').hide();

                $('#end_').fadeIn(1000);
            } else {
                $('#view_rules_').hide();
                $('#view_ex_').hide();
                $('#rules_').hide();
                $('#example_').hide();

                $('#team_name_').html(teamName_[nextCounter]);
                $('#team_name_').delay(400).fadeIn(80);

                $('#jumbled_Word').html('HINT ' + (nextCounter + 1));
                $('#jumbled_Word').delay(400).fadeIn(100);

                $('#Question').html(questions_[nextCounter]);
                $('#Question').delay(400).fadeIn(100);

                $('#helphangMAN').show();

                x = correct_char[nextCounter];
                dash_ = x.split(',');
                y = char_place[nextCounter];
                correct_place_ = y.split(',');

                for (i = 0; i < no_of_dashes[nextCounter]; i++) {
                    flag_ = 0;
                    for (j = 0; j < correct_place_.length; j++) {
                        if (parseInt(correct_place_[j]) == i) {
                            dashes_ = dashes_ + "<div id='dash_'" + i + "' class='dash_design'>" + dash_[j] + "</div><div style='float: left; padding:1px; width:15px'></div>";
                            flag_ = 1;
                        }
                    }
                    if (flag_ == 0)
                        dashes_ = dashes_ + "<div id='dash_'" + i + "' class='dash_design'></div><div style='float: left; padding:1px; width:15px'></div>";
                }

                $('#dashes_with_1').html(dashes_);
                $('#dashes_with_1').delay(800).fadeIn(200);

                $('#correct_ans').html(correct_Ans[nextCounter]);

                $('#nextBut_').delay(1200).fadeIn(500);
            }
        }
    });
    $('#corrAnsBut_').click(function () {
        $('#correct_ans').delay(100).fadeIn(800);
        stopCount();
    });
    $('#nextBut_').click(function () {
        stopCount();
        clearTimer();
        $('#Question').hide();
        $('#dashes_with_1').hide();
        $('#jumbled_Word').hide();
        $('#option_A').hide();
        $('#correct_ans').hide();

        //$('#corrAnsBut_').hide();
        $('#nextBut_').hide();

        $('#helphangMAN').show();
        $('#hangMAN').hide();
        $('#rope').hide();
        $('#rope').addClass('rope_');
        yaxis = 0;
        $('#rope').transition({y: yaxis + 'px'});
        $('#saveMe').hide();
        $('#hangedMAN').hide();
        $('#start_').click();
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

    $('#hangMAN').click(function () {
        $('#hangedMAN').show();
        $('#hangMAN').hide();
        $('#rope').hide();
        $('#rope').addClass('rope_');
        yaxis = 0;
        $('#rope').transition({y: yaxis + 'px'});
        stopCount();
    });

    //timer----------------------
    var c = <?PHP echo $timer; ?>;
    var t;
    var yaxis = 0;
    var audioPlay = new Audio(BASE_URL + 'nitnav/audio/single2.mp3');
    var audioStop = new Audio(BASE_URL + 'nitnav/audio/LAST.mp3');
    function timedCount()
    {
        $('#helphangMAN').hide();
        $('#hangMAN').show();
        $('#rope').show();
        $('#saveMe').show();
        if (c > 0) {
            document.getElementById('demo').innerHTML = c;
            c = c - 1;
            t = setTimeout("timedCount()", 1000);
            audioPlay.play();
            yaxis = yaxis + 5;
            $('#rope').transition({y: yaxis + 'px'});
            //alert(y);
            $('#hangMAN').transition({x: '1px'});
            $('#hangMAN').transition({x: '-1px'});
            $('#hangMAN').transition({x: '1px'});
            $('#hangMAN').transition({x: '-1px'});
            $('#hangMAN').transition({x: '1px'});
            $('#hangMAN').transition({x: '-1px'});
            $('#saveMe').transition({scale: 1.2});
            $('#saveMe').css({rotate: '20deg'});
            $('#saveMe').transition({scale: 1});
        } else {
            document.getElementById('demo').innerHTML = 0;
            audioStop.play();
            //alert(y);
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

    var animateMe = function (targetElement, speed) {

        $(targetElement).css({left: '-2px'});
        $(targetElement).animate(
                {
                    'left': $(document).width() - 750
                },
        {
            duration: speed,
            complete: function () {
                animateMe(this, speed);
            }
        }
        );

    };
    animateMe($('#hangStart'), 500);
</script>