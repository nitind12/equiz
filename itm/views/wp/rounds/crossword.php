<!-- JavaScript here -->
<?php if ($qa_pkg['res_'] == FALSE) { ?>
    <script>
        var audience_loop1 = 0;
        var row_ = 11;
        var col_ = 6;
        var cross_val;
        var showAns = 0;
        var teams_ = [];
    <?PHP $this->load->view('wp/rounds/crw_data'); ?>
    <?php $arr_ = array($crw_1, $crw_2, $crw_3, $crw_4, $crw_5, $crw_6); ?>
    <?php for ($i = 1; $i <= 6; $i++) { ?>
        <?php if ($arr_[$i - 1]['res_'] == TRUE) { ?>
            <?php $loop1 = 0; ?>
            <?php foreach ($arr_[$i - 1]['data_'] as $item) { ?>

                    crw<?php echo $i; ?>[<?php echo $loop1; ?>][0] = '<?php echo $item->_1; ?>';
                    crw<?php echo $i; ?>[<?php echo $loop1; ?>][1] = '<?php echo $item->_2; ?>';
                    crw<?php echo $i; ?>[<?php echo $loop1; ?>][2] = '<?php echo $item->_3; ?>';
                    crw<?php echo $i; ?>[<?php echo $loop1; ?>][3] = '<?php echo $item->_4; ?>';
                    crw<?php echo $i; ?>[<?php echo $loop1; ?>][4] = '<?php echo $item->_5; ?>';
                    crw<?php echo $i; ?>[<?php echo $loop1; ?>][5] = '<?php echo $item->_6; ?>';
                <?php $loop1++; ?>

            <?php } ?>
        <?php } ?>
    <?php } ?>
    <?php $hint1 = 0; ?>
    <?php foreach ($hints['data_'] as $item) { ?>

            _hints_[<?php echo $hint1; ?>][0] = <?php echo $item->HINTID; ?>;
            _hints_[<?php echo $hint1; ?>][1] = '<?php echo $item->HINT; ?>';
            _hints_[<?php echo $hint1; ?>][2] = '<?php echo $item->ANSWER_; ?>';
            _hints_[<?php echo $hint1; ?>][3] = <?php echo $item->CROSSWORD_; ?>;
        <?php $hint1++; ?>
    <?php } ?>
    <?php $loop1 = 0; ?>
    <?php if ($teams['res_'] == TRUE) { ?>
        <?php foreach ($teams['data_'] as $item) { ?>
                teams_[<?php echo $loop1; ?>] = "<?php echo $item->NAME_; ?>";
            <?php $loop1++; ?>
        <?php } ?>
    <?php } ?>
    </script>
    <!-- End of Javascript -->
    <!-- Stylesheets here -->
    <style type="text/css">
        .start__ { width: 100%; padding: 25px; font-size: 50px; text-align: center; display: block; border: #ff0000 dotted 1px }
        //.rules__ { width: 48%; float: left; overflow: hidden; text-align: right; display: block  }
        //.example__ { width: 50%; float: right; overflow: hidden; text-align: left; display: block  }
        .view_rules__{width: 40%; float: left; overflow: hidden; padding: 5px; border-radius: 15px; border: #808080 dotted 1px;position:fixed; left:-700px; top:200px;display:none;background:#0088cc;color:#ffff00;font-size:25px;}
        .view_ex__{width: 40%; float: left; overflow: hidden; padding: 5px; border-radius: 15px; border: #808080 dotted 1px;position:fixed; left:-700px; top:200px;background:#0088cc;color:#ffff00;font-size:25px;display:none;}
        .end__ { width: 100%; padding: 25px; font-size: 50px; text-align: center; display: none; }

        .teamName_{ font-size: 45px; background: #f0f0f0; padding: 10px; display: none }
        .team_wall_{ text-shadow: 2px 2px 10px #A0A0A0 ;font-family: Nueva Std, Broadway, Bebas neue; font-size: 120px; color: #0000ff; padding: 10px; width: 300px; height: auto; border: #ff0000 dotted 0px; line-height: 60px; text-align: left }
        .teambtn{ text-align: left }
        .Ques_{ font-size: 35px; padding: 10px; display: none }
        .ans_{ font-size: 25px; width: 250px; float: left; color:#0086b3; display: none }
        .correct_{font-size: 25px; color: #0000FF; display: none }
        .corrAns_{width: 49%; float: left; background: #f0f0f0; overflow: hidden; text-align: left; display: none }
        .next_{width: 49%; float: right; background: #f0f0f0; overflow: hidden; text-align: right; display: none }
        a{color: #000090}
        a:hover{color: #000090;}
        .crossword_{ display: none; width: 400px }
        .crsw_cover{ float: left; padding: 3px;}
        .crsw_block{ padding: 13px 0px 0px 0px; background: #000090; width: 60px; height: 50px; text-align: center; border-radius: 10px; color:#ffffff; font-size: 24px; font-weight:bold;}
        .hints_{ font-family: Arial; font-size: 26px; text-align: left; padding: 5px 5px 5px 10px; color:#ffffff;line-height:30px;}
        .title_{ font-size: 50px; text-align: left; padding: 10px; color:#fff;padding-bottom:30px;}
        ._answers_{font-size: 15px;background: url('<?PHP echo base_url() . 'nitnav/img/right.png'; ?>') no-repeat left #ffff00;float: right;overflow: hidden; position:fixed;right:-600px;width:500px; top:300px; border:1px #ff0000 dotted; border-radius:10px;}
        .answ_{ float: left; color: #900000; font-weight: bold; font-size: 38px; padding: 12px ; padding-left:70px;}
        .cartoon__ { display: block; position: fixed; right: -480px }
        .nav_button{ float: left; padding: 0px 0px 10px 0px; width: 37px; height: 37px }
        .close_ { float: right; padding: 10px 0px 0px 0px; width: 37px; height: 37px }
        .stop_ { float: right; padding: 10px 0px 0px 0px; width: 37px; height: 37px ;margin-top:40px; margin-right:-37px;display:none;}

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
        .audience_{
            width: 1300px;
            height: 700px;
            position: fixed;
            left: 20px;
            top: 20px;
            background:#ffffff;
            display: none;
            border: #900000 dashed 1px;
            border-radius: 25px;
            box-shadow: 0px 0px 30px #000000;
        }
    </style>
    <!-- End of Stylesheets -->
    <body background="<?PHP echo base_url() . 'nitnav/img/crossword.jpg'; ?>"  style="margin-top:0px;">
        <div class="container" style="width: 100%;">
            <div id="wall_fade_me" style="position: fixed; z-index: 0; width: 100%; height: 100%; background:url(<?PHP echo base_url() . 'nitnav/img/crswd.png'; ?>);?>; background-repeat: no-repeat; opacity: 1"></div>
            <div class="row">
                <div class="col-sm-9"></div>
                <div class="col-sm-3" style="text-align: right; border: #909090 solid 0px; padding: 0px 0px 0px 0px">
                    <div class="close_" id="close_"><a href="<?php echo site_url('wordpower/dashboard'); ?>"><img src="<?php echo base_url('nitnav/img/close.png'); ?>" border="0"/></a></div>
                    <div class="stop_" id="stop_" onclick="stopCount();"><img src="<?php echo base_url('nitnav/img/stop.png'); ?>" border="0"/></div>
                </div>
            </div>
            <div class="row" style="opacity: 0">
                <div class="col-sm-12" style="height: 50px"></div>
            </div>
            <div class="row" style="opacity: 1">
                <div class="col-sm-12">
                    <div style="border: #009000 dotted 0px; overflow: hidden; text-align: center">
                        <div class="teamName_" id="team_name_">Team</div>
                        <div class="col-sm-2" align="center" style="position:fixed; top:20px;right:40px;">
                            <div id="timer" style="display:none;">
                                <div id="demo" onClick="timedCount()"></div>
                            </div>
                        </div>
                        <div style="clear: both"></div>
                        <div style="text-align: center">
                            <div class="row">
                                <div class="col-sm-4" style="padding: 40px 0px 0px 20px; height: 500px; float: left">
                                    <div class="team_wall_" id="team_place"></div>
                                    <div style="clear: both"></div>
                                    <div class="col-sm-11" id="hint_wall" style="display: none; padding: 15px 0px 0px 10px; border-radius : 15px ;float: right;overflow: hidden; min-height: 200px; height: auto; border: #009000 solid 0px; background: url(<?php echo base_url('nitnav/img/patra.png'); ?>); background-repeat: no-repeat">
                                        <div class="title_" id="title_1"></div>
                                        <div class="hints_" id="hint_1"></div>
                                        <div class="hints_" id="hint_2"></div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <center>
                                        <?php $this->load->view('wp/rounds/crosswords_all'); ?>
                                    </center>
                                </div>
                                <div id="cartoon_" class="col-sm-4 cartoon__" style="float: right;overflow: hidden; width:491px; border: #009000 solid 0px; text-align: left">
                                    <img src="<?php echo base_url('nitnav/img/cross_image.gif'); ?>" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="_answers_" id="answers_">
                                        <div class="answ_" id="answ_1"></div>
                                        <div style="clear: both"></div>
                                        <div class="answ_" id="answ_2"></div>
                                    </div>
                                </div>
                            </div>
                            <div style="clear: both"></div>
                            <div style="clear: both"></div>
                            <div style="padding: 10px; width: auto;">    
                                <div class="Ques_" id="Question1"></div>
                                <div class="Ques_" id="Question2"></div>
                                <div style="clear: both"></div>
                                <div class="end__" id="end_">End of <?php echo $title; ?><br /><h5><a href="<?php echo site_url('startgame'); ?>"><button class="btn-primary">Home</button></a></h5></div>
                            </div>
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
                            <?php for ($k = 1; $k <= 6; $k++) { ?>
                                <div id="audiencewall<?php echo $k;?>" class="audience_" style="background: url(<?php echo base_url('nitnav/img/CheckerBoardAudience_'.$k.'.jpg'); ?>);">
                                    <div style="clear: both; padding: 50px"><div style="float: right" id="close_audience<?php echo $k;?>"><img src="<?php echo base_url('nitnav/img/close_.png'); ?>" /></div></div>
                                    <div style="clear: both"></div>
                                    <div style="padding: 50px" id="show_audi_ans<?php echo $k;?>">Show Answer</div>
                                    <div style="clear: both"></div>
                                    <div style="float: left; display: none; margin-left: 700px;" id="audi_ans<?php echo $k;?>">
                                        <div style="font-family: Arial; font-size: 56px; float: left; color: #000000; font-weight: bold; text-align: left">
                                        <?php if($k == 1){ ?>
                                            <ol>
                                                <li>GUAVA</li>
                                                <li>PEAR</>
                                            </ol>
                                        <?php } else if($k == 2){ ?>
                                            <ol>
                                                <li>EAGLE</li>
                                                <li>PARROT</li>
                                            </ol>
                                        <?php } else if($k == 3){ ?>
                                            <ol>
                                                <li>TULIP</li>
                                                <li>JASMINE</li>
                                            </ol>
                                        <?php } else if($k == 4){ ?>
                                            <ol>
                                                <li>BROCOLLI</li>
                                                <li>SPINACH</li>
                                            </ol>
                                        <?php } else if($k == 5){ ?>
                                            <ol>
                                                <li>OCTOPUS</li>
                                                <li>SHARK</li>
                                            </ol>
                                        <?php } else if($k == 6){ ?>
                                            <ol>
                                                <li>PINE</li>
                                                <li>BANYAN</li>
                                            </ol>
                                        <?php } ?>
                                            </div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row" style="opacity: 1">
                <div class="col-sm-12" style="position:fixed;right:0px; bottom:10px;">
                    <div id="start_" style="float: right">
                        <?php $loop1 = 1; ?>
                        <?php foreach ($teams['data_'] as $item) { ?>
                            <button id="<?php echo $loop1; ?>" onclick="call_crossword(<?php echo $loop1; ?>);" class="btn btn-primary teambtn"><?php echo $loop1; ?></button><br />
                            <div style="clear: both; height: 2px"></div>
                            <?php $loop1++; ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row" style="opacity: .9">
                <div style="position:fixed;left:0px; bottom:0px;width:400px;" align="left">
                    <div id="show_hints_answers" class="nav_button"><img src="<?php echo base_url('nitnav/img/answer.png'); ?>" border="0"/></div>
                    <div class="nav_button" id="rrule_btn"><img src="<?php echo base_url('nitnav/img/rules_but.png'); ?>" border="0"/></div>
                    <div style="clear: both"></div>
                    <div style="float: left; width: 150px; height: 30px" id="audience">
                        <img src="<?php echo base_url('nitnav/img/audience.png'); ?>" />
                    </div>
                </div>
            <?php } else { ?>
                <div class="row">
                    <div style="padding: 25px; text-align: center">
                        <h3>No Data Found</h3>
                        <a href="<?php echo site_url('startgame'); ?>"><button class="btn-danger">&lt;&lt; Home</button></a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>