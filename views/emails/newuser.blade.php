@extends(Config::get('credentials.email'))

@section('content')
<p><a href="{!! $url !!}">{!! Config::get('app.name') !!}</a>管理员创建了您的账户。</p>
<p>您的临时密码是：</p>
<blockquote>{!! $password !!}</blockquote>
<p>请在登录后进入个人中心修改您的密码。</p>
@stop
