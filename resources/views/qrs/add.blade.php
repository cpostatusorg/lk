<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                    Добавить организацию
                </h4>

            </div>
            <!-- BODY -->
            <div class="modal-body">
                <!-- FORM -->
                <form autocomplete="off"
                      class="form-horizontal"
                      role="form"
                      method="POST"
                      action="{{ url('/qrs/add') }}">

                    {{ csrf_field() }}
                    <!-- 1 -->
                    <div class="login_font_1 form-group">

                        <div class="col-md-6 col-md-offset-3
                                                     col-xs-6 col-xs-offset-3
                                                     col-sm-6 col-sm-offset-3
                                                     col-lg-6 col-lg-offset-3">
                            <input placeholder="Организация"
                                   id="organisation"
                                   type="text"
                                   class="form-control"
                                   name="organisation"
                                   readonly
                                   onfocus="this.removeAttribute('readonly')">

                        </div>

                    </div>
                    <!-- 2 -->
                    <div class="login_font_2 form-group">

                        <div class="col-md-6 col-md-offset-3
                                                    col-xs-6 col-xs-offset-3
                                                    col-sm-6 col-sm-offset-3
                                                    col-lg-6 col-lg-offset-3">
                            <input placeholder="Рацион"
                                   id="ration"
                                   type="text"
                                   class="form-control"
                                   name="ration"
                                   readonly
                                   onfocus="this.removeAttribute('readonly')">
                        </div>

                    </div>
                    <!-- 3 -->
                    <div class="login_font_3 form-group">

                        <div class="col-md-6 col-md-offset-3
                                                        col-xs-6 col-xs-offset-3
                                                        col-sm-6 col-sm-offset-3
                                                        col-lg-6 col-lg-offset-3">
                            <input placeholder=" Автор"
                                   id="author"
                                   type="text"
                                   class="form-control"
                                   name="author"
                                   readonly
                                   onfocus="this.removeAttribute('readonly')">
                        </div>

                    </div>
                    <!-- 4 -->
                    <div class="login_font_4 form-group">

                        <div class="col-md-6 col-md-offset-3
                                                    col-xs-6 col-xs-offset-3
                                                    col-sm-6 col-sm-offset-3
                                                    col-lg-6 col-lg-offset-3">
                            <input placeholder=" Исполнитель"
                                   id="executor"
                                   type="text"
                                   class="form-control"
                                   name="executor"
                                   readonly
                                   onfocus="this.removeAttribute('readonly')">
                        </div>

                    </div>
                    <!-- 5 -->
                    <div class="login_font_5 form-group">

                        <div id="sign_width" class="col-md-6 col-md-offset-3
                                                    col-xs-6 col-xs-offset-3
                                                    col-sm-6 col-sm-offset-3
                                                    col-lg-6 col-lg-offset-3">
                            <button type="submit" class="btn btn-primary btn-login">
                                Сохранить
                            </button>
                        </div>

                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

