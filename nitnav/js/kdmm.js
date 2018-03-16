$(document).ready(
        function () {
            $('#news').innerfade({
                animationtype: 'slide',
                speed: 2000,
                timeout: 10000,
                type: 'random',
                containerheight: '1em'
            });


            $('#enter').mouseenter(function () {
                $('#enter').transition({scale: 1.2});
            });

            $('#enter').mouseleave(function () {
                $('#enter').transition({scale: 1});
            });

            $('#quiz').mouseenter(function () {
                $('#quiz').transition({scale: 1.2});
            });

            $('#quiz').mouseleave(function () {
                $('#quiz').transition({scale: 1});
            });

            $('#wordpower').mouseenter(function () {
                $('#wordpower').transition({scale: 1.2});
            });

            $('#wordpower').mouseleave(function () {
                $('#wordpower').transition({scale: 1});
            });

            $('#3min').mouseenter(function () {
                $('#3min').transition({scale: 1.2});
            });

            $('#3min').mouseleave(function () {
                $('#3min').transition({scale: 1});
            });

            $('#prize').mouseenter(function () {
                $('#prize').transition({scale: 1.2});
            });

            $('#prize').mouseleave(function () {
                $('#prize').transition({scale: 1});
            });

            $('#quest').transition({x: '100px'});
            $('#quest').transition({scale: 1.2, delay: 100});
            $('#quest').transition({scale: 1, delay: 100});
            $('#quest').transition({scale: 1});
            
            $('#wp').transition({x: '250'});
            $('#wp').transition({scale: 1.2, delay: 100});
            $('#wp').transition({scale: 1, delay: 100});
            $('#wp').transition({scale: 1});
            
            $('.team').transition({y: 70});
            $('.r2').transition({y: 140});
            $('.r3').transition({y: 210});
            $('.r4').transition({y: 280});
            $('.r5').transition({y: 350});
            $('.r6').transition({y: 420});
            $('.r8').transition({y: 490});
            $('.r7').transition({y: 560});

            $('.genRules').transition({opacity: 0});
            $('.genRules').transition({x: -1000});

            $('.Rules1').transition({opacity: 0});
            $('.Rules1').transition({x: -1000});

            $('.Rules2').transition({opacity: 0});
            $('.Rules2').transition({x: -1000});

            $('.Rules3').transition({opacity: 0});
            $('.Rules3').transition({x: -1000});

            $('.Rules4').transition({opacity: 0});
            $('.Rules4').transition({x: -1000});

            $('.Rules5').transition({opacity: 0});
            $('.Rules5').transition({x: -1000});

            $('.Rules6').transition({opacity: 0});
            $('.Rules6').transition({x: -1000});

            $('.score').transition({opacity: 0});
            $('.score').transition({x: -1000});

            $('.teams').transition({opacity: 0});
            $('.teams').transition({x: -1000});

            $('.back').click(function () {
                $('.genRules').transition({opacity: 0});
                $('.genRules').transition({x: -1000});

                $('.Rules1').transition({opacity: 0});
                $('.Rules1').transition({x: -1000});

                $('.Rules2').transition({opacity: 0});
                $('.Rules2').transition({x: -1000});

                $('.Rules3').transition({opacity: 0});
                $('.Rules3').transition({x: -1000});

                $('.Rules4').transition({opacity: 0});
                $('.Rules4').transition({x: -1000});

                $('.Rules5').transition({opacity: 0});
                $('.Rules5').transition({x: -1000});

                $('.Rules6').transition({opacity: 0});
                $('.Rules6').transition({x: -1000});

                $('.score').transition({opacity: 0});
                $('.score').transition({x: -1000});

                $('.teams').transition({opacity: 0});
                $('.teams').transition({x: -1000});
            });

            $('.r1').click(function () {
                $('.genRules').delay(100).fadeIn(100);
                $('.genRules').transition({opacity: 1});
                $('.genRules').transition({x: 0});

                $('.Rules1').transition({opacity: 0});
                $('.Rules1').transition({x: -1000});

                $('.Rules2').transition({opacity: 0});
                $('.Rules2').transition({x: -1000});

                $('.Rules3').transition({opacity: 0});
                $('.Rules3').transition({x: -1000});

                $('.Rules4').transition({opacity: 0});
                $('.Rules4').transition({x: -1000});

                $('.Rules5').transition({opacity: 0});
                $('.Rules5').transition({x: -1000});

                $('.Rules6').transition({opacity: 0});
                $('.Rules6').transition({x: -1000});

                $('.score').transition({opacity: 0});
                $('.score').transition({x: -1000});

                $('.teams').transition({opacity: 0});
                $('.teams').transition({x: -1000});
            });

            $('.r2').click(function () {
                $('.genRules').transition({opacity: 0});
                $('.genRules').transition({x: -1000});

                $('.Rules1').delay(100).fadeIn(100);
                $('.Rules1').transition({opacity: 1});
                $('.Rules1').transition({x: 0});

                $('.Rules2').transition({opacity: 0});
                $('.Rules2').transition({x: -1000});

                $('.Rules3').transition({opacity: 0});
                $('.Rules3').transition({x: -1000});

                $('.Rules4').transition({opacity: 0});
                $('.Rules4').transition({x: -1000});

                $('.Rules5').transition({opacity: 0});
                $('.Rules5').transition({x: -1000});

                $('.Rules6').transition({opacity: 0});
                $('.Rules6').transition({x: -1000});

                $('.score').transition({opacity: 0});
                $('.score').transition({x: -1000});

                $('.teams').transition({opacity: 0});
                $('.teams').transition({x: -1000});
            });

            $('.r3').click(function () {
                $('.genRules').transition({opacity: 0});
                $('.genRules').transition({x: -1000});

                $('.Rules1').transition({opacity: 0});
                $('.Rules1').transition({x: -1000});

                $('.Rules2').delay(100).fadeIn(100);
                $('.Rules2').transition({opacity: 1});
                $('.Rules2').transition({x: 0});

                $('.Rules3').transition({opacity: 0});
                $('.Rules3').transition({x: -1000});

                $('.Rules4').transition({opacity: 0});
                $('.Rules4').transition({x: -1000});

                $('.Rules5').transition({opacity: 0});
                $('.Rules5').transition({x: -1000});

                $('.Rules6').transition({opacity: 0});
                $('.Rules6').transition({x: -1000});

                $('.score').transition({opacity: 0});
                $('.score').transition({x: -1000});

                $('.teams').transition({opacity: 0});
                $('.teams').transition({x: -1000});
            });

            $('.r4').click(function () {
                $('.genRules').transition({opacity: 0});
                $('.genRules').transition({x: -1000});

                $('.Rules1').transition({opacity: 0});
                $('.Rules1').transition({x: -1000});

                $('.Rules2').transition({opacity: 0});
                $('.Rules2').transition({x: -1000});

                $('.Rules3').delay(100).fadeIn(100);
                $('.Rules3').transition({opacity: 1});
                $('.Rules3').transition({x: 0});

                $('.Rules4').transition({opacity: 0});
                $('.Rules4').transition({x: -1000});

                $('.Rules5').transition({opacity: 0});
                $('.Rules5').transition({x: -1000});

                $('.Rules6').transition({opacity: 0});
                $('.Rules6').transition({x: -1000});

                $('.score').transition({opacity: 0});
                $('.score').transition({x: -1000});

                $('.teams').transition({opacity: 0});
                $('.teams').transition({x: -1000});
            });

            $('.r5').click(function () {
                $('.genRules').transition({opacity: 0});
                $('.genRules').transition({x: -1000});

                $('.Rules1').transition({opacity: 0});
                $('.Rules1').transition({x: -1000});

                $('.Rules2').transition({opacity: 0});
                $('.Rules2').transition({x: -1000});

                $('.Rules3').transition({opacity: 0});
                $('.Rules3').transition({x: -1000});

                $('.Rules4').delay(100).fadeIn(100);
                $('.Rules4').transition({opacity: 1});
                $('.Rules4').transition({x: 0});

                $('.Rules5').transition({opacity: 0});
                $('.Rules5').transition({x: -1000});

                $('.Rules6').transition({opacity: 0});
                $('.Rules6').transition({x: -1000});

                $('.score').transition({opacity: 0});
                $('.score').transition({x: -1000});

                $('.teams').transition({opacity: 0});
                $('.teams').transition({x: -1000});
            });

            $('.r6').click(function () {
                $('.genRules').transition({opacity: 0});
                $('.genRules').transition({x: -1000});

                $('.Rules1').transition({opacity: 0});
                $('.Rules1').transition({x: -1000});

                $('.Rules2').transition({opacity: 0});
                $('.Rules2').transition({x: -1000});

                $('.Rules3').transition({opacity: 0});
                $('.Rules3').transition({x: -1000});

                $('.Rules4').transition({opacity: 0});
                $('.Rules4').transition({x: -1000});

                $('.Rules5').delay(100).fadeIn(100);
                $('.Rules5').transition({opacity: 1});
                $('.Rules5').transition({x: 0});

                $('.Rules6').transition({opacity: 0});
                $('.Rules6').transition({x: -1000});

                $('.score').transition({opacity: 0});
                $('.score').transition({x: -1000});

                $('.teams').transition({opacity: 0});
                $('.teams').transition({x: -1000});
            });

            $('.r7').click(function () {
                $('.genRules').transition({opacity: 0});
                $('.genRules').transition({x: -1000});

                $('.Rules1').transition({opacity: 0});
                $('.Rules1').transition({x: -1000});

                $('.Rules2').transition({opacity: 0});
                $('.Rules2').transition({x: -1000});

                $('.Rules3').transition({opacity: 0});
                $('.Rules3').transition({x: -1000});

                $('.Rules4').transition({opacity: 0});
                $('.Rules4').transition({x: -1000});

                $('.Rules5').transition({opacity: 0});
                $('.Rules5').transition({x: -1000});

                $('.Rules6').transition({opacity: 0});
                $('.Rules6').transition({x: -1000});

                $('.score').delay(100).fadeIn(100);
                $('.score').transition({opacity: 1});
                $('.score').transition({x: 0});

                $('.teams').transition({opacity: 0});
                $('.teams').transition({x: -1000});
            });

            $('.r8').click(function () {
                $('.genRules').transition({opacity: 0});
                $('.genRules').transition({x: -1000});

                $('.Rules1').transition({opacity: 0});
                $('.Rules1').transition({x: -1000});

                $('.Rules2').transition({opacity: 0});
                $('.Rules2').transition({x: -1000});

                $('.Rules3').transition({opacity: 0});
                $('.Rules3').transition({x: -1000});

                $('.Rules4').transition({opacity: 0});
                $('.Rules4').transition({x: -1000});

                $('.Rules5').transition({opacity: 0});
                $('.Rules5').transition({x: -1000});

                $('.Rules6').delay(100).fadeIn(100);
                $('.Rules6').transition({opacity: 1});
                $('.Rules6').transition({x: 0});

                $('.score').transition({opacity: 0});
                $('.score').transition({x: -1000});

                $('.teams').transition({opacity: 0});
                $('.teams').transition({x: -1000});
            });

            $('.team').click(function () {
                $('.genRules').transition({opacity: 0});
                $('.genRules').transition({x: -1000});

                $('.Rules1').transition({opacity: 0});
                $('.Rules1').transition({x: -1000});

                $('.Rules2').transition({opacity: 0});
                $('.Rules2').transition({x: -1000});

                $('.Rules3').transition({opacity: 0});
                $('.Rules3').transition({x: -1000});

                $('.Rules4').transition({opacity: 0});
                $('.Rules4').transition({x: -1000});

                $('.Rules5').transition({opacity: 0});
                $('.Rules5').transition({x: -1000});

                $('.Rules6').transition({opacity: 0});
                $('.Rules6').transition({x: -1000});

                $('.score').transition({opacity: 0});
                $('.score').transition({x: -1000});

                $('.teams').delay(100).fadeIn(100);
                $('.teams').transition({opacity: 1});
                $('.teams').transition({x: 0});
            });


            $('.r1').mouseenter(function () {
                $('.r1').transition({x: -80});
            });

            $('.r1').mouseleave(function () {
                $('.r1').transition({x: 0});
            });

            $('.r2').mouseenter(function () {
                $('.r2').transition({x: -80});
            });

            $('.r2').mouseleave(function () {
                $('.r2').transition({x: 0});
            });

            $('.r3').mouseenter(function () {
                $('.r3').transition({x: -80});
            });

            $('.r3').mouseleave(function () {
                $('.r3').transition({x: 0});
            });

            $('.r4').mouseenter(function () {
                $('.r4').transition({x: -80});
            });

            $('.r4').mouseleave(function () {
                $('.r4').transition({x: 0});
            });

            $('.r5').mouseenter(function () {
                $('.r5').transition({x: -80});
            });

            $('.r5').mouseleave(function () {
                $('.r5').transition({x: 0});
            });

            $('.r6').mouseenter(function () {
                $('.r6').transition({x: -80});
            });

            $('.r6').mouseleave(function () {
                $('.r6').transition({x: 0});
            });

            $('.r7').mouseenter(function () {
                $('.r7').transition({x: -80});
            });

            $('.r7').mouseleave(function () {
                $('.r7').transition({x: 0});
            });

            $('.r8').mouseenter(function () {
                $('.r8').transition({x: -80});
            });

            $('.r8').mouseleave(function () {
                $('.r8').transition({x: 0});
            });

            $('.team').mouseenter(function () {
                $('.team').transition({x: -80});
            });

            $('.team').mouseleave(function () {
                $('.team').transition({x: 0});
            });

            $('.pic1').mouseenter(function () {
                $('.pic1').transition({scale: .7});
                $('.pic1').transition({rotate: '45deg'});
            });

            $('.pic1').mouseleave(function () {
                $('.pic1').transition({rotate: '0deg'});
                $('.pic1').transition({scale: 1});
            });

            $('.pic2').mouseenter(function () {
                $('.pic2').transition({scale: .7});
                $('.pic2').transition({rotate: '45deg'});
            });

            $('.pic2').mouseleave(function () {
                $('.pic2').transition({rotate: '0deg'});
                $('.pic2').transition({scale: 1});
            });

            $('.pic3').mouseenter(function () {
                $('.pic3').transition({scale: .7});
                $('.pic3').transition({rotate: '45deg'});
            });

            $('.pic3').mouseleave(function () {
                $('.pic3').transition({rotate: '0deg'});
                $('.pic3').transition({scale: 1});
            });

            $('.pic4').mouseenter(function () {
                $('.pic4').transition({scale: .7});
                $('.pic4').transition({rotate: '45deg'});
            });

            $('.pic4').mouseleave(function () {
                $('.pic4').transition({rotate: '0deg'});
                $('.pic4').transition({scale: 1});
            });

            $('.pic5').mouseenter(function () {
                $('.pic5').transition({scale: .7});
                $('.pic5').transition({rotate: '45deg'});
            });

            $('.pic5').mouseleave(function () {
                $('.pic5').transition({rotate: '0deg'});
                $('.pic5').transition({scale: 1});
            });

            $('.pic6').mouseenter(function () {
                $('.pic6').transition({scale: .7});
                $('.pic6').transition({rotate: '45deg'});
            });

            $('.pic6').mouseleave(function () {
                $('.pic6').transition({rotate: '0deg'});
                $('.pic6').transition({scale: 1});
            });

            $('.pic7').mouseenter(function () {
                $('.pic7').transition({scale: .7});
                $('.pic7').transition({rotate: '45deg'});
            });

            $('.pic7').mouseleave(function () {
                $('.pic7').transition({rotate: '0deg'});
                $('.pic7').transition({scale: 1});
            });

            $('.pic8').mouseenter(function () {
                $('.pic8').transition({scale: .7});
                $('.pic8').transition({rotate: '45deg'});
            });

            $('.pic8').mouseleave(function () {
                $('.pic8').transition({rotate: '0deg'});
                $('.pic8').transition({scale: 1});
            });

        });