<!-- JavaScript here -->
<?php if ($qa_pkg['res_'] == TRUE) { ?>
    
    <script type="text/javascript">
        var global_Count = 0;
        var teamCounter = -1;
        var nextCounter = -1;
        var corrAns;
        var totalCount = <?php echo $tot_count; ?>;
        var teamName_ = [];
        var questions_ = [];
        var font_size_Q = [];
        var options_A = [];
        var options_B = [];
        var options_C = [];
        var options_D = [];
        var theme_ = [];
        var correct_Ans = [];
        var correct_Ans_NO = [];
        var font_size_A = [];
        var team_ = [];
        var round_ = [];
        var a_start = 0, a_end = 1;
        var b_start = 2, b_end = 3;
        var c_start = 4, c_end = 5;
        var d_start = 6, d_end = 7;
        var e_start = 8, e_end = 9;
        var f_start = 10, f_end = 11;
        var g_start = 12, g_end = 13;
        var h_start = 14, h_end = 15;
    <?php $loop1 = 0; ?>
    <?php foreach ($qa_pkg['data_'] as $item) { ?>
            questions_[<?php echo $loop1; ?>] = "<?php echo trim($item->QUESTION); ?>";
            font_size_Q[<?php echo $loop1; ?>] = "<?php echo trim($item->FSFQ); ?>";
            options_A[<?php echo $loop1; ?>] = "<?php echo trim($item->A); ?>";
            options_B[<?php echo $loop1; ?>] = "<?php echo trim($item->B); ?>";
            options_C[<?php echo $loop1; ?>] = "<?php echo trim($item->C); ?>";
            options_D[<?php echo $loop1; ?>] = "<?php echo trim($item->D); ?>";
            theme_[<?php echo $loop1; ?>] = "<?php echo trim($item->THEME); ?>";
        <?php $i = $item->ANSWER; ?>
            correct_Ans[<?php echo $loop1; ?>] = "<?php echo trim($item->$i); ?>";
            correct_Ans_NO[<?php echo $loop1; ?>] = "<?php echo trim($item->ANSWER); ?>";
            font_size_A[<?php echo $loop1; ?>] = "<?php echo trim($item->FSFA); ?>";
        <?php $loop1++; ?>
    <?php } ?>

    <?php $loop1 = 0; ?>
    <?PHP foreach ($teams['data_'] as $item) { ?>
            teamName_[<?php echo $loop1; ?>] = "<?php echo trim($item->NAME_); ?>";
        <?php $loop1++; ?>
    <?php } ?>

    </script>
    <!-- End of Javascript -->
    <!-- Stylesheets here -->
    <style type="text/css">
        a{ text-decoration: none }
        a:hover{text-decoration: none}
        .rules__ { width: 48%; float: left; overflow: hidden; text-align: right; display: block  }
        .view_rules__{position:fixed; top:200px; left:-500px; width: 50%; overflow: hidden; padding: 5px; border-radius: 15px; border: #808080 dotted 1px; display: none;background:#ff0;height:auto;color:#002166;font-size:30px;line-height:50px;text-align: left;padding-left:130px}
        .view_ex__{position:fixed; top:200px; left:-500px; width: 50%; overflow: hidden; padding: 5px; border-radius: 15px; border: #808080 dotted 1px; display: none;background:#ff0;height:auto;color:#002166;font-size:30px;line-height:50px;text-align: left;padding-left:130px}
        .example__ { width: 50%; float: right; overflow: hidden; text-align: left; display: block  }
        .end__ { width: 100%; padding: 25px; font-size: 50px; text-align: center; display: none; }
        .teamName_{ font-family: Tekton Pro; font-size: 80px; font-weight: bold; padding: 10px; display: none; color:#ffff00; margin-left:20px; margin-top: 10px; text-shadow: 0px 0px 10px #000000 }
        .Ques_{ width:100%;height: auto; color:#fff; padding: 10px;font-size:30px; line-height: 40px;border:1px #fff dotted; border-radius: 5px; background: #900; font-weight:bold;  font-size:30px;margin-top:40px; display: none}
        .ans_{margin:40px 20px 0 0;;float:left; width:40%; height: auto; color:#000080;  padding: 10px; font-size:50px; line-height: 40px; border:1px #002166 dotted; border-radius: 5px;background: #D0D0D0;  opacity: .9; font-weight:bold;display: none }
        .corrAns_{width: 49%; float: left; background: #f0f0f0; overflow: hidden; text-align: left; display: none }
        .next_{width: 49%; float: right; background: #f0f0f0; overflow: hidden; text-align: right; display: none }
        .cover_{width: 180px; height:180px; float: left; padding: 0px; border: #ff0000 solid 0px; border-radius: 15px;  text-align: center;opacity:1;}
        .blocks {
            box-shadow: 5px 5px 15px #000000;
            width: 180px; 
            height:180px; 
            float: left; 
            padding: 70px 5px 5px 5px; 
            border: #ff0000 solid 1px; 
            border-radius: 30px;
            font-family: Forte;
            font-size: 120px; 
            color: #ffffff;
            text-shadow: 0px 0px 5px #000000;
            text-align: center; 
            background: url(<?php echo base_url('nitnav/img/alphabetChoco.jpg');?>);
        }
        .gap_{ float: left; padding: 10px }
        .newline_{clear: both; padding:10px}
        .playBut{ display: none }
        ._theme_{
            width: 400px;
            font-family: Tekton Pro; 
            font-size:35px;
            color:#fff; 
            line-height:50px;
            position:fixed;
            top:10px;
            padding:10px;
            text-align: center;
            border-radius: #009000 dotted 0px;
            border-radius: 14px;
            background: #441400;
            box-shadow: 0px 0px 10px #000000;
            margin: 15px;
            display: none;
        }
        .answerNo_{margin:40px 0 ;float:left;width:5%;color:#ff0;padding: 10px;font-size:30px;line-height: 40px;border:1px #002166 dotted;border-radius: 5px;background: #900;font-weight:bold;font-size:40px;}
        .fanswerNo_{margin:40px 0 ;float:left;width:5%;color:#ff0;padding: 10px; line-height: 40px;border:1px #002166 dotted;border-radius: 5px;background: #900;font-weight:bold;font-size:35px;}
        .correct_{background: url('<?PHP echo base_url() . 'nitnav/img/right.png'; ?>') no-repeat right #ffff00;font-size:40px;color:#E13300;border:1px #900 dashed;}

        .flip_{ display: none; position: absolute; border: #ffffff solid 1px; background: #000000; left: 40px; top:0px; height: auto }
        .chocolatebowl{
            position: fixed; 
            left: 90px; 
            top: 80px;
            background: url(<?php echo base_url('nitnav/img/chocoTray.png');?>) no-repeat;
            width: 549px;
            height: 607px;
            border: #ff0000 solid 0px;
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
            z-index: 999999;
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
        .r_alphabets{
            border: #ff0000 dashed 0px;
            border-radius: 25px;
            width: 20px;
            height: 20px;
            display: block;
            position: fixed;
            left: 300px;
            bottom: 20px;
            background: url(<?php echo base_url('nitnav/img/alpha/base.png'); ?>);
            z-index: 99999;
            padding: 0px;
        }
    </style>
    <!-- End of Stylesheets -->
<?php $this->load->view('wp/flip/flip'); ?>
    <body  onload="startround();" background="<?PHP echo base_url() . 'nitnav/img/trivia_bg.jpg'; ?>"  style="margin-top:0px;">
        <div class="container" style="width: 100%;">
            <div class="row">
                <div class="col-sm-9"></div>
                <div class="col-sm-3" style="text-align: right; border: #909090 solid 0px; padding: 0px 0px 0px 0px">
                    <div class="close_" id="close_"><a href="<?php echo site_url('wordpower/dashboard'); ?>"><img src="<?php echo base_url('nitnav/img/close.png'); ?>" border="0"/></a></div>
                </div>
            </div>
            <div class="row">
                <?php $this->load->view('wp/rounds/r1'); ?>
            </div>
            <div class="row" align="right">
                <?php $this->load->view('wp/rounds/pickurchoice'); ?>
                <div id="theme__" class="_theme_"></div>
                <div id="chocobowl__" class="chocolatebowl">
                    
                </div>
                <div style="width: 50px; height:50px;float:left; left: 50px" id="no">
                    <div class="play_buttons" style="float: left; padding: 10px 0; text-align: center; vertical-align: center; width: 100%; height: 100%; border: #900000 solid 0px">
                        <div style="clear: both"></div>
                        <div style="float: left; text-align: center; width: 100%">
                            <img src='<?php echo base_url('nitnav/img/playsmall.png'); ?>' border='0' id='play_A' class="playBut" />
                            <img src='<?php echo base_url('nitnav/img/playsmall.png'); ?>' border='0' id='play_B' class="playBut" />
                            <img src='<?php echo base_url('nitnav/img/playsmall.png'); ?>' border='0' id='play_C' class="playBut" />
                            <img src='<?php echo base_url('nitnav/img/playsmall.png'); ?>' border='0' id='play_D' class="playBut" />
                            <img src='<?php echo base_url('nitnav/img/playsmall.png'); ?>' border='0' id='play_E' class="playBut" />
                            <img src='<?php echo base_url('nitnav/img/playsmall.png'); ?>' border='0' id='play_F' class="playBut" />
                            <img src='<?php echo base_url('nitnav/img/playsmall.png'); ?>' border='0' id='play_G' class="playBut" />
                            <img src='<?php echo base_url('nitnav/img/playsmall.png'); ?>' border='0' id='play_H' class="playBut" />
                        </div>
                    </div>
                    </div>
                </div>
            <div class="row" style="padding: 0px 0px 0px 0px">
                <div class="col-sm-12 start__" id="_end_" style="text-align: center; display: none; top:250px"><a href="<?php echo site_url('wordpower/dashboard'); ?>"><button class="btn-danger" style="width: 650px; height: 100px; font-size: 50px; font-weight: bold">End of Round <?php echo $title; ?></button></a></div>
            </div>
        <?php } else { ?>
            <div class="row">
                <div class="col-sm-12" style="padding: 25px; text-align: center">
                    <h3>No Data Found</h3>
                    <a href="<?php echo site_url('wordpower/dashboard'); ?>"><button class="btn-danger">&lt;&lt; Home</button></a>
                </div>
            </div>
        </div>
    <?php } ?>
