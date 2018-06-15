<meta charset="utf-8">
 <title>@yield('title') </title>
<meta name="description" content=""/>
<meta name="keywords" content=""/>
<meta name="author" content="{{ URL::to('') }}"/>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link href="{{ URL::asset('frontEnd/css/bootstrap.min.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('frontEnd/css/fancybox/jquery.fancybox.css') }}" rel="stylesheet">
<link href="{{ URL::asset('frontEnd/css/jcarousel.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('frontEnd/css/flexslider.css') }}" rel="stylesheet"/>



<link href="{{ URL::asset('frontEnd/css/color.css') }}" rel="stylesheet"/>

 
   
 <!--google font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    
    <!--fonts stylesheet--> 
<link href="{{ URL::asset('frontEnd/css/style.css') }}" rel="stylesheet"/>
 <!--custom css-->
<link href="{{ URL::asset('frontEnd/fonts/stylesheet.css') }}" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/app.css')}}">