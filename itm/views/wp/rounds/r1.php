<div class="col-sm-12" id="Qs_" style="display: none;margin-top:30px;">
    <div style="border: #009000 dotted 0px; overflow: hidden">
        <div class="col-sm-2 teamName_" id="team_name_" style="position:fixed; top:20px;left:0px;">Team</div>
        <div class="col-sm-2" align="center" style="position:fixed; top:1px;right:0px;">
              <div id="timer">
                  <div id="demo" onClick="timedCount()"></div>
              </div>
          </div>
        <div style="clear: both"></div>
        <div style="padding: 10px; width: auto;">
            <div style="display: none" id="start_"></div>
            <div class="Ques_" id="Question" style="margin-bottom:50px;font-size:50px;line-height:60px;">Question</div>
            <div class="answerNo_" align="center">A</div><div class="ans_" id="option_A">Options A</div>
            <div class="answerNo_" align="center">B</div><div class="ans_" id="option_B">Options B</div>
            <div style="clear: both"></div>
            <div class="answerNo_" align="center">C</div><div class="ans_" id="option_C">Options C</div>
            <div class="answerNo_" align="center">D</div><div class="ans_" id="option_D">Options D</div>
            <div style="clear: both"></div>
           <!-- <div class="correct_" id="correct_ans">Correct Answer</div>-->
        </div>
       <!-- <div class="corrAns_" id="corrAnsBut_"><button class="btn-primary">Answer</button></div>
        <div class="next_" id="nextBut_"><button class="btn-danger">&gt;&gt;</button></div>-->
    </div>
    <div class="col-sm-11 flip_" id="flip_round" style="height: auto">
        <div class="row">
            <div class="col-sm-12" style="background: #f0f0f0; color: #000000">
                Flip Question
            </div>
        </div>
        <div class="col-sm-12">
            <div style="display: none" id="fstart_"></div>
            <div class="Ques_" id="fQuestion" style="margin-bottom:50px;font-size:50px;line-height:60px;">Question</div>
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
                <button class="btn btn-info" id="flip_">Flip</button>
            </div>
        </div>
    </div>
</div>

