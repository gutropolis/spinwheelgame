@extends('frontEnd.layout')

@section('content')
	
		<section class="joinus">
      <div class="container">
	  


        <div class="joinus-logo">
          <img src="assets/images/white raodeals logo.png">
        </div>
        
        <div class="joinus-block">
            <p class="title-joinus">JOIN NOW FOR FREE REWARDS</p>
            <div class="joinus-block-in">
			<form  name="registerForm" id="register_form_data"  method="post" action="/storedata">
			
					 {{ csrf_field() }}
					
					<div class="alert alert-danger alert-dismissable margin5 response_div">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>You have An Error.Below look</strong>
					</div>
					


              <div class="row joinus-block-elements">
                  <div class="col-md-12 col-lg-12 elements-in">
				  <h4 class="text-center form-heading">Fill Your Detail</h4>
                   
                     <div class="form">
                            <!--field-->
                          <div class="field {{ $errors->first('first_name', 'has-error') }}">
                            <input type="text" class="inbox-box"  id="first_name" name="first_name" placeholder="Name">
                            <label for="fullname" class="inbox-label">First Name *</label>
							 {!! $errors->first('first_name', '<span class="help-block">:message</span>') !!}
							
                          </div>
						  <span  id="first_name_err"></span>
						  <div class="field  {{ $errors->first('last_name', 'has-error') }}">
                            <input type="text" class="inbox-box"  id="last_name" name="last_name" placeholder="Name">
                            <label for="fullname" class="inbox-label">Last Name *</label>
							{!! $errors->first('last_name', '<span class="help-block">:message</span>') !!}
                          </div>
						  
						    <span class="error" id="last_name_err"></span>
                
                            <div class="field {{ $errors->first('email', 'has-error') }}">
                            <input type="email" class="inbox-box" name="email"  id="email_reg" placeholder="Email">
                            <label for="email" class="inbox-label">Email *</label>
							{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                          </div>
						    <span   class="error" id="email_name_err"></span>
							<span  class="error"  id="errors"></span>
                          <!--end field-->
                           <!--field-->
                          <div class="field {{ $errors->first('password', 'has-error') }}">
                            <input type="password" class="inbox-box" name="password"  id="passwords" placeholder="Password">
                            <label for="Password" class="inbox-label">Password *</label>
							 {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                          </div>
						    <span  class="error"  id="password_name_err"></span>
                          <!--End field-->
                           <!--field-->
                          <div class="field  {{ $errors->first('confirm_password', 'has-error') }}">
                            <input type="password" class="inbox-box" name="confirm_password"  id="confirm_passwords " placeholder="Confirm Password">
                            <label for="Confirm Password" class="inbox-label">Confirm Password *</label>
							 {!! $errors->first('confirm_password', '<span class="help-block">:message</span>') !!}
                          </div>
						    <span  class="error" id="confirm_password_name_err"></span>
                        

                          <button type="button" id="registerForm" class="btn-join register_button">Join Now!</button>
						  <p class="backtosignup text-center">Already have an account?<a class="btn-login signagain text-yellow" type="login" data-toggle="modal" data-target="#mymodal">Sign in</a></p>
                          <!--End field-->
						  </div>
                      </form>
                      <!--end form--> 
                  </div>
              </div>
        </div>
      </div>
    </section>

@endsection
 

