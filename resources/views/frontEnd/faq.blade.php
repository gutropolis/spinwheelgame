@extends('frontEnd.layout')

@section('content')

<!--how it work-->
<div class="wrapper-faq">
    <!--container-->
    <div class="container">
        <!--wrapper-title-->
        <h1 class="wrapper-title">Frequently Asked Questions</h1>
        <!--End wrapper-title-->
    </div>
    <!--End container-->
</div>
<!--how it work-->

<section class="accodion-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="accodion-block">
                    <button class="accordion" data-toggle="collapse" data-target="#accordion-1">What is Lorem Ipsum?</button>
                    <div class="panel collapse" id="accordion-1">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                    </div>
                </div>
                <div class="accodion-block">
                    <button class="accordion" data-toggle="collapse" data-target="#accordion-2">What is Lorem Ipsum?</button>
                    <div class="panel collapse" id="accordion-2">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                    </div>
                </div>
                <div class="accodion-block">
                    <button class="accordion" data-toggle="collapse" data-target="#accordion-3">What is Lorem Ipsum?</button>
                    <div class="panel collapse" id="accordion-3">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                    </div>
                </div>
                <div class="accodion-block">
                    <button class="accordion" data-toggle="collapse" data-target="#accordion-4">What is Lorem Ipsum?</button>
                    <div class="panel collapse" id="accordion-4">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                    </div>
                </div>
                <div class="accodion-block">
                    <button class="accordion" data-toggle="collapse" data-target="#accordion-5">What is Lorem Ipsum?</button>
                    <div class="panel collapse" id="accordion-5">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                    </div>
                </div>
                <div class="accodion-block">
                    <button class="accordion" data-toggle="collapse" data-target="#accordion-6">What is Lorem Ipsum?</button>
                    <div class="panel collapse" id="accordion-6">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="accordion-rightblock">
                    <input class="search-input" type="search" name="search" placeholder="search...">
                    <h5 class="rightblock-title">CATEGORIES</h5>

                    <div class="categories">
                        <p class="categories-text">Lorem Ipsum available</p>
                        <div class="box">
                            <span class="number">09</span>
                        </div>
                    </div>
                    <div class="categories">
                        <p class="categories-text">Lorem Ipsum available</p>
                        <div class="box">
                            <span class="number">02</span>
                        </div>
                    </div>
                    <div class="categories">
                        <p class="categories-text">Lorem Ipsum available</p>
                        <div class="box">
                            <span class="number">10</span>
                        </div>
                    </div>

                     <div class="categories">
                        <p class="categories-text">Lorem Ipsum available</p>
                        <div class="box">
                            <span class="number">20</span>
                        </div>
                    </div>

                     <div class="categories">
                        <p class="categories-text">Lorem Ipsum available</p>
                        <div class="box">
                            <span class="number">05</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--get in touch-->
<section class="get-in-touch-faq">
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
                    <form>
                      <div class="form-group contact-form-group">                       
                        <input type="email" class="form-control contact-form-control" aria-describedby="emailHelp" 
                        placeholder="Name">          
                      </div>
                      <div class="form-group contact-form-group">                       
                        <input type="password" class="form-control contact-form-control" placeholder="Email">
                      </div> 
                      <div class="form-group contact-form-group">                       
                        <textarea class="form-control contact-form-control" rows="4" placeholder="Message"></textarea>
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
<section class="our-partners-faq">
    <!--container-->
    <div class="container">
        <!--row-->
        <div class="row">
            <!--col-md-3-->
            <div class="col-md-12 col-lg-3" >
                <div class="our-partners-block">
                    <img src="/FrontEnd/images/partner-1.png">
                </div>
            </div>
            <div class="col-md-12 col-lg-3" >
                <div class="our-partners-block">
                    <img src="/FrontEnd/images/partner-2.png">
                </div>
            </div>
            <div class="col-md-12 col-lg-3" >
                <div class="our-partners-block">
                    <img src="/FrontEnd/images/partner-3.png">
                </div>
            </div>
            <div class="col-md-12 col-lg-3" >
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