
@if( url()->current() == 'http://localhost/student/options' )
    <title>Настройки ЛК</title>
@elseif( url()->current() == 'http://localhost/student' )
    <title>Личный кабинет</title>
@elseif( url()->current() == 'http://localhost' )
    <title>Добро пожаловать в ЛК</title>
@elseif( url()->current() == 'http://localhost/login' )
    <title>Авторизация в ЛК</title>
@elseif( url()->current() == 'http://localhost/admins/admin' )
    <title>Панель администратора</title>
@elseif( url()->current() == 'http://localhost/roots/root' )
    <title>Панель разработчика</title>
@elseif( url()->current() == 'http://localhost/students/student' )
    <title>Панель ученика</title>
@endif
