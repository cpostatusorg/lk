@extends('overall.head')

@section('app')

<div class="container-fluid" id="main">
    <div class="container" id="main_normal">
        <nav class="navbar navbar-default navbar-fixed-top">

            <div class="container" id="main_header">
                <!-- TOGGLE -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">toggle</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <a class="navbar-brand hidden-lg hidden-md hidden-sm" href="#">Личные кабинеты</a>
                </div>
                <!-- MENU -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li id="first"><a href="/">Личные кабинеты</a></li>
                        <li><a href="{{ url('/aboutus') }}">О проекте</a></li>
                        <li><a href="{{ url('/contacts') }}">Контакты</a></li>
                        <li id="last"><a href="{{ url('/login') }}">Вход</a></li>
                    </ul>
                </div>

            </div>

        </nav>
    </div>

</div>
<!--
<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Бургер навигация</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            @if (Auth::guest())
                <a class="navbar-brand" href="/">Личные кабинеты для питания</a>
            @else
                <ul class="nav navbar-nav navbar-left">
                    @if(Auth::user()->hasRole('student'))
                        <a href="{{ url('/students/student') }}"><li class="navbar-brand">Добро пожаловать в личный кабинет</li></a>
                    @elseif(Auth::user()->hasRole('admin'))
                        <a href="{{ url('/admins/admin') }}"><li class="navbar-brand">Добро пожаловать в личный кабинет</li></a>
                    @elseif(Auth::user()->hasRole('root'))
                        <a href="{{ url('/roots/root') }}"><li class="navbar-brand">Добро пожаловать в личный кабинет</li></a>
                    @endif
                </ul>
            @endif
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Войти</a></li>
                    <li><a href="{{ url('/aboutus') }}">О нас</a></li>
                @else
                    <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                @if(Auth::user()->hasRole('student'))
                                    <a href="{{ url('/students/options') }}">Настройки</a>
                                @endif
                            </li>
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
                        </ul>

                    </li>
                @endif

            </ul>
        </div>
    </div>
</nav>
-->
@yield('content')

@endsection


<div class="container" id="project">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">О проекте</div>
            <div class="panel-body">
                Описание
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <img src={{asset('img/mainlogo.jpg')}} class="img-responsive" alt="Responsive image">
                <div class="caption">
                    <h3>Заголовок...</h3>
                    <p>Контент...</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <img src={{asset('img/mainlogo.jpg')}} class="img-responsive" alt="Responsive image">
                <div class="caption">
                    <h3>Заголовок...</h3>
                    <p>Контент...</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <img src={{asset('img/mainlogo.jpg')}} class="img-responsive" alt="Responsive image">
                <div class="caption">
                    <h3>Заголовок...</h3>
                    <p>Контент...</p>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Участники проекта</div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail">
                <img src={{asset('img/mainlogo.jpg')}} class="img-responsive" alt="Responsive image">
                <div class="caption">
                    <h3>Заголовок...</h3>
                    <p>Контент...</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <img src={{asset('img/mainlogo.jpg')}} class="img-responsive" alt="Responsive image">
                <div class="caption">
                    <h3>Заголовок...</h3>
                    <p>Контент...</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <img src={{asset('img/mainlogo.jpg')}} class="img-responsive" alt="Responsive image">
                <div class="caption">
                    <h3>Заголовок...</h3>
                    <p>Контент...</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12" id="logo_img"><img class="center-block" src={{asset('img/mainlogo.jpg')}} class="img-responsive"></div>
</div>