<?php if ($teams['res_'] == TRUE) { ?>
    <script type="text/javascript">
        var nextCounter = 0;
        var teamName_ = [];
    <?php $loop1 = 0; ?>
    <?php foreach ($teams['data_'] as $item) { ?>
            teamName_[<?php echo $loop1; ?>] = "<?php echo $item->NAME_; ?>";
        <?php $loop1++; ?>
    <?php } ?>

        $('#teamName_').html(teamName_[nextCounter]);
        var rapidScore = 0;
        var QNo = 0;
        var previous = 0;
        var clickCount = 0;

        $('#scoreDisplay').html(rapidScore);
        $('#question_no_').html(QNo);
        clearTimer();

        $('#next_team').click(function () {
            ++nextCounter;
            stopCount();
            clearTimer();
            $('#teamName_').html(teamName_[nextCounter]);
            resetState();
        });

        $("input:radio[name=ans]").click(function () {
            reloadPrevious();
            var value = $(this).val();
            if (value == 'true') {
                rapidScore = rapidScore + 10;
                $(this).parent().parent().css("background-color", "#5cb85c");
                $(this).parent().find(':input').prop('disabled', true);
            } else if (value == 'false') {
                rapidScore = rapidScore - 5;
                $(this).parent().parent().css("background-color", "#E13300");
                $(this).parent().find(':input').prop('disabled', true);
            } else {
                rapidScore = rapidScore;
                $(this).parent().parent().css("background-color", "#007eff");
                $(this).parent().find(':input').prop('disabled', true);
            }
            $(this).parent().find('input[type="button"]').prop('disabled', false);
            $('#scoreDisplay').html(rapidScore);
            //$('#question_no_').html(++QNo);
        });

        function reloadPrevious()
        {
            previous = rapidScore;
        }

        $("input:button[name=reQ]").click(function () {
            rapidScore = previous;
            $('#scoreDisplay').html(rapidScore);
            $(this).parent().parent().css("background-color", "#D0D0D0");
            $(this).parent().find(':input').prop('disabled', false);
            $(this).parent().find(':input').attr('checked', false);
        });

        function resetState() {
            rapidScore = 0;
            QNo = 0;
            stopCount();
            clearTimer();
            $('#scoreDisplay').html(rapidScore);
            $('#question_no_').html(QNo);
            for (loop = 1; loop <= 16; loop++) {
                jQuery("#rapid" + loop).find(':input').attr('disabled', false);
                jQuery("#rapid" + loop).find(':input').attr('checked', false);
                $("#rapid" + loop).css("background-color", "#D0D0D0");
            }
        }

        //timer----------------------
        var c = <?PHP echo $timer; ?>;
        var t;
        var audioPlay = new Audio(BASE_URL + 'nitnav/audio/single2.mp3');
        var audioStop = new Audio(BASE_URL + 'nitnav/audio/LAST.mp3');
        function timedCount()
        {
            if (c > 0) {
                document.getElementById('demo').innerHTML = c;
                c = c - 1;
                t = setTimeout("timedCount()", 1000);
                audioPlay.play();
            } else {
                document.getElementById('demo').innerHTML = 0;
                audioStop.play();
            }
        }
        function stopCount()
        {
            clearTimeout(t);
        }
        function clearTimer()
        {
            document.getElementById('demo').innerHTML = "<img src='<?PHP echo base_url() . 'nitnav/img/timer.png'; ?>' width='60%' height='60%' style='margin-top:-20px;'>";
            c = <?PHP echo $timer; ?>;
        }
    //--------Timer------------------------------------------------
    </script>
<?php } ?>