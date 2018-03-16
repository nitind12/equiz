<body  background="<?PHP echo base_url() . 'nitnav/img/6951769-blue-abstract-backgrounds.jpg'; ?>">
    <div class="container" style="width: 100%;">
        <div class="row" style="margin-top:10px;">
            <div class="col-sm-10">
                <div id="logo" align="center" style="margin-top:100px;margin-left: 30px;">
                    <a href="<?PHP echo site_url('Kdmm/index'); ?>"><img src="<?PHP echo base_url() . 'nitnav/img/KDMMlogo.png'; ?>"></a>
                </div>
            </div>
            <div class="col-sm-2">
                <div id="box" class="back" style="background:#0088cc; width:20px;padding:0px;line-height:15px;font-size:10px;"><center>K<br>D<br>M<br>M</center></div>
            </div>
        </div>
        <div class="row" style="margin-top:70px;">
            <div id="rules" class="genRules">
                <div class="col-sm-12">
                    <h4 style="font-size:45px;margin-bottom:30px;font-weight:bold;">GENERAL RULES</h4>
                    <ol class="rulesLI" style="font-size:33px;line-height: 42px;">
                        <li>The quiz is divided into 6 rounds. </li>
                        <li>Should there be a tie between two teams after the final round of the quiz, there will be a Tie-Breaker Round between the teams. In this round, each team will be required to answer five questions in a minute. No choice would be given in this round</li>
                        <li>If more than two teams are tied, a series of Sudden Death rounds shall be conducted. In this, each of the tied teams will be asked one question per round and the team(s) answering incorrectly shall be removed. Such rounds shall continue TILL ONLY ONE TEAM remains. This team shall be the winner of the quiz. In this round, Time available for answering each question is fifteen seconds. Multiple-choice format shall not be used for this round.</li>
                        <li>All questions will be asked in and need to be answered in English.</li>
                        <li>Quiz Master’s decision will be final.</li>
                    </ol>
                </div>
                <!--div class="col-sm-12">
                    <ol class="rulesLI">
                <?php /* if ($rules_g['res_'] == TRUE) { ?>
                  <?php $loop1 = 0; ?>
                  <?php foreach($rules_g['data_'] as $item){ ?>
                  <li><?php echo $item->RULE_; ?></li>
                  <?php $loop1++ ;?>
                  <?php } ?>
                  <?php } else { ?>
                  <li>No Rules Found</li>
                  <?php } */ ?>
                    </ol>
                </div-->
            </div>
            <div id="rules" class="Rules1">
                <div class="col-sm-10"><h4 style="font-size:50px; margin-bottom:40px;font-weight:bold;">BREAK THROUGH</h4></div>
                <div class="col-sm-2">
                    <div class="col-sm-2"><button type="button" class="btn btn-primary"><a href="<?PHP echo site_url('Quiz/round1'); ?>" style="text-decoration:none;">START ROUND</a></button></div>
                </div>
                <div class="col-sm-12">
                    <ol class="rulesLI" style="font-size:35px;line-height:55px;">
                        <?php if ($rules_r_1['res_'] == TRUE) { ?>
                            <?php $loop1 = 0; ?>
                            <?php foreach ($rules_r_1['data_'] as $item) { ?>
                                <li><?php echo $item->RULE_; ?></li>
                                <?php $loop1++; ?>
                            <?php } ?>
                        <?php } else { ?>
                            <li>No Rules Found</li>
                        <?php } ?>
                    </ol>
                </div>
            </div>
            <div id="rules" class="Rules2">
                <div class="col-sm-10"><h4 style="font-size:50px; margin-bottom: 40px;font-weight:bold;">ACOUSTICS</h4></div>
                <div class="col-sm-2"><button type="button" class="btn btn-primary"><a href="<?PHP echo site_url('Quiz/round2'); ?>" style="text-decoration:none;">START ROUND</a></button></div>
                <div class="col-sm-12">
                    <ol class="rulesLI" style="font-size:32px;line-height:42px;">
                        <?php if ($rules_r_2['res_'] == TRUE) { ?>
                            <?php $loop1 = 0; ?>
                            <?php foreach ($rules_r_2['data_'] as $item) { ?>
                                <li><?php echo $item->RULE_; ?></li>
                                <?php $loop1++; ?>
                            <?php } ?>
                        <?php } else { ?>
                            <li>No Rules Found</li>
                        <?php } ?>
                    </ol>
                </div>
            </div>
            <div id="rules" class="Rules3">
                <div class="col-sm-10"><h4 style="font-size:50px; margin-bottom: 40px;font-weight:bold;">WHAT'S YOUR PICK ?</h4></div>
                <div class="col-sm-2"><button type="button" class="btn btn-primary"><a href="<?PHP echo site_url('Quiz/round3'); ?>" style="text-decoration:none;">START ROUND</a></button></div>
                <div class="col-sm-12">
                    <ol class="rulesLI" style="font-size:32px;line-height:42px;">
                        <?php if ($rules_r_3['res_'] == TRUE) { ?>
                            <?php $loop1 = 0; ?>
                            <?php foreach ($rules_r_3['data_'] as $item) { ?>
                                <li><?php echo $item->RULE_; ?></li>
                                <?php $loop1++; ?>
                            <?php } ?>
                        <?php } else { ?>
                            <li>No Rules Found</li>
                        <?php } ?>
                    </ol>
                </div>
            </div>
            <div id="rules" class="Rules4">
                <div class="col-sm-10"><h4 style="font-size:50px; margin-bottom: 40px;font-weight:bold;">V-ZINE</h4></div>
                <div class="col-sm-2"><button type="button" class="btn btn-primary"><a href="<?PHP echo site_url('Quiz/round4'); ?>" style="text-decoration:none;">START ROUND</a></button></div>
                <div class="col-sm-12">
                    <ol class="rulesLI" style="font-size:32px;line-height:42px;">
                        <?php if ($rules_r_4['res_'] == TRUE) { ?>
                            <?php $loop1 = 0; ?>
                            <?php foreach ($rules_r_4['data_'] as $item) { ?>
                                <li><?php echo $item->RULE_; ?></li>
                                <?php $loop1++; ?>
                            <?php } ?>
                        <?php } else { ?>
                            <li>No Rules Found</li>
                        <?php } ?>
                    </ol>
                </div>
            </div>
            <div id="rules" class="Rules5">
                <div class="col-sm-10"><h4 style="font-size:50px; margin-bottom: 40px;font-weight:bold;">THE ULTIMATE EXPRESS</h4></div>
                <div class="col-sm-2"><button type="button" class="btn btn-primary"><a href="<?PHP echo site_url('Quiz/round5'); ?>" style="text-decoration:none;">START ROUND</a></button></div>
                <div class="col-sm-12">
                    <ol class="rulesLI" style="font-size:35px;line-height:45px;">
                        <?php if ($rules_r_5['res_'] == TRUE) { ?>
                            <?php $loop1 = 0; ?>
                            <?php foreach ($rules_r_5['data_'] as $item) { ?>
                                <li><?php echo $item->RULE_; ?></li>
                                <?php $loop1++; ?>
                            <?php } ?>
                        <?php } else { ?>
                            <li>No Rules Found</li>
                        <?php } ?>
                    </ol>
                </div>
            </div>
            <div id="rules" class="Rules6">
                <div class="col-sm-10"><h4 style="font-size:50px; margin-bottom: 40px;font-weight:bold;">FASTEST FINGER FIRST</h4></div>
                <div class="col-sm-2"><button type="button" class="btn btn-primary"><a href="<?PHP echo site_url('Quiz/round6'); ?>" style="text-decoration:none;">START ROUND</a></button></div>
                <div class="col-sm-12">
                    <ol class="rulesLI" style="font-size:35px;line-height:42px;">
                        <?php if ($rules_r_6['res_'] == TRUE) { ?>
                            <?php $loop1 = 0; ?>
                            <?php foreach ($rules_r_6['data_'] as $item) { ?>
                                <li><?php echo $item->RULE_; ?></li>
                                <?php $loop1++; ?>
                            <?php } ?>
                        <?php } else { ?>
                            <li>No Rules Found</li>
                        <?php } ?>
                    </ol>
                </div>
            </div>
            <?php
            $score_ = array($r1, $r2, $r3, $r4, $r5, $r6);
            $r = array();

            $tot_kosi = 0;
            $tot_ganga = 0;
            $tot_yamuna = 0;
            $tot_saryu = 0;
            $tot_gargi = 0;
            $tot_sharda = 0;

            $loop1 = 0;
            for ($k = 0; $k <= 5; $k++) {
                foreach ($score_[$k] as $item) {
                    $r[$loop1] = $item->SCORE;
                    $loop1++;
                }
            }
            ?>
            <div id="rules" class="score" style="background: url('<?PHP echo base_url() . 'nitnav/img/NPS.png'; ?>') top left no-repeat #ffffff;padding:100px 0;">
                <div class="col-sm-12" style="width:100%">
                    <table class="table" border="0" style="font-size:21px;text-align: center; opacity:0.9;">
                        <tr style="background: #000080; color:#fff;text-align:center;height:70px;">
                            <th style="text-align: center; padding: 20px 0px 0px 0px; font-size: 27px">TEAMS</th>
                            <th style="text-align: center;">ROUND<br />1</th>
                            <th style="text-align: center;">ROUND<br />2</th>
                            <th style="text-align: center;">ROUND<br />3</th>
                            <th style="text-align: center;">ROUND<br />4</th>
                            <th style="text-align: center;">ROUND<br />5</th>
                            <th style="text-align: center;">ROUND<br />6</th>
                            <th style="text-align: center; padding: 20px 0px 0px 0px; font-size: 26px">TOTAL</th>
                        </tr>

                        <tr style="background: #0086b3; color:#ffff00; height:50px;font-weight:bold;font-size:30px;">
                            <td>KOSI</td>
                            <td><?php if ($r[0] != 0) echo $r[0]; ?></td>
                            <td><?php if ($r[6] != 0) echo $r[6]; ?></td>
                            <td><?php if ($r[12] != 0) echo $r[12]; ?></td>
                            <td><?php if ($r[18] != 0) echo $r[18]; ?></td>
                            <td><?php if ($r[24] != 0) echo $r[24]; ?></td>
                            <td><?php if ($r[30] != 0) echo $r[30]; ?></td>
                            <td><?php echo ($r[0] + $r[6] + $r[12] + $r[18] + $r[24] + $r[30]); ?></td>
                        </tr>

                        <tr style="background: #009926; color:#fff; height:50px;font-weight:bold;font-size:30px;">
                            <td>GANGA</td>
                            <td><?php if ($r[1] != 0) echo $r[1]; ?></td>
                            <td><?php if ($r[7] != 0) echo $r[7]; ?></td>
                            <td><?php if ($r[13] != 0) echo $r[13]; ?></td>
                            <td><?php if ($r[19] != 0) echo $r[19]; ?></td>
                            <td><?php if ($r[25] != 0) echo $r[25]; ?></td>
                            <td><?php if ($r[31] != 0) echo $r[31]; ?></td>
                            <td><?php echo ($r[1] + $r[7] + $r[13] + $r[19] + $r[25] + $r[31]); ?></td>
                        </tr>

                        <tr style="background: #843534; color:#fff; height:50px;font-weight:bold;font-size:30px;">
                            <td>YAMUNA</td>
                            <td><?php if ($r[2] != 0) echo $r[2]; ?></td>
                            <td><?php if ($r[8] != 0) echo $r[8]; ?></td>
                            <td><?php if ($r[14] != 0) echo $r[14]; ?></td>
                            <td><?php if ($r[20] != 0) echo $r[20]; ?></td>
                            <td><?php if ($r[26] != 0) echo $r[26]; ?></td>
                            <td><?php if ($r[32] != 0) echo $r[32]; ?></td>
                            <td><?php echo ($r[2] + $r[8] + $r[14] + $r[20] + $r[26] + $r[32]); ?></td>
                        </tr>

                        <tr style="background: #0086b3; color:#ffff00; height:50px;font-weight:bold;font-size:30px;">
                            <td>SARYU</td>
                            <td><?php if ($r[3] != 0) echo $r[3]; ?></td>
                            <td><?php if ($r[9] != 0) echo $r[9]; ?></td>
                            <td><?php if ($r[15] != 0) echo $r[15]; ?></td>
                            <td><?php if ($r[21] != 0) echo $r[21]; ?></td>
                            <td><?php if ($r[27] != 0) echo $r[27]; ?></td>
                            <td><?php if ($r[33] != 0) echo $r[33]; ?></td>
                            <td><?php echo ($r[3] + $r[9] + $r[15] + $r[21] + $r[27] + $r[33]); ?></td>
                        </tr>

                        <tr style="background: #009926; color:#fff; height:50px;font-weight:bold;font-size:30px;">
                            <td>GARGI</td>
                            <td><?php if ($r[4] != 0) echo $r[4]; ?></td>
                            <td><?php if ($r[10] != 0) echo $r[10]; ?></td>
                            <td><?php if ($r[16] != 0) echo $r[16]; ?></td>
                            <td><?php if ($r[22] != 0) echo $r[22]; ?></td>
                            <td><?php if ($r[28] != 0) echo $r[28]; ?></td>
                            <td><?php if ($r[34] != 0) echo $r[34]; ?></td>
                            <td><?php echo ($r[4] + $r[10] + $r[16] + $r[22] + $r[28] + $r[34]); ?></td>
                        </tr>

                        <tr style="background: #843534; color:#fff; height:50px;font-weight:bold;font-size:30px;">
                            <td>SHARDA</td>
                            <td><?php if ($r[5] != 0) echo $r[5]; ?></td>
                            <td><?php if ($r[11] != 0) echo $r[11]; ?></td>
                            <td><?php if ($r[17] != 0) echo $r[17]; ?></td>
                            <td><?php if ($r[23] != 0) echo $r[23]; ?></td>
                            <td><?php if ($r[29] != 0) echo $r[29]; ?></td>
                            <td><?php if ($r[35] != 0) echo $r[35]; ?></td>
                            <td><?php echo ($r[5] + $r[11] + $r[17] + $r[23] + $r[29] + $r[35]); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="rules" class="teams" style="background: #f2f2f2;">
                <div class="col-sm-12">
                    <h4 style="font-size:70px; margin-bottom:50px;font-weight:bold;">FINAL <img src="<?PHP echo base_url() . 'nitnav/img/team.png'; ?>"/></h4>
                    <?PHP
                    if ($teams['res_'] == TRUE) {
                        foreach ($teams['data_'] as $item) {
                            if ($item->NAME_ != "Buzzer") {
                                ?>
                                <div class="nameCSS"><?PHP echo $item->NAME_; ?></div>
                                <div class="teamCSS" style="font-weight:bold;"><?PHP echo $item->COLLEGE . ", " . $item->CITY . "<br>"; ?></div>
                                <?PHP
                            }
                        }
                    } else {
                        echo "No Teams Found";
                    }
                    ?>
                </div>
            </div>
            <div class="col-sm-7" id="quest" style="margin-top:250px;">
                <img src="<?PHP echo base_url() . 'nitnav/img/qz.png'; ?>">
            </div>
            <div class="col-sm-5">
                <div id="box" class="r1" style="background:#009926;">GENERAL</div>
                <div id="box" class="team" style="background:#843534;">TEAMS</div>
                <div id="box" class="r2" style="background:#0088cc;">BREAK THROUGH</div>
                <div id="box" class="r3" style="background:#0088cc;">ACOUSTICS</div>
                <div id="box" class="r4" style="background:#0088cc;">WHAT'S YOUR PICK ?</div>
                <div id="box" class="r5" style="background:#0088cc;">V-ZINE</div>
                <div id="box" class="r6" style="background:#0088cc;">THE ULTIMATE EXPRESS</div>
                <div id="box" class="r8" style="background:#0088cc;">FASTEST FINGER FIRST</div>
                <div id="box" class="r7" style="background:#000080;">SCORE</div>
            </div>
        </div>
    </div>