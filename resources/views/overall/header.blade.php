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
                                <li id="first"><a href="/">Главная</a></li>
                                <li><a href="{{ url('/aboutproject') }}">О проекте</a></li>
                                <li><a href="#footer">Контакты</a></li>
                                <li id="last"><a data-toggle="modal" data-target="#myModal" id="loginForm">Войти</a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>

        </nav>
    </div>

    @yield('content')
@endsection