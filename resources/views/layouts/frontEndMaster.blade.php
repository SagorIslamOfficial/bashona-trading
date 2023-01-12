<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('frontEnd.inc.css')

<body data-plugin-page-transition>
    <div class="body">

        <!-- Header Start -->
        @include('frontEnd.inc.header')
        <!-- Header End -->

        <div role="main" class="main single-product-css">

            <!-- Yield start -->
            @yield('content')
            <!-- Yield End -->

            <!-- Our Client Start -->
            @include('frontEnd.inc.client')
            <!-- Our Client End -->

        </div>

        <!-- Footer Start -->
        @include('frontEnd.inc.footer')
        <!-- Footer End -->

    </div>

        <!-- JS Start -->
        @include('frontEnd.inc.js')
        <!-- JS End -->

</body>
</html>
