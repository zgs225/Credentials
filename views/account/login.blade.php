@extends(Config::get('credentials.layout'))

@section('title')
登录
@stop

@section('content')
<section class="login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="/"><b>{{ Config::get('app.name') }}</b></a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">


      <p class="login-box-msg">请输入您的邮箱和密码：</p>

      <form action="{{ URL::route('account.login.post') }}" method="POST" role="form" class="agency-form">
        {{ csrf_field() }}

        <div class="form-group has-feedback">
          <input type="email" class="form-control without-radius" placeholder="邮箱" name="email" value="{!! Request::old('email') !!}">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control without-radius" placeholder="密码" name="password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <input type="checkbox" name="rememberMe" value="1"> 记住我
            </div>
          </div>
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
          </div>
        </div>
      </form>

      <a href="{!! URL::route('account.reset') !!}" class="text-muted">忘记密码?</a>

    </div><!-- /.login-box-body -->
  </div>
</section>
@stop

@section ('js')
<script src="/assets/scripts/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
@stop

@section ('css')
<link rel="stylesheet" href="/assets/styles/icheck-square.css">
@stop
