<!-- JavaScript here -->
<?php if ($qa_pkg['res_'] == TRUE) { ?>
    <script type="text/javascript">
        var globalCount = 0;
        var nextCounter = -1;
        var totalCount = <?php echo $tot_count; ?>;
        var teamName_ = [];
        var questions_ = [];
        var no_of_dashes = [];
        var correct_char = [];
        var char_place = [];
        var correct_Ans = [];
        var team_ = [];
        var round_ = [];

    <?php $loop1 = 0; ?>
    <?php foreach ($qa_pkg['data_'] as $item) { ?>

            teamName_[<?php echo $loop1; ?>] = "<?php echo $item->TeamName; ?>";
            questions_[<?php echo $loop1; ?>] = "<?php echo $item->QUESTION_; ?>";
            no_of_dashes[<?php echo $loop1; ?>] = "<?php echo $item->NO_OF_DASHES; ?>";
            correct_char[<?php echo $loop1; ?>] = "<?php echo $item->CORRECT_CHAR; ?>";
            char_place[<?php echo $loop1; ?>] = "<?php echo $item->CHAR_PLACE; ?>";
            correct_Ans[<?php echo $loop1; ?>] = "<?php echo $item->ANSWER_; ?>";

        <?php $loop1++; ?>
    <?php } ?>
    </script>
    <!-- End of Javascript -->
    <!-- Stylesheets here -->
    <style type="text/css">
        .start__ { width: 100%; padding: 25px; font-size: 50px; text-align: center; display: block; border: #ff0000 dotted 1px; top:300px; }
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
            background: url(<?php echo base_url('nitnav/img/example_hangman.png'); ?>) no-repeat;
            z-index: 99999;
        }
        .example__ {width:50%;float: right; text-align: left; display: block ; }
        .end__ { width: 100%; padding: 25px; font-size: 50px; text-align: center; display: none; }
        .teamName_{ font-size: 30px; padding: 10px; display: none; color:#ffff00; margin-left:20px;}
        .jumbledWord{font-size: 40px; background: transparent; padding: 10px 0px 10px 10px; float: left; display: none; position:fixed;top:300px;}
        .Ques_{ width:100%;height: auto; color:#fff; padding: 10px;line-height:40px;border:1px #fff dotted; border-radius: 5px; background: #900; font-weight:bold;  font-size:40px;margin-top:150px; display: none}
        .ans_{margin:40px 20px 0 0;;float:left; width:50%; height: auto; color:#000080;  padding: 10px; font-size:30px; line-height: 40px; border:1px #002166 dotted; border-radius: 5px;background: #D0D0D0;  opacity: .9; font-weight:bold;font-size:30px;  display: none }
        .correct_{background: url('<?PHP echo base_url() . 'nitnav/img/right.png'; ?>') no-repeat right #ffff00;font-size:40px;color:#E13300;border:1px #900 dashed;display:none; height:78px;margin-top:100px; width:500px;}
        .corrAns_{float: left; overflow: hidden; text-align: left; display: none; }
        .next_{float: left;overflow: hidden; text-align: right; display: none }
        .answerNo_{margin:150px 0 ;float:left;width:13%;color:#ff0;padding: 10px;font-size:20px;line-height: 40px;font-weight:bold;font-size:40px; display: none }
        .dash_design{float: left; width: 50px; height: 40px; background: transparent; padding: 0px 0px; border-bottom: #ffff00 solid 4px; text-align: center; font-weight: bold;color: #fff; font-size: 35px;margin:70px 0px 0 ;}
        .theEnd{font-size: 175px; color: #900000}
        #hangStart{position:fixed; right:15px; top:0px; float:right;margin:0px;}
        #hangMAN{position:fixed; right:200px; top:400px; float:right;margin:0px;display:none;}
        #rope{position:fixed; right:270px;top:-320px;float:right;margin:0px;display:none;}
        .rope_{position:fixed; right:270px;top:-820px;float:right;margin:0px;display:none;}
        #helphangMAN{position:fixed; right:200px; top:350px; float:right;margin:0px;display:none;}
        #hangedMAN{position:fixed; right:175px; top:-50px; float:right;margin:0px;display:none;}
        #saveMe{position:fixed; right:40px; top:350px; float:right;margin:0px;display:none;}
        .stop_ {width: 37px; height: 37px ;margin-top:40px; margin-left:1330px;position:fixed;display:none;}
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
    <body background="<?PHP echo base_url() . 'nitnav/img/hangmanBack.jpg'; ?>"  style="margin-top:0px;">
        <div class="container" style="width: 100%;">
            <div class="row" id="game__">
                <div class="col-sm-12">
                    <!--<div align="center" style="margin-top:20px; border:1px #009000 dotted;padding:5px;">
                        <span style="color:#ffff00;" id="roundName_"> <?php echo $title; ?></span>
                    </div>-->
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-9"></div>
                        <div class="col-sm-3" style="z-index: 9999; position: fixed; right: 10px; top: 10px; float: right; text-align: right; border: #909090 solid 0px; padding: 0px 0px 0px 0px">
                            <div class="close_" id="close_"><a href="<?php echo site_url('wordpower/dashboard'); ?>"><img src="<?php echo base_url('nitnav/img/close.png'); ?>" border="0"/></a></div>
                        </div>
                    </div>
                    <div class="col-sm-2 teamName_" id="team_name_" style="position:fixed; top:20px;left:30px;color:#900;font-family:cooper black;font-size:55px;text-shadow:2px 2px 5px #d6ee18;">Team</div>
                    <div class="col-sm-2" align="center" style="position:fixed; top:1px;right:30px;">
                        <div id="timer">
                            <div id="demo" onClick="timedCount()"></div>
                        </div>
                    </div>
                    <div class="stop_" id="stop_" onclick="stopCount();"><img src="<?php echo base_url('nitnav/img/stop.png'); ?>" width="20" height="20" border="0"/></div>
                    <div style="clear: both"></div>
                    <div style="border: #009000 dotted 0px; overflow: hidden">
                        <div class="col-sm-2 teamName_" id="team_name_" style="position:fixed; top:20px;left:20px;">Team</div>
                        <div style="padding: 10px; width: auto;">
                            <div class="answerNo_" id="jumbled_Word"></div><div class="Ques_" id="Question"></div>                            
                            <div class="jumbledWord" id="dashes_with_1"></div>
                            <div style="clear: both"></div>
                            <div class="correct_" id="correct_ans"></div>
                            <div class="end__" id="end_">End of <?php echo $title; ?><br /><h5><a href="<?php echo site_url('wordpower/dashboard'); ?>"><button class="btn-primary">Home</button></a></h5></div>
                        </div>
                        <div style="clear: both"></div>
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
            </div>
            <div class="row" id="end__" style="display:none; padding: 200px 0px 0px 0px">
                <div class="col-sm-12" style="text-align: center">
                    <?php echo anchor('wordpower/dashboard', '<span class="theEnd">The End</span>'); ?>
                </div>
            </div>
        </div>
        <div style="position:fixed;left:0px; bottom:0px;width:400px;">
            <div id="corrAnsBut_" class="nav_button"><img src="<?php echo base_url('nitnav/img/answer.png'); ?>" border="0"/></div>
            <div class="nav_button" id="example_"><img src="<?php echo base_url('nitnav/img/example.png'); ?>" border="0"/></div>
            <div class="nav_button" id="rrule_btn"><img src="<?php echo base_url('nitnav/img/rules_but.png'); ?>" border="0"/></div>
        </div>
        <div style="position:fixed;float: right; right:0px; bottom:0px;width:200px;">
            <div class="corrAns_" id="corrAnsBut_"><button class="btn-primary">Answer</button></div>
            <!--<div class="hang_" id="hangBut_"><button class="btn-danger">H</button></div>-->
            <div class="next_" id="nextBut_"><button class="btn-danger">NEXT &gt;&gt;</button></div>
        </div>
        <div style="position:fixed;left:1150px;top:660px;" id="st_button">
            <center>
                <button class="btn-danger" style="padding:30px; font-size:40px; border-radius:20px;" id="start_">START</button>
            </center>
        </div>
        <div id="hangMAN" align='right'>
            <img src="<?PHP echo base_url() . 'nitnav/img/Minion2.png'; ?>">
        </div>
        <div id="helphangMAN" align='right'>
            <img src="<?PHP echo base_url() . 'nitnav/img/Minion1.png'; ?>">
        </div>
        <div id="rope" align='right'>
            <img src="<?PHP echo base_url() . 'nitnav/img/rope.png'; ?>">
        </div>
        <div id="hangedMAN" align='right'>
            <img src="<?PHP echo base_url() . 'nitnav/img/hangedM.png';?>">
        </div>
        <div id="saveMe" align='right'>
            <img src="<?PHP echo base_url() . 'nitnav/img/save.png'; ?>">
        </div>
        <div id="hangStart" align='right'>
            <img src="<?PHP echo base_url() . 'nitnav/img/hangManStart.png'; ?>">
        </div>
    <?php } else { ?>
        <div style="padding: 25px; text-align: center">
            <h3>No Data Found</h3>
            <a href="<?php echo site_url('wordpower/dashboard'); ?>"><button class="btn-danger">&lt;&lt; Home</button></a>
        </div>
    <?php } ?> 