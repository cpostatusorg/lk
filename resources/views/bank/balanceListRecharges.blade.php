<!-- header -->
@extends('overall.header')
<!-- content -->
@section('content')
    <div class="container" id="bank_container">
        <div class="row">
            <div class="col-md-6">
                <ul>
                    <li>Метод: GET</li>
                    <li>URL: https://sp.albank.ru/api/student/payments</li>

                    <li>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Параметр</th>
                                <th>Тип</th>
                                <th>Обязательность</th>
                                <th>Описание, валидация</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>bankStudentId</td>
                                <td>string(32)</td>
                                <td>Yes</td>
                                <td>Уникальный ID ученика в банке</td>
                            </tr>
                            <tr>
                                <td>startDate</td>
                                <td>date(ISO 8601)</td>
                                <td>Yes</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>endDate</td>
                                <td>date(ISO 8601)</td>
                                <td>Yes</td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>

                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/bank/balanceGet_get') }}">

                    {{ csrf_field() }}

                    <div class="login_font_1 form-group">
                        <div class="width_control col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
                            <input placeholder="bankStudentId" type="text" class="form-control" name="bankStudentId" autofocus>
                        </div>
                    </div>

                    <div class="login_font_1 form-group">
                        <div class="width_control col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
                            <input placeholder="startDate" type="date" class="form-control" name="startDate" autofocus>
                        </div>
                    </div>

                    <div class="login_font_1 form-group">
                        <div class="width_control col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
                            <input placeholder="endDate" type="date" class="form-control" name="endDate" autofocus>
                        </div>
                    </div>

                    <!-- -->
                    <div class="login_font_1 form-group">
                        <div class="width_control col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
                            <button type="submit" class="btn btn-primary btn-login">
                                Поехали
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection