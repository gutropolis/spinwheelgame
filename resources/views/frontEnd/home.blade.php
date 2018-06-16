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
				<form name="subscribeforms" id="subscribeforms" method="post" action="/subscribeform">
				 {{ csrf_field() }}
                <div class="input-group input-mail">
                   <!--form control--> 
                   <input type="email" name="subscribe_email" class="form-control btn-form-control" placeholder="Enter Your Email">
                   <!--input-group subscribe-btn-->
                   <span class="input-group-btn group-btn-subscribe">
                        <button class="btn btn-default btn-subscribe" >Subscribe</button>
                   </span>
                   <!--End input-group-->
                </div>
				</form>
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
							
                            <img src="/FrontEnd/images/checkbox.png" class="checkbox-icon">
                            <!--list-block-text-->
                            <p class="list-block-text">Check your daily email or sms text message. </p>
                        </div>
                        <!--list-block-->
                        <div class="list-block">
                            <img src="/FrontEnd/images/checkbox.png" class="checkbox-icon">
                            <p class="list-block-text">Click on the Link to complete your free entry. </p>
                        </div>
                        <!--list-block-->
                        <div class="list-block">
                            <img src="/FrontEnd/images/checkbox.png" class="checkbox-icon">
                            <p class="list-block-text">Earn points by simply answering a few questions.  </p>
                        </div>
                        <!--list-block-->
                        <div class="list-block">
                            <img src="/FrontEnd/images/checkbox.png" class="checkbox-icon">
                            <p class="list-block-text">Stay tuned for weekly winner announcements. </p>
                        </div>
                        <!--End list-block-->
                        <!--video-block-->
                        <div class="video-block">
                            <img src="/FrontEnd/images/play-icon.png" class="play-video-icons">
                            <h3 class="video-block-text">Watch The Video</h3>
                        </div>
                        <!--End video-block-->

                        <!--btn for sign up-->
                        <a href="{{ route('signup')}}" class="signup-btn" type="button"><h3 class="m-0 p-0" style="font-size: 20px">SIGN UP NOW, IT’S FREE</h3></a >
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
                            <img src="/FrontEnd/images/watch.png">
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
                            <img src="/FrontEnd/images/hand.png">
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
                            <img src="/FrontEnd/images/envelpe.png">
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
                  <img src="/FrontEnd/images/girl.jpg" class="girls">
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
                  <img src="/FrontEnd/images/card.png" class="card-icon">
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
                          <div class="leadership-detail">
                              <p class="prev">Yesterday</p>
                              <p class="active">This Month</p>
                              <p class="next">All Time</p>
                          </div>
                      </div>
                      <!--end col-md-3-->

                      <!--col-md-9-->
                      <div class="col-md-9 p-0">
                          <!--leftbar-->
                          <div class="leftbar">

							@php
								$i = 1
							@endphp
							
                            @foreach ($maximumPoint as $mxpoint)
                            @foreach ($userdetails as $user)
		
                              @if ($user->id == $mxpoint->user_id)							  
   
                                <!--leader-ship-chart-->
                                <div class="leadership-chart">
                                    <!---leadership-block-->
                                    <div class="leadership-block">
                                      <!--serial no-->
                                      <span class="serial-no-active">{{ $i }}</span>
                                      <!--leadership-chart-record-->
                                      <div class="leadership-chart-record">
                                          <!--circle-->
                                          <div class="circle"> 
                                              <img src="{{ URL::asset('/uploads/users/'.$user->photo) }}">
                                          </div>
                                          <!--circle-->
                                          <!--leader-ship- bar-->
                                          <div class="leader-bar">
                                              <div class="leader-name">
                                                  <span class="name">{{$user->first_name}}</span>
                                                  <span class="scores">{{$mxpoint->maxcount}} Scores</span>
                                              </div>
                                              <div class="myprogress">
                                                  <div class="progress-bar mybar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:{{ $mxpoint->progress  }}%"> 
                                                  </div>
                                              </div>
                                          </div>
                                          <!--End leader-ship- bar-->
                                      </div>
                                      <!--End leadership-chart-record-->
                                    </div>
                                    <!---End leadership-block-->
                                </div>
                                <!--End leader-ship-chart-->
								@php
									$i++
								@endphp
                                 @endif
                               @endforeach
                               @endforeach
                                
                               
                          </div>
                          <!--End leftbar-->
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
                        <img src="/FrontEnd/images/click-to-win.png" class="clik-to-win-img">
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
                        <input type="email" name="email" class="form-control contact-form-control" aria-describedby="emailHelp" 
                        placeholder="Email">          
                      </div>
                      <div class="form-group contact-form-group">                       
                        <input type="text" name="name" class="form-control contact-form-control" placeholder="Full Name">
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
                    <img src="/FrontEnd/images/partner-1.png">
                </div>
            </div>
            <div class="col-md-12 col-lg-3">
                <div class="our-partners-block">
                    <img src="/FrontEnd/images/partner-2.png">
                </div>
            </div>
            <div class="col-md-12 col-lg-3">
                <div class="our-partners-block">
                    <img src="/FrontEnd/images/partner-3.png">
                </div>
            </div>
            <div class="col-md-12 col-lg-3">
                <div class="our-partners-block">
                    <img src="/FrontEnd/images/partner-4.png">
                </div>
            </div>
            <!-- End col-md-3-->
        </div>
        <!-- End row-->
    </div>
    <!-- End container-->
</section>

    <!--@if(count($HomeTopics)>0)
        <section class="content-row-bg">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="home-row-head">
                            <h2 class="heading">{{ trans('frontLang.homeContents1Title') }}</h2>
                            <small>{{ trans('frontLang.homeContents1desc') }}</small>
                        </div>
                        <div class="row">
                            
							/*
                            $title_var = "title_" . trans('backLang.boxCode');
                            $title_var2 = "title_" . trans('backLang.boxCodeOther');
                            $details_var = "details_" . trans('backLang.boxCode');
                            $details_var2 = "details_" . trans('backLang.boxCodeOther');
                            $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
                            $slug_var2 = "seo_url_slug_" . trans('backLang.boxCodeOther');
                            $section_url = "";
                            ?>
                            @foreach($HomeTopics as $HomeTopic)
                                <?php
                                if ($HomeTopic->$title_var != "") {
                                    $title = $HomeTopic->$title_var;
                                } else {
                                    $title = $HomeTopic->$title_var2;
                                }
                                if ($HomeTopic->$details_var != "") {
                                    $details = $details_var;
                                } else {
                                    $details = $details_var2;
                                }
                                if ($HomeTopic->webmasterSection->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                        $section_url = url(trans('backLang.code') . "/" . $HomeTopic->webmasterSection->$slug_var);
                                    } else {
                                        $section_url = url($HomeTopic->webmasterSection->$slug_var);
                                    }
                                } else {
                                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                        $section_url = url(trans('backLang.code') . "/" . $HomeTopic->webmasterSection->name);
                                    } else {
                                        $section_url = url($HomeTopic->webmasterSection->name);
                                    }
                                }

                                if ($HomeTopic->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                        $topic_link_url = url(trans('backLang.code') . "/" . $HomeTopic->$slug_var);
                                    } else {
                                        $topic_link_url = url($HomeTopic->$slug_var);
                                    }
                                } else {
                                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                        $topic_link_url = route('FrontendTopicByLang', ["lang" => trans('backLang.code'), "section" => $HomeTopic->webmasterSection->name, "id" => $HomeTopic->id]);
                                    } else {
                                        $topic_link_url = route('FrontendTopic', ["section" => $HomeTopic->webmasterSection->name, "id" => $HomeTopic->id]);
                                    }
                                }

                                ?>
                                <div class="col-lg-4">
                                    <h4>
                                        @if($HomeTopic->icon !="")
                                            <i class="fa {!! $HomeTopic->icon !!} "></i>&nbsp;
                                        @endif
                                        {{ $title }}
                                    </h4>
                                    @if($HomeTopic->photo_file !="")
                                        <img src="{{ URL::to('uploads/topics/'.$HomeTopic->photo_file) }}"
                                             alt="{{ $title }}"/>
                                    @endif

                                    {{--Additional Feilds--}}
                                    @if(count($HomeTopic->webmasterSection->customFields) >0)
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div>
                                                    <?php
                                                    $cf_title_var = "title_" . trans('backLang.boxCode');
                                                    $cf_title_var2 = "title_" . trans('backLang.boxCodeOther');
                                                    ?>
                                                    @foreach($HomeTopic->webmasterSection->customFields as $customField)
                                                        <?php
                                                        if ($customField->$cf_title_var != "") {
                                                            $cf_title = $customField->$cf_title_var;
                                                        } else {
                                                            $cf_title = $customField->$cf_title_var2;
                                                        }


                                                        $cf_saved_val = "";
                                                        $cf_saved_val_array = array();
                                                        if (count($HomeTopic->fields) > 0) {
                                                            foreach ($HomeTopic->fields as $t_field) {
                                                                if ($t_field->field_id == $customField->id) {
                                                                    if ($customField->type == 7) {
                                                                        // if multi check
                                                                        $cf_saved_val_array = explode(", ", $t_field->field_value);
                                                                    } else {
                                                                        $cf_saved_val = $t_field->field_value;
                                                                    }
                                                                }
                                                            }
                                                        }

                                                        ?>

                                                        @if(($cf_saved_val!="" || count($cf_saved_val_array) > 0) && ($customField->lang_code == "all" || $customField->lang_code == trans('backLang.boxCode')))
                                                            @if($customField->type ==12)
                                                                {{--Vimeo Video Link--}}
                                                            @elseif($customField->type ==11)
                                                                {{--Youtube Video Link--}}
                                                            @elseif($customField->type ==10)
                                                                {{--Video File--}}
                                                            @elseif($customField->type ==9)
                                                                {{--Attach File--}}
                                                            @elseif($customField->type ==8)
                                                                {{--Photo File--}}
                                                            @elseif($customField->type ==7)
                                                                {{--Multi Check--}}
                                                                <div class="row field-row">
                                                                    <div class="col-lg-3">
                                                                        {!!  $cf_title !!} :
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <?php
                                                                        $cf_details_var = "details_" . trans('backLang.boxCode');
                                                                        $cf_details_var2 = "details_en" . trans('backLang.boxCodeOther');
                                                                        if ($customField->$cf_details_var != "") {
                                                                            $cf_details = $customField->$cf_details_var;
                                                                        } else {
                                                                            $cf_details = $customField->$cf_details_var2;
                                                                        }
                                                                        $cf_details_lines = preg_split('/\r\n|[\r\n]/', $cf_details);
                                                                        $line_num = 1;
                                                                        ?>
                                                                        @foreach ($cf_details_lines as $cf_details_line)
                                                                            @if (in_array($line_num,$cf_saved_val_array))
                                                                                <span class="badge">
                                                            {!! $cf_details_line !!}
                                                        </span>
                                                                            @endif
                                                                            <?php
                                                                            $line_num++;
                                                                            ?>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            @elseif($customField->type ==6)
                                                                {{--Select--}}
                                                                <div class="row field-row">
                                                                    <div class="col-lg-3">
                                                                        {!!  $cf_title !!} :
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        <?php
                                                                        $cf_details_var = "details_" . trans('backLang.boxCode');
                                                                        $cf_details_var2 = "details_en" . trans('backLang.boxCodeOther');
                                                                        if ($customField->$cf_details_var != "") {
                                                                            $cf_details = $customField->$cf_details_var;
                                                                        } else {
                                                                            $cf_details = $customField->$cf_details_var2;
                                                                        }
                                                                        $cf_details_lines = preg_split('/\r\n|[\r\n]/', $cf_details);
                                                                        $line_num = 1;
                                                                        ?>
                                                                        @foreach ($cf_details_lines as $cf_details_line)
                                                                            @if ($line_num == $cf_saved_val)
                                                                                {!! $cf_details_line !!}
                                                                            @endif
                                                                            <?php
                                                                            $line_num++;
                                                                            ?>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            @elseif($customField->type ==5)
                                                                {{--Date & Time--}}
                                                                <div class="row field-row">
                                                                    <div class="col-lg-3">
                                                                        {!!  $cf_title !!} :
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        {!! date('Y-m-d H:i:s', strtotime($cf_saved_val)) !!}
                                                                    </div>
                                                                </div>
                                                            @elseif($customField->type ==4)
                                                                {{--Date--}}
                                                                <div class="row field-row">
                                                                    <div class="col-lg-3">
                                                                        {!!  $cf_title !!} :
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        {!! date('Y-m-d', strtotime($cf_saved_val)) !!}
                                                                    </div>
                                                                </div>
                                                            @elseif($customField->type ==3)
                                                                {{--Email Address--}}
                                                                <div class="row field-row">
                                                                    <div class="col-lg-3">
                                                                        {!!  $cf_title !!} :
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        {!! $cf_saved_val !!}
                                                                    </div>
                                                                </div>
                                                            @elseif($customField->type ==2)
                                                                {{--Number--}}
                                                                <div class="row field-row">
                                                                    <div class="col-lg-3">
                                                                        {!!  $cf_title !!} :
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        {!! $cf_saved_val !!}
                                                                    </div>
                                                                </div>
                                                            @elseif($customField->type ==1)
                                                                {{--Text Area--}}
                                                            @else
                                                                {{--Text Box--}}
                                                                <div class="row field-row">
                                                                    <div class="col-lg-3">
                                                                        {!!  $cf_title !!} :
                                                                    </div>
                                                                    <div class="col-lg-9">
                                                                        {!! $cf_saved_val !!}
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    {{--End of -- Additional Feilds--}}
                                    <p class="text-justify">{{ str_limit(strip_tags($HomeTopic->$details), $limit = 400, $end = '...') }}
                                        &nbsp; <a href="{{ $topic_link_url }}">{{ trans('frontLang.readMore') }}
                                            <i
                                                    class="fa fa-caret-{{ trans('backLang.right') }}"></i></a>
                                    </p>

                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="more-btn">
                            <a href="{{ url($section_url) }}" class="btn btn-theme"><i
                                        class="fa fa-angle-left"></i>&nbsp; {{ trans('frontLang.viewMore') }}
                                &nbsp;<i
                                        class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    @endif


    @if(count($HomePhotos)>0)
        <section class="content-row-no-bg">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="home-row-head">
                            <h2 class="heading">{{ trans('frontLang.homeContents2Title') }}</h2>
                            <small>{{ trans('frontLang.homeContents2desc') }}</small>
                        </div>
                        <div class="row">
                            <section id="projects">
                                <ul id="thumbs" class="portfolio">
                                    <?php
                                    $title_var = "title_" . trans('backLang.boxCode');
                                    $title_var2 = "title_" . trans('backLang.boxCodeOther');
                                    $section_url = "";
                                    $ph_count = 0;
                                    ?>
                                    @foreach($HomePhotos as $HomePhoto)
                                        <?php
                                        if ($HomePhoto->$title_var != "") {
                                            $title = $HomePhoto->$title_var;
                                        } else {
                                            $title = $HomePhoto->$title_var2;
                                        }
                                        if ($HomePhoto->webmasterSection->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                $section_url = url(trans('backLang.code') . "/" . $HomePhoto->webmasterSection->$slug_var);
                                            } else {
                                                $section_url = url($HomePhoto->webmasterSection->$slug_var);
                                            }
                                        } else {
                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                $section_url = url(trans('backLang.code') . "/" . $HomePhoto->webmasterSection->name);
                                            } else {
                                                $section_url = url($HomePhoto->webmasterSection->name);
                                            }
                                        }
                                        ?>
                                        @foreach($HomePhoto->photos as $photo)
                                            @if($ph_count<12)
                                                <li class="col-lg-2 design" data-id="id-0" data-type="web">
                                                    <div class="relative">
                                                        <div class="item-thumbs">
                                                            <a class="hover-wrap fancybox" data-fancybox-group="gallery"
                                                               title="{{ $title }}"
                                                               href="{{ URL::to('uploads/topics/'.$photo->file) }}">
                                                                <span class="overlay-img"></span>
                                                                <span class="overlay-img-thumb"><i
                                                                            class="fa fa-search-plus"></i></span>
                                                            </a>
                                                            <!-- Thumb Image and Description -->
                                                            <img src="{{ URL::to('uploads/topics/'.$photo->file) }}"
                                                                 alt="{{ $title }}">
                                                        </div>
                                                    </div>
                                                </li>
                                            @endif
                                            <?php
                                            $ph_count++;
                                            ?>
                                        @endforeach
                                    @endforeach

                                </ul>
                            </section>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="more-btn">
                                    <a href="{{ url($section_url) }}" class="btn btn-theme"><i
                                                class="fa fa-angle-left"></i>&nbsp; {{ trans('frontLang.viewMore') }}
                                        &nbsp;<i
                                                class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

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