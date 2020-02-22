var $ = require("jquery");

$('.theme').click(function() {
    $home = $(this).parents('.home');
    $theme = $(this).attr("data-id");

    $('.theme').removeClass('active');

    if ($home.hasClass('home--dark')) {
        $home.attr('class', 'home home--dark');
        $home.toggleClass('home--' + $theme + '');
    } else {
        $home.attr('class', 'home');
        $home.addClass('home--' + $theme + '');
    }

    if (!$(this).hasClass('active')) {
        $(this).addClass('active');
    }
});

$('.mode').click(function() {
    $home = $(this).parents('.home');
    $theme = $(this).attr("data-id");

    if ($(this).hasClass('mode--light')) {
        $home.removeClass('home--dark');
    } else {
        $home.addClass('home--' + $theme + '');
    }
});