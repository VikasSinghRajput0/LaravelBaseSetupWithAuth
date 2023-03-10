<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="/web/asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="/web/css/font-awesome.min.css" rel="stylesheet">


    <!-- Animate CSS -->
    <link href="/web/css/animate.css" rel="stylesheet">

    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="/web/css/owl.carousel.css">
    <link rel="stylesheet" href="/web/css/owl.theme.css">
    <link rel="stylesheet" href="/web/css/owl.transitions.css">

    <!-- Custom CSS -->
    <link href="/web/css/style.css" rel="stylesheet">
    <link href="/web/css/responsive.css" rel="stylesheet">

    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="/web/css/color/green.css">



    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="/web/css/color/green.css" title="green">
    <link rel="stylesheet" type="text/css" href="/web/css/color/light-red.css" title="light-red">
    <link rel="stylesheet" type="text/css" href="/web/css/color/blue.css" title="blue">
    <link rel="stylesheet" type="text/css" href="/web/css/color/light-blue.css" title="light-blue">
    <link rel="stylesheet" type="text/css" href="/web/css/color/yellow.css" title="yellow">
    <link rel="stylesheet" type="text/css" href="/web/css/color/light-green.css" title="light-green">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>


    <!-- Modernizer js -->
    <script src="/web/js/modernizr.custom.js"></script>


    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="index">

    @include('layouts.website.navbar')

    @yield('content')

    <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
    @include('layouts.website.footer')
    @include('layouts.website.scripts')
</body>

</html>