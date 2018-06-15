<?php
// Current Full URL
$fullPagePath = Request::url();
// Char Count of Backend folder Plus 1
$envAdminCharCount = strlen(env('BACKEND_PATH')) + 1;
// URL after Root Path EX: admin/home
$urlAfterRoot = substr($fullPagePath, strpos($fullPagePath, env('BACKEND_PATH')) + $envAdminCharCount);
?>
<?php
$category_title_var = "title_" . trans('backLang.boxCode');
$slug_var = "seo_url_slug_" . trans('backLang.boxCode');
$slug_var2 = "seo_url_slug_" . trans('backLang.boxCodeOther');
?>

 <nav class="navbar navbar-expand-lg navbar-light  my-nav">
 <div class="container">

	 <a class="navbar-brand" href="#">
			
              <img src="{{url::asset('frontEnd/images/logo.png') }}" alt="Raodeals logo"> 
            </a>
	
 <div class="collapse navbar-collapse my-navbar" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mr-auto nav-menu">
        <?php
        $link_title_var = "title_" . trans('backLang.boxCode');
        ?>
        @foreach($HeaderMenuLinks as $HeaderMenuLink)
            @if($HeaderMenuLink->type==3)
                <?php
                // Section with drop list
                ?>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown"
                       data-delay="0" data-close-others="true">{{ $HeaderMenuLink->$link_title_var }} <i
                                class="fa fa-angle-down"></i></a>

                    @if(count($HeaderMenuLink->webmasterSection->sections) >0)
                        {{--categories drop down--}}
                        <ul class="dropdown-menu">
                            @foreach($HeaderMenuLink->webmasterSection->sections as $MnuCategory)
                                @if($MnuCategory->father_id ==0)
                                    <li class="nav-item menu-items ">
                                        <?php
                                        if ($MnuCategory->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                        if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                        $Category_link_url = url(trans('backLang.code')."/" .$MnuCategory->$slug_var);
                                        }else{
                                        $Category_link_url = url($MnuCategory->$slug_var);
                                        }
                                        } else {
                                        if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                        $Category_link_url = route('FrontendTopicsByCatWithLang', ["lang"=>trans('backLang.code'),"section" => $HeaderMenuLink->webmasterSection->name, "cat" => $MnuCategory->id]);
                                        }else{
                                        $Category_link_url = route('FrontendTopicsByCat', ["section" => $HeaderMenuLink->webmasterSection->name, "cat" => $MnuCategory->id]);
                                        }
                                        }
                                        ?>

                                        <a class="menu-items-in " href="{{ $Category_link_url }}">
                                            @if($MnuCategory->icon !=="")
                                                <i class="fa {{$MnuCategory->icon}}"></i> &nbsp;
                                            @endif
                                            {{$MnuCategory->$category_title_var}}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    @elseif(count($HeaderMenuLink->webmasterSection->topics) >0)
                        {{--topics drop down--}}
                        <ul class="dropdown-menu">
                            @foreach($HeaderMenuLink->webmasterSection->topics as $MnuTopic)
                                @if($MnuTopic->expire_date =='' || ($MnuTopic->expire_date !='' && $MnuTopic->expire_date >= date("Y-m-d")))
                                    <li class="nav-item menu-items >
                                        <?php
                                        if ($MnuTopic->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                        if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                        $topic_link_url = url(trans('backLang.code')."/" .$MnuTopic->$slug_var);
                                        }else{
                                        $topic_link_url = url($MnuTopic->$slug_var);
                                        }
                                        } else {
                                        if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                        $topic_link_url = route('FrontendTopicByLang', ["lang"=>trans('backLang.code'),"section" => $HeaderMenuLink->webmasterSection->name, "id" => $MnuTopic->id]);
                                        }else{
                                        $topic_link_url = route('FrontendTopic', ["section" => $HeaderMenuLink->webmasterSection->name, "id" => $MnuTopic->id]);
                                        }
                                        }
                                        ?>
                                        <a  class="menu-items-in " href="{{ $topic_link_url }}">
                                            @if($MnuTopic->icon !=="")
                                                <i class="fa {{$MnuTopic->icon}}"></i> &nbsp;
                                            @endif
                                            {{$MnuTopic->$category_title_var}}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    @endif

                </li>
            @elseif($HeaderMenuLink->type==2)
                <?php
                // Section Link
                ?>
                <li class="nav-item menu-items >
                    <?php
                    if ($HeaderMenuLink->webmasterSection->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                    $mmnnuu_link = url(trans('backLang.code')."/" .$HeaderMenuLink->webmasterSection->$slug_var);
                    }else{
                    $mmnnuu_link = url($HeaderMenuLink->webmasterSection->$slug_var);
                    }
                    }else{
                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                    $mmnnuu_link =url(trans('backLang.code')."/" .$HeaderMenuLink->webmasterSection->name);
                    }else{
                    $mmnnuu_link =url($HeaderMenuLink->webmasterSection->name);
                    }
                    }
                    ?>
                    <a  class="menu-items-in " href="{{ $mmnnuu_link }}">{{ $HeaderMenuLink->$link_title_var }}</a>
                </li>
            @elseif($HeaderMenuLink->type==1)
                <?php
                // Direct Link
                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                $this_link_url = url(trans('backLang.code')."/" .$HeaderMenuLink->link);
                }else{
                $this_link_url = url($HeaderMenuLink->link);
                }
                ?>
                <li class="nav-item menu-items" ><a class= "menu-items-in"  href="{{ $this_link_url }}">{{ $HeaderMenuLink->$link_title_var }}</a></li>
            @else
                <?php
                // Main title ( have drop down menu )
                ?>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown"
                       data-delay="0" data-close-others="true">{{ $HeaderMenuLink->$link_title_var }}</a>
                    @if(count($HeaderMenuLink->subMenus) >0)
                        <ul class="dropdown-menu">
                            @foreach($HeaderMenuLink->subMenus as $subMenu)
                                @if($subMenu->type==3)
                                    <?php
                                    // sub menu - Section will drop list
                                    ?>
                                    <li class="nav-item menu-items"><a class="menu-items-in" href="javascript:void(0)" class="dropdown-toggle " data-toggle="dropdown"
                                           data-hover="dropdown" data-delay="0"
                                           data-close-others="true">{{ $subMenu->$link_title_var }}</a>
                                        <?php
                                        // make list
                                        // - check is categories list
                                        // - or pages list
                                        ?>

                                        @if(count($subMenu->webmasterSection->sections) >0)
                                            {{--categories drop down--}}
                                            <ul class="dropdown-menu">
                                                @foreach($subMenu->webmasterSection->sections as $SubMnuCategory)
                                                    @if($SubMnuCategory->father_id ==0)
                                                       <li class="nav-item menu-items">
                                                            <?php
                                                            if ($SubMnuCategory->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                            $Category_link_url = url(trans('backLang.code')."/" .$SubMnuCategory->$slug_var);
                                                            }else{
                                                            $Category_link_url = url($SubMnuCategory->$slug_var);
                                                            }
                                                            } else {
                                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                            $Category_link_url = route('FrontendTopicsByCatWithLang', ["lang"=>trans('backLang.code'),"section" => $subMenu->webmasterSection->name, "cat" => $SubMnuCategory->id]);
                                                            }else{
                                                            $Category_link_url = route('FrontendTopicsByCat', ["section" => $subMenu->webmasterSection->name, "cat" => $SubMnuCategory->id]);
                                                            }
                                                            }
                                                            ?>

                                                            <a class="menu-items-in" href="{{ $Category_link_url }}">
                                                                @if($SubMnuCategory->icon !=="")
                                                                    <i class="fa {{$SubMnuCategory->icon}}"></i> &nbsp;
                                                                @endif
                                                                {{$SubMnuCategory->$category_title_var}}</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        @elseif(count($subMenu->webmasterSection->topics) >0)
                                            {{--topics drop down--}}
                                            <ul class="dropdown-menu">
                                                @foreach($subMenu->webmasterSection->topics as $SubMnuTopic)
                                                    @if($SubMnuTopic->expire_date =='' || ($SubMnuTopic->expire_date !='' && $SubMnuTopic->expire_date >= date("Y-m-d")))
                                                        <li class="nav-item menu-items">
                                                            <?php
                                                            if ($SubMnuTopic->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                            $topic_link_url = url(trans('backLang.code')."/" .$SubMnuTopic->$slug_var);
                                                            }else{
                                                            $topic_link_url = url($SubMnuTopic->$slug_var);
                                                            }
                                                            } else {
                                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                            $topic_link_url = route('FrontendTopicByLang',["lang"=>trans('backLang.code'),"id"=>$SubMnuTopic->id]);
                                                            }else{
                                                            $topic_link_url = route('FrontendTopic',$SubMnuTopic->id);
                                                            }
                                                            }
                                                            ?>
                                                            <a href="{{ $topic_link_url }}">{{$SubMnuTopic->$category_title_var}}</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        @endif

                                    </li>
                                @elseif($subMenu->type==2)
                                    <?php
                                    // sub menu - Section Link
                                    ?>
                                   <li class="nav-item menu-items">
                                        <?php
                                        if ($subMenu->webmasterSection->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                        if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                        $mmnnuu_link = url(trans('backLang.code')."/" .$subMenu->webmasterSection->$slug_var);
                                        }else{
                                        $mmnnuu_link = url($subMenu->webmasterSection->$slug_var);
                                        }
                                        }else{
                                        if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                        $mmnnuu_link =url(trans('backLang.code')."/" .$subMenu->webmasterSection->name);
                                        }else{
                                        $mmnnuu_link =url($subMenu->webmasterSection->name);
                                        }
                                        }
                                        ?>
                                        <a class="menu-items-in"  href="{{ $mmnnuu_link }}">{{ $subMenu->$link_title_var }}</a>
                                    </li>
                                @elseif($subMenu->type==1)
                                    <?php
                                    // sub menu - Direct Link
                                    ?>
                                    <li class="nav-item menu-items"><a class="menu-items-in" href="{{ url($subMenu->link) }}">{{ $subMenu->$link_title_var }}</a>
                                    </li>
                                @else
                                    <?php
                                    // sub menu - Main title ( have drop down menu )
                                    ?>
                                     <li class="nav-item menu-items"><a class="menu-items-in" href="javascript:void(0)">{{ $subMenu->$link_title_var }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endif
        @endforeach

    </ul>
	  <form class="form-inline header-right-part">
       @if(Sentinel::getUser())
       <div class="dropdown">
                      <a  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         @if(Sentinel::getUser()->photo)
                                <img src="{!! url('/').'/uploads/users/'.Sentinel::getUser()->photo !!}" alt="img" height="35px" width="35px"
                                     class="img-circle img-responsive pull-left"/>
          @else
                               <img src="{!! url('/').'/uploads/users/avatar.png'!!}" alt="img" height="35px" width="35px"
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