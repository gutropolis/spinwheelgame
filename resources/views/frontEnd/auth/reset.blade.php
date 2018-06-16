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
            <div class="col-md-12 col-lg-8">
                <div class="heading-contactus">
                    Login Here
                </div>
                <!--contactus-form-->
                <div class="contactus-form">
                    <form name="loginform" id="loginform" method="post" action="/reset">
					 {{ csrf_field() }}
                        <label for="exampleFormControlInput1" class="title-signup">Forgot Password Here</label>
                        <div class="form-group contact-form-group {{ $errors->first('errro', 'has-error') }}">                
                            <input type="Email" name="email" class="form-control contact-form-control" placeholder="Email" >
							<input type="password" name="password" class="form-control contact-form-control" placeholder="password" >
							<input type="password" name="confirm_password" class="form-control contact-form-control" placeholder="confirm_password" >

                        </div>   
						 <div class="col-sm-12">
                            {!! $errors->first('error', '<span class="help-block">:message</span>') !!}
                                    </div>
                        <button type="submit" class="btn btn-submit" >Reset</button>
                    </form>
                </div>
				
                <!-- End contactus-form-->
            </div>
        </div>

</div>
</div>


@endsection