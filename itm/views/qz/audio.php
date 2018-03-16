<?php if ($qa_pkg['res_'] == TRUE) { ?>
    <?php $this->load->view('qz/flip/flip_audio_video'); ?>
    <style>
        .correct_{background: url('<?PHP echo base_url() . 'nitnav/img/right.png'; ?>') no-repeat left #ffff00;
                  font-size:40px;
                  width:800px;
                  height:90px;
                  color:#000080;
                  padding-top: 30px;
                  border:1px #900 dashed;
                  border-radius: 10px;
                  font-weight:600;
                  display:none;
        }
    </style>
    <script>
        fnextCounter = 0;
        ftotalCount = 0;
    </script>
    <style>
        .Ques_{ width:100%;height: auto; color:#fff; padding: 10px;font-size:30px; line-height: 40px;border:1px #fff dotted; border-radius: 5px; background: #fd680e; font-weight:bold;  font-size:30px;margin-top:40px; display: none}
        .ans_{margin:40px 20px 0 0;;float:left; width:40%; height: auto; color:#000080;  padding: 10px; font-size:30px; line-height: 40px; border:1px #002166 dotted; border-radius: 5px;background: #D0D0D0;  opacity: .9; font-weight:bold;font-size:30px;  display: none }
        .answerNo_{margin:40px 0 ;float:left;width:5%;color:#ff0;padding: 10px; line-height: 40px;border:1px #002166 dotted;border-radius: 5px;background: #900;font-weight:bold;font-size:35px;}
        .flip_{ display: none; position: absolute; border: #ffffff solid 1px; background: #000000; left: 40px; top:0px; height: auto }
        .stop_ {width: 37px; height: 37px ;margin-top:80px; margin-left:80px;position:fixed}
        #think_{position:fixed; top:300px;left:100px;display:none;}
        #ques__{width:100px;float:left; padding-top:20px;}
    </style>
    <body  background="<?PHP echo base_url() . 'nitnav/img/round2.jpg'; ?>"  style="margin-top:0px;" onload="p();">
        <div class="container" style="width: 100%;">
            <div id="think_">
                <img src="<?php echo base_url('nitnav/img/think.gif'); ?>"/>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div id="topBox" align="center" style="border:0px;padding-top: 20px;">
                        <span style="color:#ff0;font-family:cooper black;font-size:55px;text-shadow:2px 2px 5px #fd680e;" id="teamName_"></span>
                    </div>
                </div>
                <div class="col-sm-5">
                    <!--<div id="topBox" align="center">
                        <span style="color:#ffff00;" id="roundName_"><?php echo $round_['data_']->NAME_; ?></span>
                    </div>-->
                </div>
                <div class="col-sm-2">
                    <!-- <div id="topBox" align="center"  onclick="stopCount();" style="border:0px;font-size:21px;color:#002166; font-weight:bold;">
                         QUESTION NO: <span style="color:#900;font-family:cooper black;font-size:40px;" id="question_no_"></span> 
                     </div>-->
                </div>

                <div class="col-sm-2" align="right">
                    <div id="timer" style="float:right; color:#f7f7f7; text-shadow:2px 2px 10px #ff0000;">
                        <div id="demo" onClick="timedCount()"></div>
                    </div>
                </div>
                <div class="col-sm-1">
                    <a href="<?PHP echo site_url('Quiz/index'); ?>" style="text-decoration:none;"><div id="box" style="background:#0088cc; width:20px;padding:0px;line-height:15px;font-size:10px;">
                            <center>Q<br>U<br>I<br>Z</center>
                        </div></a>
                    <div class="stop_" id="stop_" onclick="stopCount();"><img src="<?php echo base_url('nitnav/img/stop.png'); ?>" width="20" height="20" border="0"/></div>
                </div>
            </div>
            <div class="row" align="center">
                <div class="col-sm-12 end__" id="end_">
                    End of <?php echo $title; ?><br /><h5><a href="<?php echo site_url('Quiz'); ?>"><button class="btn-primary">Home</button></a></h5>
                </div>
            </div>
            <div class="row" align="center">
                <div class="col-sm-12" id="NEXTT" style="margin-top:350px;position:absolute;left:-1000px;border-radius:10px;display:none;font-size:60px; color:#000080;border:2px #900 dashed; background:#ffff00; line-height: 80px;">
                    NEXT <img src="<?PHP echo base_url() . 'nitnav/img/team.png'; ?>">
                </div>
            </div>
            <div class="row" style="margin-top:150px;">
                <div class="col-sm-12" style="background:#900; height:auto;" id="qBack">
                    <div id="ques__">
                        <span style="color:#ff0;font-family:cooper black;font-size:60px;" id="ques_q">Q</span>
                        <span style="color:#ff0;font-family:cooper black;font-size:60px;" id="question_no_"></span>                
                    </div>
                    <div id="question" style="background:#900;border:0px; padding-left:100px;font-size:45px;line-height:60px;"></div>
                </div>
            </div>
            <div class="row" style="position:fixed; top:300px; width:100%;left:500px;">
                <div class="col-sm-4" id='audioplayer'>
                    <div class="col-sm-3" id='audioplayer'>
                        <audio controls id="player" style="float:left; width:350px;">
                            <source id='audioSrc' type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <button class="btn btn-link col-sm-2" id="showQues_" style="float:right;">Q</button>
                </div>
            </div>
            <div class="row" style="margin-top:200px;">
                <div class="col-sm-8">
                    <div class="correct_" id="option_Correct" align='center'>

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
                        <button class="btn btn-danger" id="flip_">Flip</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-11 flip_" id="flip_round" style="height:auto;margin-top:110px;">
                <div class="row">
                    <div class="col-sm-12" style="background: #f0f0f0; color: #000000">
                        Flip Question
                    </div>
                </div>
                <div class="col-sm-12">
                    <div style="display: none" id="fstart_"></div>
                    <div class="Ques_" id="fQuestion" style="margin-bottom:50px;">Question</div>
                    <div style="clear: both"></div>
                    <div class="correct_" id="fcorrect_ans">Correct Answer</div>
                    <div style="clear: both"></div>
                    <button class="btn btn-info" id="fnextBut_">NEXT Question</button>
                    <button class="btn btn-info" id="fcorrAnsBut_">Show</button>
                    <button class="btn btn-info" id="fstart_" style="display: none">HIDDEN</button>
                    <div style="clear: both" style="padding: 2px; height: 5px"></div>
                </div>
            </div>
        </div>
    <?php } else { ?>
    <center style="padding: 100px;">
        <div style="font-weight: bold">No Questions Found</div>
        <div style="clear: both"></div>
        <?php echo anchor('quiz', '<button class="btn-danger">Click for Dashboard</button>'); ?>
    </center>
<?php } ?>
