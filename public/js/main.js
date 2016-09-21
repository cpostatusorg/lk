$(document).ready(function ()
{

    if ($(window).width() <= 316) {
        $('#brand').text('ЛК')
    }
    else {
        $('#brand').text('Личные кабинеты')
    }

    if ($(window).width() <= 766) {
        $('#login_width').removeClass('col-xs-6 col-xs-offset-3');
        $('#pass_width').removeClass('col-xs-6 col-xs-offset-3');
        $('#remember_width').removeClass('col-xs-6 col-xs-offset-3');
        $('#sign_width').removeClass('col-xs-6 col-xs-offset-3');
    }
    else if($(window).width() > 767) {
        $('#login_width').addClass('col-xs-6 col-xs-offset-3');
        $('#pass_width').addClass('col-xs-6 col-xs-offset-3');
        $('#remember_width').addClass('col-xs-6 col-xs-offset-3');
        $('#sign_width').addClass('col-xs-6 col-xs-offset-3');
    }

    if ($(window).width() <= 320) {
        $('#login_width').removeClass('col-xs-8 col-xs-offset-2').addClass('col-xs-12');
        $('#pass_width').removeClass('col-xs-8 col-xs-offset-2').addClass('col-xs-12');
        $('#remember_width').removeClass('col-xs-8 col-xs-offset-2').addClass('col-xs-12');
        $('#sign_width').removeClass('col-xs-8 col-xs-offset-2').addClass('col-xs-12');
    }
    else if($(window).width() > 321) {
        $('#login_width').removeClass('col-xs-12').addClass('col-xs-8 col-xs-offset-2');
        $('#pass_width').removeClass('col-xs-12').addClass('col-xs-8 col-xs-offset-2');
        $('#remember_width').removeClass('col-xs-12').addClass('col-xs-8 col-xs-offset-2');
        $('#sign_width').removeClass('col-xs-12').addClass('col-xs-8 col-xs-offset-2');
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
        $('#login_width').removeClass('col-xs-6 col-xs-offset-3');
        $('#pass_width').removeClass('col-xs-6 col-xs-offset-3');
        $('#remember_width').removeClass('col-xs-6 col-xs-offset-3');
        $('#sign_width').removeClass('col-xs-6 col-xs-offset-3');
    }
    else if($(window).width() > 767) {
        $('#login_width').addClass('col-xs-6 col-xs-offset-3');
        $('#pass_width').addClass('col-xs-6 col-xs-offset-3');
        $('#remember_width').addClass('col-xs-6 col-xs-offset-3');
        $('#sign_width').addClass('col-xs-6 col-xs-offset-3');
    }

    if ($(window).width() <= 320) {
        $('#login_width').removeClass('col-xs-8 col-xs-offset-2').addClass('col-xs-12');
        $('#pass_width').removeClass('col-xs-8 col-xs-offset-2').addClass('col-xs-12');
        $('#remember_width').removeClass('col-xs-8 col-xs-offset-2').addClass('col-xs-12');
        $('#sign_width').removeClass('col-xs-8 col-xs-offset-2').addClass('col-xs-12');
    }
    else if($(window).width() > 321) {
        $('#login_width').removeClass('col-xs-12').addClass('col-xs-8 col-xs-offset-2');
        $('#pass_width').removeClass('col-xs-12').addClass('col-xs-8 col-xs-offset-2');
        $('#remember_width').removeClass('col-xs-12').addClass('col-xs-8 col-xs-offset-2');
        $('#sign_width').removeClass('col-xs-12').addClass('col-xs-8 col-xs-offset-2');
    }

});
