@extends('frontEnd.layout')

@section('content')

<!--wraper-->
<div class="wrapper-signup">
    <!--container-->
    <div class="container">
        <!--wrapper-title-->
        <h1 class="wrapper-title">Log In</h1>
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
                    Login Here
                </div>
                <!--contactus-form-->
                <div class="contactus-form">
                    <form name="loginform" id="loginform" method="get" action="/checklogin">
                        <label for="exampleFormControlInput1" class="title-signup">Login Information</label>
                        <div class="form-group contact-form-group">                       
                            <input type="Email" name="useremail" class="form-control contact-form-control" placeholder="Email" autocomplete="off" required>
                            <input type="password" name="password" class="form-control contact-form-control-2" placeholder="Password"autocomplete="off" required>
                        </div>   
                        <button type="submit" class="btn btn-submit" >Submit</button>
                    </form>
                </div>
				 <a class="menu-items-in" href="{{ route("signupPage") }}">Click here to register your account</a>
                <!-- End contactus-form-->
            </div>
        </div>
    </div>
</div>



<!--our partners-->
<section class="our-partners-signup">
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