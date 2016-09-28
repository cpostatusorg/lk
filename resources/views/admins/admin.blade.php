<!-- header -->
@extends('overall.header')
<!-- content -->
@section('content')
<div id="accounts" class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Активные личные кабинеты</div>

                <div class="panel-body">
                    <div id="parallels" class="container">
                        <ul>
                        @for($i=1; $i<12; $i++)

                                <li><button onclick="ajax(this)">{{ $i }} классы</button></li>

                        @endfor
                        </ul>
                    </div>
                    <div id="class" class="container">

                    </div>
                    <div id="students" class="container">

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
