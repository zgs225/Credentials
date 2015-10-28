@extends(Config::get('credentials.layout'))

@section('title')
重置密码
@stop

@section('content')
<section class="login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="/"><b>{{ Config::get('app.name') }}</b></a>
    </div>
    <div class="login-box-body">


      <p class="login-box-msg">找回您的密码</p>

      <form action="{{ URL::route('account.reset.post') }}" method="POST" role="form" class="agency-form">
        {{ csrf_field() }}

        <div class="form-group has-feedback">
          <input type="email" class="form-control without-radius" placeholder="邮箱" name="email" value="{!! Request::old('email') !!}">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-block btn-primary btn-flat"> 找回密码 </button>
        </div>
      </form>
    </div>
  </div>
</section>
@stop
