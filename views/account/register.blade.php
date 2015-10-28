@extends(Config::get('credentials.layout'))

@section('title')
报名
@stop

@section('content')
<section class="register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="/"><b>{{ Config::get('app.name') }}</b></a>
    </div><!-- /.register-logo -->
    <div class="register-box-body">


      <p class="register-box-msg">请填写真实资料报名</p>

      <form action="{{ URL::route('account.register.post') }}" method="POST" role="form" class="agency-form" novalidate>
        {{ csrf_field() }}

        <div class="form-group has-feedback control-group">
          <div class="controls">
            <input type="text"
                   class="form-control without-radius"
                   placeholder="姓"
                   required
                   data-validation-required-message="请填写你的姓氏"
                   name="last_name"
                   value="{!! Request::old('last_name') !!}">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="form-group has-feedback control-group">
          <div class="controls">
            <input type="text"
                   class="form-control without-radius"
                   placeholder="名"
                   name="first_name"
                   required
                   data-validation-required-message="请填写你的名字">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="form-group has-feedback control-group">
          <div class="controls">
            <input type="email"
                   class="form-control without-radius"
                   placeholder="邮箱"
                   name="email"
                   required
                   data-validation-email-message="邮箱格式不正确"
                   data-validation-required-message="请填写你的邮箱">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="form-group has-feedback control-group">
          <div class="controls">
            <input type="text"
                   class="form-control without-radius"
                   placeholder="手机号码"
                   name="phone"
                   data-validation-regex-regex="\d{11}"
                   data-validation-regex-message="请输入正确的手机号，目前只支持中国地区"
                   required
                   data-validation-required-message="请填写你的手机号码">
            <span class="glyphicon glyphicon-phone form-control-feedback"></span>
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="form-group has-feedback control-group">
          <div class="controls">
            <input type="password"
                   class="form-control without-radius"
                   placeholder="密码"
                   name="password"
                   minlength="6"
                   data-validation-minlength-message="密码最短为6位"
                   required
                   data-validation-required-message="请填写密码">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="form-group has-feedback control-group">
          <div class="controls">
            <input type="password"
                   class="form-control without-radius"
                   placeholder="确认密码"
                   name="password_confirmation"
                   data-validation-match-match="password"
                   data-validation-match-message="您两次输入的密码不一致">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block btn-flat">报名</button>
        </div>
      </form>
    </div><!-- /.register-box-body -->
  </div>
</section>
@stop
