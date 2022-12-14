<header id="header" class="header-transparent header-semi-transparent header-semi-transparent-dark"
        data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 53, 'stickySetTop': '-53px'}">
    <div class="header-body border-top-0 bg-dark box-shadow-none">

        <div class="header-top header-top-borders header-top-light-2-borders">
            <div class="container h-100">
                <div class="header-row h-100">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item nav-item-borders py-2">
                                        <a href="tel:{{ $partial_header->number_1 }}"
                                           class="text-color-hover-light text-color-light"><i
                                                class="fab fa-whatsapp text-4 text-color-light" style="top: 0;"></i>
                                            {{ $partial_header->number_1 }}
                                        </a>
                                        @if($partial_header->number_2 == !null)
                                            <a href="tel:{{ $partial_header->number_2 }}"
                                               class="text-color-hover-light text-color-light"><i
                                                    class="fab fa-whatsapp text-4 text-color-light" style="top: 0;"></i>
                                                {{ $partial_header->number_2 }}
                                            </a>
                                        @endif
                                    </li>
                                    <li class="nav-item nav-item-borders py-2 d-none d-md-inline-flex">
                                        <a href="mailto:{{ $partial_header->email_1 }}" class="text-color-hover-light text-color-light">
                                            <i class="far fa-envelope text-4 text-color-light" style="top: 1px;"></i>
                                            <span class="__cf_email__" data-cfemail="107d71797c50747f7d71797e3e737f7d">{{ $partial_header->email_1 }}</span>
                                        </a>
                                        @if($partial_header->email_2 == !null)
                                            <a href="mailto:{{ $partial_header->email_2 }}" class="text-color-hover-light text-color-light">
                                                <i class="far fa-envelope text-4 text-color-light" style="top: 1px;"></i>
                                                <span class="__cf_email__" data-cfemail="107d71797c50747f7d71797e3e737f7d">{{ $partial_header->email_2 }}</span>
                                            </a>
                                        @endif
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- <div class="header-column justify-content-end">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item nav-item-borders py-2 pe-0 dropdown">
                                        <a class="nav-link text-color-hover-light" href="#" role="button" id="dropdownLanguage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="img/blank.gif" class="flag flag-us" alt="English" /> English
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLanguage">
                                            <a class="dropdown-item" href="#"><img src="img/blank.gif" class="flag flag-us" alt="English" /> English</a>
                                            <a class="dropdown-item" href="#"><img src="img/blank.gif" class="flag flag-sa" alt="Arabic" /> Saudi Arabic</a>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

        <div class="header-container header-container-height-sm container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ route('front-end-home') }}">
                                <img alt="{{ $partial_header->logo }}" height="48" data-sticky-width="82" data-sticky-height="40" src="{{ asset('storage/partial_header/' . $partial_header->logo) }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">

                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle {{ (request()->is('/')) ? 'active' : '' }}" href="{{ route('front-end-home') }}">Home</a></li>
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle {{ (request()->is('about-us')) ? 'active' : '' }}" href="{{ route('front-end-about-us') }}">About</a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle {{ (request()->is('company*')) ? 'active' : '' }}" href="{{ route('front-end-company') }}">Company</a>
                                            <ul class="dropdown-menu">
                                                <li class="{{ (request()->is('company/art-venture*')) ? 'active' : '' }}"><a class="dropdown-item" href="{{ route('front-end-company-art-venture') }}">Art Venture</a></li>
                                                <li class="{{ (request()->is('company/tns*')) ? 'active' : '' }}"><a class="dropdown-item" href="{{ route('front-end-company-tns') }}">TNS</a></li>
                                                <li class="{{ (request()->is('company/bd-digital*')) ? 'active' : '' }}"><a class="dropdown-item" href="{{ route('front-end-company-bd-digital') }}">BD Digital</a></li>
                                                <li class="{{ (request()->is('company/connect-to-fly*')) ? 'active' : '' }}"><a class="dropdown-item" href="{{ route('front-end-company-ctf') }}">Connect To Fly</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle {{ (request()->is('service*')) ? 'active' : '' }}" href="{{ route('front-end-service') }}">Service</a></li>
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle {!! (request()->is('gallery')) ? 'active' : '' !!}" href="{{ route('front-end-gallery') }}">Gallery</a></li>
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle {!! (request()->is('contact')) ? 'active' : '' !!}" href="{{ route('front-end-contact') }}">Contact</a></li>

                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                    data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
{{--                        <div class="header-nav-features header-nav-features-no-border header-nav-features-sm-show-border ms-3 ps-4 order-2 order-lg-3">--}}
{{--                            <div class="header-nav-feature header-nav-features-search d-inline-flex">--}}
{{--                                <a href="#" class="header-nav-features-toggle text-decoration-none"--}}
{{--                                   data-focus="headerSearch">--}}
{{--                                    <i class="icon-custom-color icons icon-magnifier header-nav-top-icon text-3-5 text-color-hover-primary font-weight-semibold top-3"></i>--}}
{{--                                </a>--}}
{{--                                <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed border-radius-0"--}}
{{--                                    id="headerSearchDropdown">--}}
{{--                                    <form role="search"--}}
{{--                                          action="https://www.okler.net/previews/porto/9.7.0/page-search-results.html"--}}
{{--                                          method="get">--}}
{{--                                        <div class="simple-search input-group">--}}
{{--                                            <input class="form-control text-1" id="headerSearch" name="q"--}}
{{--                                                   type="search" value="" placeholder="Search...">--}}
{{--                                            <button class="btn" type="submit">--}}
{{--                                                <i class="icons icon-magnifier header-nav-top-icon text-color-dark text-color-hover-primary top-2"></i>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
