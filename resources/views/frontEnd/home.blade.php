@extends('frontEnd.layout')

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
                        <button class="btn btn-default btn-subscribe" type="button">Subscribe</button>
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
                        <button class="signup-btn"><h3 class="m-0 p-0" style="font-size: 20px">SIGN UP NOW, IT’S FREE</h3></button>
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
                                <!--leader-ship-chart-->
                                <div class="leadership-chart">
                                    <!---leadership-block-->
                                    <div class="leadership-block">
                                      <!--serial no-->
                                      <span class="serial-no-active">1st</span>
                                      <!--leadership-chart-record-->
                                      <div class="leadership-chart-record">
                                          <!--circle-->
                                          <div class="circle">
                                              <img src="/FrontEnd/images/leadership-img-1.png">
                                          </div>
                                          <!--circle-->
                                          <!--leader-ship- bar-->
                                          <div class="leader-bar">
                                              <div class="leader-name">
                                                  <span class="name">John doe</span>
                                                  <span class="scores">200 Scores</span>
                                              </div>
                                              <div class="myprogress">
                                                  <div class="progress-bar mybar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                                  <span class="sr-only">85% Complete</span>
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
                                
                                <!-- leader-ship-chart-->
                                <div class="leadership-chart">
                                    <!--leadership-block-->
                                    <div class="leadership-block">
                                      <!--serial no-->
                                      <span class="serial-no">2nd</span>
                                      <!--leadership-chart-record-->
                                      <div class="leadership-chart-record">
                                          <!--circle-->
                                          <div class="circle">
                                              <img src="/FrontEnd/images/leadership-img-2.png">
                                          </div>
                                          <!--End circle-->
                                          <!--leader bar-->
                                          <div class="leader-bar">
                                              <div class="leader-name">
                                                  <span class="name">John doe</span>
                                                  <span class="scores">180 Scores</span>
                                              </div>
                                              <div class="myprogress">
                                                  <div class="progress-bar mybar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                  <span class="sr-only">70% Complete</span>
                                                  </div>
                                              </div>
                                          </div>
                                           <!--leader bar-->
                                      </div>
                                      <!--end leadership-chart-record-->
                                    </div>
                                    <!--end leadership-block-->
                                </div>
                                <!-- end leader-ship-chart-->

                                <!-- leader-ship-chart-->
                                <div class="leadership-chart">
                                    <!--leadership-block-->
                                    <div class="leadership-block">
                                      <!--serial-no-->
                                      <span class="serial-no">3rd</span>
                                      <!--leadership-chart-record-->
                                      <div class="leadership-chart-record">
                                          <div class="circle">
                                              <img src="/FrontEnd/images/leadership-img-3.png">
                                          </div>
                                          <!--leader bar-->
                                          <div class="leader-bar">
                                              <div class="leader-name">
                                                  <span class="name">Riya doe</span>
                                                  <span class="scores">140 Scores</span>
                                              </div>
                                              <div class="myprogress">
                                                  <div class="progress-bar mybar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width:55%">
                                                  <span class="sr-only">55% Complete</span>
                                                  </div>
                                              </div>
                                          </div>
                                          <!--end leader bar-->
                                      </div>
                                      <!--end leadership-chart-record-->
                                    </div>
                                    <!--end leadership-block-->
                                </div>
                                <!-- end leader-ship-chart-->

                                <!-- leader-ship-chart-->
                                <div class="leadership-chart">
                                    <!--leadership-block-->
                                    <div class="leadership-block">
                                      <span class="serial-no">4th</span>
                                      <!--leadership-chart-record-->
                                      <div class="leadership-chart-record">
                                          <div class="circle">
                                              <img src="/FrontEnd/images/leadership-img-4.png">
                                          </div>
                                          <!--leader bar-->
                                          <div class="leader-bar">
                                              <div class="leader-name">
                                                  <span class="name">John doe</span>
                                                  <span class="scores">90 Scores</span>
                                              </div>
                                              <div class="myprogress">
                                                  <div class="progress-bar mybar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width:45%">
                                                  <span class="sr-only">45% Complete</span>
                                                  </div>
                                              </div> 
                                          </div>
                                          <!--end leader bar-->
                                      </div>
                                      <!--end leadership-chart-record-->
                                    </div>
                                    <!--end leadership-block-->
                                </div>
                                <!-- end leader-ship-chart-->
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