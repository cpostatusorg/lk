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


function register2() {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var formData = JSON.stringify($("#reg_form").serializeArray());
    var formData2 = "12312=123123&dadwad=1231231";
    var data2 = "2312:123123";
    $.ajax({
        url: '/poste',
        type: 'POST',
        dataType: 'text',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data:  data2,

        success: function (data) { alert(1) },
        error: function (data) { alert(2) }
    });


}