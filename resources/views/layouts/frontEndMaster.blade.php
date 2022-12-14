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

        <!-- <a class="style-switcher-open-loader" href="#" data-base-path="" data-skin-src="" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="right" title="Style Switcher"><i class="fas fa-cogs"></i><div class="style-switcher-tooltip"><strong>Style Switcher</strong><p>Check out different color options and styles.</p></div></a>

    <a class="envato-buy-redirect" href="https://themeforest.net/checkout/from_item/4106987?license=regular&amp;support=bundle_6month&amp;ref=Okler" target="_blank" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="right" title="Buy Porto"><i class="fas fa-shopping-cart"></i></a>
    <a class="demos-redirect" href="index.html#demos" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="right" title="Demos"><img src="img/icons/demos-redirect.png" class="img-fluid" /></a> -->

        <!-- JS Start -->
        @include('frontEnd.inc.js')
        <!-- JS End -->

</body>
</html>
