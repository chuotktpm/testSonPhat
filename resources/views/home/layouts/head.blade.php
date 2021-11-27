<!-- Meta Tag -->
@yield('meta')
<!-- Title Tag  -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title')</title>
<link href="{{asset('frontend/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('frontend/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('frontend/css/theme.css')}}" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!----webfonts---->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
<!----//webfonts---->
<script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<!--  jquery plguin -->
<!--start slider -->
<link rel="stylesheet" href="{{asset('frontend/css/fwslider.css')}}" media="all">
<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('frontend/js/css3-mediaqueries.js')}}"></script>
<script src="{{asset('frontend/js/fwslider.js')}}"></script>
<!--end slider -->
