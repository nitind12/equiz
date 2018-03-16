<!-- JavaScript here -->
<?php if ($flip_['res_'] == TRUE) { ?>
    <script type="text/javascript">
        var fglobal_Count = 0;
        var fteamCounter = -1;
        var fnextCounter = 0;
        var fcorrAns;
        var ftotalCount = <?php echo $ftot_count; ?>;
        var fquestions_ = [];
        var ffont_size_Q = [];
        var fcorrect_Ans = [];
        var ffont_size_A = [];
        var ftheme_ = [];
        var fteam_ = [];
        var fround_ = [];


    <?php $floop1 = 0; ?>
    <?php foreach ($flip_['data_'] as $item) { ?>

            fquestions_[<?php echo $floop1; ?>] = "<?php echo $item->QUESTION; ?>";
            ffont_size_Q[<?php echo $floop1; ?>] = "<?php echo $item->FSFQ; ?>";
            fcorrect_Ans[<?php echo $floop1; ?>] = "<?php echo trim($item->ANSWER); ?>";
            ffont_size_A[<?php echo $floop1; ?>] = "<?php echo $item->FSFA; ?>";
            fteam_[<?php echo $floop1; ?>] = "<?php echo $item->TID; ?>";

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
    