<footer id="footer" class="mt-0">
    <div class="container custom-foo">
        <div class="row custom-foo-inner">

            <div class="col-md-3 mb-4 mb-lg-0">
                <a href="{{ route('front-end-home') }}" class="logo pe-0 pe-lg-3">
                    <img alt="{{ $partial_header->logo }}" src="{{ asset('storage/partial_header/' . $partial_header->logo) }}" class="bottom-4" height="32">
                </a>
                <p class="mt-4 mb-2 text-color-light text-justify footer-padding-right">{{ $partial_header->text }}</p>
            </div>

            <div class="col-md-2">
                <h5 class="text-3 mb-3 pl-minus" style="color: #216c81;">Quick Links</h5>
                <ul class="list list-icons list-icons-sm">
                    @foreach($footerQuickLinks as $footerQuickLink)
                        <li><a href="{{ $footerQuickLink->link }}" class="link-hover-style-1 ms-1"> {{ $footerQuickLink->name }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="col-md-4">
                <h5 class="text-3 mb-3" style="color: #216c81;">Facebook Page</h5>
                {{--<ul class="list list-icons list-icons-sm">--}}
                <div style="width: 100%;">
                    <div class="fb-page"
                         data-href="{{ $footerSocialPageIntegration->page_link }}"
                         data-width=""
                         data-hide-cover="false"
                         data-show-facepile="false">
                    </div>
                </div>
            </div>

            <div class="col-md-3 cust-social">
                <h5 class="text-3 mb-3" style="color: #216c81;">CONTACT US</h5>
                <ul class="footer-social-icons social-icons m-0 mb-3">
                    @foreach($footerSocialLinks as $footerSocialLink)
                        <li class="social-icons-{{ $footerSocialLink->color }}"><a href="{{ $footerSocialLink->link }}" target="_blank"><i class="fab fa-{{ $footerSocialLink->name }} text-2"></i></a></li>
                    @endforeach
                </ul>

                {{-- Address from #contact page --}}
                @foreach($address as $add)
                    <div class="">
                        <h5 class="mt-4 mb-1" style="color: #216c81 !important;">{{ $add->office_location }}</h5>
                        <ul class="list list-icons text-white footer-address-modify">
                            <li><a href="tel:{{ $add->phone }}"><span>{{ $add->phone }}</span></a></li>
                            <li>{{ $add->address }}</li>
                        </ul>
                    </div>
                @endforeach

            </div>

        </div>
    </div>

    <div class="footer-copyright" style="background-color: #449fa2 !important;">
        <div class="container py-2">
            <div class="row py3">
                <div class="col d-flex align-items-center justify-content-center">
                    <p class="text-light"><strong>Bashona Trading Ltd.</strong> - © Copyright 2023. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>

</footer>
