<!-- header -->
@extends('overall.header')
<!-- content -->
@section('content')
    <div class="container" id="bank_container">
        <div class="row">
            <div class="col-md-6">
                <ul>
                    <li>Метод: POST</li>
                    <li>URL: https://sp.albank.ru/api/student/transactions</li>

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
                                <td>transactionId</td>
                                <td>string(50)</td>
                                <td>Yes</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>bankStudentId</td>
                                <td>string(30)</td>
                                <td>Yes</td>
                                <td>Уникальный ID ученика в банке</td>
                            </tr>
                            <tr>
                                <td>date</td>
                                <td>date(ISO 8601)</td>
                                <td>Yes</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>sum</td>
                                <td>number</td>
                                <td>Yes</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>cardId</td>
                                <td>string(50)</td>
                                <td>Yes</td>
                                <td>Идентификатор карты</td>
                            </tr>
                            <tr>
                                <td>place</td>
                                <td>string(250)</td>
                                <td>Yes</td>
                                <td>Место транзакции</td>
                            </tr>
                            </tbody>
                        </table>

                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/bank/transaction') }}">

                    {{ csrf_field() }}

                    <div class="login_font_1 form-group">
                        <div class="width_control col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
                            <input placeholder="transactionId" type="text" class="form-control" name="transactionId" autofocus>
                        </div>
                    </div>

                    <div class="login_font_1 form-group">
                        <div class="width_control col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
                            <input placeholder="bankStudentId" type="text" class="form-control" name="bankStudentId" autofocus>
                        </div>
                    </div>

                    <div class="login_font_1 form-group">
                        <div class="width_control col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
                            <input placeholder="date" type="date" class="form-control" name="date" autofocus>
                        </div>
                    </div>

                    <div class="login_font_1 form-group">
                        <div class="width_control col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
                            <input placeholder="sum" type="text" class="form-control" name="sum" autofocus>
                        </div>
                    </div>

                    <div class="login_font_1 form-group">
                        <div class="width_control col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
                            <input placeholder="cardId" type="text" class="form-control" name="cardId" autofocus>
                        </div>
                    </div>

                    <div class="login_font_1 form-group">
                        <div class="width_control col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
                            <input placeholder="place" type="text" class="form-control" name="place" autofocus>
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