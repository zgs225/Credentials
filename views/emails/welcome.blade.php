@extends(Config::get('credentials.email'))

@section('content')
<p>感谢您报名参加<a href="{!! $url !!}">{!! Config::get('app.name') !!}</a>。</p>
@if (isset($link))
    <p>To activate your account, <a href="{!! $link !!}">click here</a>.</p>
@else
    <p>请前往官网登录您的账户，完善您的参赛资料。</p>
@endif
@stop
