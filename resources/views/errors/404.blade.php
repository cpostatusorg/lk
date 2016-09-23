<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>welcome to lk</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/404.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Страница не найдена</title>

        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                    'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="panel panel-danger">
                    <div class="panel-heading">Ошибка №404. Страница не найдена.</div>
                    <div class="panel-body">Вы будете перенаправлены на главную страницу через</div>
                    <div id="timer_inp">5</div>
                </div>
            </div>
        </div>
        <script type="text/javascript">

            function timer(){

                var obj=document.getElementById('timer_inp');
                obj.innerHTML--;

                if(obj.innerHTML==0){
                    document.location.href = "{{url('/')}}";
                }else{
                    setTimeout(timer,1000);
                }
            }

            setTimeout(timer,1000);

        </script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
