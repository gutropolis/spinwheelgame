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
			<form  name="registerForm" id="registerForm" method="post" action="/storedata">
					 {{ csrf_field() }}
              <div class="row joinus-block-elements">
                  <div class="col-md-12 col-lg-12 elements-in">
                    <div class="form-heading">MY DETAILS</div>
                     <div class="form">
                            <!--field-->
                          <div class="field {{ $errors->first('first_name', 'has-error') }}">
                            <input type="text" class="inbox-box" required id="first_name" name="first_name" placeholder="Name">
                            <label for="fullname" class="inbox-label">First Name *</label>
							 {!! $errors->first('first_name', '<span class="help-block">:message</span>') !!}
                          </div>
						  <div class="field  {{ $errors->first('last_name', 'has-error') }}">
                            <input type="text" class="inbox-box" required id="last_name" name="last_name" placeholder="Name">
                            <label for="fullname" class="inbox-label">Last Name *</label>
							{!! $errors->first('last_name', '<span class="help-block">:message</span>') !!}
                          </div>
                
                            <div class="field {{ $errors->first('email', 'has-error') }}">
                            <input type="email" class="inbox-box" name="email" required id="email" placeholder="Email">
                            <label for="email" class="inbox-label">Email *</label>
							{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                          </div>
                          <!--end field-->
                           <!--field-->
                          <div class="field {{ $errors->first('password', 'has-error') }}">
                            <input type="password" class="inbox-box" name="password" required id="Password" placeholder="Password">
                            <label for="Password" class="inbox-label">Password *</label>
							 {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                          </div>
                          <!--End field-->
                           <!--field-->
                          <div class="field  {{ $errors->first('confirm_password', 'has-error') }}">
                            <input type="password" class="inbox-box" name="confirm_password" required id="Confirm Password" placeholder="Confirm Password">
                            <label for="Confirm Password" class="inbox-label">Confirm Password *</label>
							 {!! $errors->first('confirm_password', '<span class="help-block">:message</span>') !!}
                          </div>
                        

                          <button type="submit" class="btn-join">Join Raodeals!</button>
						  <p class="backtosignup">Already have an account ? <a class="btn-login signagain" type="login" data-toggle="modal" data-target="#mymodal">Sign in</a></p>
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
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBybmNGcXcsC2ChADSIPX0kGMUiPBqs1v0&libraries=places"></script>
<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', function () {
        var places = new google.maps.places.Autocomplete(document.getElementById('txtPlaces'));
        google.maps.event.addListener(places, 'place_changed', function () {

        });
    });
</script>
