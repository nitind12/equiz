<script type="text/javascript">
    // Nitin
    $('#wall_fade_me').fadeIn({});
    $('#wall_fade_me').transition({x: '45', delay: 50});
    $('#wall_fade_me').transition({x: '0'});

    $('#wpr1').transition({x: '30', delay: 100});
    $('#wpr1').transition({x: '0'});
    $('#wpr2').transition({x: '30', delay: 200});
    $('#wpr2').transition({x: '0'});
    $('#wpr3').transition({x: '30', delay: 300});
    $('#wpr3').transition({x: '0'});
    $('#wpr4').transition({x: '30', delay: 400});
    $('#wpr4').transition({x: '0'});
    $('#wpr5').transition({x: '30', delay: 500});
    $('#wpr5').transition({x: '0'});
    $('#wpr6').transition({x: '30', delay: 600});
    $('#wpr6').transition({x: '0'});
    $('#wpr7').transition({x: '30', delay: 700});
    $('#wpr7').transition({x: '0'});

    $('#wall_fade_me').mouseover(function () {
        $(this).fadeIn({});
        $(this).transition({x: '45', delay: 50});
        $(this).transition({x: '0'});
        for (i = 1; i <= 7; i++) {
            $('#wpr' + i).transition({x: '30', delay: 100 * i});
            $('#wpr' + i).transition({x: '0'});
        }
    });

    $('#wp_').transition({x: '45'});
    $('#wp_').transition({scale: 1.2, delay: 100});
    $('#wp_').transition({scale: 1, delay: 100});
    $('#wp_').transition({scale: 1});
    
    $('#grule_btn').click(function(){
       $('#general_rules').fadeIn(400); 
    });
    
    $('#close_grule_btn').click(function(){
        $('#general_rules').fadeOut(400); 
    });
    // Nitin completes
    
    $('.rw').click(function () {
        $('.score').delay(100).fadeIn(100);
        $('.score').transition({opacity: 1});
        $('.score').transition({x: 160});
    });
</script>