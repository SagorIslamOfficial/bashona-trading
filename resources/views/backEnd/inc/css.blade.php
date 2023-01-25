<head>
    <base href="./">
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport">
    <meta content="CoreUI - Open Source Bootstrap Admin Template" name="description">
    <meta content="Łukasz Holeczek" name="author">
    <meta content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard" name="keyword">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') {{ config('app.name') }}</title>

    <link href="{{ asset('backEnd/assets/favicon/favicon.png') }}" rel="icon" sizes="25x25" type="image/png"/>

    <meta content="#ffffff" name="msapplication-TileColor"/>
    <meta content="#ffffff" name="theme-color"/>

    <!-- Vendors styles-->
    <link href="{{ asset('backEnd/vendors/simplebar/css/simplebar.css') }}" rel="stylesheet">
    <link href="{{ asset('backEnd/css/vendors/simplebar.css') }}" rel="stylesheet">

    <!-- Datatable CSS install -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

    <!-- Main styles for this application-->
    <link href="{{ asset('backEnd/css/style.css') }}" rel="stylesheet">
</head>
