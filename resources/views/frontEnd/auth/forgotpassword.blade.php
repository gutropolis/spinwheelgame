@extends('frontEnd.layout')

@section('content')


 <div class="forgetpwd-modelblock" role="document">
          <div class="modal-forgetpwd">
            <div class="head-forgetpwd">
              <h5 class="title-forgetpwd" id="exampleModalLabel">
                <img src="frontEnd/images/il-password-reset@2x.png" class="forget-img">
              </h5>
            </div>
            <div class="body-forgetpwd">
                <div class="forgetpwd-content">
                  <h4 class="content-head">
                    Forget Password ?
                  </h4>
                  <p class="content-text">
                    We just need your registered Email Id to sent you password reset instruction. 
                  </p>
                </div>
						  @if ($errors->any())
<div class="alert alert-danger alert-dismissable margin5">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Error:</strong> Please check the form below for errors
</div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissable margin5">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Success:</strong> {{ $message }}
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissable margin5">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Error:</strong> {{ $message }}
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-dismissable margin5">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Warning:</strong> {{ $message }}
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info alert-dismissable margin5">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Info:</strong> {{ $message }}
</div>
@endif
                    <form name="loginform" id="loginform" class="resetform" method="post" action="/password">
					 {{ csrf_field() }}
                    <div class="form-group text-center {{ $errors->first('errro', 'has-error') }}">
                      <label for="exampleFormControlInput1" class="label-text">Email address</label>
                      <input type="email" name="email" class="form-control emailinput text-center" required id="exampleFormControlInput1" placeholder="name@example.com">
					   {!! $errors->first('error', '<span class="help-block">:message</span>') !!}
                    </div>
					  <div class="col-sm-12">
                            {!! $errors->first('error', '<span class="help-block">:message</span>') !!}
                                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn-resetpwd">Reset Password</button>
                    </div>
                    <div class="form-group text-center">
                        <p class="backtologin">Back to Login ?<a href="{{route( 'loginpage' )}}" class="sign">Sign in</a></p>
                    </div>
                  </form>
            </div>
          </div>
        </div>





@endsection