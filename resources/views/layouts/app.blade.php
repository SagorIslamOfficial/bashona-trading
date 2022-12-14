<!DOCTYPE html>
<html lang="en">

    @include("backEnd.inc.css")

<body>

{{--Sidebar--}}
@include("backEnd.inc.sidebar")

<div class="wrapper d-flex flex-column min-vh-100 bg-light">
    <!--Header Start-->
    @include("backEnd.inc.header")
    <!--Header End-->

    <!--Main Body Content Start-->
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="card mb-4">
                    <div class="card-body">
                        @yield("content")
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Main Body Content End-->

    <!--Footer Start-->
    @include("backEnd.inc.footer")
    <!--Footer End-->
</div>


@include("backEnd.inc.js")

</body>
</html>
