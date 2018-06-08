<!--header-->
<header>    
      <!--my-nav-->
      <nav class="navbar navbar-expand-lg navbar-light  my-nav">
        <!--container-->
        <div class="container">
            <!--navbar brand -->
            <a class="navbar-brand" href="#">
			
              <img src="{{url::asset('frontEnd/images/logo.png') }}" alt="Raodeals logo"> 
            </a>
            <!-- End navbar brand -->

            <!--togller button - menu icon-->
            <button class="navbar-toggler menu-icon" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <!-- End togller button - menu icon-->

            <!--collapse navbar-->
            <div class="collapse navbar-collapse my-navbar" id="navbarSupportedContent">
                <!-- nav-menu-->
                <ul class="navbar-nav ml-auto mr-auto nav-menu">
                    <!-- menu-items-->
                    <li class="nav-item menu-items">
                        <a class="menu-items-in" href="{{ route("Home") }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="menu-items-in" href="{{ route("howitworkPage") }}">How It Works</a>
                    </li>                   
                    <li class="nav-item menu-items">
                        <a class="menu-items-in" href="{{ route("aboutPage") }}">About us</a>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="menu-items-in" href="{{ route("contactPage") }}">Contact us</a>
                    </li>
                    <!-- End  menu-items-->   
                </ul>
                <!-- End  nav-menu--> 
                <!--form inline-->               
                <form class="form-inline header-right-part">
                    <img src="{{url::asset('frontEnd/images/search.png') }}" class="search-icon">
                    <a class="btn-login" type="login" href="{{ route("loginPage") }}">Login</a>
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
                </form>
                <!--End form inline-->
            </div>
            <!-- End collapse navbar-->
        </div>
        <!-- End my-nav-->
    </nav>
    <!-- End container-->
</header>
<!-- End header-->