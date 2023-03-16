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

    <script src="https://cdn.tiny.cloud/1/638r1s8j3adyh4boh2v1yg1z0kzee5vnfll0hbby4899vm4p/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Datatable CSS install -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap');
    </style>

    <style>
        td>p span {
            font-size: 16px !important;
        }
    </style>

    <!-- Main styles for this application-->
    <link href="{{ asset('backEnd/css/style.css') }}" rel="stylesheet">
</head>
