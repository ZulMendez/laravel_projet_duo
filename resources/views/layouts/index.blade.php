<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | BusinessPerfect</title>

    <meta name="description" content="BusinessPerfect - Freebie HTML/CSS template based on Bootstrap">
    <meta name="author" content="Milan Savov">
    <meta name="keywords" content="html, css, twitter bootstrap, javascript, jquery, responsive">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Favicon
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/img/favicon.png')}}">
    
    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href={{asset('css/bootstrap.min.css')}} rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href={{asset('css/style.css')}} rel="stylesheet">
    <link href={{asset('css/responsive.css')}} rel="stylesheet">
    <link href={{asset('css/colors.css')}} rel="stylesheet">

    <link rel="stylesheet" href={{asset('css/app.css')}}>
</head>
<body>
    <section class="">
        @yield('content')
    </section>



    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
    <script src={{asset('js/bootstrap.min.js')}}></script>
    <script src={{asset('js/jquery.slicknav.min.js')}}></script>
    <script src={{asset('js/slick.min.js')}}></script>
    <script src={{asset('js/touchswipe.min.js')}}></script>
    <script src={{asset('js/skrollr.min.js')}}></script>
    <script src={{asset('js/jquery.countTo.min.js')}}></script>
    <script src={{asset('js/app.js')}}></script>
</body>
</html>