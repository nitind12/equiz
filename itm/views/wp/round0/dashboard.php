<style>
    .checker0{
        font-family:fantasy;
        font-size:40px;
        opacity:1;
        padding: 90px 25px 25px 75px;
        color:#E13300;
    }
    .checker{
        font-family:fantasy;
        font-size:40px;
        opacity:1;
        padding: 5px 25px 25px 110px;
        color:#E13300;
    }
    .grammer{
        font-family:fantasy;
        font-size:40px;
        opacity:1;
        padding: 18px 25px 25px 90px;
        color:#E13300;
    }
    .rumblejumble{
        font-family:fantasy;
        font-size:40px;
        opacity:1;
        padding: 14px 25px 25px 100px;
        color:#E13300;
    }
    .fastestfingerfirst{
        font-family:fantasy;
        font-size:40px;
        opacity:1;
        padding: 15px 25px 25px 115px;
        color:#E13300;
    }
    .hangman{
        font-family:fantasy;
        font-size:40px;
        opacity:1;
        padding: 70px 25px 25px 135px;
        color:#E13300;
    }
    .wheeloffortune{
        font-family:fantasy;
        font-size:40px;
        opacity:1;
        padding: 70px 25px 25px 160px;
        color:#E13300;   
    }
    .buzz{
        font-family:fantasy;
        font-size:40px;
        opacity:1;
        padding: 12px 25px 25px 145px;
        color:#E13300; 
    }
    .general_rules{
        border: #ff0000 dashed 1px;
        border-radius: 25px;
        width: 1113px;
        height: 683px;
        display: none;
        position: fixed;
        left: 120px;
        top: 60px;
        background: url(<?php echo base_url('nitnav/img/generalRulesWP.jpg');?>);
        box-shadow: 0px 0px 30px #ffffff;
    }
    li{
        padding: 15px 0px;
    }
    .general_rule_text{
        color: #000000;
        font-size: 32px; 
        font-family: 'Times New Roman'; 
        margin-left: 20px; 
        margin-top: 15px;
        width: 600px; 
        height: auto; 
        text-align: justify;
        line-height: 32px;
    }
</style>
<body background="<?PHP echo base_url() . 'nitnav/img/wp__.jpg'; ?>">
    <div class="container-fluid" style="overflow: hidden">
        <div id="wall_fade_me" style="position: fixed; z-index: 0; width: 100%; height: 100%; background:url(<?PHP echo base_url() . 'nitnav/img/WordPowerNavigation_Pol.png'; ?>);?>; background-repeat: no-repeat; opacity: 1"></div>
        <div class="row" style="margin-top:0px;">
            <div class="col-sm-12">
                <div id="logo" align="left" style="margin-left: 10px;">
                    <a href="<?PHP echo site_url('itm/index'); ?>"><img src="<?PHP echo base_url() . 'nitnav/img/itm-logo.png'; ?>" ></a>
                </div>
            </div>
        </div>

        <div class="row" style="margin: 0px 55px 0px 0px">
            <div class="col-sm-3" id="wp_" style="float: right; border: #ffff00 dotted 0px; text-align: right">
                <img src="<?PHP echo base_url() . 'nitnav/img/itm-text.png'; ?>">
            </div>
        </div>
        <div class="row" style="margin-top:40px;" align="center">
            <div class='col-sm-3'></div>
            <div class="col-sm-7" id="WProunds">
            <div id="wpr0" class="col-sm-8 checker0" align='left'></div>
                <div id="wpr1" class="col-sm-8 checker" align='left'><?php echo anchor('Quiz/round1', '<img src="' . base_url('nitnav/img/crossword.png') . '" />'); ?></div>
                <div id="wpr5" class="col-sm-8 hangman" align='left'><?php echo anchor('wordpower/hangman', '<img src="' . base_url('nitnav/img/hangman.png') . '" />'); ?></div>
                <div id="wpr6" class="col-sm-8 wheeloffortune" align='left'><?php echo anchor('wordpower/wheeloffortune', '<img src="' . base_url('nitnav/img/wheeloffortune.png') . '" />'); ?></div>
            </div>
            <div class='col-sm-2'>
                <div style="clear: both; padding: 260px;"></div>
                <div style="float: left"><img src="<?php echo base_url('nitnav/img/generalRulesWP.png'); ?>" id="grule_btn" /></div>
                <div style="float: left" class="rw">SCORE</div>
            </div>
        </div>
        <?php if ($grules['res_'] == TRUE) { ?>
            <div id="general_rules" class="general_rules">
                <div style="clear: both; padding: 50px">
                    <div style="float: right" id="close_grule_btn"><img src="<?php echo base_url('nitnav/img/close_.png');?>" /></div>
                </div>
                <div class="general_rule_text">
                    <ol>
                        <?php foreach ($grules['data_'] as $item) { ?>
                            <li><?php echo $item->RULE; ?></li>
                        <?php } ?>
                    </ol>
                </div>
            </div>
        <?php } ?>
    </div>
    
    <?php $this->load->view('wp/round0/scoreW');?>