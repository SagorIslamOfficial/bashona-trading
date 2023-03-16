<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('frontEnd.inc.css')

<body data-plugin-page-transition>
    <div class="body">

        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="{{ $footerSocialPageIntegration->version }}" nonce="{{ $footerSocialPageIntegration->nonce }}"></script>

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

        <!-- Insert Boostrap Modal in #about-us blade file -->
        @stack('modal')

    </div>

        <!-- JS Start -->
        @include('frontEnd.inc.js')
        <!-- JS End -->

    <script>
        !(function () {
            var e, t, n, a;
            window.MyAliceWebChat ||
            (((t = document.createElement("div")).id = "myAliceWebChat"),
                ((n = document.createElement("script")).type = "text/javascript"),
                (n.async = !0),
                (n.src = "https://myalice-widget.netlify.app/index.js"),
                (a = (e = document.body.getElementsByTagName("script"))[e.length - 1]).parentNode.insertBefore(n, a),
                a.parentNode.insertBefore(t, a),
                n.addEventListener("load", function () {
                    MyAliceWebChat.init({
                        selector: "myAliceWebChat",
                        number: "{{ $contactWhatsApp->number }}",
                        message: "{{ $contactWhatsApp->message }}",
                        color: "#{{ $contactWhatsApp->color }}",
                        channel: "wa",
                        boxShadow: "none",
                        text: "{{ $contactWhatsApp->text }}",
                        theme: "{{ $contactWhatsApp->theme }}",
                        position: "{{ $contactWhatsApp->position }}",
                        mb: "20px",
                        mx: "20px",
                        radius: "{{ $contactWhatsApp->radius }}",
                    });
                }));
        })();
    </script>

</body>
</html>
