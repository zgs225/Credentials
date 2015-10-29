@extends(Config::get('credentials.layout'))

@section('title')
账户信息
@stop

@section('content')
<section class="bg-light-gray">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1 col-sm-12">
        <div class="box">
          <div class="box-body">
            <div class="page-header">
              <h1>
                账户信息
                <a class="btn btn-danger btn-flat pull-right" href="#delete_account" data-toggle="modal" data-target="#delete_account">
                  <i class="fa fa-trashed"></i> 删除账户
                </a>
              </h1>
            </div>
            <h3>修改资料</h3>
            <div class="agency-form-wrapper">
              <?php
              $form = ['url' => URL::route('account.details.patch'),
              '_method' => 'PATCH',
              'method' => 'POST',
              'button' => '保存资料',
              'defaults' => [
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'email' => $user->email,
              ], ];
              ?>
              @include('credentials::account.details')
            </div>
            <hr>
            <h3>修改密码</h3>
            <div class="agency-form-wrapper">
              <?php
              $form = ['url' => URL::route('account.password.patch'),
              '_method' => 'PATCH',
              'method' => 'POST',
              'button' => '修改密码',
            ];
            ?>
            @include('credentials::account.password')
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
@stop

@section('bottom')
@include('credentials::account.delete')
@stop
