@extends('layouts.frontEndMaster')

@section('title', 'Service -')

@section('content')
    <!-- Breadcrumb Start -->
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md ">
        <div class="container-fluid">
            <div class="row align-items-center">

                <div class="col">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <div class="overflow-hidden pb-2">
                                <h1 class="text-dark font-weight-bold text-9 appear-animation animated maskUp appear-animation-visible"
                                    data-appear-animation="maskUp" data-appear-animation-delay="100"
                                    style="animation-delay: 100ms;">{{ $serviceHeadingAndSubText->headingService }}</h1>
                                <p class="pt-3">{{ $serviceHeadingAndSubText->subTextService }}</p>
                            </div>
                        </div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb d-block text-center appear-animation animated fadeIn appear-animation-visible"
                                data-appear-animation="fadeIn" data-appear-animation-delay="300"
                                style="animation-delay: 300ms;">
                                <li><a href="{{ route('front-end-home') }}">Home</a></li>
                                <li class="active">Service</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Services Start -->
    <div class="container py-2 mt-5">

        <ul id="portfolioPaginationFilter" class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="bt_services" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '.art-venture'}">

            <li class="nav-item active" data-option-value=".art-venture"><a class="nav-link text-1 text-uppercase" href="#">art venture</a></li>
            <li class="nav-item" data-option-value=".tns"><a class="nav-link text-1 text-uppercase" href="#">tns</a></li>
            <li class="nav-item " data-option-value=".bd-digital"><a class="nav-link text-1 text-uppercase" href="#">bd digital</a></li>
            <li class="nav-item " data-option-value=".connect-to-fly"><a class="nav-link text-1 text-uppercase" href="#">connect to fly</a></li>
        </ul>

        <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
            <div id="portfolioPaginationWrapper" class="row portfolio-list sort-destination" data-sort-id="bt_services" data-items-per-page="8">

                @foreach ($companyTnsServiceItems as $key => $companyTnsServiceItem)
                    <div class="col-sm-6 col-lg-3 isotope-item tns" style="position: absolute; left: 0px; top: 0px;">
                        <div class="portfolio-item">
                            <a href="{{ route('front-end-company-tns-service-details', $companyTnsServiceItem->slug) }}">
                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="{{ asset('storage/company/all-company/tns/service/item/' . $companyTnsServiceItem->image) }}" class="img-fluid border-radius-0" alt="{{ $companyTnsServiceItem->name }}">

                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">{{ $companyTnsServiceItem->name }}</span>
                                        <span class="thumb-info-type">{{ $companyTnsServiceItem->company }}</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                    </span>
                                </span>
                            </span>
                            </a>
                        </div>
                    </div>
                @endforeach
                @foreach($companyArtVentureServiceItems as $key => $companyArtVentureServiceItem)
                    <div class="col-sm-6 col-lg-3 isotope-item art-venture" style="position: absolute; left: 0px; top: 0px;">
                        <div class="portfolio-item">
                            <a href="{{ route('front-end-company-art-venture-service-details', $companyArtVentureServiceItem->slug) }}">
                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="{{ asset('storage/company/all-company/art-venture/service/item/' . $companyArtVentureServiceItem->image) }}" class="img-fluid border-radius-0" alt="{{ $companyArtVentureServiceItem->name }}">

                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">{{ $companyArtVentureServiceItem->name }}</span>
                                            <span class="thumb-info-type">{{ $companyArtVentureServiceItem->company }}</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                @endforeach
                @foreach($companyBdDigitalServiceItems as $companyBdDigitalServiceItem)
                    <div class="col-sm-6 col-lg-3 isotope-item bd-digital" style="position: absolute; left: 0px; top: 0px;">
                        <div class="portfolio-item">
                            <a href="{{ route('front-end-company-bd-digital-service-details', $companyBdDigitalServiceItem->slug) }}">
                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="{{ asset('storage/company/all-company/bd-digital/service/item/' . $companyBdDigitalServiceItem->image) }}" class="img-fluid border-radius-0" alt="{{ $companyBdDigitalServiceItem->name }}">

                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">{{ $companyBdDigitalServiceItem->name }}</span>
                                        <span class="thumb-info-type">{{ $companyBdDigitalServiceItem->company }}</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                    </span>
                                </span>
                            </span>
                            </a>
                        </div>
                    </div>
                @endforeach
                @foreach($companyConnectToFlyServiceItems as $companyConnectToFlyServiceItem)
                    <div class="col-sm-6 col-lg-3 isotope-item connect-to-fly" style="position: absolute; left: 0px; top: 0px;">
                        <div class="portfolio-item">
                            <a href="{{ route('front-end-company-ctf-service-details', $companyConnectToFlyServiceItem->slug) }}">
                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="{{ asset('storage/company/all-company/connect-to-fly/service/item/' . $companyConnectToFlyServiceItem->image) }}" class="img-fluid border-radius-0" alt="{{ $companyConnectToFlyServiceItem->name }}">

                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">{{ $companyConnectToFlyServiceItem->name }}</span>
                                        <span class="thumb-info-type">{{ $companyConnectToFlyServiceItem->company }}</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
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
