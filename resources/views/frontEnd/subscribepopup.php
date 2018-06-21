@extends('frontEnd.layout')

@section('content')

<div class="wrapper">
  <div class="wrapper-in"> 
    <div class="spinwheel-sidebar" id="spinwheel-sidebar">
        <div class="subscribe-popup">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">
                        <img src="frontEnd/images/white_raodeals_logo.png" class="logo"">
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" onclick="closeNav()">&times;</span></button>
                    
                </div>
                <div class="pl-0 spin2wheel-block">
                    
                      <div class="row spin2wheel-block-in">
                          <div class="col-lg-6 col-md-4 col-sm-6 col-6 pl-0 spinwheel-img-block">
                              <img src="frontEnd/images/sidebar-spinwin.png" class="spinwheel-img">
                          </div>
                          <div class="col-lg-6 col-md-8 col-sm-6 col-6 spinwheel-text">
                            <form>
                              <h3 class="heading-spinwheel">GET YOUR CHANCE TO <span class="blue-clr">WIN A PRIZE!</span></h3>
                              <P class="title-text">Enter your email below and spin the wheel to see if you're our next 
                                  lucky winner! Your email
                              </P>
                              <div class="form-group">
                                  <input type="email" class="form-control mail-input" placeholder="Enter Your Email">
                              </div>
                              <a href="{{route('signup')}}" type="submit" class="lucky-btn ">Try Your Luck</a>
                            </form>
                          </div>
                      </div>
                    
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

@endsection