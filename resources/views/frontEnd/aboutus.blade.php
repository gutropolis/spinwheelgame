@extends('frontEnd.layout')

@section('title', 'About Us | Raodeals')    

@section('content')


<!--how it work-->
<div class="wrapper-aboutus">
    <!--container-->
    <div class="container">
        <!--wrapper-title-->
        <h1 class="wrapper-title">About Us</h1>
        <!--End wrapper-title-->
    </div>
    <!--End container-->
</div>
<!--how it work-->

<div class="welcome-section">
    <div class="container">
        <div class="heading-section">
            <h2 class="heading-welcome">Welcome To Raodeals</h2>
            <p class="welcome-text">
            Raodeals is a new and exciting way to win prizes and redeem deals online with a simple click of a button. It’s absolutely free at no cost to you!
            </p>
        </div>
        <div class="welcome-block">
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <img src="{{ URL::to('/FrontEnd/images/about-welcome.png') }}" class="welcome-image">
                </div>
                <div class="col-md-12 col-lg-7">
                    <div class="welcome-title">Raodeals is a new and exciting way to win prizes and redeem deals online</div>
                    <p class="welocome-content">
                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                    </p>  
                    <div class="aboutus-list-elements">
                        <label class="about-us-list">
                          <img src= "{{ URL::to('/FrontEnd/images/dot.png') }}" class="dots">
                            <span class="list-elements">rich</span> 
                        </label>
                        <label class="about-us-list">
                          <img src="{{ URL::to('/FrontEnd/images/dot.png') }}" class="dots">
                            <span class="list-elements">abundant </span> 
                        </label>
                        <label class="about-us-list">
                          <img src="{{ URL::to('/FrontEnd/images/dot.png') }}" class="dots">
                            <span class="list-elements">exuberant</span> 
                        </label>
                        <label class="about-us-list">
                          <img src="{{ URL::to('/FrontEnd/images/dot.png') }}" class="dots">
                            <span class="list-elements">to add for free </span> 
                        </label>
                        
                        <label class="about-us-list">
                          <img src="{{ URL::to('/FrontEnd/images/dot.png') }}" class="dots">
                            <span class="list-elements">to throw in as bonus</span> 
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="imformation-aboutus">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="imformation-list">
                    <div class="title">
                        It’s absolutely free at no cost to you!
                    </div>
                    <label class="about-us-list">
                        <span class="dots">1.</span>
                        <span class="list-elements">To enter, simply complete the free registration form</span> 
                    </label>
                    <label class="about-us-list">
                        <span class="dots">2.</span>
                        <span class="list-elements">
                            After registration, you will receive daily newsletter emails from RáoDeals.open and  click on the “Claim Points” link to enter for the weekly and monthly  drawing.
                        </span> 
                    </label>
                    <label class="about-us-list">
                        <span class="dots">3.</span>
                        <span class="list-elements">
                            Each time you complete the quiz, you will accumulate points and every 100 points  enters you into the weekly drawing for prizes
                        </span> 
                    </label>
                    <label class="about-us-list">
                        <span class="dots">4.</span>
                        <span class="list-elements">
                            Weekly entries will automatically be entered into the monthly drawing.
                        </span> 
                    </label>
                    <label class="about-us-list">
                        <span class="dots">5.</span>
                        <span class="list-elements">
                            You may see our advertiser’s ads in the RáoDeals newsletter and website from time to time.They pay for the advertising so you get rewarded prizes for free.
                        </span> 
                    </label>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <img src="{{ URL::to('/FrontEnd/images/img123.png') }}" class="aboutus-rightside-image">
            </div>
        </div>
    </div>
</section>


<!--meet our agents-->
<div class="meet-our-agents">
    <div class="container">
        <h2 class="heading-meet-agents">Meet Our Agents</h2>
        <div class="row">
            <div class="col-md-12 col-lg-6 meet-our-agents-section">
                <div class="agents-block">
                    <div class="profile">
                        <img src="{{ URL::to('/FrontEnd/images/agent-1.jpg') }}" >
                    </div>
                    <div class="profile-detail">
                        <p class="name m-0">Susan jackson</p>
                        <p class="designation m-0">Agent</p>
                        <p class="about-agents">
                            It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.otam rem aperiam eaque ipsa quae ab illo invetore veritatis et quasi architecto beatae vitae dicta. 
                        </p>
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
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 meet-our-agents-section">
                
                <div class="agents-block">
                    <div class="profile">
                        <img src="{{ URL::to('/FrontEnd/images/agent-2.jpg') }}">
                    </div>
                    <div class="profile-detail">
                        <p class="name m-0">Ching Chang</p>
                        <p class="designation m-0">Agent</p>
                        <p class="about-agents">
                            It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.otam rem aperiam eaque ipsa quae ab illo invetore veritatis et quasi architecto beatae vitae dicta. 
                        </p>
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
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-6 meet-our-agents-section">
                <div class="agents-block">
                    <div class="profile">
                        <img src="{{ URL::to('/FrontEnd/images/agent-3.jpg') }}">
                    </div>
                    <div class="profile-detail">
                        <p class="name m-0">Susan jackson</p>
                        <p class="designation m-0">Agent</p>
                        <p class="about-agents">
                            It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.otam rem aperiam eaque ipsa quae ab illo invetore veritatis et quasi architecto beatae vitae dicta. 
                        </p>
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
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 meet-our-agents-section">
                
                <div class="agents-block">
                    <div class="profile">
                        <img src="{{ URL::to('/FrontEnd/images/agent-4.jpg') }}">
                    </div>

                    <div class="profile-detail">
                        <p class="name m-0">Ching Chang</p>
                        <p class="designation m-0">Agent</p>
                        <p class="about-agents">
                            It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.otam rem aperiam eaque ipsa quae ab illo invetore veritatis et quasi architecto beatae vitae dicta. 
                        </p>

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
                    </div>
                </div>  

            </div>

        </div>
    </div>
</div>
<!--meet our agents-->



<section class="testimonial">
    <div class="container">
        <h2 class="heading-testimonial">Don't take our word for it</h2>
        <div class="card-carousel-elements">
            <div class="card-carousel">
                <div class="testimonial-card">
                    <img src= "{{ URL::to('/FrontEnd/images/testimonial-1.png') }}" class="testimonial-profile">
                    <h6 class="testimonial-name">jane doe</h6>
                    <p class="review">
                        <i class="fa fa-quote-left quote-left"></i>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                    </p>
                </div>            
            </div>
        </div>        
    </div>
</section>


<!--our partners-->
<section class="our-partners">
    <!--container-->
    <div class="container">
        <!--row-->
        <div class="row">
            <!--col-md-3-->
            <div class="col-md-12 col-lg-3">
                <div class="our-partners-block">
                    <img src= "{{ URL::to('/FrontEnd/images/partner-1.png') }}">
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
                    <img src = "{{ URL::to('/FrontEnd/images/partner-4.png') }}">
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