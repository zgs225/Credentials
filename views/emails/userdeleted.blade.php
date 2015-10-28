@extends(Config::get('credentials.email'))

@section('content')
<p>您在<a href="{!! $url !!}">{!! Config::get('app.name') !!}</a>上的账户已经被删除，参赛资料也全部删除。</p>
<p>如果这不是您操作的，请立刻联系我们。</p>
@stop
