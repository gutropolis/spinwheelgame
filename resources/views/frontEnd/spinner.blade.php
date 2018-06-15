@extends('frontEnd.layout')

@section('content')

 <div class="spinwheel-wrapper">
    	<div class="tophead">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <img href="index.html" src="/frontEnd/images/white raodeals logo.png" class="logo">
                
              </div>
              
            </div>
          </div>
        </div>

        <section class="spinwin text-center">
          <div class="container">
            <div class="row">

              <div class=" col-lg-6">
                  
                <div class="the_wheel" align="center" valign="center">
                  <div style="position: relative; width: 100%; height: 100%;">
                     <canvas id="canvas" width="434" height="434">
                    </canvas>
                  </div>
                </div>

                
              </div>

              <div class="col-lg-6">
                <div class="try-luck">
                  <h2 class="title">SPIN THE WHEEL AND <br>  GET EXCITED GIFTS</h2>
                    <button class="reward-btn spinwheel hvr-grow-shadow" alt="Spin" onClick="buttonClickFun(3);">Get <span class="red-btn">Your Reward !</span></button>
                   <button class="reward-btn playagain hvr-grow-shadow btn btn-primary btn-signup"" style="display: none;" alt="Spin" onClick="resetWheel();">Get Your Reward</button>
                </div>
              </div>
              
            </div>
          </div>
        </section>
        <!--End spin wheel section-->
        
    </div>


@endsection