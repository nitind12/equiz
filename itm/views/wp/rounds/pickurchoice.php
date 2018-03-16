<div class="col-sm-12" id="pickAlphabet" style="display: none; margin-top:10px; border: #ff0000 solid 0px;">
    <div style="border: #009000 dotted 0px; text-align: right; clear: both; height: 40px"></div>
    <div style="border: #009000 dotted 0px; overflow: hidden">
        <div class="teamName_" id="team_name_">Team</div>
        <div style="clear: both"></div>
        <div style="padding: 10px; width: auto; overflow: hidden">
            <?php $this->load->view('wp/wheel_/index'); ?>
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
        <?php $cnt = 50; $alpha = 65; ?>
        <?php for($loop1=1;$loop1<9;$loop1++){ ?>
            <div class="r_alphabets" style="left: <?php echo 240+$cnt+=20;?>px" id="r_alphabets_<?php echo $loop1;?>">
                <a href="#">
                    <img src="<?php echo base_url('nitnav/img/alpha/a.png'); ?>" id="<?php echo chr($alpha++);?>_" />
                </a>
            </div>
        <?php } ?>
    </div>
    <div style="position:fixed;left:0px; bottom:0px;width:400px;" align="left">
        <div class="nav_button" id="rrule_btn"><img src="<?php echo base_url('nitnav/img/rules_but.png'); ?>" border="0"/></div>
    </div>
</div>