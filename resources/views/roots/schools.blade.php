<!-- header -->
@extends('overall.header')
<!-- content -->
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Список образовательных организаций</div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Наименование школы</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($records as $record)
                                    <tr>
                                        <td>{{ $record->id_sch }}</td>
                                        <td>{{ $record->name }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
