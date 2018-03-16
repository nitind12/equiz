<?php
$score_ = array($r1, $r2, $r3, $r4, $r5, $r6, $r7);
$r = array();

$tot_kosi   = 0;
$tot_ganga  = 0;
$tot_yamuna = 0;
$tot_saryu  = 0;
$tot_gargi  = 0;
$tot_sharda = 0;

$teams_ = array('DURGA','BHAGWATI','ANNAPURNA','PARVATI','VAISHNAVI','KATYAYANI');

$loop1 = 0;
for ($k = 0; $k <= 6; $k++) {
    foreach ($score_[$k] as $item) {
        $r[$loop1] = $item->SCORE;
        $loop1++;
    }
}
?>
<style type="text/css">
    .teamName_local{
        font-size: 35px;
        padding: 0px;
    }
</style>
<div id="rules" class="score" style="background: url('<?PHP echo base_url() . 'nitnav/img/NPS.png'; ?>') top left no-repeat #ffffff;padding:100px 0;">
    <?php if(count($r) > 0){ ?>
    <div class="col-sm-12" style="width:100%">
        <table class="table" border="0" style="font-size:22px;text-align: center; opacity:0.9;"">
            <tr style="background: #000080; color:#fff;text-align:center;height:70px;">
                <th style="text-align: center; padding: 20px 0px 0px 0px; font-size: 27px">TEAMS</th>
                <th style="text-align: center;">ROUND<br />1</th>
                <th style="text-align: center;">ROUND<br />2</th>
                <th style="text-align: center;">ROUND<br />3</th>
                <th style="text-align: center; padding: 20px 0px 0px 0px; font-size: 26px">TOTAL</th>
            </tr>

            <tr style="background: #0086b3; color:#ffff00; height:60px;font-weight:bold;font-size:30px;">
                <td class="teamName_local"><?php echo $teams_[0];?></td>
                <td><?php if ($r[0] != 0) echo $r[0]; ?></td>
                <td><?php if ($r[6] != 0) echo $r[6]; ?></td>
                <td><?php if ($r[12] != 0) echo $r[12]; ?></td>
                <td><?php echo ($r[0] + $r[6] + $r[12]); ?></td>
            </tr>

            <tr style="background: #009926; color:#fff; height:60px;font-weight:bold;font-size:30px;">
                <td class="teamName_local"><?php echo $teams_[1];?></td>
                <td><?php if ($r[1] != 0) echo $r[1]; ?></td>
                <td><?php if ($r[7] != 0) echo $r[7]; ?></td>
                <td><?php if ($r[13] != 0) echo $r[13]; ?></td>
                <td><?php echo ($r[1] + $r[7] + $r[13]); ?></td>
            </tr>

            <tr style="background: #843534; color:#fff; height:60px;font-weight:bold;font-size:30px;">
                <td class="teamName_local"><?php echo $teams_[2];?></td>
                <td><?php if ($r[2] != 0) echo $r[2]; ?></td>
                <td><?php if ($r[8] != 0) echo $r[8]; ?></td>
                <td><?php if ($r[14] != 0) echo $r[14]; ?></td>
                <td><?php echo ($r[2] + $r[8] + $r[14]); ?></td>
            </tr>

            <tr style="background: #0086b3; color:#ffff00; height:60px;font-weight:bold;font-size:30px;">
                <td class="teamName_local"><?php echo $teams_[3];?></td>
                <td><?php if ($r[3] != 0) echo $r[3]; ?></td>
                <td><?php if ($r[9] != 0) echo $r[9]; ?></td>
                <td><?php if ($r[15] != 0) echo $r[15]; ?></td>
                <td><?php echo ($r[3] + $r[9] + $r[15]); ?></td>
            </tr>

            <tr style="background: #009926; color:#fff; height:60px;font-weight:bold;font-size:30px;">
                <td class="teamName_local"><?php echo $teams_[4];?></td>
                <td><?php if ($r[4] != 0) echo $r[4]; ?></td>
                <td><?php if ($r[10] != 0) echo $r[10]; ?></td>
                <td><?php if ($r[16] != 0) echo $r[16]; ?></td>
                <td><?php echo ($r[4] + $r[10] + $r[16]); ?></td>
            </tr>

            <tr style="background: #843534; color:#fff; height:50px;font-weight:bold;font-size:30px;">
                <td class="teamName_local"><?php echo $teams_[5];?></td>
                <td><?php if ($r[5] != 0) echo $r[5]; ?></td>
                <td><?php if ($r[11] != 0) echo $r[11]; ?></td>
                <td><?php if ($r[17] != 0) echo $r[17]; ?></td>
                <td><?php echo ($r[5] + $r[11] + $r[17]); ?></td>
            </tr>
        </table>
    </div>
    <?php } else { ?>
        <h1></h1>
    <?php } ?>
</div>