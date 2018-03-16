
$('#teamare').transition({y: '20px'});

$('#_1').transition({x: '-1370px', delay: 100});
$('#_2').transition({x: '-1370px', delay: 300});
$('#_3').transition({x: '-1370px', delay: 500});
$('#_4').transition({x: '-1370px', delay: 700});
$('#_5').transition({x: '-1370px', delay: 900});
$('#_6').transition({x: '-1370px', delay: 1100});


$('#WProunds').children().mouseenter(function () {
    $(this).transition({x: 30});
});
$('#WProunds').children().mouseleave(function () {
    $(this).transition({x: 0});
});

$('#allTeams_').click(function () {
    $('#allTeams').show();
    $('#allTeams').delay(100).fadeIn(1000);
});

$('#closeTeam').click(function () {
    $('#allTeams').hide();
});