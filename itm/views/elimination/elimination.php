<style>
    .Ques_{ width:100%;height: auto; color:#fff; padding: 10px;font-size:30px; line-height: 40px;border:1px #fff dotted; border-radius: 5px; background: #fd680e; font-weight:bold;  font-size:30px;margin-top:40px; display: none}
    .ans_{margin:40px 20px 0 0;;float:left; width:40%; height: auto; color:#000080;  padding: 10px; font-size:30px; line-height: 40px; border:1px #002166 dotted; border-radius: 5px;background: #D0D0D0;  opacity: .9; font-weight:bold;font-size:30px;  display: none }
    .answerNo_{margin:40px 0 ;float:left;width:5%;color:#ff0;padding: 10px; line-height: 40px;border:1px #002166 dotted;border-radius: 5px;background: #900;font-weight:bold;font-size:35px;}
    .flip_{ display: none; position: absolute; border: #ffffff solid 1px; background: #000000; left: 40px; top:0px; height: auto }
    .stop_ {width: 37px; height: 37px ;margin-top:80px; margin-left:80px;position:fixed}
    .correct{background: url('<?PHP echo base_url() . 'nitnav/img/right.png'; ?>') no-repeat left #ffff00;font-size:40px;color:#000080;padding-left:80px;border:1px #900 dashed;}
     #ques__{width:100px;float:left; padding-top:20px;}
    #everything{display:none;}
    #rulesE{width:100%; height:72%;background:#fff;position:fixed;top:130px; left:-1000px;z-index: 10000; border-radius: 20px;background:#fff;display:none;font-size:40px;}
</style>

<?PHP if ($title == "QZ") { ?>
    <body  background="<?PHP echo base_url() . 'nitnav/img/eliminationBack.jpg'; ?>"  style="margin-top:0px;" onload="p();">
    <?PHP } else { ?>    
    <body  background="<?PHP echo base_url() . 'nitnav/img/wpElimination.jpg'; ?>"  style="margin-top:0px;" onload="p();">
    <?PHP } ?>    
    <div class="container" style="width: 100%;">
        <div class="row">
            <div class="col-sm-3">
                <div id="topBox" align="center" style="border:0px;padding-top: 20px;">
                    <span style="color:#ffff00;font-family:cooper black;font-size:55px;text-shadow:2px 2px 5px #900;" id="teamName_"></span>
                </div>
            </div>
            <div class="col-sm-4">
                <!--<div id="topBox" align="center">
                    <span style="color:#ffff00;" id="roundName_"><?php //echo $round_['data_']->NAME_;       ?></span>
                </div>-->
            </div>
            <div class="col-sm-2">
                <!-- <div id="topBox" align="center"  onclick="stopCount();" style="border:0px;font-size:21px;color:#002166; font-weight:bold;">
                     QUESTION NO: <span style="color:#900;font-family:cooper black;font-size:40px;" id="question_no_"></span> 
                 </div>-->
            </div>

            <div class="col-sm-2" align="center">
                <div id="timer" style="float:left;color:#f0f0f0;">
                    <div id="demo" onClick="timedCount()"></div>
                </div>
            </div>
            <div class="col-sm-1">
                <a href="<?PHP echo site_url('kdmm/index'); ?>" style="text-decoration:none;"><div id="box" style="background:#900; width:20px;padding:0px;height:25px;font-size:10px;">
                        <center>X</center>
                    </div></a>
                <div class="stop_" id="stop_" onclick="stopCount();"><img src="<?php echo base_url('nitnav/img/stop.png'); ?>" width="20" height="20" border="0"/></div>
            </div>
        </div>
        <div class="row" align="center">
            <div class="col-sm-12 end__" id="end_">
                End of <?php echo $title; ?><br /><h5><a href="<?php echo site_url('Quiz'); ?>"><button class="btn-primary">QUIZ</button></a></h5>
            </div>
        </div>
        <div class="row" align="center">
            <div class="col-sm-12" id="NEXTT" style="margin-top:350px;position:absolute;left:-1000px;border-radius:10px;display:none;font-size:60px; color:#000080;border:2px #900 dashed; background:#ffff00; line-height: 80px;">
                NEXT <img src="<?PHP echo base_url() . 'nitnav/img/team.png'; ?>">
            </div>
        </div>
        <div class="row" align="center">
            <div class="col-sm-4" id="start__" style="margin-top:300px;position:fixed;left:450px;border-radius:10px;font-size:60px; color:#000080;border:2px #fff dashed; background:#ffff00; line-height: 80px;">
                START
            </div>
        </div>
        <div id="everything">
            <div class="row" style="margin-top:110px;">
                <div class="col-sm-12" style="background:#900; height:auto;" id="qBack">
                    <div id="ques__">
                        <span style="color:#ff0;font-family:cooper black;font-size:60px;" id="ques_q">Q</span>
                        <span style="color:#ff0;font-family:cooper black;font-size:60px;" id="question_no_"></span>                
                    </div>
                    <div id="question" style="background:#900;border:0px; padding-left:100px;font-size:45px;line-height:60px;"></div>
                </div>
            </div>
            <div class="row" style="margin-top:70px;">
                <div class="col-sm-1">
                    <div class="answerNo" align="center">
                        A
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="answers" id="option_A">

                    </div>
                </div>
            </div>

            <div class="row" style="margin-top:40px;">
                <div class="col-sm-1">
                    <div class="answerNo" align="center">
                        B
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="answers" id="option_B">

                    </div>
                </div>
            </div>

            <div class="row" style="margin-top:40px;">
                <div class="col-sm-1">
                    <div class="answerNo" align="center">
                        C
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="answers" id="option_C">

                    </div>
                </div>
            </div>

            <div class="row" style="margin-top:40px;">
                <div class="col-sm-1">
                    <div class="answerNo" align="center">
                        D
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="answers" id="option_D">

                    </div>
                </div>
            </div>
            <!--<div class="end__" id="end_"></div>-->

            <div class="row">
                <div class="col-sm-12"  style="position:fixed; bottom:0px;">
                    <div class="col-sm-8"></div>
                    <div class="col-sm-4" align="right">
                        <button class="btn btn-success" id="nextBut_">NEXT Question</button>
                        <button class="btn btn-theme" id="corrAnsBut_">Show</button>
                        <button class="btn btn-info" id="start_" style="display: none">HIDDEN</button>
                        <button class="btn btn-info" id="next_team">NEXT Team</button>
                        <!--<button class="btn btn-danger" id="flip_">Flip</button>-->
                    </div>
                </div>
            </div>

            <!--<div class="row">
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
             </div>-->
        </div>
        <?PHP if ($title == "QZ") { ?>
            <div class="col-sm-12" id="rulesE" style="background: #f5e79e;height:75%;">
                <div class="col-sm-12">
                    <h4 style="font-size:50px; margin-bottom: 30px;">RULES FOR ELIMINATION ROUND</h4>
                    <ol class="rulesLI" style="font-size:36px;line-height:48px;">
                        <li>Each participating team will be asked 5 objective type questions</li>
                        <li>Teams with top 5 scores will be eligible to participate in the Quiz</li>
                        <li>Should there be a tie between two or more teams, penalty Shoot outs shall be conducted. In this, each of the tied teams will be asked one question per round and the team(s) answering incorrectly shall be removed. Such rounds shall continue TILL ONLY ONE TEAM remains. This team shall be the winner of the quiz. In this round, Time available for answering each question is fifteen seconds. Multiple-choice format shall not be used for this round.</li>
                        <li>All questions will be asked in and need to be answered in English</li>                      
                    </ol>
                </div>
            </div>
        <?PHP } else { ?>
            <div class="col-sm-12" id="rulesE" style="background: #f5e79e;height:75%;">
                <div class="col-sm-12">
                    <h4 style="font-size:50px; margin-bottom: 20px;">RULES FOR ELIMINATION ROUND</h4>
                    <ol class="rulesLI" style="font-size:34px;line-height:40px;">
                        <li>Total six teams will be competing in Word Power, out of six teams one will be team AGI and remaining 5 will be selected through the elimination round.</li>
                        <li>Each team will be asked five questions in Elimination round to select top 5 teams.</li>
                        <li>Each team will be consisting of two members only.</li>
                        <li>The time for answering each question is 10 seconds in elimination round.</li>   
                        <li>All questions will be asked and need to be answered in English.</li>
                        <li>The Referee’s decision will be final.</li>
                        <li>Each correct answer carries 10 marks.</li>
                        <li>There will be negative marking, 5 marks will be deducted for each incorrect answer.</li>
                        <li>Unanswered question will not be passed to the other teams.</li>
                        <li>In case of tie, there will be a tie-breaker round.</li>
                    </ol>
                </div>
            </div>
        <?PHP } ?>

        <div class="row" style="position:fixed;left:30px;top:715px;">
            <div class="col-sm-1" id="ERules__" style="width:220px">
                <img id="ERules_" src="<?PHP echo base_url() . 'nitnav/img/rules_but.png'; ?>">
            </div>

        </div>
    </div>
