@extends(Config::get('credentials.email'))

@section('content')
<p><a href="{!! $url !!}">{!! Config::get('app.name') !!}</a>一名管理员修改了您的账户权限。</p>
<p>请登录后查看您的权限。</p>
@stop
