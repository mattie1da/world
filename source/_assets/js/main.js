var $ = require("jquery");

var home = $('.home');
var colour = "data-id";

$('.theme').click(function() {
    $('.theme').removeClass('active');
    $(this).addClass('active');

    if (home.hasClass('home--dark')) {
        home.attr('class', 'home home--dark');
        home.toggleClass('home--' + $(this).attr(colour) + '');
        localStorage.setItem('colour', '' + $(this).attr(colour) + '');
    } else {
        home.attr('class', 'home');
        home.addClass('home--' + $(this).attr(colour) + '');
        localStorage.setItem('colour', '' + $(this).attr(colour) + '');
    }
});

$('.mode').click(function() {
    $('.mode').removeClass('active');
    $(this).addClass('active');

    if ($(this).hasClass('mode--light')) {
        home.removeClass('home--dark');
        localStorage.removeItem('mode');
    } else {
        home.addClass('home--' + $(this).attr(colour) + '');
        localStorage.setItem('mode', '' + $(this).attr(colour) + '');
    }
});

$(document).ready(function() {

    if (localStorage.getItem('colour') === null) {
        $('.theme--mint').click();
        $('.mode--light').click();

    } else if (localStorage.getItem('mode') == 'dark') {
        home.toggleClass('home home--' + localStorage.getItem('mode') + ' home--' + localStorage.getItem('colour') + '');
        $('.theme--' + localStorage.getItem('colour') + '').click();
        $('.mode--dark').click();

        // Turn off animation + transition when already selected dark mode
        home.css("-webkit-animation", "none");
        home.css("-moz-animation", "none");
        home.css("-ms-animation", "none");
        home.css("animation", "none");
        home.css("transition", "none");

    } else {
        home.addClass('home home--' + localStorage.getItem('colour') + '');
        $('.theme--' + localStorage.getItem('colour') + '').click();
        $('.mode--light').click();
    }
});
