<form class="form-horizontal agency-form" action="{{ $form['url'] }}" method="{{ $form['method'] }}">

    {{ csrf_field() }}
    <input type="hidden" name="_method" value="{{ $form['_method'] }}">

    <div class="form-group control-group">
      <label class="col-md-2 col-sm-3 col-xs-10 control-label">密码</label>
      <div class="controls col-lg-3 col-md-4 col-sm-5 col-xs-10">
        <input type="password"
        class="form-control without-radius"
        placeholder="密码"
        name="password"
        minlength="6"
        data-validation-minlength-message="密码最短为6位"
        required
        data-validation-required-message="请填写密码">
        <p class="help-block text-danger"></p>
      </div>
    </div>

    <div class="form-group control-group">
      <label class="col-md-2 col-sm-3 col-xs-10 control-label">确认密码</label>
      <div class="controls col-lg-3 col-md-4 col-sm-5 col-xs-10">
        <input type="password"
               class="form-control without-radius"
               placeholder="确认密码"
               name="password_confirmation"
               data-validation-match-match="password"
               data-validation-match-message="您两次输入的密码不一致">
        <p class="help-block text-danger"></p>
      </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-sm-offset-3 col-sm-10 col-xs-12">
            <button class="btn btn-primary btn-flat" type="submit"><i class="fa fa-rocket"></i> {!! $form['button'] !!}</button>
        </div>
    </div>

</form>
