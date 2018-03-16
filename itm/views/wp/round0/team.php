<body background="<?PHP echo base_url() . 'nitnav/img/wp.jpg'; ?>">
    <div class="container" style="width: 100%;">
        <div class="row" style="margin-top:0px;">
            <div class="col-sm-7">
                <div id="logo">
                    <a href="<?PHP echo site_url('wordpower'); ?>"><img src="<?PHP echo base_url() . 'nitnav/img/KDMMlogo.png'; ?>" width="10%"></a>
                </div>
            </div>
            <div class="col-sm-5">
                <!-- yet to code-->
            </div>
        </div>
        <div class="row" style="margin-top:-100px; margin-bottom:80px;margin-left:150px;">
            <div class="col-sm-12" id="teamare">
                <img src="<?PHP echo base_url() . 'nitnav/img/teamsAre.png'; ?>">
            </div>
        </div>
        <?php
        if ($teams['res_'] == TRUE) {
            $i = 1
            ?>
            <?php foreach ($teams['data_'] as $item) { ?>
                <div class="row" style="margin-top:0px;overflow: hidden;">
                    <div class="col-sm-12 teamStrip" id="_<?PHP echo $i; ?>">
                        <div class="col-sm-4 teamName">
                            <?php echo $item->NAME_; ?>
                        </div>
                        <div class="col-sm-8 teamCollege">
                            <?php echo $item->COLLEGE . ", " . $item->CITY; ?>
                        </div>
                    </div>
                </div>
                <?php
                $i++;
            }
            ?>
            <?php
        } else {
            echo 'No Team Found';
        }
        ?>
        <div class="row" style="margin-top: 0px;">
            <div class="col-sm-12" align="center">
                <?php echo anchor('wordpower', "Word Power"); ?>
            </div>
        </div>