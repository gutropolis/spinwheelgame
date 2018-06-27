@extends('frontEnd.layout')

@section('content')
	
		<section class="joinus">
      <div class="container">
	

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
@if ($errors->any())
<div class="alert alert-danger alert-dismissable margin5">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Error:</strong> Please check the form below for errors
</div>
@endif
       
        
        <div class="joinus-block">
            <p class="title-joinus">Edit Your Profile</p>
            <div class="joinus-block-in register_box">
			  {{Form::open(['route'=>['profileUpdate',$user->id],'method'=>'POST', 'files' => true])}}
					 {{ csrf_field() }}
              <div class="row joinus-block-elements ">
                  <div class="col-md-4 elements-in ">
                    <div class="form-heading">MY DETAILS</div>
                     <div class="form">
                            <!--field-->
                          <div class="field {{ $errors->first('first_name', 'has-error') }}">
                            <input type="text" class="inbox-box" required id="first_name" name="first_name" value="{!! old('first_name', $user->first_name) !!}"/>
                            <label for="fullname" class="inbox-label">First Name *</label>
							{!! $errors->first('first_name', '<span class="help-block">:message</span>') !!}
                          </div>
						  <div class="field  {{ $errors->first('last_name', 'has-error') }}">
                            <input type="text" class="inbox-box" required id="last_name" name="last_name"  value="{!! old('last_name', $user->last_name) !!}"/>
                            <label for="fullname" class="inbox-label">Last Name *</label>
							  {!! $errors->first('last_name', '<span class="help-block">:message</span>') !!}
                          </div>
                          <!--end field-->
                           <!--field-->
                       
                          <!--End field-->
                           <!--field-->
                          <div class="field{{ $errors->first('last_name', 'has-error') }}">
                            <input type="text" class="inbox-box" name="dob" id="dob" placeholder="Date of Birth"  value="{!! old('dob', $user->dob) !!}"/>
                            <label for="Dateofbirth" class="inbox-label">Date of Birth</label>
							 {!! $errors->first('dob', '<span class="help-block">:message</span>') !!}
                          </div>
                          <!--End field-->
                           <!--field-->
                          <div class="field">
                            <input type="text" class="inbox-box" name="PhoneNo" required id="Phone No" value="{!! old('phone_no', $user->phone) !!}"/>
                            <label for="Phone No" class="inbox-label">Phone No *</label>
                          </div>
                          <!--End field-->
                          <p class="title-Gender">Gender *</p>
                          <div class="form-check gender-form">
                                <input type="radio" name="gender" id="male" class="radio-btn" value="{{$user->gender}}"{{ $user->gender == 'male' ? 'checked' : '' }} />
                                   <label class="reason-text" for="male">Male</label>
                          </div>
                          <div class="form-check gender-form">
                               <input type="radio" name="gender" id="female" class="radio-btn" value="{{$user->gender}}" 
							    {{ $user->gender == 'female' ? 'checked' : '' }} />
                                   <label class="reason-text" for="female">Female</label>
                             
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
                           <div class="field {{ $errors->first('post_code', 'has-error') }}">
                            <input type="text" class="inbox-box" name="post_code" id="post_code"  value="{!! old('post_code', $user->post_code) !!}"/>
                            <label for="Postcode" class="inbox-label">Postcode </label>
							 {!! $errors->first('post_code', '<span class="help-block">:message</span>') !!}
                          </div>
                          <!--End field-->
                           <!--field-->
                          <div class="field">
						 
                            <input type="text" id="txtPlaces"  class="inbox-box" name="address" id="address"  value="{!! old('address', $user->address) !!}"/>
                            <label for="Search Address" class="inbox-label">Search Address</label>
                          </div>
						  
						  <div class="form-group" style="padding-top:30px">
                    <label for="photo_file"
                           class=" form-control-label upload-text">Image Upload</label>
                    <div class="">
                        @if($user->photo!="")
                            <div class="row">
                                <div class="">
                                    <div id="user_photo" class="col-sm-4 box p-a-xs">
                                        <a target="_blank"
                                           href="{{ URL::to('uploads/users/'.$user->photo) }}"><img
                                                    src="{{ URL::to('uploads/users/'.$user->photo) }}"
                                                    class="img-responsive">
                                            {{ $user->photo }}
                                        </a>
                                        <br>
                                        <a onclick="document.getElementById('user_photo').style.display='none';document.getElementById('photo_delete').value='1';document.getElementById('undo').style.display='block';"
                                           class="btn btn-sm btn-default">{!!  trans('backLang.delete') !!}</a>
                                    </div>
                                    <div id="undo" class="col-sm-4 p-a-xs" style="display: none">
                                        <a onclick="document.getElementById('user_photo').style.display='block';document.getElementById('photo_delete').value='0';document.getElementById('undo').style.display='none';">
                                            <i class="material-icons">&#xe166;</i> {!!  trans('backLang.undoDelete') !!}
                                        </a>
                                    </div>

                                    {!! Form::hidden('photo_delete','0', array('id'=>'photo_delete')) !!}
                                </div>
                            </div>
                        @endif

                        {!! Form::file('photo', array('class' => 'form-control','id'=>'photo','accept'=>'image/*')) !!}
                        <small>
                            <i class="material-icons">&#xe8fd;</i>
                            {!!  trans('backLang.imagesTypes') !!}
                        </small>
                    </div>
                </div>
                          <!--End field-->
                      </div>
                  </div>
                  <div class="col-md-4 elements-in">
                    <div class="form-heading">USER DETAILS</div>
                    <div class="form">
                            <!--field-->
                            <div class="field {{ $errors->first('email', 'has-error') }}">
							 
                            <input type="email" class="inbox-box" name="email" required id="email"  value="{!! old('email', $user->email) !!}"/>
                            <label for="email" class="inbox-label">Email *</label>
							 {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                          </div>
                          <!--end field-->
                           <!--field-->
						    <p class="text-warning">If you don't want to change password... please leave them empty</p>
                          <div class="field {{ $errors->first('password', 'has-error') }}">
						  
                            <input type="password" class="inbox-box" name="password"  id="Password" value="{!! old('password') !!}"/>
                            <label for="Password" class="inbox-label">Password *</label>
							 {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                          </div>
                          <!--End field-->
                           <!--field-->
                          <div class="field {{ $errors->first('password_confirm', 'has-error') }}">
                            <input type="password" class="inbox-box" name="confirm_password"  id="Confirm Password"  value="{!! old('password_confirm') !!}"/>
                            <label for="Confirm Password" class="inbox-label">Confirm Password *</label>
							 {!! $errors->first('password_confirm', '<span class="help-block">:message</span>') !!}
                          </div>
                        

                          <button type="submit" class="btn-join update-profile">Update</button>
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