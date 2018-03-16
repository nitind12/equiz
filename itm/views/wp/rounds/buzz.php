<!-- JavaScript here -->
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
            font_size_A[<?php echo $loop1; ?>] = "<?php echo $item->FSFA; ?>";

        <?php $loop1++; ?>
    <?php } ?>
    </script>
    <!-- End of Javascript -->
    <!-- Stylesheets here -->
    <style type="text/css">
        .start__ { width: 100%; padding: 25px; font-size: 50px; text-align: center; display: block; border: #ff0000 dotted 1px; top:300px; }
        .rules__ { width: 48%; float: left; overflow: hidden; text-align: right; display: block  }
        .view_rules__{position:fixed; top:200px; left:-500px; width: 50%; overflow: hidden; padding: 5px; border-radius: 15px; border: #808080 dotted 1px; display: none;background:#ff0;height:auto;color:#002166;font-size:30px;line-height:50px;text-align: left;padding-left:130px}
        .view_ex__{
            border: #ff0000 dashed 0px;
            border-radius: 25px;
            width: 600px;
            height: 409px;
            display: none;
            position: fixed;
            left: 400px;
            top: 100px;
            background: url(<?php echo base_url('nitnav/img/buzz/example.png'); ?>) no-repeat;
            z-index: 99999;
        }
        .end__ { width: 100%; padding: 25px; font-size: 50px; text-align: center; display: none; }
        .teamName_{ 
            background: #ffff00;
            border-radius: 25px;
            font-size: 60px; 
            font-family: 'Tekton Pro';
            padding: 25px 10px; 
            display: none; 
            margin-left:20px; 
            position:fixed; 
            top:20px;
            right:700px; 
            color: #000090;
            width: 250px;
            height: 75px;
            text-align: center;
            box-shadow: 0px 0px 10px #000000;
        }
        .jumbledWord{background: transparent; padding: 10px 0px 0px 0px; float: left; display: none }
        .Ques_{ 
            height: auto; 
            width: auto;
            background: #ffffff;
            padding: 10px; 
            font-size:45px; 
            border-radius: 50px;
            border:0px #fff dotted; 
            display: none;
            left: 250px;
            box-shadow: 0px 0px 10px #000000;
        }
        .ans_{
            background: transparent;
            margin: 10px 10px 20px 10px;
            width: auto;
            height: auto;
            font-size: 70px;
            font-weight: bold;
            font-family: 'Arial Black';
            color: #000000;
        }
        .fans_{
            background: transparent;
            width: auto;
            height: auto;
            float: left;
            font-size: 60px;
            font-weight: bold;
            font-family: 'Arial Black';
            color: #000000;
        }
        .corrAns_{float: left; overflow: hidden; text-align: left; display: none; width: %; height: auto; line-height: 40px; }
        .answerNo_{margin:10px ;float:left;width:386px; height:108px; border:0px #002166 dotted;border-radius: 5px; background: transparent;font-weight:bold;font-size:40px; display: none }
        .next_{float: right;overflow: hidden; text-align: right; display: none }
        .fanswerNo_{margin:40px 0 ;float:left;width:5%;color:#ff0;padding: 10px; line-height: 40px;border:1px #002166 dotted;border-radius: 5px;background: #900;font-weight:bold;font-size:35px;}
        .correct_{ 
            padding: 10px;
            background: #ffff00; 
            font-family: 'Arial Black';
            font-size:70px;
            width: 50%;
            height: auto; 
            line-height: 60px;
            color:#E13300;
            border:0px #900 dashed; 
            border-radius: 20px;
            display: none;
            z-index: 99999;
            position: fixed;
            bottom: 120px;
            left: 320px;
        }
        .fcorrect_{background: url('<?PHP echo base_url() . 'nitnav/img/right.png'; ?>') no-repeat right #ffff00; font-family: 'Arial Black';font-size:70px; height: 95px; color:#E13300;border:1px #900 dashed; border-radius: 20px}
        .flip_{ display: none; position: absolute; border: #ffffff solid 1px; background: #000000; left: 40px; top:0px; height: auto }
        .welcome_text_small{float: left; position: fixed; left:0px; margin: 10px; z-index: 0; width: 315px; height: 137px; background:url(<?PHP echo base_url() . 'nitnav/img/buzzer_HeadingSmall.png'; ?>);?>; border:#ff0000 solid 0px; background-repeat: no-repeat; display: none}
        .welcome_text_{float: right; position: fixed; z-index: 0; width: 1306px; height: 100%; background:url(<?PHP echo base_url() . 'nitnav/img/buzzer_Heading.png'; ?>);?>; border:#ff0000 solid 0px; background-repeat: no-repeat; opacity: 1}
        .cartoon_{float: right; position: fixed; z-index: 0; width: 525px; height: 100%; background:url(<?PHP echo base_url() . 'nitnav/img/RumbleNJumble_Cartoon.gif'; ?>);?>; border:#ff0000 solid 0px; background-repeat: no-repeat; opacity: 1}

       .r_rules{
            border: #ff0000 dashed 1px;
            border-radius: 25px;
            width: 1000px;
            height: 683px;
            display: none;
            position: fixed;
            left: 150px;
            top: 40px;
            background: url(<?php echo base_url('nitnav/img/RoundRulesWP.jpg'); ?>);
            box-shadow: 0px 0px 30px #000000;
            z-index: 99999;
        }
        li{
            padding: 15px 0px;
        }
        .r_rule_text{
            float: left;
            color: #000000;
            font-size: 34px; 
            font-family: 'Times New Roman'; 
            margin-left: 20px; 
            width: 850px; 
            height: 550px; 
            text-align: justify;
            line-height: 36px;
            overflow: auto;
        }
    </style>

    <!-- End of Stylesheets -->
    <body  style="margin-top:0px; background: url('<?PHP echo base_url() . 'nitnav/img/buzzer_wall.jpg'; ?>');?>">
        <div class="container" style="overflow: hidden">
            <div class="row">
                <div class="col-sm-9"></div>
                <div class="col-sm-3" style="z-index: 9999; position: fixed; right: 10px; top: 10px; float: right; text-align: right; border: #909090 solid 0px; padding: 0px 0px 0px 0px">
                    <div class="close_" id="close_"><a href="<?php echo site_url('wordpower/dashboard'); ?>"><img src="<?php echo base_url('nitnav/img/close.png'); ?>" border="0"/></a></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7">
                    <div id="small_fade_me" class="welcome_text_small"></div>
                    <div id="wall_fade_me" class="welcome_text_"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-8"></div>
                    <div class="col-sm-2 teamName_" id="team_name_"></div>
                    <div class="col-sm-2" align="center" style="position: fixed; top:1px; right:0px;">
                        <div id="timer">
                            <div id="demo" onClick="timedCount()"></div>
                        </div>
                    </div>
                    <div style="clear: both; height: 100px"></div>
                    <div class="row" style="text-align: center">
                        <div class="col-sm-8">&nbsp;</div>
                        <div class="col-sm-1" style="position: fixed; background: #000090; border-radius: 40px;  color: #ffffff; float: left; font-size: 55px; font-weight: bold; padding: 25px;" id="counterbuzz"></div>
                        <div style="clear: both"></div>
                        <div class="col-sm-12 Ques_" id="Question"></div>

                        <div class="col-sm-12 correct_" id="correct_ans"></div>

                        <div class="col-sm-12 end__" id="end_">End of <?php echo $title; ?><br /><h5><a href="<?php echo site_url('wordpower/dashboard'); ?>"><button class="btn-primary">Home</button></a></h5></div>
                    </div>
                    <?php if ($rules_round['res_'] == TRUE) { ?>
                        <div id="r_rules" class="r_rules">
                            <div style="clear: both; padding: 50px">
                                <div style="float: right" id="close_rrule_btn"><img src="<?php echo base_url('nitnav/img/close_.png'); ?>" /></div>
                            </div>
                            <div class="r_rule_text">
                                <ol>
                                    <?php foreach ($rules_round['data_'] as $item) { ?>
                                        <li><?php echo $item->RULE_; ?></li>
                                    <?php } ?>
                                    <a href="_r1.php"></a>
                                </ol>
                            </div>
                        </div>
                    <?php } ?>
                    <div id="view_ex_" class="view_ex__">
                        <div style="position: fixed; top: 95px; margin-left: 580px" id="close_example_btn"><img src="<?php echo base_url('nitnav/img/close_.png'); ?>" /></div>
                    </div>
                </div>
            </div>
            <div style="text-align: left; float: left; position:fixed;left:22px; bottom:33px;">
                <div class="nav_button" id="rrule_btn"><img src="<?php echo base_url('nitnav/img/rules_but.png'); ?>" border="0"/></div>
                <div class="nav_button" id="example_"><img src="<?php echo base_url('nitnav/img/example.png'); ?>" border="0"/></div>
            </div>
        </div>
        <div style="float: right; position:fixed; right:50px; top:40px;" id="st_button">
            <center>
                <button class="btn-primary" style="padding:30px; font-size:60px; border-radius: 25px; opacity: .6" id="start_">START</button>
            </center>
        </div>
        <div class="row" id="media_buttons" style="display: none">
            <div class="col-sm-12"  style="position:fixed; bottom:0px;">
                <div class="col-sm-8"></div>
                <div class="col-sm-4" align="right">
                    <button class="btn btn-info" id="nextBut_">NEXT Question</button>
                    <button class="btn btn-info" id="corrAnsBut_">Show</button>
                    <button class="btn btn-info" id="start_" style="display: none">HIDDEN</button>
                    <!--button class="btn btn-info" id="next_team">NEXT Team</button>-->
                    <!--<button class="btn btn-info" id="next_team">NEXT Team</button>-->
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div style="padding: 25px; text-align: center">
            <h3>No Data Found</h3>
            <a href="<?php echo site_url('wordpower/dashboard'); ?>"><button class="btn-danger">&lt;&lt; Home</button></a>
        </div>
    <?php } ?>
