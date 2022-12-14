<!DOCTYPE html>

<html lang="en">
<head>
    <base href="./"/>
    <meta charset="utf-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport"/>
    <meta content="CoreUI - Open Source Bootstrap Admin Template" name="description"/>
    <meta content="Łukasz Holeczek" name="author"/>
    <meta content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard" name="keyword"/>
    <title>Login - Admin Dashboard - Bashona Trading Ltd</title>
    <link href="{{ asset('backEnd/assets/favicon/apple-icon-57x57.png') }}" rel="apple-touch-icon" sizes="57x57"/>
    <link href="{{ asset('backEnd/assets/favicon/apple-icon-60x60.png') }}" rel="apple-touch-icon" sizes="60x60"/>
    <link href="{{ asset('backEnd/assets/favicon/apple-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72"/>
    <link href="{{ asset('backEnd/assets/favicon/apple-icon-76x76.png') }}" rel="apple-touch-icon" sizes="76x76"/>
    <link href="{{ asset('backEnd/assets/favicon/apple-icon-114x114.png') }}" rel="apple-touch-icon" sizes="114x114"/>
    <link href="{{ asset('backEnd/assets/favicon/apple-icon-120x120.png') }}" rel="apple-touch-icon" sizes="120x120"/>
    <link href="{{ asset('backEnd/assets/favicon/apple-icon-144x144.png') }}" rel="apple-touch-icon" sizes="144x144"/>
    <link href="{{ asset('backEnd/assets/favicon/apple-icon-152x152.png') }}" rel="apple-touch-icon" sizes="152x152"/>
    <link href="{{ asset('backEnd/assets/favicon/apple-icon-180x180.png') }}" rel="apple-touch-icon" sizes="180x180"/>
    <link href="{{ asset('backEnd/assets/favicon/android-icon-192x192.png') }}" rel="icon" sizes="192x192"
          type="image/png"/>
    <link href="{{ asset('backEnd/assets/favicon/favicon-32x32.png') }}" rel="icon" sizes="32x32" type="image/png"/>
    <link href="{{ asset('backEnd/assets/favicon/favicon-96x96.png') }}" rel="icon" sizes="96x96" type="image/png"/>
    <link href="{{ asset('backEnd/assets/favicon/favicon-16x16.png') }}" rel="icon" sizes="16x16" type="image/png"/>
    <link href="{{ asset('backEnd/assets/favicon/manifest.json') }}" rel="manifest"/>
    <meta content="#ffffff" name="msapplication-TileColor"/>
    <meta content="{{ asset('backEnd/assets/favicon/ms-icon-144x144.png') }}" name="msapplication-TileImage"/>
    <meta content="#ffffff" name="theme-color"/>
    <!-- Vendors styles-->
    <link href="{{ asset('backEnd/vendors/simplebar/css/simplebar.css') }}" rel="stylesheet"/>
    <link href="{{ asset('backEnd/css/vendors/simplebar.css') }}" rel="stylesheet"/>
    <!-- Main styles for this application-->
    <link href="{{ asset('backEnd/css/style.css') }}" rel="stylesheet"/>
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css" rel="stylesheet"/>
    <link href="{{ asset('backEnd/css/examples.css') }}" rel="stylesheet"/>
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag("js", new Date());
        // Shared ID
        gtag("config", "UA-118965717-3");
        // Bootstrap ID
        gtag("config", "UA-118965717-5");
    </script>
</head>
<body>
<div class="bg-light min-vh-100 d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card-group d-block d-md-flex row">
                    <div class="card col-md-7 p-4 mb-0">

                        <div class="card-body">
                            <h1>{{ __('Login') }}</h1>
                            <p class="text-medium-emphasis">{{ __('Sign In to your account') }}</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="input-group mb-3">
                                    <span class="input-group-text"><svg class="icon"><use
                                                xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use></svg></span>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input-group mb-4">
                                    <span class="input-group-text"><svg class="icon"><use
                                                xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-lock-locked') }}"></use></svg></span>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
{{--                                    @if (Route::has('password.request'))--}}
{{--                                        <div class="col-6 text-end">--}}
{{--                                            <a class="btn btn-link px-0" type="button" href="{{ route('password.request') }}">--}}
{{--                                                {{ __('Forgot Your Password?') }}--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    @endif--}}
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="card col-md-5 text-white bg-primary py-5">
                        <div class="card-body text-center">
                            <div>
                                <h2>Sign up</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                                {{--                                <button ></button>--}}
                                <a class="btn btn-lg btn-outline-light mt-3" type="button"
                                   href="{{ route('register') }}">Register Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CoreUI and necessary plugins-->
<script src="{{ asset('backEnd/vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
<script src="{{ asset('backEnd/vendors/simplebar/js/simplebar.min.js') }}"></script>
<script></script>
</body>
</html>
