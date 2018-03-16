<!-- JavaScript here -->
<?php if ($qa_pkg['res_'] == TRUE) { ?>
    <?php $this->load->view('qz/flip/flip');?>
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
        var a_start = 0, a_end = 3;
        var b_start = 4, b_end = 7;
        var c_start = 8, c_end = 11;
        var d_start = 12, d_end = 15;
        var e_start = 16, e_end = 19;
        var f_start = 20, f_end = 23;
        var g_start = 24, g_end = 27;
        var h_start = 28, h_end = 31;

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
        .teamName_{display: none;margin-top:15px;; margin-left:20px;color:#ff0;font-family:cooper black;font-size:55px;text-shadow:2px 2px 5px #000;}
        .Ques_{ width:100%;height: auto; color:#fff; padding: 10px;font-size:30px; line-height: 40px;border:1px #fff dotted; border-radius: 5px; background: #900; font-weight:bold;  font-size:30px;margin-top:40px; display: none}
        .ans_{margin:40px 20px 0 0;float:left; width:40%; height: auto; color:#000080;  padding: 10px; font-size:40px; line-height: 40px; border:1px #002166 dotted; border-radius: 5px;background: #D0D0D0;  font-weight:bold;display: none }
        .corrAns_{width: 49%; float: left; background: #f0f0f0; overflow: hidden; text-align: left; display: none }
        .next_{width: 49%; float: right; background: #f0f0f0; overflow: hidden; text-align: right; display: none }
        .cover_{width: 180px; height:180px; float: left; padding: 0px; border: #ff0000 solid 0px; border-radius: 15px;  text-align: center;}
        .blocks {width: 180px; height:180px; float: left; padding: 70px 5px 5px 5px; border: #ff0000 dashed 1px; border-radius: 15px; font-size: 20px; text-align: center; background: #fff;}
        .gap_{float: left; padding: 10px}
        .newline_{clear: both; padding:10px}
        .playBut{ display: none }   
        ._theme_{font-size:40px;color:#ff0; line-height:50px;font-weight:bold;position:fixed;top:-10px;left:10px;padding:10px;}
        .answerNo_{margin:40px 0 ;float:left;width:5%;color:#ff0;padding: 10px;font-size:30px;line-height: 40px;border:1px #002166 dotted;border-radius: 5px;background: #900;font-weight:bold;font-size:40px;}
        .fanswerNo_{margin:40px 0 ;float:left;width:5%;color:#ff0;padding: 10px; line-height: 40px;border:1px #002166 dotted;border-radius: 5px;background: #900;font-weight:bold;font-size:35px;}
        .correct_{background: url('<?PHP echo base_url() . 'nitnav/img/right.png'; ?>') no-repeat right #ffff00;font-size:40px;color:#E13300;border:1px #900 dashed;}
        .stop_ {width: 37px; height: 37px ;margin-top:80px; margin-left:80px;position:fixed}
        .flip_{ display: none; position: absolute; border: #ffffff solid 1px; background: #000000; left: 40px; top:0px; height: auto }
        .incorrect_{background: url('<?PHP echo base_url() . 'nitnav/img/wrong.png'; ?>') no-repeat left #e4b9b9;font-size:40px;padding-left:80px;color:#E13300;border:1px #5bc0de dashed;}
    </style>
    <!-- End of Stylesheets -->
    <body  onload="startround();" background="<?PHP echo base_url() . 'nitnav/img/round3.jpg'; ?>"  style="margin-top:0px;">
        <div class="container" style="width: 100%;">
           <!-- <div class="row">
                <div class="col-sm-12">
                    <div align="center" style="margin-top:20px; border:1px #009000 dotted;padding:5px;">
                        <span style="color:#ffff00;" id="roundName_"> <?php //echo $title; ?></span>
                    </div>
                </div>
            </div>-->

            <div class="row">
                <?php $this->load->view('qz/r1'); ?>
            </div>
            <div class="row" align="right" style='margin-top:80px;'>
                <?php $this->load->view('qz/pickurchoice'); ?>
            </div>
            <div class="row" style="padding: 0px 0px 0px 0px">
                <div class="col-sm-12 start__" id="_end_" style="text-align: center; display: none"><a href="<?php echo site_url('item/wordpower/dashboard'); ?>"><button class="btn-danger" style="width: 650px; height: 100px; font-size: 40px">End of Round <?php echo $title; ?></button></a></div>
            </div>

        <?php } else { ?>
            <div class="row">
                <div class="col-sm-12" style="padding: 25px; text-align: center">
                    <h3>No Data Found</h3>
                    <a href="<?php echo site_url('item/wordpower/dashboard'); ?>"><button class="btn-danger">&lt;&lt; Home</button></a>
                </div>
            </div>
        </div>
    <?php } ?>