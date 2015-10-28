@extends(Config::get('credentials.email'))

@section('content')
<p>一名管理员将您在<a href="{!! $url !!}">{!! Config::get('app.name') !!}</a>上的账户和所有相关内容删除了。</p>
<p>如果您有疑问，请立刻联系我们。</p>
@stop
