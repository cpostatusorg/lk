<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- HEADER -->
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        &times;
                    </span>
                </button>

                <h4 class="modal-title" id="myModalLabel">
                    Редактирование ученика
                </h4>

            </div>
            <!-- BODY -->
            <div class="modal-body">
                <!-- FORM -->
                <form autocomplete="off"
                      class="form-horizontal"
                      role="form"
                      method="POST"
                      action="{{ url('/admins/edit') }}">

                    {{ csrf_field() }}
                    <div class="login_font_1 form-group">

                        <div class="width_control col-md-6 col-md-offset-3
                                                     col-xs-6 col-xs-offset-3
                                                     col-sm-6 col-sm-offset-3
                                                     col-lg-6 col-lg-offset-3">
                            <input placeholder="Фамилия"
                                   id="lastName"
                                   type="text"
                                   class="form-control"
                                   name="lastName"
                                   readonly
                                   onfocus="this.removeAttribute('readonly')">

                        </div>

                    </div>
                    <!-- 1 -->
                    <div class="login_font_1 form-group">

                        <div class="width_control col-md-6 col-md-offset-3
                                                 col-xs-6 col-xs-offset-3
                                                 col-sm-6 col-sm-offset-3
                                                 col-lg-6 col-lg-offset-3">
                            <input placeholder="Имя"
                                   id="firstName"
                                   type="text"
                                   class="form-control"
                                   name="firstName"
                                   readonly
                                   onfocus="this.removeAttribute('readonly')">

                        </div>

                    </div>
                    <!-- 1 -->
                    <div class="login_font_1 form-group">

                        <div class="width_control col-md-6 col-md-offset-3
                                                 col-xs-6 col-xs-offset-3
                                                 col-sm-6 col-sm-offset-3
                                                 col-lg-6 col-lg-offset-3">
                            <input placeholder="Отчество"
                                   id="midName"
                                   type="text"
                                   class="form-control"
                                   name="midName"
                                   readonly
                                   onfocus="this.removeAttribute('readonly')">

                        </div>

                    </div>
                    <!-- 2 -->
                    <div class="login_font_2 form-group">

                        <div class="width_control col-md-6 col-md-offset-3
                                                    col-xs-6 col-xs-offset-3
                                                    col-sm-6 col-sm-offset-3
                                                    col-lg-6 col-lg-offset-3">
                            <input placeholder="Параллель"
                                   id="parallel"
                                   type="text"
                                   class="form-control"
                                   name="parallel"
                                   readonly
                                   onfocus="this.removeAttribute('readonly')">
                        </div>

                    </div>
                    <!-- 3 -->
                    <div class="login_font_3 form-group">

                        <div class="width_control col-md-6 col-md-offset-3
                                                        col-xs-6 col-xs-offset-3
                                                        col-sm-6 col-sm-offset-3
                                                        col-lg-6 col-lg-offset-3">
                            <input placeholder="Класс"
                                   id="classof"
                                   type="text"
                                   class="form-control"
                                   name="classof"
                                   readonly
                                   onfocus="this.removeAttribute('readonly')">
                        </div>

                    </div>
                    <!-- 4 -->
                    <div class="login_font_4 form-group">

                        <div class="width_control col-md-6 col-md-offset-3
                                                    col-xs-6 col-xs-offset-3
                                                    col-sm-6 col-sm-offset-3
                                                    col-lg-6 col-lg-offset-3">
                            <input placeholder="Номер карты"
                                   id="card_number"
                                   type="text"
                                   class="form-control"
                                   name="card_number"
                                   readonly
                                   onfocus="this.removeAttribute('readonly')">
                        </div>

                    </div>
                    <!-- 5 -->
                    <div class="login_font_5 form-group">

                        <div class="width_control col-md-6 col-md-offset-3
                                                    col-xs-6 col-xs-offset-3
                                                    col-sm-6 col-sm-offset-3
                                                    col-lg-6 col-lg-offset-3">
                            <button type="submit" class="btn btn-primary btn-login">
                                Отредактировать
                            </button>
                        </div>

                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

