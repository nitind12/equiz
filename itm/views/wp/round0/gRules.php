<div class="btn-danger">Late Smt Kamla Dhingra Memorial Meet</div>
General Rules
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div>
                <?php if ($grules['res_'] == TRUE) { ?>
                    <?php foreach ($grules['data_'] as $item) { ?>
                        <div><?php echo $item->RULE; ?>.</div>
                    <?php } ?>
                <?php } else { ?>
                    <?php echo 'No Rules Found'; ?>
                <?php } ?>
            </div>
            <br />
            <?php echo anchor('startgame', "Start Wordpower"); ?>
        </div>
    </div>
</div>