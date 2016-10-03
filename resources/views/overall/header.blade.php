<!-- head -->
@extends('overall.head')
<!-- content -->
@section('app')
    <!-- MAIN 1 -->
    <div class="container-fluid" id="main1">
        <nav class="navbar navbar-default">
            <!-- MAIN 2 -->
            <div class="container-fluid" id="main2">
                <div class="row">

                    <div class="col-md-12" style="height: 100%;">
                        <div id="logo">
                            <a href="/">
                                <img src={{asset('img/mainlogo.jpg')}}>
                            </a>
                        </div>

                        <!-- TOGGLE -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">toggle</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a id="brand" class="navbar-brand hidden-lg hidden-md hidden-sm" href="/">Личные кабинеты</a>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <!-- МЕНЮ ДЛЯ РАЗЛИЧНЫХ РОЛЕЙ -->
                                @if (Auth::guest())
                                    @if (substr(Request::getPathInfo(),0,5) == '/bank')
                                        <li style="font-size: 13px;"><a href="{{ url('/bank/registerStud') }}">Регистрация ученика</a></li>
                                        <li style="font-size: 13px;"><a href="{{ url('/bank/registerCard') }}">Привязка карты</a></li>
                                        <li style="font-size: 13px;"><a href="{{ url('/bank/balanceGet') }}">Получить тек. баланс</a></li>
                                        <li style="font-size: 13px;"><a href="{{ url('/bank/transaction') }}">Транзакция</a></li>
                                        <li style="font-size: 13px;"><a href="{{ url('/bank/balanceListRecharges') }}">Получить список пополнений</a></li>
                                        <li style="font-size: 13px;"><a href="{{ url('/bank/balanceNotice') }}">Извещение о пополнении</a></li>
                                        <li style="font-size: 13px;"><a href="{{ url('/bank/balanceRecharge') }}">Создание заказа на оплату</a></li>
                                        <li style="font-size: 13px;"><a href="{{ url('/bank/statusRecharge') }}">Статус платежа по пополнению</a></li>
                                    @else
                                        <li id="first"><a href="/">Главная</a></li>
                                        <li><a href="{{ url('/aboutproject') }}">О проекте</a></li>
                                        <li><a href="#footer">Контакты</a></li>
                                    @endif
                                @elseif (Auth::user()->hasRole('qr'))

                                    <li></li>
                                    <li><a href="/qrs/qr">Главная</a></li>
                                    <li><a data-toggle="modal" data-target="#myModal" id="loginForm">Добавить</a></li>

                                @elseif (Auth::user()->hasRole('root'))

                                    <li></li>
                                    <li><a href="/roots/root">Главная</a></li>
                                    <li><a href="{{ url('/roots/schools') }}">Школы</a></li>

                                @elseif (Auth::user()->hasRole('admin'))

                                    <li></li>
                                    <li><a href="/admins/admin">Главная</a></li>
                                    <li><a href="/admins/requests">Мои запросы</a></li>
                                    <li><a data-toggle="modal" data-target="#myModal" id="loginForm">Зарегистрировать</a></li>
                                    <li><a href="#footer">Контакты</a></li>

                                @elseif (Auth::user()->hasRole('student'))
                                    <li><a href="#footer">Контакты</a></li>
                                @endif

                                <!-- ПРОВЕРКА НА АТВОРИЗАЦИЮ --ВОЙТИ-ВЫЙТИ -->
                                @if (Auth::guest())
                                    <li id="last"><a data-toggle="modal" data-target="#myModal" id="loginForm">Войти</a></li>
                                @else
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                            Выход
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                @endif

                            </ul>
                        </div>

                    </div>

                </div>
            </div>

        </nav>
    </div>

    @yield('content')
@endsection