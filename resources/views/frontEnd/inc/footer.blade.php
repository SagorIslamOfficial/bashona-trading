<footer id="footer" class="mt-0" style="background-color: #56c6ca !important; border-color: #56c6ca !important;">
    <div class="container custom-foo">
        <div class="row py-5 my-4 custom-foo-inner">

            <div class="col-md-3 mb-4 mb-lg-0">
                <a href="{{ route('front-end-home') }}" class="logo pe-0 pe-lg-3">
                    <img alt="{{ $partial_header->logo }}" src="{{ asset('storage/partial_header/' . $partial_header->logo) }}" class="bottom-4" height="32">
                </a>
                <p class="mt-2 mb-2 text-color-light text-justify">{{ $partial_header->text }}</p>
            </div>

            <div class="col-md-3">
                <h5 class="text-3 mb-3" style="color: #216c81; padding-left: 6%;">Quick Links</h5>
                <ul class="list list-icons list-icons-sm">
                    @foreach($footerQuickLinks as $footerQuickLink)
                        <li><a href="{{ $footerQuickLink->link }}" class="link-hover-style-1 ms-1"> {{ $footerQuickLink->name }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="col-md-3">
                <h5 class="text-3 mb-3" style="color: #216c81;">Tags</h5>
                <ul class="list list-icons list-icons-sm">
                    @foreach($footerTags as $footerTag)
                        <span class="pr-3"><a href="{{ $footerTag->link }}" class="link-hover-style-1 ms-1">{{ $footerTag->name }}</a></span>
                    @endforeach
                </ul>
            </div>

            <div class="col-md-3">
                <h5 class="text-3 mb-3" style="color: #216c81;">CONTACT US</h5>
                <ul class="footer-social-icons social-icons m-0">
                    @foreach($footerSocialLinks as $footerSocialLink)
                        <li class="social-icons-{{ $footerSocialLink->color }}"><a href="{{ $footerSocialLink->link }}" target="_blank"><i class="fab fa-{{ $footerSocialLink->name }} text-2"></i></a></li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>

    <div class="footer-copyright" style="background-color: #449fa2 !important;">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col d-flex align-items-center justify-content-center">
                    <p class="text-light"><strong>Bashona Trading Ltd.</strong> - © Copyright 2022. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>

</footer>
