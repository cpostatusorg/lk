 <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Информация</div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Организация</th>
                                    <th>Дата</th>
                                    <th>Рацион</th>
                                    <th>Автор</th>
                                    <th>Исполнитель</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($records as $record)
                                    <tr>
                                        <td>{{ $record->organisation }}</td>
                                        <td>{{ $record->created_at }}</td>
                                        <td>{{ $record->ration }}</td>
                                        <td>{{ $record->author }}</td>
                                        <td>{{ $record->executor }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

