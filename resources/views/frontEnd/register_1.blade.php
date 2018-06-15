@extends('frontEnd.layout')

@section('content')
	
		<section class="joinus">
      <div class="container">
	

@if ($errors->has('firstname'))
    <div class="error">{{ $errors }}</div>
<div class="alert alert-danger alert-dismissable margin5">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Error:</strong> Please check the form below for errors
</div>
@endif
        <div class="joinus-logo">
          <img src="assets/images/white raodeals logo.png">
        </div>
        
        <div class="joinus-block">
            <p class="title-joinus">JOIN NOW FOR FREE REWARDS</p>
            <div class="joinus-block-in">
			<form  name="registerForm" id="registerForm" method="post" action="/storedata">
					 {{ csrf_field() }}
              <div class="row joinus-block-elements">
                  <div class="col-md-4 elements-in">
                    <div class="form-heading">MY DETAILS</div>
                     <div class="form">
                            <!--field-->
                          <div class="field">
                            <input type="text" class="inbox-box" required id="first_name" name="first_name" placeholder="Name">
                            <label for="fullname" class="inbox-label">First Name *</label>
                          </div>
						  <div class="field">
                            <input type="text" class="inbox-box" required id="last_name" name="last_name" placeholder="Name">
                            <label for="fullname" class="inbox-label">Last Name *</label>
                          </div>
                          <!--end field-->
                           <!--field-->
                       
                          <!--End field-->
                           <!--field-->
                          <div class="field">
                            <input type="text" class="inbox-box" name="dob" id="dob" placeholder="Date of Birth">
                            <label for="Dateofbirth" class="inbox-label">Date of Birth</label>
                          </div>
                          <!--End field-->
                           <!--field-->
                          <div class="field">
                            <input type="text" class="inbox-box" name="PhoneNo" required id="Phone No" placeholder="Phone No">
                            <label for="Phone No" class="inbox-label">Phone No *</label>
                          </div>
                          <!--End field-->
                          <p class="title-Gender">Gender *</p>
                          <div class="form-check gender-form">
                                <input type="radio" name="gender" id="male" class="radio-btn" value="Male" />
                                   <label class="reason-text" for="male">Male</label>
                          </div>
                          <div class="form-check gender-form">
                               <input type="radio" name="gender" id="female" class="radio-btn" />
                                   <label class="reason-text" for="female">Female</label>
                             
                          </div>
						 <div class="field">
                            <input type="file" class="inbox-box" id="image" name="image" placeholder="Name">
                            <label for="fullname" class="inbox-label">Upload Image</label>
                          </div>
				</div>
		
                      
                      <!--end form--> 
                  </div>
                  <div class="col-md-4 elements-in">
                    <div class="form-heading">MY ADDRESS</div>
                      <div class="form">
                            <!--field-->
                          <div class="field">
                            {!! Form::select('country', $countries,array('class' => 'country_field form-control')) !!}
                            <label for="Country" class="inbox-label">Country</label>
							  
                          </div>
                          <!--end field-->
                           <!--field-->
                          <div class="field">
                            <input type="text" class="inbox-box" name="post_code" id="post_code" placeholder="Email">
                            <label for="Postcode" class="inbox-label">Postcode </label>
                          </div>
                          <!--End field-->
                           <!--field-->
                          <div class="field">
						 
                            <input type="text" id="txtPlaces"  class="inbox-box" name="address" id="address" placeholder="Search Addresss">
                            <label for="Search Address" class="inbox-label">Search Address</label>
                          </div>
                          <!--End field-->
                      </div>
                  </div>
                  <div class="col-md-4 elements-in">
                    <div class="form-heading">USER DETAILS</div>
                    <div class="form">
                            <!--field-->
                            <div class="field">
                            <input type="email" class="inbox-box" name="email" required id="email" placeholder="Email">
                            <label for="email" class="inbox-label">Email *</label>
                          </div>
                          <!--end field-->
                           <!--field-->
                          <div class="field">
                            <input type="password" class="inbox-box" name="password" required id="Password" placeholder="Password">
                            <label for="Password" class="inbox-label">Password *</label>
                          </div>
                          <!--End field-->
                           <!--field-->
                          <div class="field">
                            <input type="password" class="inbox-box" name="confirm_password" required id="Confirm Password" placeholder="Confirm Password">
                            <label for="Confirm Password" class="inbox-label">Confirm Password *</label>
                          </div>
                        

                          <button type="submit" class="btn-join">Join LuckyWheel!</button>
                          <!--End field-->
						  </div>
                      </form>
                  </div>
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