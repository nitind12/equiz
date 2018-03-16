<style>
    .Ques_{ width:100%;height: auto; color:#fff; padding: 10px;font-size:30px; line-height: 40px;border:1px #fff dotted; border-radius: 5px; background: #fd680e; font-weight:bold;  font-size:30px;margin-top:40px; display: none}
    .ans_{margin:40px 20px 0 0;;float:left; width:40%; height: auto; color:#000080;  padding: 10px; font-size:30px; line-height: 40px; border:1px #002166 dotted; border-radius: 5px;background: #D0D0D0;  opacity: .9; font-weight:bold;font-size:30px;  display: none }
    .answerNo_{margin:40px 0 ;float:left;width:5%;color:#ff0;padding: 10px; line-height: 40px;border:1px #002166 dotted;border-radius: 5px;background: #900;font-weight:bold;font-size:35px;}
    .flip_{ display: none; position: absolute; border: #ffffff solid 1px; background: #000000; left: 40px; top:0px; height: auto }
    .stop_ {width: 37px; height: 37px ;margin-top:80px; margin-left:80px;position:fixed}
    .correct{background: url('<?PHP echo base_url() . 'nitnav/img/right.png'; ?>') no-repeat left #ffff00;font-size:40px;color:#000080;padding-left:80px;border:1px #900 dashed;}
    #ques__{width:100px;float:left; padding-top:12px;}
</style>
<body  background="<?PHP echo base_url() . 'nitnav/img/round5.jpg';?>"  style="margin-top:0px;">
    <div class="container" style="width: 100%;">
        <div class="row">
            <div class="col-sm-2">
                <div id="topBox" align="center" style="border:0px;padding-top: 20px;">
                    <span style="color:#900;font-family:cooper black;font-size:55px;text-shadow:2px 2px 5px #d6ee18;" id="teamName_"></span>
                </div>
            </div>
            <div class="col-sm-5">
                <!--<div id="topBox" align="center">
                    <span style="color:#ffff00;" id="roundName_"><?php //echo $round_['data_']->NAME_; ?></span>
                </div>-->
            </div>
            <div class="col-sm-2">
                <!-- <div id="topBox" align="center"  onclick="stopCount();" style="border:0px;font-size:21px;color:#002166; font-weight:bold;">
                     QUESTION NO: <span style="color:#900;font-family:cooper black;font-size:40px;" id="question_no_"></span> 
                 </div>-->
            </div>

            <div class="col-sm-2" align="center">
                <div id="timer" style="float:right;color:#ffffff;">
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
        <div class="row" style="margin-top:180px;">
          <div class="col-sm-2">
              <div id="rapid1" class="q1">
                  <form id="target">
                      <input type="radio" name="ans" value="true"> CORRECT<br/>
                      <input type="radio" name="ans" value="false"> INCORRECT<br/>
                      <input type="radio" name="ans" value="pass"> PASS
                      <input type="button" name="reQ" class="btn btn-default" style="height:10px;width:2px;margin-left:70px;">
                  </form>
              </div>
          </div>
          <div class="col-sm-2">
              <div id="rapid2" class="q1">
                  <form id="target">
                      <input type="radio" name="ans" value="true"> CORRECT<br/>
                      <input type="radio" name="ans" value="false"> INCORRECT<br/>
                      <input type="radio" name="ans" value="pass"> PASS
                      <input type="button" name="reQ" class="btn btn-default" style="height:10px;width:2px;margin-left:70px;">
                  </form>
              </div>
          </div>
          <div class="col-sm-2">
              <div id="rapid3" class="q1">
                  <form>
                      <input type="radio" name="ans" value="true"> CORRECT<br/>
                      <input type="radio" name="ans" value="false"> INCORRECT<br/>
                      <input type="radio" name="ans" value="pass"> PASS
                      <input type="button" name="reQ" class="btn btn-default" style="height:10px;width:2px;margin-left:70px;">
                  </form>
              </div>
          </div>
          <div class="col-sm-2">
              <div id="rapid4" class="q1">
                  <form>
                      <input type="radio" name="ans" value="true"> CORRECT<br/>
                      <input type="radio" name="ans" value="false"> INCORRECT<br/>
                      <input type="radio" name="ans" value="pass"> PASS
                      <input type="button" name="reQ" class="btn btn-default" style="height:10px;width:2px;margin-left:70px;">
                  </form>
              </div>
          </div>
          <div class="col-sm-2">
              <div id="rapid5" class="q1">
                  <form>
                      <input type="radio" name="ans" value="true"> CORRECT<br/>
                      <input type="radio" name="ans" value="false"> INCORRECT<br/>
                      <input type="radio" name="ans" value="pass"> PASS
                      <input type="button" name="reQ" class="btn btn-default" style="height:10px;width:2px;margin-left:70px;">
                  </form>
              </div>
          </div>
          <div class="col-sm-2">
              <div id="rapid6" class="q1">
                  <form>
                      <input type="radio" name="ans" value="true"> CORRECT<br/>
                      <input type="radio" name="ans" value="false"> INCORRECT<br/>
                      <input type="radio" name="ans" value="pass"> PASS
                      <input type="button" name="reQ" class="btn btn-default" style="height:10px;width:2px;margin-left:70px;">
                  </form>
              </div>
          </div>
      </div>
        
        <div class="row" style="margin-top:40px;">
          <div class="col-sm-2">
              <div id="rapid7" class="q1">
                  <form>
                      <input type="radio" name="ans" value="true"> CORRECT<br/>
                      <input type="radio" name="ans" value="false"> INCORRECT<br/>
                      <input type="radio" name="ans" value="pass"> PASS
                      <input type="button" name="reQ" class="btn btn-default" style="height:10px;width:2px;margin-left:70px;">
                  </form>
              </div>
          </div>
          <div class="col-sm-2">
              <div id="rapid8" class="q1">
                  <form>
                      <input type="radio" name="ans" value="true"> CORRECT<br/>
                      <input type="radio" name="ans" value="false"> INCORRECT<br/>
                      <input type="radio" name="ans" value="pass"> PASS
                      <input type="button" name="reQ" class="btn btn-default" style="height:10px;width:2px;margin-left:70px;">
                  </form>
              </div>
          </div>
          <div class="col-sm-2">
              <div id="rapid9" class="q1">
                  <form>
                      <input type="radio" name="ans" value="true"> CORRECT<br/>
                      <input type="radio" name="ans" value="false"> INCORRECT<br/>
                      <input type="radio" name="ans" value="pass"> PASS
                      <input type="button" name="reQ" class="btn btn-default" style="height:10px;width:2px;margin-left:70px;">
                  </form>
              </div>
          </div>
          <div class="col-sm-2">
              <div id="rapid10" class="q1">
                  <form>
                      <input type="radio" name="ans" value="true"> CORRECT<br/>
                      <input type="radio" name="ans" value="false"> INCORRECT<br/>
                      <input type="radio" name="ans" value="pass"> PASS
                      <input type="button" name="reQ" class="btn btn-default" style="height:10px;width:2px;margin-left:70px;">
                  </form>
              </div>
          </div>
          <div class="col-sm-2">
              <div id="rapid11" class="q1">
                  <form>
                      <input type="radio" name="ans" value="true"> CORRECT<br/>
                      <input type="radio" name="ans" value="false"> INCORRECT<br/>
                      <input type="radio" name="ans" value="pass"> PASS
                      <input type="button" name="reQ" class="btn btn-default" style="height:10px;width:2px;margin-left:70px;">
                  </form>
              </div>
          </div>
          <div class="col-sm-2">
              <div id="rapid12" class="q1">
                  <form>
                      <input type="radio" name="ans" value="true"> CORRECT<br/>
                      <input type="radio" name="ans" value="false"> INCORRECT<br/>
                      <input type="radio" name="ans" value="pass"> PASS
                      <input type="button" name="reQ" class="btn btn-default" style="height:10px;width:2px;margin-left:70px;">
                  </form>
              </div>
          </div>
      </div>
        
        <div class="row" style="margin-top:40px;">
          <div class="col-sm-2">
              <div id="rapid13" class="q1">
                  <form>
                      <input type="radio" name="ans" value="true"> CORRECT<br/>
                      <input type="radio" name="ans" value="false"> INCORRECT<br/>
                      <input type="radio" name="ans" value="pass"> PASS
                       <input type="button" name="reQ" class="btn btn-default" style="height:10px;width:2px;margin-left:70px;">
                  </form>
              </div>
          </div>
          <div class="col-sm-2">
              <div id="rapid14" class="q1">
                  <form>
                      <input type="radio" name="ans" value="true"> CORRECT<br/>
                      <input type="radio" name="ans" value="false"> INCORRECT<br/>
                      <input type="radio" name="ans" value="pass"> PASS
                       <input type="button" name="reQ" class="btn btn-default" style="height:10px;width:2px;margin-left:70px;">
                  </form>
              </div>
          </div>
          <div class="col-sm-2">
              <div id="rapid15" class="q1">
                  <form>
                      <input type="radio" name="ans" value="true"> CORRECT<br/>
                      <input type="radio" name="ans" value="false"> INCORRECT<br/>
                      <input type="radio" name="ans" value="pass"> PASS
                       <input type="button" name="reQ" class="btn btn-default" style="height:10px;width:2px;margin-left:70px;">
                  </form>
              </div>
          </div>
          <div class="col-sm-2">
              <div id="rapid16" class="q1">
                  <form>
                      <input type="radio" name="ans" value="true"> CORRECT<br/>
                      <input type="radio" name="ans" value="false"> INCORRECT<br/>
                      <input type="radio" name="ans" value="pass"> PASS
                       <input type="button" name="reQ" class="btn btn-default" style="height:10px;width:2px;margin-left:70px;">
                  </form>
              </div>
          </div>
            <div class="col-sm-2">
              <div id="scoreDisplay" align="center"></div>
          </div>
          <div class="col-sm-2">
              <button class="btn btn-danger" style="width:190px; height: 150px; font-size:30px" id="next_team">NEXT TEAM</button>
          </div>
      </div>
    </div>