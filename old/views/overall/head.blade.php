<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title -->
        @include('overall.title')
        <!-- Bootstrap -->
        <link href="http://localhost/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://localhost/css/main.css" rel="stylesheet">
        <link href="http://localhost/css/welcome.css" rel="stylesheet">
        <link href="http://localhost/css/media.css" rel="stylesheet">
        <link href="http://localhost/css/login.css" rel="stylesheet">

        <link rel="stylesheet" href="http://localhost/css/font-awesome-4.6.3/css/font-awesome.min.css">

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Scripts -->
        <script src="http://localhost/js/jquery.min.js"></script>
        <script src="http://localhost/js/bootstrap.min.js"></script>
        <script src="/js/main.js"></script>
        <script src="/js/b_size.js"></script>
        <script>
            window.Laravel = '<?php echo json_encode([
                    'csrfToken' => csrf_token(),
            ]); ?>'
        </script>
    </head>
    <body>
        @yield('app')
        @include('overall.footer')
    </body>
</html>
