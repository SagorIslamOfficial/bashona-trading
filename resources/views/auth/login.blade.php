<!DOCTYPE html>

<html lang="en">
<head>
    <base href="./"/>
    <meta charset="utf-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport"/>
    <meta content="Bashona Trading Ltd" name="description"/>
    <meta content="bashonatrading.com" name="author"/>
    <meta content="Bashona Trading Ltd" name="keyword"/>

    <title>Login - Admin Dashboard - Bashona Trading Ltd</title>

    <link rel="shortcut icon" href="{{ asset('frontEnd/img/favicon.png') }}" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="{{ asset('frontEnd/img/favicon.png') }}">

    <!-- Main styles for this application-->
    <link href="{{ asset('backEnd/css/style.css') }}" rel="stylesheet"/>
    <link href="{{ asset('backEnd/css/examples.css') }}" rel="stylesheet"/>
</head>
<body>
<div class="bg-light min-vh-100 d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card-group d-block d-md-flex row">
                    <div class="card col-md-6 p-4 mb-0">

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
                    <div class="card col-md-6">
                        <img style="height: 350px; width: 400px;" src="{{ asset('backEnd/img/export-import.jpg') }}" alt="Login Form for bashonatrading.com">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CoreUI and necessary plugins-->
<script src="{{ asset('backEnd/vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
</body>
</html>
