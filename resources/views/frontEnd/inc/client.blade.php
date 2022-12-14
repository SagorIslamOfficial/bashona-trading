<section id="clients" class="section section-background section-height-4 text-black border-0 m-0">
    <div class="container">

        <div class="row">
            <div class="col text-center">
                <h2 class="font-weight-bold  mb-2" style="color: #216c81 !important;">{{ $aboutUsHeadingAndSubText->headingAboutUsClient }}</h2>
                <p class="font-black">{{ $aboutUsHeadingAndSubText->subTextAboutUsClient }}</p>
            </div>
        </div>
        <div class="row text-center py-3 my-4">
            <div class="owl-carousel owl-theme carousel-center-active-item carousel-center-active-item-style-2 mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 4}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
                @foreach($clients as $client)
                    <div class="adb">
                        <img class="img-fluid client-img-custom-css" src="{{ asset('storage/client/' . $client->image) }}" alt="{{ $client->name }}">
                        <h3 class="pt-3 text-black text-4">{{ $client->name }}</h3>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
