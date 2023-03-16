<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <a href="https://www.bashonatrading.com/" target="_blank"><img class="sidebar-brand-full" height="46"
                                                                       width="118"
                                                                       src="{{ asset('backEnd/img/bashona.png') }}"
                                                                       alt="Bashona Trading Ltd"></a>
        <a href="https://www.bashonatrading.com/" target="_blank"><img class="sidebar-brand-narrow" height="46"
                                                                       width="46"
                                                                       src="{{ asset('backEnd/img/bashona.png') }}"
                                                                       alt="Bashona Trading Ltd"></a>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">

        <li class="nav-item"><a class="nav-link {{ (request()->is('admin/dashboard')) ? 'active' : '' }}"
                                href="{{ route('admin') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}"></use>
                </svg>
                Dashboard</a>
        </li>

        <li class="nav-title">Components</li>

        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/brand.svg#cib-statuspage') }}"></use>
                </svg>
                Pages</a>
            <ul class="nav-group-items">
                <li class="nav-group">
                    <a class="nav-link {{ (request()->is('admin/partial-header*')) ? 'active' : '' }}"
                       href="{{ route('partial-header.index') }}">
                        <svg class="nav-icon">
                            <use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-home') }}"></use>
                        </svg>
                        Header</a>
                </li>
                <li class="nav-group">
                    <a class="nav-link {{ (request()->is('admin/slider*')) ? 'active' : '' }}"
                       href="{{ route('slider.index') }}">
                        <svg class="nav-icon">
                            <use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/brand.svg#cib-pagekit') }}"></use>
                        </svg>
                        Slider</a>
                </li>
                <li class="nav-group">
                    <a class="nav-link {{ (request()->is('admin/client*')) ? 'active' : '' }}"
                       href="{{ route('client.index') }}">
                        <svg class="nav-icon">
                            <use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-people') }}"></use>
                        </svg>
                        Client</a>
                </li>
                <li class="nav-group">
                    <a class="nav-link {{ (request()->is('admin/quick-link*')) ? 'active' : '' }}"
                       href="{{ route('quick-link.index') }}">
                        <svg class="nav-icon">
                            <use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-link') }}"></use>
                        </svg>
                        Quick Link</a>
                </li>
                <li class="nav-group">
                    <a class="nav-link {{ (request()->is('admin/footer-page-integration*')) ? 'active' : '' }}"
                       href="{{ route('footer-page-integration.index') }}">
                        <svg class="nav-icon">
                            <use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-tag') }}"></use>
                        </svg>
                        Social Page Integration</a>
                </li>
                <li class="nav-group">
                    <a class="nav-link {{ (request()->is('admin/footer-social*')) ? 'active' : '' }}"
                       href="{{ route('footer-social.index') }}">
                        <svg class="nav-icon">
                            <use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/brand.svg#cib-gnu-social') }}"></use>
                        </svg>
                        Footer Social Link</a>
                </li>
            </ul>
        </li>

        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/brand.svg#cib-about-me') }}"></use>
                </svg>
                About Us</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a
                        class="nav-link {{ (request()->is('admin/about-us/about-us*')) ? 'active' : '' }}"
                        href="{{ route('about-us.index') }}"><span class="nav-icon"></span>About</a></li>
                <li class="nav-item"><a
                        class="nav-link {{ (request()->is('admin/about-us/about-message*')) ? 'active' : '' }}"
                        href="{{ route('about-message.index') }}"><span class="nav-icon"></span>Message</a></li>
                <li class="nav-item"><a
                        class="nav-link {{ (request()->is('admin/about-us/about-team*')) ? 'active' : '' }}"
                        href="{{ route('about-team.index') }}"><span class="nav-icon"></span>Team</a></li>

                {{--Team Start--}}
                {{--                <li class="nav-group">--}}
                {{--                    <a class="nav-link nav-group-toggle" href="#">Team</a>--}}
                {{--                    <ul class="nav-group-items">--}}
                {{--                        <li class="nav-item"><a class="nav-link {{ (request()->is('admin/about-us/team-category*')) ? 'active' : '' }}" href="{{ route('team-category.index') }}"><span class="nav-icon"></span>Position</a></li>--}}
                {{--                        <li class="nav-item"><a class="nav-link {{ (request()->is('admin/about-us/team-member*')) ? 'active' : '' }}" href="{{ route('art-venture-team.index') }}"><span class="nav-icon"></span>Add Team Member</a></li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
                {{--Team End--}}

            </ul>
        </li>

        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/brand.svg#cib-circleci') }}"></use>
                </svg>
                Company</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a
                        class="nav-link {{ (request()->is('admin/company/add-company*')) ? 'active' : '' }}"
                        href="{{ route('add-company.index') }}"><span class="nav-icon"></span>Add Company</a></li>
                {{--Single Company Start--}}
                <li class="nav-group">
                    <a class="nav-link nav-group-toggle" href="#">Companies</a>
                    <ul class="nav-group-items">

                        {{--Art Venture Start--}}
                        <li class="nav-group">
                            <a class="nav-link nav-group-toggle" href="#">Art Venture</a>
                            <ul class="nav-group-items">
                                <li class="nav-item"><a
                                        class="nav-link {{ (request()->is('admin/company/art-venture-about*')) ? 'active' : '' }}"
                                        href="{{ route('art-venture-about.index') }}"><span class="nav-icon"></span>About
                                        Us</a></li>
                                <li class="nav-group">
                                    <a class="nav-link nav-group-toggle" href="#">Service</a>
                                    <ul class="nav-group-items">
                                        <li class="nav-item"><a
                                                class="nav-link {{ (request()->is('admin/company/art-venture/service/art-venture-category*')) ? 'active' : '' }}"
                                                href="{{ route('art-venture-category.index') }}"><span
                                                    class="nav-icon"></span>Category</a></li>
                                        <li class="nav-item"><a
                                                class="nav-link {{ (request()->is('admin/company/art-venture/service/art-venture-item*')) ? 'active' : '' }}"
                                                href="{{ route('art-venture-item.index') }}"><span
                                                    class="nav-icon"></span>Item</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link {{ (request()->is('admin/company/art-venture/team*')) ? 'active' : '' }}"
                                        href="{{ route('art-venture-team.index') }}"><span class="nav-icon"></span>Team</a>
                                </li>
                            </ul>
                        </li>
                        {{--Art Venture End--}}

                        {{--Tns Start--}}
                        <li class="nav-group">
                            <a class="nav-link nav-group-toggle" href="#">Tns</a>
                            <ul class="nav-group-items">
                                <li class="nav-item"><a
                                        class="nav-link {{ (request()->is('admin/company/tns/tns-about*')) ? 'active' : '' }}"
                                        href="{{ route('tns-about.index') }}"><span class="nav-icon"></span>About Us</a>
                                </li>
                                <li class="nav-group">
                                    <a class="nav-link nav-group-toggle" href="#">Service</a>
                                    <ul class="nav-group-items">
                                        <li class="nav-item"><a
                                                class="nav-link {{ (request()->is('admin/company/tns/service/tns-category*')) ? 'active' : '' }}"
                                                href="{{ route('tns-category.index') }}"><span class="nav-icon"></span>Category</a>
                                        </li>
                                        <li class="nav-item"><a
                                                class="nav-link {{ (request()->is('admin/company/tns/service/tns-item*')) ? 'active' : '' }}"
                                                href="{{ route('tns-item.index') }}"><span class="nav-icon"></span>Item</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link {{ (request()->is('admin/company/tns/tns-team*')) ? 'active' : '' }}"
                                        href="{{ route('tns-team.index') }}"><span class="nav-icon"></span>Team</a></li>
                            </ul>
                        </li>
                        {{--Tns End--}}

                        {{--BD Digital Start--}}
                        <li class="nav-group">
                            <a class="nav-link nav-group-toggle" href="#">BD Digital</a>
                            <ul class="nav-group-items">
                                <li class="nav-item"><a
                                        class="nav-link {{ (request()->is('admin/company/bd-digital/bd-digital-about*')) ? 'active' : '' }}"
                                        href="{{ route('bd-digital-about.index') }}"><span class="nav-icon"></span>About
                                        Us</a></li>
                                <li class="nav-group">
                                    <a class="nav-link nav-group-toggle" href="#">Service</a>
                                    <ul class="nav-group-items">
                                        <li class="nav-item"><a
                                                class="nav-link {{ (request()->is('admin/company/bd-digital/service/bd-digital-service-category*')) ? 'active' : '' }}"
                                                href="{{ route('bd-digital-service-category.index') }}"><span
                                                    class="nav-icon"></span>Category</a></li>
                                        <li class="nav-item"><a
                                                class="nav-link {{ (request()->is('admin/company/bd-digital/service/bd-digital-service-item*')) ? 'active' : '' }}"
                                                href="{{ route('bd-digital-service-item.index') }}"><span
                                                    class="nav-icon"></span>Item</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link {{ (request()->is('admin/company/bd-digital/bd-digital-team*')) ? 'active' : '' }}"
                                        href="{{ route('bd-digital-team.index') }}"><span
                                            class="nav-icon"></span>Team</a></li>
                            </ul>
                        </li>
                        {{--BD Digital End--}}

                        {{--Connect To Fly Start--}}
                        <li class="nav-group">
                            <a class="nav-link nav-group-toggle" href="#">Connect To Fly</a>
                            <ul class="nav-group-items">
                                <li class="nav-item"><a
                                        class="nav-link {{ (request()->is('admin/company/connect-to-fly/ctf-about*')) ? 'active' : '' }}"
                                        href="{{ route('ctf-about.index') }}"><span class="nav-icon"></span>About Us</a>
                                </li>
                                <li class="nav-group">
                                    <a class="nav-link nav-group-toggle" href="#">Service</a>
                                    <ul class="nav-group-items">
                                        <li class="nav-item"><a
                                                class="nav-link {{ (request()->is('admin/company/connect-to-fly/service/ctf-service-category*')) ? 'active' : '' }}"
                                                href="{{ route('ctf-service-category.index') }}"><span
                                                    class="nav-icon"></span>Category</a></li>
                                        <li class="nav-item"><a
                                                class="nav-link {{ (request()->is('admin/company/connect-to-fly/service/ctf-service-item*')) ? 'active' : '' }}"
                                                href="{{ route('ctf-service-item.index') }}"><span
                                                    class="nav-icon"></span>Item</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link {{ (request()->is('admin/company/connect-to-fly/ctf-team*')) ? 'active' : '' }}"
                                        href="{{ route('ctf-team.index') }}"><span class="nav-icon"></span>Team</a></li>
                            </ul>
                        </li>
                        {{--Connect To Fly End--}}

                    </ul>
                </li>
                {{--Single Company End--}}
            </ul>
        </li>

        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/brand.svg#cib-civicrm') }}"></use>
                </svg>
                Gallery</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a
                        class="nav-link {{ (request()->is('admin/gallery/gallery-category*')) ? 'active' : '' }}"
                        href="{{ route('gallery-category.index') }}"><span class="nav-icon"></span>Category</a></li>
                <li class="nav-item"><a
                        class="nav-link {{ (request()->is('admin/gallery/gallery-item*')) ? 'active' : '' }}"
                        href="{{ route('gallery-item.index') }}"><span class="nav-icon"></span>Item</a></li>
            </ul>
        </li>

        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-contact') }}"></use>
                </svg>
                Contact</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link {{ (request()->is('admin/contact/address*')) ? 'active' : '' }}"
                                        href="{{ route('address.index') }}"><span class="nav-icon"></span>Address</a>
                </li>
                <li class="nav-item"><a class="nav-link {{ (request()->is('admin/contact/map*')) ? 'active' : '' }}"
                                        href="{{ route('map.index') }}"><span class="nav-icon"></span>Map</a></li>
                <li class="nav-item"><a class="nav-link {{ (request()->is('admin/contact/whatsapp*')) ? 'active' : '' }}"
                                        href="{{ route('whatsapp.index') }}"><span class="nav-icon"></span>Whats App</a></li>
            </ul>
        </li>

        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/brand.svg#cib-sublime-text') }}"></use>
                </svg>
                Heading & Sub Text</a>
            <ul class="nav-group-items">
                <li class="nav-group">
                    <a class="nav-link nav-group-toggle" href="#">
                        <svg class="nav-icon">
                            <use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/brand.svg#cib-circleci') }}"></use>
                        </svg>
                        Company</a>
                    <ul class="nav-group-items">
                        <li class="nav-item"><a
                                class="nav-link {{ (request()->is('admin/heading-and-sub-text/companies/hst-companies*')) ? 'active' : '' }}"
                                href="{{ route('hst-companies.index') }}"><span class="nav-icon"></span>Companies</a>
                        </li>
                        <li class="nav-item"><a
                                class="nav-link {{ (request()->is('admin/heading-and-sub-text/companies/hst-art-venture*')) ? 'active' : '' }}"
                                href="{{ route('hst-art-venture.index') }}"><span class="nav-icon"></span>Art Venture</a>
                        </li>
                        <li class="nav-item"><a
                                class="nav-link {{ (request()->is('admin/heading-and-sub-text/companies/hst-bd-digital*')) ? 'active' : '' }}"
                                href="{{ route('hst-bd-digital.index') }}"><span class="nav-icon"></span>BD Digital</a>
                        </li>
                        <li class="nav-item"><a
                                class="nav-link {{ (request()->is('admin/heading-and-sub-text/companies/hst-tns*')) ? 'active' : '' }}"
                                href="{{ route('hst-tns.index') }}"><span class="nav-icon"></span>Tns</a>
                        </li>
                        <li class="nav-item"><a
                                class="nav-link {{ (request()->is('admin/heading-and-sub-text/companies/hst-connect-to-fly*')) ? 'active' : '' }}"
                                href="{{ route('hst-connect-to-fly.index') }}"><span class="nav-icon"></span>Connect To Fly</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"><a
                        class="nav-link {{ (request()->is('admin/heading-and-sub-text/hst-about-us*')) ? 'active' : '' }}"
                        href="{{ route('hst-about-us.index') }}"><span class="nav-icon"></span>About Us</a></li>
                <li class="nav-item"><a
                        class="nav-link {{ (request()->is('admin/heading-and-sub-text/hst-service*')) ? 'active' : '' }}"
                        href="{{ route('hst-service.index') }}"><span class="nav-icon"></span>Service</a></li>
                <li class="nav-item"><a
                        class="nav-link {{ (request()->is('admin/heading-and-sub-text/hst-gallery*')) ? 'active' : '' }}"
                        href="{{ route('hst-gallery.index') }}"><span class="nav-icon"></span>Gallery</a></li>
                <li class="nav-item"><a
                        class="nav-link {{ (request()->is('admin/heading-and-sub-text/hst-contact-us*')) ? 'active' : '' }}"
                        href="{{ route('hst-contact-us.index') }}"><span class="nav-icon"></span>Contact Us</a></li>


            </ul>
        </li>

    </ul>
</div>
