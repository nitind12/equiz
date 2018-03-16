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
<style>

</style>

<div id="scoreboard" class="container">
    <div class="col-sm-2">
        <?php echo form_open('kdmm/submit_score_data_q/', array('name' => 'frm_')); ?>
        <table class="table">
            <tr>
                <th>&nbsp;</th>
            </tr>
            <tr>
                <td><input type="text" name="txtKosi" value="DURGA" disabled="disabled" /></td>
            </tr>
            <tr>
                <td><input type="text" name="txtGanga" value="BHAGWATI" disabled="disabled" /></td>
            </tr>
            <tr>
                <td><input type="text" name="txtSaryu" value="ANNAPURNA" disabled="disabled" /></td>
            </tr>
            <tr>
                <td><input type="text" name="txtYamuna" value="PARVATI" disabled="disabled" /></td>
            </tr>
            <tr>
                <td><input type="text" name="txtGargi" value="VAISHNAVI" disabled="disabled" /></td>
            </tr>
            <tr>
                <td><input type="text" name="txtSharda" value="KATYAYANI" disabled="disabled" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
        </table>
        <?php echo form_close(); ?>
    </div>
    <?php $i = 0; ?>
    <?php for ($loop1 = 7; $loop1 <= 12; $loop1++) { ?>
        <div class="col-sm-1">
            <?php echo form_open('kdmm/update_score_q/' . $loop1, array('name' => 'frm_' . $loop1)); ?>
            <table class="table">
                <tr>
                    <th>Round <?php echo $loop1-6; ?></th>
                </tr>
                <tr>
                    <?php $tot_kosi = $tot_kosi + $r[$i]; ?>
                    <td><input type="text" value="<?php echo $r[$i]; ?>" name="txtKosi_r" /></td>
                    <?php ++$i; ?>
                </tr>
                <tr>
                    <?php $tot_ganga = $tot_ganga + $r[$i]; ?>
                    <td><input type="text" value="<?php echo $r[$i]; ?>" name="txtGanga_r" /></td>
                    <?php ++$i; ?>
                </tr>
                <tr>
                    <?php $tot_yamuna = $tot_yamuna + $r[$i]; ?>
                    <td><input type="text" value="<?php echo $r[$i]; ?>" name="txtYamuna_r" /></td>
                    <?php ++$i; ?>
                </tr>
                <tr>
                    <?php $tot_saryu = $tot_saryu + $r[$i]; ?>
                    <td><input type="text" value="<?php echo $r[$i]; ?>" name="txtSaryu_r" /></td>
                    <?php ++$i; ?>
                </tr>
                <tr>
                    <?php $tot_gargi = $tot_gargi + $r[$i]; ?>
                    <td><input type="text" value="<?php echo $r[$i]; ?>" name="txtGargi_r" /></td>
                    <?php ++$i; ?>
                </tr>
                <tr>
                    <?php $tot_sharda = $tot_sharda + $r[$i]; ?>
                    <td><input type="text" value="<?php echo $r[$i]; ?>" name="txtSharda_r" /></td>
                    <?php ++$i; ?>
                </tr>
                <tr>
                    <td><input type="submit" name="cmdButton" value="Update" /></td>
                </tr>
            </table>
            <?php echo form_close(); ?>
        </div>
    <?php } ?>
    <div class="col-sm-3">
        <?php echo form_open('kdmm/submit_score_data_q/' . $loop1, array('name' => 'frm_' . $loop1)); ?>
        <table class="table">
            <tr>
                <th>Total</th>
            </tr>
            <tr>
                <td><input type="text" name="txtKosi_T" value="<?php echo $tot_kosi;?>" /></td>
            </tr>
            <tr>
                <td><input type="text" name="txtGanga_T" value="<?php echo $tot_ganga;?>" /></td>
            </tr>
            <tr>
                <td><input type="text" name="txtYamuna_T" value="<?php echo $tot_yamuna;?>" /></td>
            </tr>
            <tr>
                <td><input type="text" name="txtSaryu_T" value="<?php echo $tot_saryu;?>" /></td>
            </tr>
            <tr>
                <td><input type="text" name="txtGargi_T" value="<?php echo $tot_gargi;?>" /></td>
            </tr>
            <tr>
                <td><input type="text" name="txtSharda_T" value="<?php echo $tot_sharda;?>" /></td>
            </tr>
            <tr>
                <td></td>
            </tr>
        </table>
        <?php echo form_close(); ?>
    </div>
    <table class="table">

    </table>
</div>