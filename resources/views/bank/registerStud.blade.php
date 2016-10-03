<!-- header -->
@extends('overall.header')
<!-- content -->
@section('content')
    <div class="container" id="bank_container">
        <div class="row">
            <div class="col-md-6">
                <ul>
                    <li>Метод: POST</li>
                    <li>URL: https://sp.albank.ru/api/students/register</li>

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
                                    <td>studentId</td>
                                    <td>string(50)</td>
                                    <td>Yes</td>
                                    <td>Уникальный ID ученик в ЛК</td>
                                </tr>
                                <tr>
                                    <td>studentFirstname</td>
                                    <td>string(200)</td>
                                    <td>Yes</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>studentLastname</td>
                                    <td>string(200)</td>
                                    <td>Yes</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>studentMidname</td>
                                    <td>string(200)</td>
                                    <td>Yes</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>schoolId</td>
                                    <td>string(50)</td>
                                    <td>Yes</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>schoolName</td>
                                    <td>string(1000)</td>
                                    <td>No</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>

                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/bank/registerStud') }}">

                    {{ csrf_field() }}

                    <div class="login_font_1 form-group">
                        <div class="width_control col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
                            <input placeholder="studentId" type="text" class="form-control" name="studentId" autofocus>
                        </div>
                    </div>

                    <div class="login_font_1 form-group">
                        <div class="width_control col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
                            <input placeholder="studentFirstName" type="text" class="form-control" name="studentFirstName">
                        </div>
                    </div>

                    <div class="login_font_1 form-group">
                        <div class="width_control col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
                            <input placeholder="studentLastName" type="text" class="form-control" name="studentLastName">
                        </div>
                    </div>

                    <div class="login_font_1 form-group">
                        <div class="width_control col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
                            <input placeholder="studentMidName" type="text" class="form-control" name="studentMidName">
                        </div>
                    </div>

                    <div class="login_font_1 form-group">
                        <div class="width_control col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
                            <input placeholder="schoolId" type="text" class="form-control" name="schoolId">
                        </div>
                    </div>

                    <div class="login_font_1 form-group">
                        <div class="width_control col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
                            <input placeholder="schoolName" type="text" class="form-control" name="schoolName">
                        </div>
                    </div>

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