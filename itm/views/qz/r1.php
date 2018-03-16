<div class="col-sm-12" id="Qs_" style="display: none;margin-top:30px;">
    <div style="border: #009000 dotted 0px; overflow: hidden">
        <div class="col-sm-2 teamName_" id="team_name_" style="position:fixed; top:20px;left:0px;">Team</div>
        <div align="center" style="border:0px;color:#002166; font-weight:bold;position:fixed; left:35px;top:160px;">
            <span style="color:#ff0;font-family:'cooper black';font-size:60px;" id="ques_q">Q</span>
            <!--span style="color:#ff0;font-family:cooper black;font-size:60px;" id="question_no_"></span-->
        </div>
        <div class="col-sm-2" align="center" style="position:fixed; top:1px;right:50px;">
            <div id="timer" style='color:#fff'>
                <div id="demo" onClick="timedCount()"></div>
            </div>
        </div>
        <div class="col-sm-1" style="position:fixed; top:1px;right:0px;">
            <a href="<?PHP echo site_url('Quiz/index'); ?>" style="text-decoration:none;"><div id="box" style="background:#0088cc; width:20px;padding:0px;line-height:15px;font-size:10px;">
                    <center>Q<br>U<br>I<br>Z</center>
                </div></a>
            <div class="stop_" id="stop_" onclick="stopCount();"><img src="<?php echo base_url('nitnav/img/stop.png'); ?>" width="20" height="20" border="0"/></div>
        </div>
        <div style="clear: both"></div>
        <div style="padding: 10px; width: auto;margin-top:50px;">
            <div style="display: none" id="start_"></div>
            <div class="Ques_" id="Question" style="margin-bottom:40px;padding-left:110px;font-size:50px;line-height:60px;"></div>
            <div class="answerNo_" align="center">A</div><div class="ans_" id="option_A">Options A</div>
            <div class="answerNo_" align="center">B</div><div class="ans_" id="option_B">Options B</div>
            <div style="clear: both"></div>
            <div class="answerNo_" align="center">C</div><div class="ans_" id="option_C">Options C</div>
            <div class="answerNo_" align="center">D</div><div class="ans_" id="option_D">Options D</div>
            <div style="clear: both"></div>
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
            <div class="Ques_" id="fQuestion" style="margin-bottom:50px;">Question</div>
            <div class="answerNo_" align="center">A</div><div class="ans_" id="foption_A">Options A</div>
            <div class="answerNo_" align="center">B</div><div class="ans_" id="foption_B">Options B</div>
            <div style="clear: both"></div>
            <div class="answerNo_" align="center">C</div><div class="ans_" id="foption_C">Options C</div>
            <div class="answerNo_" align="center">D</div><div class="ans_" id="foption_D">Options D</div>
            <div style="clear: both"></div>

            <button class="btn btn-info" id="fnextBut_">NEXT Question</button>
            <button class="btn btn-info" id="fcorrAnsBut_">Show</button>
            <button class="btn btn-info" id="fstart_" style="display: none">HIDDEN</button>
            <div style="clear: both" style="padding: 2px; height: 5px"></div>
            <!-- <div class="correct_" id="correct_ans">Correct Answer</div>-->
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12"  style="position:fixed; bottom:0px;">
            <div class="col-sm-8"></div>
            <div class="col-sm-4" align="right">
                <button class="btn btn-info" id="nextBut_">NEXT Question</button>
                <button class="btn btn-info" id="corrAnsBut_">Show</button>
                <button class="btn btn-info" id="start_" style="display: none">HIDDEN</button>
                <!--<button class="btn btn-info" id="next_team">NEXT Team</button>-->
                <button class="btn btn-info" id="flip_">Flip</button>
            </div>
        </div>
    </div>
</div>

