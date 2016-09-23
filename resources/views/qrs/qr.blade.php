<!-- header -->
@extends('overall.header')
<!-- content -->
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Список зарегистрированных организаций</div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Организация</th>
                                    <th>Дата</th>
                                    <th>Рацион</th>
                                    <th>Автор</th>
                                    <th>Исполнитель</th>
                                    <th>Ссылка</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($records as $record)
                                    <tr>
                                        <td>{{ $record->id }}</td>
                                        <td>{{ $record->organisation }}</td>
                                        <td>{{ $record->created_at }}</td>
                                        <td>{{ $record->ration }}</td>
                                        <td>{{ $record->author }}</td>
                                        <td>{{ $record->executor }}</td>
                                        <td><a href="{{ $record->href }}">Ссылка</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
