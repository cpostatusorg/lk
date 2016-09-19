$(document).ready(function ()
{
    if ($(window).width() <= 316) {
        $('#brand').text('ЛК')
    }
    else {
        $('#brand').text('Личные кабинеты')
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
})