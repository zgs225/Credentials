@extends(Config::get('credentials.email'))

@section('content')
<p>您在<a href="{!! $url !!}">{!! Config::get('app.name') !!}</a>上的密码已经被修改。</p>
<p>如果这不是您操作的，请立刻联系我们。</p>
@stop
