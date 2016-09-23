@if(Request::url() == 'http://localhost/login')
    <!-- Исключение на адрес /login -->
    <script type="text/javascript">
        document.location.href = "{{url('/?active=1')}}";
    </script>

@else

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Войти в личный кабинет</h4>
            </div>

            <div class="modal-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <div class="login_font_1 form-group{{ $errors->has('name') ? ' has-error' : '' }}">


                        <div id="login_width" class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
                            <input placeholder="Логин" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="login_font_2 form-group{{ $errors->has('password') ? ' has-error' : '' }}">


                        <div id="pass_width" class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
                            <input placeholder="Пароль" id="password" type="password" class="form-control" name="password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="login_font_3 form-group">
                        <div id="remember_width" class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Запомнить меня
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="login_font_4 form-group">
                        <div id="sign_width" class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3">
                            <button type="submit" class="btn btn-primary btn-login">
                                Войти
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endif
