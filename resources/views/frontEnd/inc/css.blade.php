<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') {{ config('app.name') }}</title>
    <meta name="keywords" content="Bashona Trading Ltd"/>
    <meta name="description" content="Bashona Trading Ltd">
    <meta name="author" content="bashonatrading.com">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontEnd/img/favicon.png') }}" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="{{ asset('frontEnd/img/favicon.png') }}">
    <!-- Mobile Metes -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <!-- Web Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&amp;display=swap" rel="stylesheet" type="text/css">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('frontEnd/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/vendor/magnific-popup/magnific-popup.min.css') }}">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('frontEnd/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/css/theme-elements.css') }}">
    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{ asset('frontEnd/css/skins/default.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontEnd/css/custom.css') }}">
    <!-- Head Libs -->
    <script src="{{ asset('frontEnd/vendor/modernizr/modernizr.min.js') }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-42715764-11"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-42715764-11');
    </script>
</head>
