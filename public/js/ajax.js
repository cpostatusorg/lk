function call() {
    //token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var data = $('form').serializeArray();

    $.ajax({
        url: '/admins/add',
        type: 'POST',
        data: {_token: CSRF_TOKEN,
            'fio' : data[2].value,
            'card_number': data[3].value,
            'parallel': data[4].value,
            'classof': data[5].value
        },
        dataType: 'json',
        success: function (data) {

            console.log(data);
            if( data['parallel'] != undefined ){
                alert(data['parallel'])
            }else if(data['classof'] != undefined){
                alert(data['classof'])
            }else if(data['card_number'] != undefined){
                alert(data['card_number'])
            }else if(data['fio'] != undefined){
                alert(data['fio'])
            }else if(data == 'class'){
                alert('Класс не подходит');
            }else if(data == 'parallels'){
                alert('Параллель не подходит');
            }else if(data['error'] != undefined){
                if(data['error'] == 0){
                    alert(data['text']);
                    $('#loginForm').trigger('click');
                }else{
                    alert(data['text']);
                }

            }

        },
        error: function () {
            alert('Сервер сейчас недоступен. Попробуйте позже.')
        }
    });
}

function ajax(d) {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var data = $(d).text();
    $.ajax({
        url: '/admins/students',
        type: 'POST',
        data: {_token: CSRF_TOKEN,
            'class' : data
        },
        dataType: 'json',
        success: function (data) {
            console.log(event.currentTarget);

            if(d.parentElement.parentElement.parentElement.id == 'class'){
                $('#students>ul').remove();
                $('#students').append('<ul><li><button>'+data[0].fio+'</button></li></ul>');
            }else if(d.parentElement.parentElement.parentElement.id == 'parallels'){
                $('#class>ul').remove();
                $('#students>ul').remove();
                $('#class').append('<ul><li><button onclick="ajax(this)">'+data[0].class+'</button></li></ul>');
            }

        },
        error: function () {
            alert('Сервер сейчас недоступен. Попробуйте позже.')
        }
    });
}