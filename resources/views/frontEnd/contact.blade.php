@extends('frontEnd.layout')

@section('content')

<!--wraper-->
<div class="wrapper-contactus">
    <!--container-->
    <div class="container">
        <!--wrapper-title-->
        <h1 class="wrapper-title">Contact</h1>
        <!--End wrapper-title-->
    </div>
    <!--End container-->
</div>
<!--end wraper-->

<!--section contactus form-->
<div class="contactus">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="heading-contactus">
                     Get in touch with us by filling contact form below
                </div>
                <!--contactus-form-->
                <div class="contactus-form">
                     <form name="contactus" id="contactus" method="get" action="">
                      <div class="form-group contact-form-group">                       
                        <input type="text" class="form-control contact-form-control" aria-describedby="emailHelp" 
                        placeholder="Name">
                        <input type="email" class="form-control contact-form-control-2" placeholder="Email">          
                      </div>
                      <div class="form-group contact-form-group">                       
                        <input type="text" class="form-control contact-form-control" placeholder="Subject">
                        <input type="text" class="form-control contact-form-control-2" placeholder="Phone No.">
                      </div> 
                      <div class="form-group contact-form-group">                       
                        <textarea class="form-control contact-form-control" rows="7" placeholder="Message"></textarea>
                      </div>                      
                      <button type="submit" class="btn btn-submit" >Submit Now</button>
                    </form>
                </div>
                <!-- End contactus-form-->
            </div>
            <div class="col-md-12 col-lg-4">
              
                    
			<div class="p20">

                        <h4><i class="fa fa-envelope"></i> {{ trans('frontLang.contactDetails') }}</h4>
                        @if(Helper::GeneralSiteSettings("contact_t1_" . trans('backLang.boxCode')) !="")
                            <address>
                                <i class="fa fa-map-marker"></i>
                                <strong>{{ trans('frontLang.address') }}:</strong><br>
                                {{ Helper::GeneralSiteSettings("contact_t1_" . trans('backLang.boxCode')) }}
                            </address>
                        @endif
                        @if(Helper::GeneralSiteSettings("contact_t3") !="")
                            <p>
                                <i class="fa fa-phone"></i>
                                <strong>{{ trans('frontLang.callPhone') }}:</strong><br>
                                <span
                                        dir="ltr">{{ Helper::GeneralSiteSettings("contact_t3") }}</span>
                            </p>
                        @endif
                        @if(Helper::GeneralSiteSettings("contact_t5") !="")
                            <p>
                                <i class="fa fa-phone"></i>
                                <strong>{{ trans('frontLang.callMobile') }}:</strong><br>
                                <span
                                        dir="ltr">{{ Helper::GeneralSiteSettings("contact_t5") }}</span>
                            </p>
                        @endif
                        @if(Helper::GeneralSiteSettings("contact_t4") !="")
                            <p>
                                <i class="fa fa-fax"></i>
                                <strong>{{ trans('frontLang.callFax') }}:</strong><br>
                                <span
                                        dir="ltr">{{ Helper::GeneralSiteSettings("contact_t4") }}</span>
                            </p>
                        @endif
                        @if(Helper::GeneralSiteSettings("contact_t6") !="")
                            <p>
                                <i class="fa fa-envelope"></i>
                                <strong>{{ trans('frontLang.email') }}:</strong><br>
                                {{ Helper::GeneralSiteSettings("contact_t6") }}
                            </p>
                        @endif
                        @if(Helper::GeneralSiteSettings("contact_t7_" . trans('backLang.boxCode')) !="")
                            <p>
                                <i class="fa fa-clock-o"></i>
                                <strong>{{ trans('frontLang.callTimes') }}:</strong><br>
                                {{ Helper::GeneralSiteSettings("contact_t7_" . trans('backLang.boxCode')) }}
                            </p>
                        @endif
                    </div>

                  
             
            </div>
        </div>
    </div>
</div>
<!--section contactus form-->

<!--map-->
<section class="map">
        <img src="/FrontEnd/images/map.png" class="map-image">
</section>
<!--end map-->



<!--our partners-->
<section class="our-partners">
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
<!-- End our partners-->



@endsection