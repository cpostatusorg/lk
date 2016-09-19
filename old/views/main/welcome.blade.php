<!-- header -->
@extends('overall.header')
<!-- content -->
@section('content')
<div class="container-fluid" id="welcome">

    <div class="row" id="null">
    </div>

    <div class="row" id="logo_text_main">
        <div class="col-md-12" id="logo_text">
            <div>
                Имя проекта
            </div>
        </div>
    </div>

    <div class="row" id="text_main">
        <div class="col-md-12" id="text">
            <div>
                Проект такой-то, <br> такой-то.
            </div>
        </div>
    </div>

</div>
<script type="text/javascript">
    window.addEventListener('DOMContentLoaded', function() {
        new QueryLoader2(document.querySelector("body"), {
            barColor: "black",
            backgroundColor: "white",
            percentage: false,
            barHeight: 1,
            minimumTime: 200,
            fadeOutTime: 1000
        });
    });
</script>
@endsection
