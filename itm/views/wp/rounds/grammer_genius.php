<?php $this->load->view('qz/flip/flip'); ?>
<script>
    fnextCounter = 0;
    ftotalCount = 1;
</script>
<style>
    .Ques_{ width:100%;height: auto; color:#fff; padding: 10px;font-size:30px; line-height: 40px;border:1px #fff dotted; border-radius: 5px; background: #fd680e; font-weight:bold;  font-size:30px;margin-top:40px; display: none}
    .ans_{margin:40px 20px 0 0;;float:left; width:40%; height: auto; color:#000080;  padding: 10px; font-size:30px; line-height: 40px; border:1px #002166 dotted; border-radius: 5px;background: #D0D0D0;  opacity: .9; font-weight:bold;font-size:30px;  display: none }
    .answerNo_{margin:40px 0 ;float:left;width:5%;color:#ff0;padding: 10px; line-height: 40px;border:1px #002166 dotted;border-radius: 5px;background: #900;font-weight:bold;font-size:35px;}
    .flip_{ display: none; position: absolute; border: #ffffff solid 1px; background: #000000; left: 40px; top:0px; height: auto }
    .stop_ {width: 37px; height: 37px ;margin-top:80px; margin-left:80px;position:fixed}
    .correct{background: url('<?PHP echo base_url() . 'nitnav/img/right.png'; ?>') no-repeat left #ffff00;font-size:40px;color:#000080;padding-left:80px;border:1px #900 dashed;}
    #think_{position:fixed; top:650px;left:100px;display:none;}
    #ques__{width:100px;float:left; padding-top:20px;}
    #demo{ color: #ffff00; }
    #grammer_genius_annimation{
        position:fixed; 
        text-align: center; 
        width: 100%; 
        margin:0px; 
        border: #ff0000 solid 0px; 
        bottom: 150px;
    }

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
<body  background="<?PHP echo base_url() . 'nitnav/img/grammer_genius.jpg'; ?>"  style="margin-top:0px;" onload="hideAll();">

    <button class="nav_button btn-success" href="#" onclick="p();" style="z-index: 99999; opacity: .7;font-size: 70px; position: absolute; left: 40%; top: 25%; width: 270px; height: 150px; border-radius: 100px;" id="start_button">START</button>
    <div id="grammer_genius_annimation"><img src="<?php echo base_url('nitnav/img/grammer_genius_annimation.png');?>" /></div>

    <div class="container" style="width: 100%;">
        
        <div class="row">
            <div class="col-sm-5">
                <!--<div id="topBox" align="center">
                    <span style="color:#ffff00;" id="roundName_"><?php //echo $round_['data_']->NAME_; ?></span>
                </div>-->
            </div>

            <div class="col-sm-2">
                <div id="topBox" align="center" style="border:0px;padding-top: 50px;" class="teamBack_">
                    <span style="color:#900;font-family:cooper black;font-size:55px;text-shadow:2px 2px 5px #d6ee18;" id="teamName_"></span>
                </div>
            </div>

            <div class="col-sm-2">
                <!-- <div id="topBox" align="center"  onclick="stopCount();" style="border:0px;font-size:21px;color:#002166; font-weight:bold;">
                     QUESTION NO: <span style="color:#900;font-family:cooper black;font-size:40px;" id="question_no_"></span> 
                 </div>-->
            </div>

            <div class="col-sm-2" align="center">
                <div id="timer" style="float:left;">
                    <div id="demo" onClick="timedCount()"></div>
                </div>
            </div>
            <div class="col-sm-1">
                <div class="stop_" id="stop_" onclick="stopCount();">
                <img src="<?php echo base_url('nitnav/img/stop.png'); ?>" width="20" height="20" border="0"/></div>
            </div>
        </div>
        <div class="row" align="center">
            <div class="col-sm-12 end__" id="end_">
                End of <?php echo $title; ?><br /><h5><a href="<?php echo site_url('wordpower/dashboard'); ?>"><button class="btn-primary">Home</button></a></h5>
            </div>
        </div>
        <div class="row" align="center">
            <div class="col-sm-12" id="NEXTT" style="margin-top:350px;position:absolute;left:-1000px;border-radius:10px;display:none;font-size:60px; color:#000080;border:2px #900 dashed; background:#ffff00; line-height: 80px;">
                NEXT <img src="<?PHP echo base_url() . 'nitnav/img/team.png'; ?>">
            </div>
        </div>
        <div class="row" style="margin-top:110px;">
            <div class="col-sm-12" style="background:#46f1f7; height:auto; padding: 10px; display: none" id="qBack">
                <div id="ques__">
                    <span style="padding: 5px 5px; color:#ff0;font-family:cooper black;font-size:60px;" id="ques_q">Q</span>
                    <span style="color:#ff0;font-family:cooper black;font-size:60px;" id="question_no_"></span>                
                </div>
                <div id="question" style="background:#009;border:0px; padding-left:100px;font-size:47px;line-height:60px;"></div>
            </div>
        </div>
        <div id="answers_all" style="display:none">
            <div class="row" style="margin-top:70px">
                <div class="col-sm-1"></div>
                <div class="col-sm-1">
                    <div class="answerNo" align="center">
                        A
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="answers" id="option_A">

                    </div>
                </div>
            </div>
        <div style="clear: both;"></div>
            <div class="row" style="margin-top:20px;">
                <div class="col-sm-1"></div>
                <div class="col-sm-1">
                    <div class="answerNo" align="center">
                        B
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="answers" id="option_B">

                    </div>
                </div>
            </div>
            <div style="clear: both;"></div>

            <div class="row" style="margin-top:20px;">
                <div class="col-sm-1"></div>
                <div class="col-sm-1">
                    <div class="answerNo" align="center">
                        C
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="answers" id="option_C">

                    </div>
                </div>
            </div>
            <div style="clear: both"></div>
            <div class="row" style="margin-top:20px;">
                <div class="col-sm-1"></div>
                <div class="col-sm-1">
                    <div class="answerNo" align="center">
                        D
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="answers" id="option_D">

                    </div>
                </div>
            </div>
        </div>
        <!--<div class="end__" id="end_"></div>-->  

        <div class="row">
            <div class="col-sm-12"  style="position:fixed; bottom:0px;">
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <button class="btn btn-success" id="nextBut_">NEXT Question</button>
                    <button class="btn btn-theme" id="corrAnsBut_">Show</button>
                </div>
                <div class="col-sm-5" align="right">
                    <button class="btn btn-info" id="start_" style="display: none">HIDDEN</button>
                    <button class="btn btn-info" id="next_team">NEXT Team</button>
                    <button class="btn btn-danger" id="flip_">Flip</button>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-11 flip_" id="flip_round" style="height:auto;top:100px;">
                <div class="row">
                    <div class="col-sm-12" style="background: #f0f0f0; color: #000000">
                        Flip
                    </div>
                </div>
                <div class="col-sm-12">
                    <div style="display: none" id="fstart_"></div>
                    <div class="Ques_" id="fQuestion" style="margin-bottom:20px;">Question</div>
                    <div class="answerNo_" align="center">A</div><div class="ans_" id="foption_A">Options A</div>
                    <div class="answerNo_" align="center">B</div><div class="ans_" id="foption_B">Options B</div>
                    <div style="clear: both"></div>
                    <div class="answerNo_" align="center">C</div><div class="ans_" id="foption_C">Options C</div>
                    <div class="answerNo_" align="center">D</div><div class="ans_" id="foption_D">Options D</div>
                    <div style="clear: both"></div>

                    <button class="btn btn-info" id="fnextBut_">NEXT Question</button>
                    <button class="btn btn-info" id="fcorrAnsBut_">Show</button>
                    <button class="btn btn-info" id="fstart_" style="display: none">HIDDEN</button>
                    <div style="clear: both" style="padding: 2px; height: 25px"></div>
                </div>
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
                    <div class="col-sm-2" align="center" style="position:fixed; top:1px;right:30px;">
                        <div id="timer">
                            <div id="demo" onClick="timedCount()"></div>
                        </div>
                    </div>
                    
                    <div style="clear: both"></div>
                    <div style="border: #009000 dotted 0px; overflow: hidden">
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
                    </div>
                    <div style="text-align: left; float: left; position:fixed;left:10px; bottom:0px;">
                        <div class="nav_button" id="rrule_btn"><img src="<?php echo base_url('nitnav/img/rules_but.png'); ?>" border="0"/></div>
                        <!--div class="nav_button" id="example_"><img src="<?php echo base_url('nitnav/img/example.png'); ?>" border="0"/></div-->
                    </div>
                </div>
            </div>
    </div>
