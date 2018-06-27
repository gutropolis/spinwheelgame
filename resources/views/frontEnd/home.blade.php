@extends('frontEnd.layout')

@section('title', 'Home | Raodeals')  

@section('content')  
	
	
	
    <div class="banner">
    <!--container-->
    <div class="container">
        <!--row-->
        <div class="row">
            <!--banner-content-->
            <div class="col-md-8 col-lg-6 col-sm-12 banner-content">
                <!--banner-heading-->
                <h1 class="banner-heading">Get <span>Big Deals Today</span> By Raodeals</h1>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                <!--input-group input-mail-->
                <div class="input-group input-mail">
                   <!--form control--> 
                   <input type="text" class="form-control btn-form-control" placeholder="Enter Your Email">
                   <!--input-group subscribe-btn-->
                   <span class="input-group-btn group-btn-subscribe">
                        <a href="" class="btn btn-default btn-subscribe" type="button">Subscribe</a>
                   </span>
                   <!--End input-group-->
                </div>
                <!--End input-group input-mail-->
            </div>
            <!--End banner-content-->
        </div>
        <!-- end row-->
    </div>
    <!-- end container-->
</div>
<!--end banner-->

    <!--how raodeal work-->
<section class="working-section">
    <!--container-->
    <div class="container">
        <!--row-->
        <div class="row">
            <!--col-md-6-->
            <div class="col-lg-6 p-0">
                <!--leftbar-working-section-->
                <div class="leftbar-working-section">
                    <!--title-->
                    <h2 class="title-working-section">How Does Raodeals works?</h2>
                    <!--working-data-list-->
                    <div class="working-data-list">
                        <!--list-block-->
                        <div class="list-block">
                            <!-- checkbox-icon-->
							
                            <img src="{{ URL::to('/FrontEnd/images/checkbox.png') }}" class="checkbox-icon">
                            <!--list-block-text-->
                            <p class="list-block-text">Check your daily email or sms text message. </p>
                        </div>
                        <!--list-block-->
                        <div class="list-block">
                            <img src="{{ URL::to('/FrontEnd/images/checkbox.png') }}" class="checkbox-icon">
                            <p class="list-block-text">Click on the Link to complete your free entry. </p>
                        </div>
                        <!--list-block-->
                        <div class="list-block">
                            <img src="{{ URL::to('/FrontEnd/images/checkbox.png') }}" class="checkbox-icon">
                            <p class="list-block-text">Earn points by simply answering a few questions.  </p>
                        </div>
                        <!--list-block-->
                        <div class="list-block">
                            <img src="{{ URL::to('/FrontEnd/images/checkbox.png') }}" class="checkbox-icon">
                            <p class="list-block-text">Stay tuned for weekly winner announcements. </p>
                        </div>
                        <!--End list-block-->
                        <!--video-block-->
                        <div class="video-block">
                            <img src= "{{ URL::to('/FrontEnd/images/play-icon.png') }}" class="play-video-icons">
                            <h3 class="video-block-text">Watch The Video</h3>
                        </div>
                        <!--End video-block-->

                        <!--btn for sign up-->
                        <a href="{{route('signup')}}" type="button" class="signup-btn"><h3 class="m-0 p-0" style="font-size: 20px">SIGN UP NOW, IT’S FREE</h3></a>
                    </div>
                    <!--end working-data-list-->
                </div>
                <!--end leftbar-working-section-->
            </div>
            <!--end col-md-6-->
            <!--start col-md-6-->
            <div class="col-lg-6 p-0">
                <!--reward-section-->
                <div class="reward-section">  
                    <!--check-reminder step-1-->
                    <div class="check-reminder step-1">
                        <!--watch-icons-->
                        <div class="watch">
                            <img src= "{{ URL::to('/FrontEnd/images/watch.png') }}" 
                        </div> 
                        <!--reminder-text-->                   
                        <div class="reminder-text">
                            <span>Check Your Daily My Click Reminder.</span>
                        </div>
                        <!--elipse-->
                        <div class="elipse">1</div> 
                    </div>
                    <!-- End check-reminder step-1-->

                    <!--enter-link step-2-->
                    <div class="enter-link step-2">
                      <!--hand icon-->
                        <div class="hand-icon">
                            <img src="{{ URL::to('/FrontEnd/images/hand.png') }}"
                        </div>   
                        <!--link text-->                 
                        <div class="enter-link-text">
                            <span>Click the link and complete your free entry.</span>
                        </div>
                        <!--step-2-elipse-->
                        <div class="step-2-elipse">2</div> 
                    </div>
                    <!-- End enter-link step-2-->
                    <!--winner-announce step-3-->
                    <div class="winner-announce step-3">
                        <!--envelpe-icon-->
                        <div class="envelpe-icon">
                            <img src="{{ URL::to('/FrontEnd/images/envelpe.png') }}">
                        </div>
                        <!--reminder-text-->                    
                        <div class="reminder-text ">
                            <span>Check your etmails,we’ll anoounce winners daily.</span>
                        </div>
                        <!-- End step-3 elipse-->
                        <div class="step-3-elipse">3</div> 
                    </div>
                    <!-- End winner-announce step-3-->
                </div>
                <!-- End reward-section-->
            </div>
            <!--end  col-md-6-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end how raodeal work-->

<!--About Raodeals-->
<section class="about-us">
    <!--container-->
    <div class="container">
        <!--head-about-us-->
        <h2 class="head-about-us">About Raodeals</h2>
        <!--row-->
        <div class="row">
              <!--col-md-4-->
              <div class="col-md-12  col-lg-5">
                  <img src="{{ URL::to('/FrontEnd/images/girl.jpg') }}" class="girls">
              </div>
              <!--col-md-4-->
              <!--col-md-8-->
              <div class="col-md-12 col-lg-7">
                  <!--about-us-text-->
                  <p class="about-us-text">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.There are many variations of passages of Lorem Ipsum available.
                  </p>
                  <!--End about-us-text-->
                  <a href="#" class="read-more">Read more ...</a>
              </div>
              <!--end col-md-8-->

              <!--col-md-9-->
              <div class="col-md-12 col-lg-9">
                  <!--envelpe-text-->
                  <div class="envelpe-text">
                    After you register, you will receive an email daily from  Click Rewards. When you receive that email, you must open it and click on the link inside to be added to the daily drawing. 
                  </div>
                  <!--End envelpe-text-->

                  <!--envelpe-text-dark-->
                  <div class="envelpe-text-dark">
                    With drawings happening daily... there are numerous chances to win! 
                  </div>
                  <!-- End envelpe-text-dark-->
              </div>
              <!--end col-md-9-->

              <!--col-md-3-->
              <div class="col-md-12 col-lg-3">
                  <img src="{{ URL::to('/FrontEnd/images/card.png') }}" class="card-icon">
              </div>
              <!--end col-md-3-->
        </div>
        <!--End row-->
    </div>
    <!--end container--> 
</section>
<!--About Raodeals-->

<!--leadership board-->
<div class="leader-block">
    <div class="container">
        <!--head-leader-ship-->
        <h2 class="head-leader-ship">RaoDeals Leaderboard</h2>
        <!--row-->
        <div class="leadership-board">
        <div class="row">
            <!--col-md-6-->
            <div class="col-lg-6 p-0">
                <!--row-->
                <div class="row">

                      <!--col-md-3-->
                     <div class="col-md-3 pr-0">
                          <div class="" >
							<ul class="leadership-detail nav nav-tabs">
                             <li class="prev"><a data-toggle="tab" href="#yesterday">Yesterday</a></li>
							<li class="active-element active"><a  data-toggle="tab" href="#month">This Month</a></li>
							<li class="next"><a data-toggle="tab" href="#all_time">All Time</a></li>
						  </ul>
                          </div>
						  </div>
                     
                      <!--end col-md-3-->

                      <!--col-md-9-->
                      <div class="col-md-9 p-0">
                          <!--leftbar-->
						 
                          <div class="leftbar tab-content">
					  <div id="yesterday" class="tab-pane fade ">
					  @php
								$i = 1
							@endphp 
						 
							@foreach( $get_yesterday  as $data )  
							<div class="leadership-chart">
                                    <!---leadership-block-->
                                    <div class="leadership-block">
                                      <!--serial no-->
                                      <span class="serial-no-active">{{ $i }}</span>
                                      <!--leadership-chart-record-->
                                      <div class="leadership-chart-record">
                                          <!--circle-->
										  @if($data->user->photo)
                                          <div class="circle"> 
                                              <img src="{{ URL::asset('/uploads/users/'.$data->user->photo) }}" alt="img" height="35px" width="35px"
													 class="img-circle img-responsive pull-left"/>  
                                          </div>
										  @else
										  <div class="circle"> 
											   <img src="{{ URL::asset('/uploads/users/avatar.png') }}" alt="img" height="35px" width="35px"
													 class="img-circle img-responsive pull-left"/>  
										  </div>
										 @endif
                                          <!--circle-->
                                          <!--leader-ship- bar-->
                                          <div class="leader-bar">
                                              <div class="leader-name">
                                                  <span class="name">{{$data->user->first_name}}</span>
                                                  <span class="scores">{{$data->point}} Scores</span>
                                              </div>
                                              <div class="myprogress">
                                                  <div class="progress-bar mybar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:{{ $data->progress  }}%"> 
                                                  </div>
                                              </div>
                                          </div>
                                          <!--End leader-ship- bar-->
                                      </div>
                                      <!--End leadership-chart-record-->
                                    </div>
                                    <!---End leadership-block-->
                                </div>
									@php
									$i++
								@endphp
								@endforeach
					  </div>
					  <div id="month" class="tab-pane active">
					 @php
								$i = 1
							@endphp 
						 
							@foreach( $get_month  as $data1 )  
							<div class="leadership-chart">
                                    <!---leadership-block-->
                                    <div class="leadership-block">
                                      <!--serial no-->
                                      <span class="serial-no-active">{{ $i }}</span>
                                      <!--leadership-chart-record-->
                                      <div class="leadership-chart-record">
                                          <!--circle-->
										  @if($data1->user->photo)
                                          <div class="circle"> 
                                              <img src="{{ URL::asset('/uploads/users/'.$data1->user->photo) }}" alt="img" height="35px" width="35px"
													 class="img-circle img-responsive pull-left"/>  
                                          </div>
										  @else
										  <div class="circle"> 
											   <img src="{{ URL::asset('/uploads/users/avatar.png') }}" alt="img" height="35px" width="35px"
													 class="img-circle img-responsive pull-left"/>  
										  </div>
										 @endif
                                          <!--circle-->
                                          <!--leader-ship- bar-->
                                          <div class="leader-bar">
                                              <div class="leader-name">
                                                  <span class="name">{{$data1->user->first_name}}</span>
                                                  <span class="scores">{{$data1->point}} Scores</span>
                                              </div>
                                              <div class="myprogress">
                                                  <div class="progress-bar mybar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:{{ $data1->progress  }}%"> 
                                                  </div>
                                              </div>
                                          </div>
                                          <!--End leader-ship- bar-->
                                      </div>
                                      <!--End leadership-chart-record-->
                                    </div>
                                    <!---End leadership-block-->
                                </div>	@php
									$i++
								@endphp
								@endforeach
					</div>
					  <div id="all_time" class="tab-pane fade">
						 @php
								$i = 1
							@endphp 
						 
							@foreach( $get_all  as $data3 )  
							<div class="leadership-chart">
                                    <!---leadership-block-->
                                    <div class="leadership-block">
                                      <!--serial no-->
                                      <span class="serial-no-active">{{ $i }}</span>
                                      <!--leadership-chart-record-->
                                      <div class="leadership-chart-record">
                                          <!--circle-->
										  @if($data3->user->photo)
                                          <div class="circle"> 
                                              <img src="{{ URL::asset('/uploads/users/'.$data3->user->photo) }}" alt="img" height="35px" width="35px"
													 class="img-circle img-responsive pull-left"/>  
                                          </div>
										  @else
										  <div class="circle"> 
											   <img src="{{ URL::asset('/uploads/users/avatar.png') }}" alt="img" height="35px" width="35px"
													 class="img-circle img-responsive pull-left"/>  
										  </div>
										 @endif
                                          <!--circle-->
                                          <!--leader-ship- bar-->
                                          <div class="leader-bar">
                                              <div class="leader-name">
                                                  <span class="name">{{$data3->user->first_name}}</span>
                                                  <span class="scores">{{$data3->point}} Scores</span>
                                              </div>
                                              <div class="myprogress">
                                                  <div class="progress-bar mybar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:{{ $data3->progress  }}%"> 
                                                  </div>
                                              </div>
                                          </div>
                                          <!--End leader-ship- bar-->
                                      </div>
                                      <!--End leadership-chart-record-->
                                    </div>
                                    <!---End leadership-block-->
                                </div>	@php
									$i++
								@endphp
								@endforeach
					  </div>
						</div>
					   </div>
					  
                      <!--End col-md-9-->
                </div>
                <!--End row-->
            </div>
            <!--End col-md-6-->
            <!--start rightbar col-md-6-->
            <div class="col-lg-6">
                <!--rightbar-->
                <div class="rightbar">
                    <!--clik to win-->
                    <div class="click-to-win">
                        <img src="{{ URL::to('/FrontEnd/images/click-to-win.png') }}" class="clik-to-win-img">
                    </div>
                    <!--End clik to win-->
                </div>
                <!--End rightbar-->
            </div>
            <!--end rightbar col-md-6-->
        </div>
        </div>
    </div>
</div>
    <!--leadership board-->
	
	<!--get in touch-->
<section class="get-in-touch">
    <!--container-->
    <div class="container">
        <!--heading-->
        <h2 class="head-get-in-touch">Get In Touch</h2>
        <!--contact-us-block-->
        <div class="contact-us-block">
          <!--row-->
          <div class="row">
            <!--col-md-5 leftbar-contactus-->          
            <div class="col-md-5 leftbar-contact-us">
                <!--social-icons-->
                    <div class="social-icons">
                        <div class="elipse">
                          <i class="fa fa-facebook fa-icons"></i>
                        </div>
                        <div class="elipse">
                          <i class="fa fa-twitter fa-icons"></i>
                        </div>
                        <div class="elipse">
                          <i class="fa fa-google-plus fa-icons"></i>
                        </div>
                        <div class="elipse">
                          <i class="fa fa-instagram fa-icons"></i>
                        </div>
                    </div>
                    <!-- End social-icons-->
                    <h5 class="title-contactus">Contact us</h5>
                    <p class="contactus-text">
                      Lorem ipsum dolor sit amet, consectetur adipisctting elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    </p>
            </div>
            <!--leftbar-contactus-->

            <!--col-md-7-->
            <div class="col-md-7">
                <!--contactus-form-->
               <div class="contactus-form">
                    <form method="post" action="/contactus">
					{{ csrf_field() }}
                      
                      <div class="form-group contact-form-group">                       
                        <input type="text" name="name" class="form-control contact-form-control" placeholder="Full Name">
                      </div> 
					  <div class="form-group contact-form-group">                       
                        <input type="email" name="email" class="form-control contact-form-control" placeholder="Email">
                      </div>
						<div class="form-group contact-form-group">                       
                        <input type="text" name="subject" class="form-control contact-form-control" placeholder="Subject">
                      </div>
					<div class="form-group contact-form-group">                       
                        <input type="text" name="phone" class="form-control contact-form-control" 
                        placeholder="phone">          
                      </div>					  
                      <div class="form-group contact-form-group">                       
                        <textarea class="form-control contact-form-control" name="message" rows="4" placeholder="Message"></textarea>
                      </div>                      
                      <button type="submit" class="btn btn-submit" >Submit</button>
                    </form>
                </div>
                <!-- End contactus-form-->
            </div>
            <!-- End col-md-7-->
          </div>
          <!-- End row-->
        </div>
        <!-- End contact-us-block-->
    </div>
    <!-- End container-->
</section>
<!-- End get in touch-->

<!--our partners-->
<section class="our-partners-home">
    <!--container-->
    <div class="container">
        <!--row-->
        <div class="row">
            <!--col-md-3-->
            <div class="col-md-12 col-lg-3">
                <div class="our-partners-block">
                    <img src="{{ URL::to('/FrontEnd/images/partner-1.png') }}">
                </div>
            </div>
            <div class="col-md-12 col-lg-3">
                <div class="our-partners-block">
                    <img src="{{ URL::to('/FrontEnd/images/partner-2.png') }}">
                </div>
            </div>
            <div class="col-md-12 col-lg-3">
                <div class="our-partners-block">
                    <img src="{{ URL::to('/FrontEnd/images/partner-3.png') }}">
                </div>
            </div>
            <div class="col-md-12 col-lg-3">
                <div class="our-partners-block">
                    <img src="{{ URL::to('/FrontEnd/images/partner-4.png') }}">
                </div>
            </div>
            <!-- End col-md-3-->
        </div>
        <!-- End row-->
    </div>
    <!-- End container-->
</section>


    @if(count($HomePartners)>0)
        <section class="content-row-no-bg top-line">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="home-row-head">
                            <h2 class="heading">{{ trans('frontLang.partners') }}</h2>
                            <small>{{ trans('frontLang.partnersMsg') }}</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="partners_carousel slide" id="myCarousel" style="direction: ltr">
                        <div class="carousel-inner">
                            <div class="item active">
                                <ul class="thumbnails">
                                    <?php
                                    $ii = 0;
                                    $title_var = "title_" . trans('backLang.boxCode');
                                    $title_var2 = "title_" . trans('backLang.boxCodeOther');
                                    ?>

                                    @foreach($HomePartners as $HomePartner)
                                        <?php
                                        if ($HomePartner->$title_var != "") {
                                            $title = $HomePartner->$title_var;
                                        } else {
                                            $title = $HomePartner->$title_var2;
                                        }
                                        if ($HomePartner->webmasterSection->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                $section_url = url(trans('backLang.code') . "/" . $HomePartner->webmasterSection->$slug_var);
                                            } else {
                                                $section_url = url($HomePartner->webmasterSection->$slug_var);
                                            }
                                        } else {
                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                $section_url = url(trans('backLang.code') . "/" . $HomePartner->webmasterSection->name);
                                            } else {
                                                $section_url = url($HomePartner->webmasterSection->name);
                                            }
                                        }

                                        if ($ii == 6) {
                                            echo "
                                                    </ul>
                                </div><!-- /Slide -->
                                <div class='item'>
                                    <ul class='thumbnails'>
                                                    ";
                                            $ii = 0;
                                        }
                                        ?>
                                        <li class="col-sm-2">
                                            <div>
                                                <div class="thumbnail">
                                                    <img src="{{ URL::to('uploads/topics/'.$HomePartner->photo_file) }}"
                                                         data-placement="bottom" title="{{ $title }}"
                                                         alt="{{ $title }}">
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                        </li>
                                        <?php
                                        $ii++;
                                        ?>
                                    @endforeach

                                </ul>
                            </div><!-- /Slide -->
                        </div>
                        <nav>
                            <ul class="control-box pager">
                                <li><a data-slide="prev" href="#myCarousel" class=""><i
                                                class="fa fa-angle-left"></i></a></li>
                                {{--<li><a href="{{ url($section_url) }}">{{ trans('frontLang.viewMore') }}</a>--}}
                                {{--</li>--}}
                                <li><a data-slide="next" href="#myCarousel" class=""><i
                                                class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                        <!-- /.control-box -->

                    </div><!-- /#myCarousel -->
                </div>

            </div>

        </section>
    @endif

@endsection