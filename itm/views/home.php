<style>
    #allTeams{width:98%; height:98%;position:fixed;top:10px; left:15px;z-index: 10000; border-radius: 20px;background:#d9edf7;display:none;}    
    .teamCSS{
        width:84%;
        color:#900;
        float:right;
        background: #fff;
        font-weight:bold;
        height:45px;
        font-size:21px;
        line-height:20px;
        padding:8px;
        margin-top:5px;
        margin-bottom:5px;
        border:1px #900 dashed;
        border-radius: 5px;
        text-transform: uppercase;
    }

    .nameCSS{
        width:16%;
        float:left;
        background: #900;
        color:#fff;
        font-weight:bold;
        height:45px;
        font-size:20px;
        line-height:20px;
        padding:8px;
        margin-top:5px;
        margin-bottom:5px;
        border:1px #ff0 dashed;
        border-radius: 5px;
        text-transform: uppercase;
    }
</style>
<body background="<?PHP echo base_url() . 'nitnav/img/mainBack.jpg'; ?>">
    <div class="container" style="width: 100%;">
        <div class="row" style="margin-top:50px;">
            <div class="col-sm-7">
                <div id="topbar">
                    <h2 style="margin-left:40px;font-weight:bold;font-size:34px;">Late Smt. Kamla Dhingra Memorial Meet - <?PHP echo date('Y'); ?></h2>	
                    <h3 style="margin-top:190px;line-height: 70px;">
                        <ul id="news" style="list-style-type:none;font-size:41px;color:#ff0;font-family:serif;text-shadow:none;font-weight:bold;">
                            <li>
                                माता धरित्री जननी दयार्द्रहृदया शिवा |<br>देवी त्रिभुवनश्रेष्ठा निर्दोषा सर्वदुःखहा ||
                            </li>
                            <li>
                                कमलेश्वरी, दिमंतेश्वरी, मातेश्वरी, ममतामयी, करुणामयी,<!--श्रद्धे्श्वरी श्रद्धेश्वरी--> श्रद्धेश्‍वरी  सर्वोपरि तू माँ ।।
                            </li>									
                        </ul>
                    </h3>						
                </div>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2">
                <img src="<?PHP echo base_url() . 'nitnav/img/mataJi.png'; ?>"/>
            </div>
        </div>

        <div id="footerbar">
            <div class="col-sm-2" style="margin-top:-30px;" id="enter">
                <a href=""><img src="<?PHP echo base_url() . 'nitnav/img/enter.png'; ?>"></a>                   
            </div>
            <div class="col-sm-2" style="margin-top:-30px;" id="quiz">                    
                <a href="<?PHP echo site_url('quiz'); ?>"><img src="<?PHP echo base_url() . 'nitnav/img/quiz.png'; ?>"></a>  
            </div>
            <div class="col-sm-2" style="margin-top:-30px;" id="wordpower">                    
                <a href="<?PHP echo site_url('wordpower/teams'); ?>"><img src="<?PHP echo base_url() . 'nitnav/img/wordPower.png'; ?>"></a>  
            </div>
            <!--div class="col-sm-2" style="margin-top:-30px;" id="3min">                    
                <a href="#"><img src="<?PHP //echo base_url() . 'nitnav/img/3minutes.png'; ?>"></a>  
            </div-->
            <div class="col-sm-2" style="margin-top:-30px;" id="prize">                    
                <a href="#"><img src="<?PHP echo base_url() . 'nitnav/img/prize.png'; ?>"></a>  
            </div>
            <div class="col-sm-2">
                <a href="<?php echo site_url('kdmm/lgout');?>">log out</a>
            </div>
            <div class="col-sm-2" style="margin-top:-400px; margin-left:-80px;">                    
                <img src="<?PHP echo base_url() . 'nitnav/img/shadow.png'; ?>" style="z-index: 99999; margin-top:340px;margin-left:-50px">
                <img src="<?PHP echo base_url() . 'nitnav/img/animation.gif'; ?>" style="margin-top:-600px;z-index: 9999;">
            </div>
        </div>
        <div class="row" style="position:fixed;left:30px;top:715px;">
            <div class="col-sm-1" id="allTeams_" style="width:250px">
                <img src="<?PHP echo base_url() . 'nitnav/img/team.png'; ?>" style="max-width: 80px;">
            </div>
            <div class="col-sm-1" id="elemination" style="width:250px;">
                <a href="<?PHP echo site_url('kdmm/qElimination'); ?>"><img src="<?PHP echo base_url() . 'nitnav/img/example.png'; ?>"></a>
            </div>
            <div class="col-sm-1" id="elemination" style="width:300px;">
                <a href="<?PHP echo site_url('kdmm/wpElimination'); ?>"><img src="<?PHP echo base_url() . 'nitnav/img/example.png'; ?>"></a>
            </div>
        </div>

        <div class="row" id="allTeams">
            <div class="col-sm-11">
                <h4 style="font-size:40px;margin-bottom:0px;color:#000080; font-weight:bold;">PARTICIPATING <img src="<?PHP echo base_url() . 'nitnav/img/team.png'; ?>"/> IN KDMM-2015</h4>
            </div>
            <div class="col-sm-1" align="right" id="closeTeam">
                &CircleTimes;
            </div>
            <div class="col-sm-6">                
                <div class="nameCSS">TEAM 1</div>
                <div class="teamCSS">TMU MOORADABAD </div>

                <div class="nameCSS">TEAM 2</div>
                <div class="teamCSS">DEV SANSKRITI UNIVERSITY,HARIDWAR</div>

                <div class="nameCSS">TEAM 3</div>
                <div class="teamCSS">BHARTI VIDYAPEETH UNIVERSITY DELHI</div>

                <div class="nameCSS">TEAM 4</div>
                <div class="teamCSS">DSB CAMPUS NAINITAL</div>

                <div class="nameCSS">TEAM 5</div>
                <div class="teamCSS">DEPARTMENT OF MANAGEMENT STUDIES, BHIMTAL</div>

                <div class="nameCSS">TEAM 6</div>
                <div class="teamCSS">BIRLA INSTITUTE OF APPLIED SCIENCES, BHIMTAL</div>

                <div class="nameCSS">TEAM 7</div>
                <div class="teamCSS">SOORAJMAL AGARWAL COLLEGE, KICCHA</div>

                <div class="nameCSS">TEAM 8</div>
                <div class="teamCSS">SRI RAM INSTITUTE OF TECHNOLOGY, KASHIPUR</div>

                <div class="nameCSS">TEAM 9</div>
                <div class="teamCSS">JAI ARIHANT INSTITUTE,HALDWANI</div>

                <div class="nameCSS">TEAM 10</div>
                <div class="teamCSS">PAL INSTITUTE OF TECHNOLOGY HALDWANI </div>
                
                <div class="nameCSS">TEAM 11</div>
                <div class="teamCSS">AMRAPALI GROUP OF INSTITUTES, HALDWANI</div>

                <div class="nameCSS">TEAM 12</div>
                <div class="teamCSS">JAMUNA PRASAD MEMORIL COLLEGE, BAREILLY </div>

            </div>
            <div class="col-sm-6">
                <div class="nameCSS">TEAM 13</div>
                <div class="teamCSS">GRAPHIC ERA HILL UNI, BHIMTAL</div>
                
                <div class="nameCSS">TEAM 14</div>
                <div class="teamCSS">SEEMANT ENGG. COLLEGE, PITHORAGARH</div>

                <div class="nameCSS">TEAM 15</div>
                <div class="teamCSS">KEC, DWARAHAT </div>

                <div class="nameCSS">TEAM 16</div>
                <div class="teamCSS">APEX COLLEGE OF TECHNOLOGY, RUDRAPUR</div>

                <div class="nameCSS">TEAM 17</div>
                <div class="teamCSS">TIMIT INSTITUTE MOORADABAD </div>

                <div class="nameCSS">TEAM 18</div>
                <div class="teamCSS">MIET Enginnering College, HALDWANI</div>

                <div class="nameCSS">TEAM 19</div>
                <div class="teamCSS">SIMT, RUDRAPUR</div>

                <div class="nameCSS">TEAM 20</div>
                <div class="teamCSS">IHM, DEHRADUN</div>

                <div class="nameCSS">TEAM 21</div>
                <div class="teamCSS">-</div>

                <div class="nameCSS">TEAM 22</div>
                <div class="teamCSS">-</div>

                <div class="nameCSS">TEAM 23</div>
                <div class="teamCSS">-</div>

                <div class="nameCSS">TEAM 24</div>
                <div class="teamCSS">-</div>
            </div>
        </div>
    </div>
</div>
