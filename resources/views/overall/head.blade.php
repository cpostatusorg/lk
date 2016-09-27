<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title -->
            @include('overall.title')

        <!-- CSS -->
            <!-- Bootstrap -->
            <link href="http://localhost/css/bootstrap/bootstrap.min.css" rel="stylesheet">
            <!-- CSS OVERALL -->
            <link href="http://localhost/css/overall/header.css" rel="stylesheet">
            <!-- CSS MEDIA -->
            <link href="http://localhost/css/media/media_w.css" rel="stylesheet">

            @if (Auth::guest())
                <link href="http://localhost/css/guest/welcome.css" rel="stylesheet">
                <link href="http://localhost/css/guest/login.css" rel="stylesheet">
            @elseif (Auth::user()->hasRole('qr'))
                <link href="http://localhost/css/qr/qr.css" rel="stylesheet">
                <link href="http://localhost/css/qr/add.css" rel="stylesheet">
            @elseif (Auth::user()->hasRole('root'))
                <link href="http://localhost/css/root/root_school.css" rel="stylesheet">
            @elseif (Auth::user()->hasRole('admin'))

            @elseif (Auth::user()->hasRole('student'))

            @endif

        <!-- Scripts -->
            <script src="http://localhost/js/jquery.min.js"></script>
            <script src="http://localhost/js/bootstrap.min.js"></script>
            <script src="/js/main.js"></script>
            <script src="/js/queryloader2.min.js"></script>
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

        <!-- FONT -->
            <link rel="stylesheet" href="http://localhost/css/font-awesome-4.6.3/css/font-awesome.min.css">

        <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <script>
                window.Laravel = '<?php echo json_encode([
                        'csrfToken' => csrf_token(),
                ]); ?>'
            </script>
    </head>
    <body>
        <!-- HEADER -->
        @yield('app')

        @if (Auth::guest())
            @include('guest.login')
            @include('overall.footer')
        @elseif (Auth::user()->hasRole('qr'))
            @include('qrs.add')
        @elseif (Auth::user()->hasRole('root'))
            @include('overall.footer')
        @elseif (Auth::user()->hasRole('admin'))
            @include('admins.add')
            @include('overall.footer')
        @elseif (Auth::user()->hasRole('student'))
            @include('overall.footer')
        @endif

        <!-- Прелоадер -->
        <script type="text/javascript">
            window.addEventListener('DOMContentLoaded', function() {
                new QueryLoader2(document.querySelector("body"), {
                    barColor: '#7FB6D9',
                    backgroundColor: "white",
                    percentage: false,
                    barHeight: 1,
                    minimumTime: 200,
                    fadeOutTime: 1000
                });
            });
        </script>
        <!-- Плавное перемещение и триггер на форму логина -->
        <script type="text/javascript">
            $(document).ready(function(){
                $('h2').append('<a href="#header">top</a>');
                $('a[href^="#"]').bind('click.smoothscroll',function (e) {
                    e.preventDefault();

                    var target = this.hash,
                            $target = $(target);

                    $('html, body').stop().animate({
                        'scrollTop': $target.offset().top
                    }, 900, 'swing', function () {
                        window.location.hash = target;
                    });
                });

                //active=1
                if(getUrlVars()["active"] == 1){
                    $('#loginForm').trigger('click');
                }
                @if( session('data')[0] == 'active=1' )
                $('#loginForm').trigger('click');
                @elseif( $errors->has('name') || $errors->has('password'))
                $('#loginForm').trigger('click');
                @endif
            });

            function getUrlVars() {
                var vars = {};
                var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
                    vars[key] = value;
                });
                return vars;
            }
        </script>
    </body>
</html>

