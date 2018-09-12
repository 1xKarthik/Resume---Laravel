// require('./bootstrap');

// window.Vue = require('vue');

window.$ = window.jQuery = require('jquery');

$('ul#skills').addClass('ready');
$('ul#skills li').each(function () {
    let i = $(this).index();
    $(this).delay(100 * i).animate({right: "0%"}, 1000, function () {
        $(this).children('span').fadeIn(600);
    });
});
