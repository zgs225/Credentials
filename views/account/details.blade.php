<form class="form-horizontal agency-form" action="{{ $form['url'] }}" method="POST" novalidate>

    {{ csrf_field() }}
    {{ method_field($form['method']) }}
    <input type="hidden" name="_method" value="{{ $form['_method'] }}">

    <div class="form-group control-group">
      <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="last_name">姓</label>
      <div class="controls col-lg-3 col-md-4 col-sm-5 col-xs-10">
        <input type="text"
               id="last_name"
               class="form-control without-radius"
               placeholder="姓"
               required
               data-validation-required-message="请填写你的姓氏"
               name="last_name"
               value="{!! Request::old('last_name', $form['defaults']['last_name']) !!}">
        <p class="help-block text-danger"></p>
      </div>
    </div>

    <div class="form-group control-group">
      <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="first_name">名</label>
      <div class="controls col-lg-3 col-md-4 col-sm-5 col-xs-10">
        <input type="text"
               id="first_name"
               class="form-control without-radius"
               placeholder="名"
               required
               data-validation-required-message="请填写你的名字"
               name="first_name"
               value="{!! Request::old('first_name', $form['defaults']['first_name']) !!}">
        <p class="help-block text-danger"></p>
      </div>
    </div>

    <div class="form-group control-group">
      <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="email">邮箱</label>
      <div class="controls col-lg-3 col-md-4 col-sm-5 col-xs-10">
        <input type="email"
               class="form-control without-radius"
               placeholder="邮箱"
               name="email"
               value="{!! Request::old('email', $form['defaults']['email']) !!}"
               required
               data-validation-email-message="邮箱格式不正确"
               data-validation-required-message="请填写你的邮箱">
        <p class="help-block text-danger"></p>
      </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-sm-offset-3 col-sm-10 col-xs-12">
            <button class="btn btn-primary btn-flat" type="submit"><i class="fa fa-rocket"></i> {!! $form['button'] !!}</button>
        </div>
    </div>

</form>
