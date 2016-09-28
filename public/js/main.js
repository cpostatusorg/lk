$(document).ready(function ()
{

    if ($(window).width() <= 316) {
        $('#brand').text('ЛК')
    }
    else {
        $('#brand').text('Личные кабинеты')
    }

    if ($(window).width() <= 766) {
        $('.width_control').removeClass('col-xs-6 col-xs-offset-3');
    }else if($(window).width() > 767) {
        $('.width_control').addClass('col-xs-6 col-xs-offset-3');
    }

    if ($(window).width() <= 320) {
        $('.width_control').removeClass('col-xs-8 col-xs-offset-2').addClass('col-xs-12');
    }else if($(window).width() > 321) {
        $('.width_control').removeClass('col-xs-12').addClass('col-xs-8 col-xs-offset-2');
    }

});

$(window).resize(function ()
{

    if ($(window).width() <= 316) {
        $('#brand').text('ЛК')
    }
    else {
        $('#brand').text('Личные кабинеты')
    }

    if ($(window).width() <= 766) {
        $('.width_control').removeClass('col-xs-6 col-xs-offset-3');
    }else if($(window).width() > 767) {
        $('.width_control').addClass('col-xs-6 col-xs-offset-3');
    }

    if ($(window).width() <= 320) {
        $('.width_control').removeClass('col-xs-8 col-xs-offset-2').addClass('col-xs-12');
    }else if($(window).width() > 321) {
        $('.width_control').removeClass('col-xs-12').addClass('col-xs-8 col-xs-offset-2');
    }

});


