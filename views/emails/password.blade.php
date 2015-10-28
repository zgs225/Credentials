@extends(Config::get('credentials.email'))

@section('content')
<p>您的临时密码是：</p>
<blockquote>{!! $password !!}</blockquote>
<p>请在登录后前往个人中心修改您的临时密码。</p>
@stop
