

 <nav class="navbar navbar-expand-lg navbar-light  my-nav">
 <div class="container">

	 <a class="navbar-brand" href="#">
			
              <img src="{{url::asset('frontEnd/images/logo.png') }}" alt="Raodeals logo"> 
            </a>
	
 <div class="collapse navbar-collapse my-navbar" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mr-auto nav-menu">
   
              
                <li class="nav-item menu-items ">
                    <a class ="menu-items-in" href = "{{route('Home')}}">Home</a>
					<a class ="menu-items-in" href = "{{route('aboutus')}}">About Us</a>
					<a class ="menu-items-in" href = "{{route('contactsus')}}">Contact Us</a>
					<a class ="menu-items-in" href = "{{route('howitwork')}}">How it Work</a>
                </li>
          

    </ul>
	  <form class="form-inline header-right-part">
       @if(Sentinel::getUser())
       <div class="dropdown">
                      <a  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         @if(Sentinel::getUser()->photo)
                                <img src="{!! url('/').'/uploads/users/'.Sentinel::getUser()->photo !!}" alt="img" height="35px" width="35px"
                                     class="img-circle img-responsive pull-left user-img"/>
									 
          @else
                               <img src="{!! url('/').'/uploads/users/user.png'!!}" class="user-img" alt="img" height="35px" width="35px"
                                     class="img-circle img-responsive pull-left"/>
									
                           
          @endif
                      </a>
                      <div class="dropdown-menu users-dropbox" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item users-dropbox-items"  href="{{ route('profileEdit', Sentinel::getUser()->id) }}">Accounts Settings</a>
                        <a class="dropdown-item users-dropbox-items" href = "{{ route('getLogout') }}">Logout</a>
                      </div>
                    </div>
       
       
       @else
          
     <a class="btn-sign" type="signup" href = "{{ route('signup') }}">Signup</a>
      <a class="btn-login" type="login" data-toggle="modal" data-target="#mymodal">Login</a>
     @endif
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
	</div>

  </div>
</nav>