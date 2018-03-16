var options = {
    prices: [
        {
            name: '05'
        },
        {
            name: '15'
        },
        {
            name: '10'
        },
        {
            name: '20'
        },
        {
            name: '05'
        },
        {
            name: '15'
        },
        {
            name: '10'
        },
        {
            name: '20'
        }
    ],
    duration: 19000,
    clockWise: true
};

var $r = $('.roulette').fortune(options);
var audioPlay1 = new Audio(BASE_URL + 'nitnav/wheel/wheelAudio.mp3');

var audioStop = new Audio(BASE_URL + 'nitnav/audio/LAST.mp3');

var clickHandler = function () {
    $('.spinner').off('click');
    audioPlay1.play();
    $('.spinner span').hide();

    $r.spin().done(function (price) {
        $('.priceT').text(price.name);
        audioStop.play();          
        for (i = 1; i <= 3; i++) {
            $('.price').fadeIn(100);
            $('.price').fadeOut(100);
            $('.price').fadeIn(100);
        }
        audioStop.play();
        $('.spinner').on('click', clickHandler);
        $('.spinner span').show();
    });
};

$('.spinner').on('click', clickHandler);