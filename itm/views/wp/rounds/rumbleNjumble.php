<!-- JavaScript here -->
<?php if ($qa_pkg['res_'] == TRUE) { ?>
    <?php $this->load->view('wp/flip/flip'); ?>
    <script>
        fnextCounter = 0;
        ftotalCount = 1;
    </script>
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
            width: 780px;
            height: 683px;
            display: none;
            position: fixed;
            left: 300px;
            top: 40px;
            background: url(<?php echo base_url('nitnav/img/example_rnj.png'); ?>) no-repeat;
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
            width: auto;
            height: 75px;
            text-align: center;
            box-shadow: 0px 0px 10px #000000;
        }
        .jumbledWord{background: transparent; padding: 10px 0px 0px 0px; float: left; display: none }
        .Ques_{ 
            width:90%;
            height: auto; 
            color:#fff; 
            padding: 10px; 
            font-size:60px; 
            border:1px #fff dotted; 
            border-radius: 5px; 
            background: #900; 
            font-weight:bold;
            line-height: 50px;
            margin-top:60px; 
            display: none;
        }
        .ans_{
            background: transparent;
            margin: 10px 10px 20px 0px;
            text-align: left;
            width: auto;
            height: auto;
            float: left;
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
        .correct_{width:50%; color: #0000FF; display: none; height:80px; margin-left:150px; margin-top:70px; padding-left: 50px;}
        .corrAns_{float: left; overflow: hidden; text-align: left; display: none; }
        .answerNo_{margin:10px ;float:left;width:386px; height:108px; border:0px #002166 dotted;border-radius: 5px; background: transparent;font-weight:bold;font-size:40px; display: none }
        .next_{float: right;overflow: hidden; text-align: right; display: none }
        .fanswerNo_{margin:40px 0 ;float:left;width:5%;color:#ff0;padding: 10px; line-height: 40px;border:1px #002166 dotted;border-radius: 5px;background: #900;font-weight:bold;font-size:35px;}
        .correct_{background: url('<?PHP echo base_url() . 'nitnav/img/right.png'; ?>') no-repeat right #ffff00; font-family: 'Arial Black';font-size:70px; height: 95px; color:#E13300;border:1px #900 dashed; border-radius: 20px}
        .fcorrect_{background: url('<?PHP echo base_url() . 'nitnav/img/right.png'; ?>') no-repeat right #ffff00; font-family: 'Arial Black';font-size:70px; height: 95px; color:#E13300;border:1px #900 dashed; border-radius: 20px}
        .flip_{ display: none; position: absolute; border: #ffffff solid 1px; background: #000000; left: 40px; top:0px; height: auto }
        .welcome_text_small{float: left; position: fixed; left:0px; margin: 10px; z-index: 0; width: 184px; height: 128px; background:url(<?PHP echo base_url() . 'nitnav/img/smallRumbleNJumble_text.png'; ?>);?>; border:#ff0000 solid 0px; background-repeat: no-repeat; opacity: 1}
        .welcome_text_{float: right; position: fixed; z-index: 0; width: 841px; height: 100%; background:url(<?PHP echo base_url() . 'nitnav/img/RumbleNJumble_text.png'; ?>);?>; border:#ff0000 solid 0px; background-repeat: no-repeat; opacity: 1}
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
    <body background="<?PHP echo base_url() . 'nitnav/img/rnj_wall.jpg'; ?>"  style="margin-top:0px;">
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
                <div class="col-sm-5">
                    <div id="wall_fade_me_" class="cartoon_"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-2 teamName_" id="team_name_">Team</div>
                    <div class="col-sm-2" align="center" style="position:fixed; top:1px;right:0px;">
                        <div id="timer">
                            <div id="demo" onClick="timedCount()"></div>
                        </div>
                    </div>
                    <div style="clear: both"></div>
                    <div style="padding: 10px; width: auto;">
                        <div style="clear: both"></div>
                        <div style="padding: 20px; height: 80px"></div>
                        <div style="clear: both"></div>
                        <div class="Ques_" id="Question"><div style="padding: 10px">Hint</div></div>
                        <div style="clear: both"></div>
                        <div class="answerNo_" id="jumbled_Word"></div>
                        <div style="clear: both; height: 20px;"></div>
                        <div style="float: left; width: 50px; height: 20px"></div>
                        <div id="option_A" style="float: left; width:auto; height: auto; padding: 15px; background: #FFFFFF; opacity: 1; border-radius: 15px; display: none">
                            <div class="ans_">Jumbled Word Here..</div>
                        </div>
                        <div style="clear: both"></div>
                        <div class="correct_" id="correct_ans"></div>
                        <div class="end__" id="end_">End of <?php echo $title; ?><br /><h5><a href="<?php echo site_url('wordpower/dashboard'); ?>"><button class="btn-primary">Home</button></a></h5></div>
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
                        <div style="position: fixed; bottom: 65px; margin-left: 397px" id="close_example_btn"><img src="<?php echo base_url('nitnav/img/close_.png'); ?>" /></div>
                    </div>
                </div>
            </div>
            <div style="text-align: left; float: left; position:fixed;left:10px; bottom:55px;">
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
                    <button class="btn btn-info" id="next_team">NEXT Team</button>
                    <!--<button class="btn btn-info" id="next_team">NEXT Team</button>-->
                    <button class="btn btn-info" id="flip_">Flip</button>
                </div>
            </div>
        </div>
        <div class="col-sm-11 flip_" id="flip_round" style="height: auto">
            <div class="row">
                <div class="col-sm-12" style="background: #f0f0f0; color: #000000">
                    Flip Question
                </div>
            </div>
            <div class="col-sm-12">
                <div style="display: none" id="fstart_"></div>
                <div class="Ques_" id="fQuestion"><div style="padding: 10px">Question</div></div>
                <div style="clear: both; height: 10px"></div>
                <div id="foption_A" style="float: left; width:auto; height: auto; padding: 15px; background: #FFFFFF; opacity: 1; border-radius: 15px; display: none">
                    <div class="fans_">Jumbled Word Here..</div>
                </div>
                <div style="clear: both"></div>
                <div class="fcorrect_" id="fcorrect_ans">Correct Answer</div>
                <div style="clear: both; height: 20px"></div>
                <button class="btn btn-info" id="fnextBut_" style="float: right">NEXT Question</button>
                <button class="btn btn-info" id="fcorrAnsBut_" style="float: right">Show</button>
                <button class="btn btn-info" id="fstart_" style="display: none">HIDDEN</button>
                <div style="clear: both" style="padding: 2px; height: 15px"></div>
                <div style="clear: both; height: 20px"></div>
            </div>
        </div>
    <?php } else { ?>
        <div style="padding: 25px; text-align: center">
            <h3>No Data Found</h3>
            <a href="<?php echo site_url('wordpower/dashboard'); ?>"><button class="btn-danger">&lt;&lt; Home</button></a>
        </div>
    <?php } ?>
