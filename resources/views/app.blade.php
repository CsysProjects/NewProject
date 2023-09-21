<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="M_Adnan">
    <title>@yield('title')</title>

    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" href="{{ URL::asset('asset/revolution/css/layers.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('asset/revolution/css/navigation.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('asset/revolution/css/settings.css') }}" type="text/css">



    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('asset/css/main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('asset/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('asset/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('asset/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('asset/css/animate.css') }}">
    <link
        href='https://fonts.googleapis.com/css?family=Martel+Sans:400,200,300,600,700,800,900|Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic'
        rel='stylesheet'>
</head>

<body>
    <header>
        @include('frontend.common.header')
    </header>

    <div id="wrap">

        @yield('content')


        @include('frontend.common.footer')

    </div>



    <script src="{{ URL::asset('asset/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ URL::asset('asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('asset/js/own-menu.js') }}"></script>
    <script src="{{ URL::asset('asset/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ URL::asset('asset/js/jquery.lighter.js') }}"></script>
    <script src="{{ URL::asset('asset/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('asset/js/smooth-scroll.js') }}"></script>


    <!-- RS5.0 Core JS Files -->
    <script src="{{ URL::asset('asset/revolution/js/jquery.themepunch.tools.min.js?rev=5.0') }}"></script>
    <script src="{{ URL::asset('asset/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0') }}"></script>
    <script src="{{ URL::asset('asset/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ URL::asset('asset/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('asset/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ URL::asset('asset/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ URL::asset('asset/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ URL::asset('asset/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ URL::asset('asset/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ URL::asset('asset/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ URL::asset('asset/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>


    <!-- Begin map script-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCf0dPCQ0C7oVF0WFKhuyz7v7oWei3vFPI "></script>
    <script src="{{ URL::asset('asset/js/main.js') }}"></script>
</body>

</html>
