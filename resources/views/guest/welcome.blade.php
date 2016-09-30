<!-- header -->
@extends('overall.header')
<!-- content -->
@section('content')

<div class="container-fluid" id="welcome">
    <div class="row">

        <div id="null" class="col-md-12"></div>

            <div class="col-md-12" id="logo_text">
                <div>
                    Любите удобство? Мы тоже!
                </div>
            </div>

            <div class="col-md-12" id="text">
                Проект с инновационным подходом к системе здорового питания, направленный на повышение уровня и контроля качества питания в школе.
            </div>

        <div class="col-md-12" id="null"></div>

            <div class="col-md-12" id="img">
                <img src="http://localhost/img/18.jpg">
            </div>
        
        <div id="null" class="col-md-12"></div>

            <div class="col-md-12 col-sm-12 col-xs-12" id="menu">

                <div class="container-fluid" id="menu_container">
                    <div class="col-md-12 col-sm-12 col-xs-12" id="button2">
                        <a href="{{ url('/aboutproject') }}">
                        <button type="button" class="btn btn-about">
                                Узнать больше
                        </button>
                        </a>
                    </div>
                </div>
            </div>

    </div>
</div>

@endsection
