@extends('frontEnd.layout')

@section('content')

<!--wraper-->
<div class="wrapper-signup">
    <!--container-->
    <div class="container">
        <!--wrapper-title-->
        <h1 class="wrapper-title">Sign Up</h1>
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
                    Create Your Account Today
                </div>
                <!--contactus-form-->
                <div class="contactus-form">
                    <form name="registerForm" id="registerForm" method="get" action="/storedata">
                        <label for="exampleFormControlInput1" class="title-signup">Personal Information</label>
                        <div class="form-group contact-form-group">                       
                            <input type="text" name="firstname" class="form-control contact-form-control" aria-describedby="emailHelp" 
                            placeholder="First Name" required>
                            <input type="text"  name="lastname" class="form-control contact-form-control-2" placeholder="Last Name" required>          
                        </div>
                        <div class="form-group contact-form-group">                       
                            <input type="Email" name="email" class="form-control contact-form-control" placeholder="Email" required>
                            <input type="text" name="phonno" class="form-control contact-form-control-2" placeholder="Phone No."    required >
                        </div> 

                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label checkbox-text" for="exampleCheck1">Signup For Newsletter</label>
                        </div>               

                        <label for="exampleFormControlInput1" class="title-signup">Password</label>
                        <div class="form-group contact-form-group">                       
                            <input type="Password" name="password" class="form-control contact-form-control" aria-describedby="emailHelp" 
                            placeholder="Password" id="password" required>
                            <input type="password" name="confirmpass" class="form-control contact-form-control-2" placeholder="Confirm Password" required>  
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck2">
                            <label class="form-check-label checkbox-text" for="exampleCheck2">
                                  I have read and agree to the Privacy Policy
                            </label>
                        </div>   
                        <button type="submit" class="btn btn-submit" >Submit</button>
                    </form>
                </div>
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