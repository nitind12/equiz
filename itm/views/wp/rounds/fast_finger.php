<!-- JavaScript here -->
<?php if ($qa_pkg['res_'] == TRUE) { ?>
    <script type="text/javascript">
        var nextCounter = -1;
        var totalCount = <?php echo $tot_count; ?>;
        var breakCount = <?php echo $break_count; ?>;
        var breakCountTemp = 1;
        var teamName_ = [];
        var questions_ = [];
        var answers__ = [];
        var font_size_Q = [];
        var options_A = [];
        var options_B = [];
        var options_C = [];
        var options_D = [];
        var correct_Ans = [];
        var font_size_A = [];
        var team_ = [];
        var round_ = [];
        var ques__ = [];
        var answer__ = [];
    <?php $loop1 = 0; ?>
    <?php foreach ($qa_pkg['data_'] as $item) { ?>
            teamName_[<?php echo $loop1; ?>] = "<?php echo $item->TeamName; ?>";
            {
                q__ = "<?php echo $item->QUESTION; ?>";
                a__ = "<?php echo $item->A; ?>";
                ques__ = q__.split(',');
                answer__ = a__.split(',');

                ques_str = "<ul class='question_list'>";
                for(i=0;i<ques__.length;i++){
                    ques_str = ques_str + "<li class='question_list_li'>" + ques__[i] + "</li>";
                }
                ques_str = ques_str + "</ul>";

                answer_str = "<ul class='question_list'>";
                for(i=0;i<answer__.length;i++){
                    answer_str = answer_str + "<li class='question_list_li'>" + answer__[i] + "</li>";
                }
                answer_str = answer_str + "</ul>";
            }
            questions_[<?php echo $loop1; ?>] = ques_str;
            correct_Ans[<?php echo $loop1; ?>] = answer_str;
        <?php $loop1++; ?>
    <?php } ?>
    </script>
    <!-- End of Javascript -->
    <!-- Stylesheets here -->
    <style type="text/css">
        .question_list{
            float: left;
            text-align: left;
            list-style: none;
            font-weight: bold;
            font-family: Verdana;
            font-size: 50px;
        }
        .question_list_li{
            border-bottom: #909090 solid 1px;
            text-indent: -30px;
            padding: 20px;
        }
        .Ques_{ 
            position: fixed;
            height: 620px; 
            min-width: 400px;
            width: auto;
            background: url('<?php echo base_url('nitnav/img/base.png'); ?>');
            padding: 10px; 
            border-radius: 10px;
            border:0px #fff dotted; 
            display: none;
            color: #ffffff;
            top:8%;
            left: 60%;
            box-shadow: 0px 0px 10px #000000;
            overflow: hidden;
            letter-spacing: 3px;
        }
        .correct_{ 
            position: fixed;
            height: 620px; 
            min-width: 400px;
            width: auto;
            background: #ffff00;
            padding: 10px; 
            border-radius: 10px;
            border:0px #fff dotted; 
            display: none;
            color: #ff0000;
            top:10%;
            left: 50%;
            box-shadow: 0px 0px 10px #000000;
            overflow: hidden;
            letter-spacing: 3px;
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
        .start__ { 
            width: 100%; 
            height: auto; 
            padding: 50px; 
            font-size: 100px; 
            text-align: center; 
            display: block; 
            border: #ff0000 dotted 0px; 
            top:300px; 
            border-radius: 25px;
        }
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
        .end__ { position: fixed; left:0px; top: 0px; width: 100%; padding: 25px; font-size: 50px; text-align: center; display: none; z-index: 9999999 }
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
        .corrAns_{float: left; overflow: hidden; text-align: left; display: none; width: 70%; height: auto; line-height: 40px; }
        .answerNo_{margin:10px ;float:left;width:386px; height:108px; border:0px #002166 dotted;border-radius: 5px; background: transparent;font-weight:bold;font-size:40px; display: none }
        .next_{float: right;overflow: hidden; text-align: right; display: none }
        .fanswerNo_{margin:40px 0 ;float:left;width:5%;color:#ff0;padding: 10px; line-height: 40px;border:1px #002166 dotted;border-radius: 5px;background: #900;font-weight:bold;font-size:35px;}
        .fcorrect_{background: url('<?PHP echo base_url() . 'nitnav/img/right.png'; ?>') no-repeat right #ffff00; font-family: 'Arial Black';font-size:70px; height: 95px; color:#E13300;border:1px #900 dashed; border-radius: 20px}
        .flip_{ display: none; position: absolute; border: #ffffff solid 1px; background: #000000; left: 40px; top:0px; height: auto }
        .welcome_text_{float: right; position: fixed; left: 70px; bottom:60px; z-index: 0; width: 589px; height: 619px; background:url(<?PHP echo base_url() . 'nitnav/img/FastestFingerFirst_text.png'; ?>);?>; border:#ff0000 solid 0px; background-repeat: no-repeat; opacity: 1}
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
        .counterbuzz_1{
            right: 41%;
            position: fixed; 
            background: #000090; 
            border-radius: 40px;  
            color: #ffffff; 
            float: right; 
            font-size: 55px; 
            font-weight: bold; 
            padding: 25px; 
            width: auto; 
            display: none
        }
        .counterbuzz_2{
            right: 51%;
            top: 40%;
            position: fixed; 
            background: #005500; 
            border:#ffffff solid 5px,
            border-radius: 40px;  
            color: #ffffff; 
            float: right; 
            font-size: 55px; 
            font-weight: bold; 
            padding: 25px; 
            width: auto; 
            display: none
        }
    </style>

    <!-- End of Stylesheets -->
    <body  style="margin-top:0px; background: url('<?PHP echo base_url() . 'nitnav/img/FastestFingerFirst.jpg'; ?>');?>">
        <div class="container" style="overflow: hidden">
            <div class="row">
                <div class="col-sm-9"></div>
                <div class="col-sm-3" style="z-index: 9999; position: fixed; right: 10px; top: 10px; float: right; text-align: right; border: #909090 solid 0px; padding: 0px 0px 0px 0px">
                    <div class="close_" id="close_"><a href="<?php echo site_url('wordpower/dashboard'); ?>"><img src="<?php echo base_url('nitnav/img/close.png'); ?>" border="0"/></a></div>
                </div>
            </div>
            <div class="row" id="annim_banner" style="display: none">
                <div class="col-sm-7">
                    <div id="wall_fade_me" class="welcome_text_"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-8"></div>
                    <div class="col-sm-2 teamName_" id="team_name_"></div>
                    <div class="col-sm-2" align="center" style="position: fixed; top:20px; right:0px;">
                        <div id="timer">
                            <div id="demo" onClick="timedCount()"></div>
                        </div>
                    </div>
                    <div style="clear: both; height: 100px"></div>
                    <div class="row" style="text-align: center">
                        <div class="col-sm-8">&nbsp;</div>
                        <div class="col-sm-1" class="counterbuzz_1" id="counterbuzz"></div>
                        <div style="clear: both"></div>
                        <div class="col-sm-12 Ques_" id="Question"></div>

                        <div class="col-sm-12 correct_" id="correct_ans"></div>

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
            <div style="text-align: left; float: left; position:fixed;left:5px; bottom:10px;">
                <div class="nav_button" id="rrule_btn"><img src="<?php echo base_url('nitnav/img/rules_but.png'); ?>" border="0"/></div>
            </div>
        </div>
        <div style="position:fixed; top:35%; left:35%" id="st_button">
            <center>
                <button class="btn-primary start__" id="start_">START</button>
            </center>
        </div>
        <div class="row" id="media_buttons" style="display: none">
            <div class="col-sm-12"  style="position:fixed; bottom:0px;">
                <div class="col-sm-8"></div>
                <div class="col-sm-4" align="right">
                    <button class="btn btn-info" id="nextBut_">NEXT Question</button>
                    <button class="btn btn-info" id="corrAnsBut_">Show</button>
                    <button class="btn btn-info" id="start_" style="display: none">HIDDEN</button>

                </div>
            </div>
        </div>
        <div class="col-sm-12 end__" id="end_">
            End of <?php echo $title; ?><br />
            <h5>
                <a href="<?php echo site_url('wordpower/dashboard'); ?>">
                    <button class="btn-primary">Home</button>
                </a>
            </h5>
        </div>
    <?php } else { ?>
        <div style="padding: 25px; text-align: center">
            <h3>No Data Found</h3>
            <a href="<?php echo site_url('wordpower/dashboard'); ?>"><button class="btn-danger">&lt;&lt; Home</button></a>
        </div>
    <?php } ?>
