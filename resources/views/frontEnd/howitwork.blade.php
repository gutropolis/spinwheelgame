@extends('frontEnd.layout')

@section('content')


<!--how it work-->
<div class="wrapper-work">
    <!--container-->
    <div class="container">
        <!--wrapper-title-->
        <h1 class="wrapper-title">How it works</h1>
        <!--End wrapper-title-->
    </div>
    <!--End container-->
</div>
<!--how it work-->

<!--how raodeals work-->
<section class="raodeals-work-section">
    <!--container-->
    <div class="container">
        <!--block-->
        <div class="raodeals-work-block">
            <div class="row">
                <div class="col-lg-4">
                    <div class="raodeals-title">
                        <p>How Does <span class="raodeal-active">Raodeals</span> works?</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <iframe class="video-box" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                    </iframe>
                </div>
            </div>
            <!--raodeals elements-->
            <div class="raodeals-work-elements">
                <div class="row">                    
                    <div class="col-lg-6">
                        <img src="/FrontEnd/images/i-phone.png" class="elements-images"> 
                    </div>
                    <div class="col-lg-6">
                        <div class="elements-content">
                            <div class="elements-title">
                                <img src="/FrontEnd/images/1.png">
                                <h5 class="title-heading">Check Your Daily My Click Reminder.</h5>
                            </div>
                            <p class="elements-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>                    
                </div>
            </div>

            <!--raodeals elements-->
            <div class="raodeals-work-elements mt-0">
                <div class="row">                                  
                    <div class="col-lg-6">
                        <div class="elements-content ml-0">
                            <div class="elements-title">
                                <img src="/FrontEnd/images/2.png">
                                <h5 class="title-heading ">Click the link and complete your free entry.</h5>
                            </div>
                            <p class="elements-text elements-text-2">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="/FrontEnd/images/mouse.png" class="elements-images"> 
                    </div>                    
                </div>
            </div>

            <!--raodeals elements-->
            <div class="raodeals-work-elements mt-0 pb-0">
                <div class="row">                
                    <div class="col-lg-6">
                        <img src="/FrontEnd/images/laptop.png" class="elements-images"> 
                    </div>
                    <div class="col-lg-6">
                        <div class="elements-content">
                            <div class="elements-title">
                                <img src="/FrontEnd/images/3.png">
                                <h5 class="title-heading mr-0 title-heading-3">Check your emails,we’ll anno-unce winners daily.</h5>
                            </div>
                            <p class="elements-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>                
                </div>
            </div>
            <!--End raodeals elements-->
        </div>
    </div>
    <!--End container-->
</section>
<!--End how raodeals work-->

<!--sign-up section-->
<section class="sign-up-section">
    <!--container-->
    <div class="container">
        <!--block-->
        <div class="raodeals-sign-up-block">
            <div class="sign-up-elements">
                <h3 class="main-title">Getting Something Exciting At Raodeals is easy as  <span class="raodeal-active">1-2-3.</span></h3>
                <p class="sign-up-content">
                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                </p>
                <a class="signup-button btn btn-default"" href=""><h3 class="m-0 p-0">Sign Up Now, It's Free</h3></a>
            </div>
        </div>
        <!--end blocks-->
    </div>
    <!--End container-->
</section>
<!--End sign-up section-->




<!--our partners-->
<section class="our-partners-work">
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