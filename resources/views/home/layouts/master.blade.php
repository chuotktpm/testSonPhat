<!DOCTYPE html>
<html lang="zxx">
<head>
    @include('home.layouts.head')
</head>
<body class="js">

<!-- Preloader -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- End Preloader -->

@include('home.layouts.notification')
<!-- Header -->
@include('home.layouts.header')
<!--/ End Header -->
@yield('main-content')

@include('home.layouts.footer')

</body>
</html>
