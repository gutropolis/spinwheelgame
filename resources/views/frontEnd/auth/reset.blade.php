@extends('frontEnd.layout')

@section('content')
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
<div class="contactus">
    <div class="container">
		<div class="row">
           <div class="forgetpwd-modelblock" role="document">
			  <div class="modal-forgetpwd">
				<div class="head-forgetpwd">
				  <h5 class="title-forgetpwd" id="exampleModalLabel">
				  
					<img src="/frontEnd/images/reset-key.png" class="forget-img">
				  </h5>
				</div>
				<div class="body-forgetpwd">
					<div class="forgetpwd-content">
					  <h4 class="content-head">
						Reset Password ?
					  </h4>
					  <p class="content-text">
						We just need your registered Email Id to sent you password reset instruction. 
					  </p>
					</div>
					  <form class="resetform" name="loginform" id="loginform" method="post" action="/reset">
					   {{ csrf_field() }}
						<div class="form-group text-center"> 
						  <label for="exampleFormControlInput1" class="label-text">Email address</label>
						  <input type="email" name="email" class="form-control emailinput text-center" id="exampleFormControlInput1" placeholder="name@example.com">
						</div>
						<div class="form-group text-center"> 
						  <label for="exampleFormControlInput1" class="label-text">Password</label>
						  <input type="Password" name="password" class="form-control emailinput text-center" id="exampleFormControlInput1" placeholder="********">
						</div>
						<div class="form-group text-center"> 
						  <label for="exampleFormControlInput1" class="label-text">Confirm Password</label>
						  <input type="Confirm Password" name="confirm_password" class="form-control emailinput text-center" id="exampleFormControlInput1" placeholder="**********">
						</div>
						<div class="form-group text-center">
							<button type="submit" class="btn-resetpwd">Reset Password</button>
						</div>
						<div class="form-group text-center">
							<p class="backtologin">Back to Login ?<a href="{{ route('loginpage')}}" class="sign">Sign in</a></p>
						</div>
					  </form>
				</div>
			  </div>
			</div>
		</div>
	</div>
</div>
</div>


@endsection