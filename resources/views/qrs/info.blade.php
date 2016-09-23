<!-- header -->
@extends('qrs.head')
<!-- content -->
@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Информация</div>

                    <div class="panel-body">

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Организация</th>
                                        <td>{{ $id->organisation }}</td>
                                    </tr>
                                    <tr>
                                        <th>Дата</th>
                                        <td>{{ $id->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Рацион</th>
                                        <td>{{ $id->ration }}</td>
                                    </tr>
                                    <tr>
                                        <th>Автор</th>
                                        <td>{{ $id->author }}</td>
                                    </tr>
                                    <tr>
                                        <th>Исполнитель</th>
                                        <td>{{ $id->executor }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection