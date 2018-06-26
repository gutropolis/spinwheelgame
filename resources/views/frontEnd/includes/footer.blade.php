<!--footer-->
<footer class="footer">
    <!--container-->
    <div class="container">

        <!--footer-logo-->
        <div class="footer-logo">
          <a class="navbar-brand"  href="{{ route('Home') }} ">
                    @if(Helper::GeneralSiteSettings("style_logo_" . trans('backLang.boxCode')) !="")
                        <img alt="" src="{{ URL::to('uploads/settings/'.Helper::GeneralSiteSettings("footer_logo_" . trans('backLang.boxCode'))) }}">
                    @else
                        <img alt="" src="{{ URL::to('uploads/settings/nologo.png') }}">
                    @endif

                </a>   
        </div>
        <!--footer-logo-->

        <!--footer-navbar-->
        <div class="footer-navbar">
            <!-- nav-menu-->
                <ul class="footer-nav-menu">
                    <!-- menu-items-->
                    <li class="footer-menu-items">
                        <a class="menu-items-in" href="{{ route('Home') }}">Home <span class="sr-only">(current)</span></a>
                    </li>                  
                    <li class="footer-menu-items">
                       <a class="menu-items-in" href="{{ route('aboutus') }}">About Us </a>
                    </li>
                    <li class="footer-menu-items">
                          <a class="menu-items-in" href="{{ route('contactsus') }}">Contact Us </a>
                    </li>
                    <li class="footer-menu-items">
                         <a class="menu-items-in" href="{{ route('howitwork') }}">How It Work</a>
                    </li> 
					 <li class="footer-menu-items">
                         <a class="menu-items-in" href="{{ route('faq') }}">FAQ</a>
                    </li> 
                    
                    <!-- End  menu-items-->   
                </ul>
                <!-- End  nav-menu--> 
        </div>
        <!-- End footer-navbar-->
    </div>
    <!-- End container-->
	
	
</footer>
<!-- End footer-->