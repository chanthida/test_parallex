<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jackson Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico')}}">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('template/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('template/css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.css')}}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ asset('template/css/flexslider.css')}}">
    <!-- Flaticons  -->
{{--    <link rel="stylesheet" href="{{ asset('template/fonts/flaticon/font/flaticon.css')}}">--}}
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('template/css/owl.theme.default.min.css')}}">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('template/css/style.css')}}">

    <!-- Modernizr JS -->
    <script src="{{ asset('template/js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]> -->
    <script src="{{ asset('template/js/respond.min.js')}}"></script>
    <!--[endif]-->
    <!-- jQuery -->
    <script src="{{ asset('template/js/jquery.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{ asset('template/js/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('template/js/bootstrap.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{ asset('template/js/jquery.waypoints.min.js')}}"></script>
    <!-- Flexslider -->
    <script src="{{ asset('template/js/jquery.flexslider-min.js')}}"></script>
    <!-- Owl carousel -->
    <script src="{{ asset('template/js/owl.carousel.min.js')}}"></script>
    <!-- Counters -->
    <script src="{{ asset('template/js/jquery.countTo.js')}}"></script>
    <!-- sticky -->
    <script src="{{ asset('template/js/jquery.sticky-kit.min.js')}}"></script>


    <!-- MAIN JS -->
    <script src="{{ asset('template/js/main.js')}}"></script>


</head>

<style>
    .navbarLogin {
        overflow: hidden;
        background-color: #333;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1002; /* move nav to the front of the content */
    }

    .navbarLogin a {
        float: right;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 10px 12px;
        text-decoration: none;
        font-size: 17px;
    }

    .navbarLogin a:hover {
        background: #ddd;
        color: black;
    }
</style>

<body>
<div class="navbarLogin">
    @if (Route::has('login'))
        @auth
        <a href="{{ url('/home') }}">Home</a>
    @else
        <a href="{{ route('login') }}">Login</a>
        @endauth
    @endif

</div>

            @yield('content')
</body>
</html>
