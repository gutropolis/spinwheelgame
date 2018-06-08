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
                    Contact us
                </div>
                <!--contactus-form-->
                <div class="contactus-form">
                    <form>
                      <div class="form-group contact-form-group">                       
                        <input type="email" class="form-control contact-form-control" aria-describedby="emailHelp" 
                        placeholder="Name">
                        <input type="password" class="form-control contact-form-control-2" placeholder="Email">          
                      </div>
                      <div class="form-group contact-form-group">                       
                        <input type="password" class="form-control contact-form-control" placeholder="Subject">
                        <input type="password" class="form-control contact-form-control-2" placeholder="Phone No.">
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
                <div class="address-section-rightbar">
                    <div class="address-block">
                        <div class="home-address">
                            <div class="home-address-elements">
                                <div class="circle-home">
                                    <i class="material-icons address-icon">home</i>
                                </div>
                                <div class="content">01 Design Street, Coupon, Janua, America.</div>
                            </div>
                        </div>

                        <div class="home-address home-address-home">
                            <div class="home-address-elements">
                                <div class="circle ">
                                    <i class="fa fa-phone address-icon"></i>
                                </div>
                                <div class="content">
                                    <p class="m-0">(+555) 583-243-982</p> 
                                    <p class="m-0">(+555) 200-243-657</p>
                                </div>
                            </div>
                        </div>

                        <div class="home-address">
                            <div class="home-address-elements">
                                <div class="circle">
                                    <i class="fa fa-envelope-o address-icon"></i>
                                </div>
                                <div class="content">
                                    <p class="m-0">Email@address.com</p>
                                    <p class="m-0">info@address.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
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