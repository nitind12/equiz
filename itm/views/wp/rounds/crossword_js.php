<script type="text/javascript">
    function call_crossword(val_) {
        cross_val = val_;
        $('#cartoon_').show();
        $('#timer').show();
        $('#timer').fadeOut(0).delay(400).fadeIn(750);
        clearTimer();
        $('#stop_').show();
        $('#stop_').fadeOut(0).delay(400).fadeIn(750);
    }

    $('#rules_').click(function () {
        if ($('#view_rules_').is(":visible")) {
            $('#view_rules_').transition({x: '-700px'});
            $('#view_rules_').hide();
        } else {
            $('#view_rules_').show();
            $('#view_rules_').transition({x: '610px'});
            $('#view_ex_').hide();
        }
    });

    $('#example_').click(function () {
        if ($('#view_ex_').is(":visible")) {
            $('#view_ex_').transition({x: '-700px'});
            $('#view_ex_').hide();
        } else {
            $('#view_ex_').show();
            $('#view_ex_').transition({x: '610px'});
            $('#view_rules_').hide();
        }
    });
    $('#start_').click(function () {
        $('#answers_').transition({x: '1500px'});
        $('#answ_1').empty();
        $('#answ_2').empty();
        switch (cross_val) {
            case 1:
                $('#crw_1_').show();
                $('#crw_2_').hide();
                $('#crw_3_').hide();
                $('#crw_4_').hide();
                $('#crw_5_').hide();
                $('#crw_6_').hide();

                fillCrossword_(1, crw1);
                show_hint_(1, 0, 1, 1);
                showAns = 1;
                break;

            case 2:
                $('#crw_1_').hide();
                $('#crw_2_').show();
                $('#crw_3_').hide();
                $('#crw_4_').hide();
                $('#crw_5_').hide();
                $('#crw_6_').hide();

                fillCrossword_(2, crw2);
                show_hint_(2, 2, 3, 1);
                showAns = 2;
                break;

            case 3:
                $('#crw_1_').hide();
                $('#crw_2_').hide();
                $('#crw_3_').show();
                $('#crw_4_').hide();
                $('#crw_5_').hide();
                $('#crw_6_').hide();

                fillCrossword_(3, crw3);
                show_hint_(crw1, 4, 5, 1);
                showAns = 3;
                break;

            case 4:
                $('#crw_1_').hide();
                $('#crw_2_').hide();
                $('#crw_3_').hide();
                $('#crw_4_').show();
                $('#crw_5_').hide();
                $('#crw_6_').hide();

                fillCrossword_(4, crw4);
                show_hint_(crw1, 6, 7, 1);
                showAns = 4;
                break;

            case 5:
                $('#crw_1_').hide();
                $('#crw_2_').hide();
                $('#crw_3_').hide();
                $('#crw_4_').hide();
                $('#crw_5_').show();
                $('#crw_6_').hide();

                fillCrossword_(5, crw5);
                show_hint_(crw1, 8, 9, 1);
                showAns = 5;
                break;

            case 6:
                $('#crw_1_').hide();
                $('#crw_2_').hide();
                $('#crw_3_').hide();
                $('#crw_4_').hide();
                $('#crw_5_').hide();
                $('#crw_6_').show();

                fillCrossword_(6, crw6);
                show_hint_(crw1, 10, 11, 1);
                showAns = 6;
                break;

            default:
                $('#start_').html($('#start_').html() + " Invalid Number Choosen");
        }
        $('#show_hints_answers').show();
    });
    function fillCrossword_(id_, obj_) {
        for (loop1 = 1; loop1 <= row_; loop1++) {
            for (loop2 = 1; loop2 <= col_; loop2++) {
                // $('#crw' + id_ + '_' + loop1 + '_' + loop2).css({background: '#808080', color: '#f0f0f0'});
                $('#crw' + id_ + '_' + loop1 + '_' + loop2).html(obj_[loop1 - 1][loop2 - 1]);
                $('#crw' + id_ + '_' + loop1 + '_' + loop2).css({color: '#ffffff'});
            }
        }
    }
    function show_hint_(crw_, x_1, x_2, y_) {
        $('#hint_wall').fadeOut(0).delay(300).fadeIn(650);
        $('#title_1').fadeOut(0).delay(500).fadeIn(950);
        $('#hint_1').fadeOut(0).delay(700).fadeIn(950);
        $('#hint_2').fadeOut(0).delay(900).fadeIn(950);

        $('#title_1').html("Hints<br />");
        $('#hint_1').html('1. ' + _hints_[x_1][y_]);
        $('#hint_2').html('2. ' + _hints_[x_2][y_]);
    }
    function show_answers(crw_, x, y, ans_) {
        var obj_, obj_1, obj_2, word_ = '', no;
        obj_1 = (ans_ == 1) ? '#answ_1' : '#answ_2';
        $('#answers_').show();
        $('#answers_').transition({x: '-540px'});
        no = (ans_ == 1) ? 1 : 2;

        switch (crw_) {
            case 1:
                obj_ = '#crw1_';
                obj_2 = crw1;
                break;
            case 2:
                obj_ = '#crw2_';
                obj_2 = crw2;
                break;
            case 3:
                obj_ = '#crw3_';
                obj_2 = crw3;
                break;
            case 4:
                obj_ = '#crw4_';
                obj_2 = crw4;
                break;
            case 5:
                obj_ = '#crw5_';
                obj_2 = crw5;
                break;
            case 6:
                obj_ = '#crw6_';
                obj_2 = crw6;
                break;
            default:
                // yet to code
        }
        array_coords = _hints_[x][y];
        coords_1 = array_coords.split(',');

        for (loop1 = 0; loop1 < coords_1.length; loop1++) {
            x_y_ = coords_1[loop1].split('~');
            $(obj_ + (parseInt(x_y_[0]) + 1) + '_' + (parseInt(x_y_[1]) + 1))
                    .css({
                        background: '#ffff00',
                        color: '#900000',
                        border: '#ff0000 dotted 1px',
                        'font-weight': 'bold',
                    });
            word_ = word_ + obj_2[(parseInt(x_y_[0]))][(parseInt(x_y_[1]))];
        }

        $(obj_1).html(no + ". " + word_);
    }
    $('#show_hints_answers').click(function () {
        $('#cartoon_').transition({x: 450});
        switch (showAns) {
            case 1:
                show_answers(1, 0, 2, 1);
                show_answers(1, 1, 2, 2);
                break;
            case 2:
                show_answers(2, 2, 2, 1);
                show_answers(2, 3, 2, 2);
                break;
            case 3:
                show_answers(3, 4, 2, 1);
                show_answers(3, 5, 2, 2);
                break;
            case 4:
                show_answers(4, 6, 2, 1);
                show_answers(4, 7, 2, 2);
                break;
            case 5:
                show_answers(5, 8, 2, 1);
                show_answers(5, 9, 2, 2);
                break;
            case 6:
                show_answers(6, 10, 2, 1);
                show_answers(6, 11, 2, 2);
                break;
            default:
                // yet to code
        }
    });


    $('#1').click(function () {
        $('#cartoon_').transition({x: 450});
        var clr_ = '#900000';
        $('.crsw_block').css({background: clr_, 'box-shadow': '2px 2px #F0F0F0'});
        $('#wall_fade_me').transition({opacity: .1});
        show_team(teams_[0], 1, clr_);
        for (row = 1; row <= 11; row++) {
            for (col = 1; col <= 6; col++) {
                $('#crw1_' + row + '_' + col).fadeOut(0).delay(200 * row).fadeIn(1850);
            }
        }
    });

    $('#2').click(function () {
        $('#cartoon_').transition({x: 450});
        var clr_ = '#009000';
        $('.crsw_block').css({background: clr_, 'box-shadow': '2px 2px #F0F0F0'});
        $('#wall_fade_me').transition({opacity: .1});
        show_team(teams_[1], 3, clr_);
        for (row = 1; row <= 11; row++) {
            for (col = 1; col <= 6; col++) {
                $('#crw2_' + row + '_' + col).fadeOut(0).delay(200 * col).fadeIn(1850);
            }
        }
    });

    $('#3').click(function () {
        $('#cartoon_').transition({x: 450});
        var clr_ = '#000040';
        $('.crsw_block').css({background: clr_, 'box-shadow': '2px 2px #F0F0F0'});
        $('#wall_fade_me').transition({opacity: .1});
        show_team(teams_[2], 3, clr_);
        for (row = 1; row <= 11; row++) {
            for (col = 1; col <= 6; col++) {
                $('#crw3_' + row + '_' + col).fadeOut(0).delay(200 * 1).fadeIn(1850);
            }
        }
    });

    $('#4').click(function () {
        $('#cartoon_').transition({x: 450});
        var clr_ = '#400040';
        $('.crsw_block').css({background: clr_, 'box-shadow': '2px 2px #F0F0F0'});
        $('#wall_fade_me').transition({opacity: .1});
        show_team(teams_[3], 3, clr_);
        for (row = 1; row <= 11; row++) {
            for (col = 1; col <= 6; col++) {
                $('#crw4_' + row + '_' + col).fadeOut(0).delay(200 * col).fadeIn(1850);
            }
        }
    });

    $('#5').click(function () {
        $('#cartoon_').transition({x: 450});
        var clr_ = '#003030';
        $('.crsw_block').css({background: clr_, 'box-shadow': '2px 2px #F0F0F0'});
        $('#wall_fade_me').transition({opacity: .1});
        show_team(teams_[4], 3, clr_);
        for (row = 1; row <= 11; row++) {
            for (col = 1; col <= 6; col++) {
                $('#crw5_' + row + '_' + col).fadeOut(0).delay(200 * row).fadeIn(1850);
            }
        }
    });

    $('#6').click(function () {
        $('#cartoon_').transition({x: 450});
        var clr_ = '#202000';
        $('.crsw_block').css({background: clr_, 'box-shadow': '2px 2px #F0F0F0'});
        $('#wall_fade_me').transition({opacity: .1});
        show_team(teams_[5], 3, clr_);
        for (row = 1; row <= 11; row++) {
            for (col = 1; col <= 6; col++) {
                $('#crw6_' + row + '_' + col).fadeOut(0).delay(200 * col).fadeIn(1850);
            }
        }
    });
    $('#rrule_btn').click(function () {
        $('#r_rules').fadeIn(400);
    });

    $('#close_rrule_btn').click(function () {
        $('#r_rules').fadeOut(400);
    });
    $('#audience').click(function () {
        audience_loop1++;
        
        if(audience_loop1 == 1){
            $('#audiencewall1').fadeIn(400);
        } else if(audience_loop1 == 2){
            $('#audiencewall2').fadeIn(400);
        } else if(audience_loop1 == 3){
            $('#audiencewall3').fadeIn(400);
        } else if(audience_loop1 == 4){
            $('#audiencewall4').fadeIn(400);
        } else if(audience_loop1 == 5){
            $('#audiencewall5').fadeIn(400);
        } else if(audience_loop1 == 6){
            $('#audiencewall6').fadeIn(400);
        } else { 
            alert('Audi Crossword Done.!!');
        }
    });
    $('#close_audience1').click(function () {$('#audiencewall1').fadeOut(400);});
    $('#close_audience2').click(function () {$('#audiencewall2').fadeOut(400);});
    $('#close_audience3').click(function () {$('#audiencewall3').fadeOut(400);});
    $('#close_audience4').click(function () {$('#audiencewall4').fadeOut(400);});
    $('#close_audience5').click(function () {$('#audiencewall5').fadeOut(400);});
    $('#close_audience6').click(function () {$('#audiencewall6').fadeOut(400);});
    
    $('#show_audi_ans1').click(function(){$('#audi_ans1').show();});
    $('#show_audi_ans2').click(function(){$('#audi_ans2').show();});
    $('#show_audi_ans3').click(function(){$('#audi_ans3').show();});
    $('#show_audi_ans4').click(function(){$('#audi_ans4').show();});
    $('#show_audi_ans5').click(function(){$('#audi_ans5').show();});
    $('#show_audi_ans6').click(function(){$('#audi_ans6').show();});
    
    function show_team(tm_, num_, color_) {
        var x = [], str_ = "<span style='color: " + color_ + "'>";
        x = tm_.split('');
        for (i = 0; i < x.length; i++) {
            if (i == num_) {
                str_ = str_ + "<span style='font-size: 150px;'>" + x[i] + "</span>";
            } else {
                str_ = str_ + x[i];
            }
        }
        str_ = str_ + "</span>";
        $('#team_place').fadeOut(0).delay(200).fadeIn(950);
        $('#team_place').html("<p style='font-size: 40px; color: #808080; font-family; Arial'>Team</p><b>" + str_ + "</b><p style='font-size: 30px; color: #404040; font-family; Arial'>here are your <br /></p>");

        $('#cartoon_').transition({x: -450, delay: 3000});
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
</script>