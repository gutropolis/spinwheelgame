<header>
  
           
            @include('frontEnd.includes.menu')
			
			
        <div class="modal" id="mymodal">
    <div class="modal-dialog login-modal">
      <div class="modal-content">
        <div class="modal-header close-icon">
			<button type="button" class="close " data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  
              <!--login-page-->
              <div class="login-page">
                <!--head-login-->
                <div class="head-login">
                  LOGIN TO YOUR ACCOUNT
                </div>
                  <!--contactus-form-->
				 
                  <div class="contactus-form">
                       <form name="loginform" id="loginform" method="post" action="/checklogin">
					 {{ csrf_field() }}
                          <div class="form-group login-form {{ $errors->first('email', 'has-error') }}">
                            <label for="email" class="title">Email Address</label>
                            <input type="email" class="form-control login-form-control" required id="email" name="email">
                          </div>
						  <div class="col-sm-12">
                                        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                                    </div>
                          <div class="form-group login-form-password {{ $errors->first('password', 'has-error') }}">
                            <label for="password" class="title">Password</label>
                            <input type="password" class="form-control login-form-control" id="password" name="password">
                          </div>
						   <div class="col-sm-12">
                                        {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                                    </div>
                          <button type="submit" class="btn-sign-in">Sign In</button>
                          <div class="forget-block">
                            <div class="forget-element">
                                <span class="forget">Forget Password?</span>
                                <a class="clik" href="{{ route('forgotpassword') }}">Click here</a>
                            </div>
                            
                          </div>

                          <div class="or">
                            Or
                          </div>
                          <div class="fb-button">
                            <button class="facebook-btn">
							
                              <img src="/FrontEnd/images/fb.png" class="fb-icon">
                              <span class="btn-text"> Sign In With Facebook</span>
                            </button>
                          </div>
                          <div class="not-member">
                                <span class="not-member-text">Not a member yet?</span>
                                <a class="Signup-title" href="{{ route('signup') }}">Sign-up Now!</a>
                            </div>
                      </form>
                  </div>
                  <!--end contactus-form-->
              </div>
              <!--end login-page-->
        </div>
      </div>
    </div>
  </div>
</header>
<script>
	
	
</script>