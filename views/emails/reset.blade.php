@extends(Config::get('credentials.email'))

@section('content')
<p>若要重置您的密码，<a href="{!! $link !!}">请点击这里。</a></p>
<p>在您点击上面链接后, 您将收到一封包含临时密码的电子邮件。</p>
<p>请使用临时密码登录后，到个人中心修改您的密码。</p>
@stop
