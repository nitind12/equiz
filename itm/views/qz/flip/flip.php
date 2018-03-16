<!-- JavaScript here -->
<?php if ($flip_['res_'] == TRUE) { ?>
    <script type="text/javascript">
        var fglobal_Count = 0;
        var fteamCounter = -1;
        var fnextCounter = -1;
        var fcorrAns;
        var ftotalCount = <?php echo $ftot_count; ?>;
        var fquestions_ = [];
        var ffont_size_Q = [];
        var foptions_A = [];
        var foptions_B = [];
        var foptions_C = [];
        var foptions_D = [];
        var fcorrect_Ans = [];
        var fcorrect_Ans_NO = [];
        var ffont_size_A = [];
        var ftheme_ = [];
        var fteam_ = [];
        var fround_ = [];


    <?php $floop1 = 0; ?>
    <?php foreach ($flip_['data_'] as $item) { ?>

            fquestions_[<?php echo $floop1; ?>] = "<?php echo $item->QUESTION; ?>";
            ffont_size_Q[<?php echo $floop1; ?>] = "<?php echo $item->FSFQ; ?>";
            foptions_A[<?php echo $floop1; ?>] = "<?php echo $item->A; ?>";
            foptions_B[<?php echo $floop1; ?>] = "<?php echo $item->B; ?>";
            foptions_C[<?php echo $floop1; ?>] = "<?php echo $item->C; ?>";
            foptions_D[<?php echo $floop1; ?>] = "<?php echo $item->D; ?>";
            ftheme_[<?php echo $floop1; ?>] = "<?php echo trim($item->THEME); ?>";
        <?php $i = $item->ANSWER; ?>
            fcorrect_Ans[<?php echo $floop1; ?>] = "<?php echo $item->$i; ?>";
            fcorrect_Ans_NO[<?php echo $floop1; ?>] = "<?php echo trim($item->ANSWER); ?>";
            ffont_size_A[<?php echo $floop1; ?>] = "<?php echo $item->FSFA; ?>";

        <?php $floop1++; ?>
    <?php } ?>
    </script>
    <!-- End of Javascript -->
<?php } else { ?>
    <div style="padding: 25px; text-align: center">
        <h3>No Flip Questions Found</h3>
        <a href="<?php echo site_url('quiz'); ?>"><button class="btn-danger">&lt;&lt; Home</button></a>
    </div>
<?php } ?>
    