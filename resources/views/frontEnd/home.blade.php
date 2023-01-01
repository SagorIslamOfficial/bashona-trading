@php use Illuminate\Support\Str; @endphp
@extends('layouts.frontEndMaster')

@section('content')
    <!-- Owl Carousel Start -->

    <div class="owl-carousel-wrapper position-relative" style="height: 670px">

        <div
            class="owl-carousel dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0"
            data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': true, 'dotsVerticalOffset': '-75px', 'nav': true, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 9000, 'autoplayHoverPause': true, 'rewind': true}">

            <!-- Carousel Slide -->
            @foreach($sliders as $slider)
                <div class="position-relative overlay overlay-show overlay-op-5"
                     data-dynamic-height="['670px','670px','670px','550px','500px']"
                     style="background-image: url({{ asset('storage/slider/' . $slider->image) }}); background-size: cover; background-position: center; height: 90vh;">
                    <div class="container position-relative z-index-3 h-100">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col-lg-6">
                                <div class="d-flex flex-column align-items-center">
                                    <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation"
                                        data-appear-animation="fadeInDownShorter"
                                        data-plugin-options="{'minWindowWidth': 0}">

                                        {{ $slider->heading_text }}

                                    </h3>
                                    <p class="text-color-light font-weight-light opacity-7 text-center mt-2 mb-4"
                                       data-appear-animation="fadeInDownShorter"
                                       data-plugin-options="{'minWindowWidth': 0}">

                                        {{ $slider->sub_text }}

                                    </p>

                                    <a href="{{ $slider->link }}"
                                       class="btn custom-button btn-rounded font-weight-bold opacity-7 text-center mt-2 mb-4"
                                       data-appear-animation="fadeInDownShorter"
                                       data-plugin-options="{'minWindowWidth': 0}">Click Here For More!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <!-- Owl Carousel End -->

    <!-- About Us Start -->
    <section id="custom-color"
             class="section section-secondary border-0 py-0 m-0 appear-animation animated fadeIn appear-animation-visible"
             data-appear-animation="fadeIn" style="animation-delay: 100ms;">
        <div class="container">
            <div id="custom-padding"
                 class="row align-items-center justify-content-center justify-content-lg-between pb-lg-0">
                <div
                    class="col-lg-5 order-2 order-lg-1 pt-4 pt-lg-0 pb-5 pb-lg-0 mt-5 mt-lg-0 appear-animation animated fadeInRightShorter appear-animation-visible"
                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"
                    style="animation-delay: 200ms;">
                    <h2 class="font-weight-bold text-color-black text-7 mb-2 about_us_custom">{{ $aboutUs->heading }}</h2>
                    <p class="lead font-weight-light text-color-black text-4 text-justify">
                        {{ Str::limit($aboutUs->description, 300) }}
                    </p>
                    <a href="{{ $aboutUs->link }}" class="btn btn-dark-scale-2 btn-px-5 btn-py-2 text-2">LEARN MORE</a>
                </div>
                <div class="col-9 offset-lg-1 col-lg-5 order-1 order-lg-2">
                    <img class="img-fluid box-shadow-3 my-2 border-radius"
                         src="{{ asset('storage/about-us/about/' . $aboutUs->image) }}" alt="{{ $aboutUs->heading }}">
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->

    <!-- Companies Start -->
    <section id="services" class="section section-height-3 border-0 m-0 appear-animation"
             data-appear-animation="fadeIn">
        <div class="container my-3">
            <div class="row mb-5">
                <div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter"
                     data-appear-animation-delay="200">
                    <h2 class="font-weight-bold mb-2"
                        style="color: #216c81 !important;">{{ $companyHeadingAndSubText->headingCompanies }}</h2>
                    <p>{{ $companyHeadingAndSubText->subTextCompanies }}</p>
                </div>
            </div>
            <div class="row">
                <div class="featured-boxes featured-boxes-style-2">
                    <div class="row">

                        @foreach($companies as $company)
                            <div
                                class="col-md-6 col-lg-4 appear-animation animated fadeInRightShorter appear-animation-visible bg-hover-light border-radius-2 custom-padding-for-single-company"
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="900"
                                style="animation-delay: 900ms;">
                                <a class="text-decoration-none link-success" href="{{ $company->link }}">
                                    <div class="featured-box featured-box-effect-4">
                                        <div class="box-content">
                                            <img
                                                class="icon-featured icon-layers icons text-color-light bg-color-primary"
                                                src="{{ asset('storage/company/companies/' . $company->image) }}"
                                                alt="{{ $company->name }}">
                                            <h4 class="font-weight-bold">{{ $company->name }}</h4>
                                            <p class="px-3">{{ $company->text }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Companies End -->

    <!-- Services Start -->
    <div class="container py-2 mt-5">
        <div class="row mb-4">
            <div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter"
                 data-appear-animation-delay="200">
                <h2 class="font-weight-bold mb-2"
                    style="color: #216c81 !important;">{{ $serviceHeadingAndSubText->headingService }}</h2>
                <p>{{ $serviceHeadingAndSubText->subTextService }}</p>
            </div>
        </div>

        <ul id="portfolioPaginationFilter" class="nav nav-pills sort-source sort-source-style-3 justify-content-center"
            data-sort-id="bt_services" data-option-key="filter"
            data-plugin-options="{'layoutMode': 'fitRows', 'filter': '.art-venture'}">

            <li class="nav-item active" data-option-value=".art-venture"><a class="nav-link text-1 text-uppercase"
                                                                            href="#">art venture</a></li>
            <li class="nav-item" data-option-value=".tns"><a class="nav-link text-1 text-uppercase" href="#">tns</a>
            </li>
            <li class="nav-item " data-option-value=".bd-digital"><a class="nav-link text-1 text-uppercase" href="#">bd
                    digital</a></li>
            <li class="nav-item " data-option-value=".connect-to-fly"><a class="nav-link text-1 text-uppercase"
                                                                         href="#">connect to fly</a></li>
        </ul>

        <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
            <div id="portfolioPaginationWrapper" class="row portfolio-list sort-destination" data-sort-id="bt_services"
                 data-items-per-page="8">

                @foreach ($companyTnsServiceItems as $key => $companyTnsServiceItem)
                    <div class="col-sm-6 col-lg-3 isotope-item tns" style="position: absolute; left: 0px; top: 0px;">
                        <div class="portfolio-item">
                            <a href="{{ route('front-end-company-tns-service-details', $companyTnsServiceItem->slug) }}">
                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img
                                        src="{{ asset('storage/company/all-company/tns/service/item/' . $companyTnsServiceItem->image) }}"
                                        class="img-fluid border-radius-0" alt="{{ $companyTnsServiceItem->name }}">

                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">{{ $companyTnsServiceItem->name }}</span>
                                        <span class="thumb-info-type">{{ $companyTnsServiceItem->company }}</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon bg-dark opacity-8"><i
                                                class="fas fa-plus"></i></span>
                                    </span>
                                </span>
                            </span>
                            </a>
                        </div>
                    </div>
                @endforeach
                @foreach($companyArtVentureServiceItems as $key => $companyArtVentureServiceItem)
                    <div class="col-sm-6 col-lg-3 isotope-item art-venture"
                         style="position: absolute; left: 0px; top: 0px;">
                        <div class="portfolio-item">
                            <a href="{{ route('front-end-company-art-venture-service-details', $companyArtVentureServiceItem->slug) }}">
                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img
                                            src="{{ asset('storage/company/all-company/art-venture/service/item/' . $companyArtVentureServiceItem->image) }}"
                                            class="img-fluid border-radius-0"
                                            alt="{{ $companyArtVentureServiceItem->name }}">

                                        <span class="thumb-info-title">
                                            <span
                                                class="thumb-info-inner">{{ $companyArtVentureServiceItem->name }}</span>
                                            <span
                                                class="thumb-info-type">{{ $companyArtVentureServiceItem->company }}</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon bg-dark opacity-8"><i
                                                    class="fas fa-plus"></i></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                @endforeach
                @foreach($companyBdDigitalServiceItems as $companyBdDigitalServiceItem)
                    <div class="col-sm-6 col-lg-3 isotope-item bd-digital"
                         style="position: absolute; left: 0px; top: 0px;">
                        <div class="portfolio-item">
                            <a href="{{ route('front-end-company-bd-digital-service-details', $companyBdDigitalServiceItem->slug) }}">
                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img
                                        src="{{ asset('storage/company/all-company/bd-digital/service/item/' . $companyBdDigitalServiceItem->image) }}"
                                        class="img-fluid border-radius-0"
                                        alt="{{ $companyBdDigitalServiceItem->name }}">

                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">{{ $companyBdDigitalServiceItem->name }}</span>
                                        <span class="thumb-info-type">{{ $companyBdDigitalServiceItem->company }}</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon bg-dark opacity-8"><i
                                                class="fas fa-plus"></i></span>
                                    </span>
                                </span>
                            </span>
                            </a>
                        </div>
                    </div>
                @endforeach
                @foreach($companyConnectToFlyServiceItems as $companyConnectToFlyServiceItem)
                    <div class="col-sm-6 col-lg-3 isotope-item connect-to-fly"
                         style="position: absolute; left: 0px; top: 0px;">
                        <div class="portfolio-item">
                            <a href="{{ route('front-end-company-ctf-service-details', $companyConnectToFlyServiceItem->slug) }}">
                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img
                                        src="{{ asset('storage/company/all-company/connect-to-fly/service/item/' . $companyConnectToFlyServiceItem->image) }}"
                                        class="img-fluid border-radius-0"
                                        alt="{{ $companyConnectToFlyServiceItem->name }}">

                                    <span class="thumb-info-title">
                                        <span
                                            class="thumb-info-inner">{{ $companyConnectToFlyServiceItem->name }}</span>
                                        <span
                                            class="thumb-info-type">{{ $companyConnectToFlyServiceItem->company }}</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon bg-dark opacity-8"><i
                                                class="fas fa-plus"></i></span>
                                    </span>
                                </span>
                            </span>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col">
                    <div id="portfolioPagination" class="float-end"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->
@endsection
