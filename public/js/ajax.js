function register() {
    //token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var data = $('#reg_form').serializeArray();

    $.ajax({
        url: '/admins/add',
        type: 'POST',
        data: {_token: CSRF_TOKEN,
            'lastName' : data[1].value,
            'firstName' : data[2].value,
            'midName' : data[3].value,
            'card_number': data[4].value,
            'parallel': data[5].value,
            'classof': data[6].value
        },
        dataType: 'json',
        success: function (data) {

            if( data['parallel'] != undefined ){
                alert(data['parallel'])
            }else if(data['classof'] != undefined){
                alert(data['classof'])
            }else if(data['card_number'] != undefined){
                alert(data['card_number'])
            }else if(data['firstName'] != undefined){
                alert(data['firstName'])
            }else if(data['lastName'] != undefined){
                alert(data['lastName'])
            }else if(data['midName'] != undefined){
                alert(data['midName'])
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

function ajax(vars) {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var data = $(vars).text();
    $.ajax({
        url: '/admins/students',
        type: 'POST',
        data: {_token: CSRF_TOKEN,
            'class' : data
        },
        dataType: 'json',
        success: function (data) {

            if(vars.parentElement.parentElement.parentElement.id == 'class'){

                $('#students>ul').remove();
                for(i=0; i<data.length; i++){
                    $('#students').append('<ul><li><button data-toggle="modal" data-target="#editModal" id="loginForm">' +
                        ''+data[i].lastName+' '+data[i].firstName+' '+data[i].midName + '</button></li></ul>');
                }


            }else if(vars.parentElement.parentElement.parentElement.id == 'parallels'){

                $('#students>ul').remove();
                $('#class>ul').remove();
                $('#class').append('<ul><li><button onclick="ajax(this)">'+data[0].class+'</button></li></ul>');

            }

        },
        error: function () {
            alert('Сервер сейчас недоступен. Попробуйте позже.')
        }
    });
}