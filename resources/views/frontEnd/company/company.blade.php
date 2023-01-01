@extends('layouts.frontEndMaster')

@section('title', 'Companies |')

@section('content')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container-fluid">
            <div class="row align-items-center">

                <div class="col">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <div class="overflow-hidden pb-2">
                                <h1 class="text-dark font-weight-bold text-9 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="100" style="animation-delay: 100ms;">{{ $companyHeadingAndSubText->headingCompanies }}</h1>
                                <p class="pt-3">{{ $companyHeadingAndSubText->subTextCompanies }}</p>
                            </div>
                        </div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb d-block text-center appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="300" style="animation-delay: 300ms;">
                                <li><a href="{{ route('front-end-home') }}">Home</a></li>
                                <li class="active">Companies</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Companies Start -->
    <section id="services" class="section section-height-3 border-0 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container my-3">
            <div class="row">
                <div class="featured-boxes featured-boxes-style-2">
                    <div class="row">

                        @foreach($addCompanies as $addCompany)
                            <div class="col-md-6 col-lg-4 appear-animation animated fadeInRightShorter appear-animation-visible bg-hover-light border-radius-2 custom-padding-for-single-company" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="900" style="animation-delay: 900ms;">
                                <a class="text-decoration-none link-success" href="{{ $addCompany->link }}">
                                    <div class="featured-box featured-box-effect-4">
                                        <div class="box-content">
                                            <img class="icon-featured icon-layers icons text-color-light bg-color-primary" src="{{ asset('storage/company/companies/' . $addCompany->image) }}" alt="{{ $addCompany->name }}">
                                            <h4 class="font-weight-bold">{{ $addCompany->name }}</h4>
                                            <p class="px-3">{{ $addCompany->text }}</p>
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

    <!-- Our Full Team Start -->
    <div class="container py-2 mt-5">
        <div class="row mb-4">
            <div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter"
                 data-appear-animation-delay="200">
                <h2 class="font-weight-bold mb-2" style="color: #216c81 !important;">{{ $companyHeadingAndSubText->headingCompanyTeam }}</h2>
                <p>{{ $companyHeadingAndSubText->subTextCompanyTeam }}</p>
            </div>
        </div>

        <ul id="portfolioPaginationFilter" class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="bt_services" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '.art-venture'}">

            <li class="nav-item active" data-option-value=".art-venture"><a class="nav-link text-1 text-uppercase" href="#">art venture</a></li>
            <li class="nav-item" data-option-value=".tns"><a class="nav-link text-1 text-uppercase" href="#">tns</a></li>
            <li class="nav-item " data-option-value=".bd-digital"><a class="nav-link text-1 text-uppercase" href="#">bd digital</a></li>
            <li class="nav-item " data-option-value=".connect-to-fly"><a class="nav-link text-1 text-uppercase" href="#">connect to fly</a></li>
        </ul>

        <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
            <div id="portfolioPaginationWrapper" class="row portfolio-list sort-destination" data-sort-id="bt_services" data-items-per-page="8">

                @foreach($companyArtVentureTeams as $key => $companyArtVentureTeam)
                    <div class="col-sm-6 col-lg-3 isotope-item pb-4 art-venture">
                        <span class="thumb-info thumb-info-swap-content thumb-info-centered-icons thumb-info-wrapper-direction-aware">
                            <span class="thumb-info-wrapper">
                                <img src="{{ asset('storage/company/all-company/art-venture/team/' . $companyArtVentureTeam->image) }}" class="img-fluid" alt="{{ $companyArtVentureTeam->name }}">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">{{ $companyArtVentureTeam->name }}</span>
                                    <span class="thumb-info-type">{{ $companyArtVentureTeam->dignity }}</span>
                                </span>
                                <span class="thumb-info-wrapper-overlay" style="left: 0px; top: 100%; transition: all 300ms ease 0s;">
                                    <span class="thumb-info-action">
                                        <div class="card-body py-3 px-2">
                                            <div class="testimonial testimonial-style-4 border-0 box-shadow-none m-0 p-0 text-start">
                                                <div class="testimonial-author pb-3">
                                                    <p>
                                                        <strong class="font-weight-normal text-light">{{ $companyArtVentureTeam->name }}</strong>
                                                        <span class="font-weight-normal text-light">{{ $companyArtVentureTeam->dignity }}</span>
                                                    </p>
                                                </div>
                                                <div class="px-4 mx-2 pt-2 pb-3 text-light full-team-info">
                                                    <p class=" text-light">{{ $companyArtVentureTeam->description }}</p>
                                                    <h6 class="font-weight-regular text-light"><i class="fa-solid fa-envelope"></i>{{ $companyArtVentureTeam->email }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </span>
                            </span>
                        </span>
                    </div>
                @endforeach
                @foreach ($companyTnsTeams as $key => $companyTnsTeam)
                        <div class="col-sm-6 col-lg-3 isotope-item pb-4 tns">
                        <span class="thumb-info thumb-info-swap-content thumb-info-centered-icons thumb-info-wrapper-direction-aware">
                            <span class="thumb-info-wrapper">
                                <img src="{{ asset('storage/company/all-company/tns/team/' . $companyTnsTeam->image) }}" class="img-fluid" alt="{{ $companyTnsTeam->name }}">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">{{ $companyTnsTeam->name }}</span>
                                    <span class="thumb-info-type">{{ $companyTnsTeam->dignity }}</span>
                                </span>
                                <span class="thumb-info-wrapper-overlay" style="left: 0px; top: 100%; transition: all 300ms ease 0s;">
                                    <span class="thumb-info-action">
                                        <div class="card-body py-3 px-2">
                                            <div class="testimonial testimonial-style-4 border-0 box-shadow-none m-0 p-0 text-start">
                                                <div class="testimonial-author pb-3">
                                                    <p>
                                                        <strong class="font-weight-normal text-light">{{ $companyTnsTeam->name }}</strong>
                                                        <span class="font-weight-normal text-light">{{ $companyTnsTeam->dignity }}</span>
                                                    </p>
                                                </div>
                                                <div class="px-4 mx-2 pt-2 pb-3 text-light full-team-info">
                                                    <p class=" text-light">{{ $companyTnsTeam->description }}</p>
                                                    <h6 class="font-weight-regular text-light"><i class="fa-solid fa-envelope"></i>{{ $companyTnsTeam->email }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </span>
                            </span>
                        </span>
                        </div>
                @endforeach
                @foreach($companyBdDigitalTeams as $companyBdDigitalTeam)
                    <div class="col-sm-6 col-lg-3 isotope-item pb-4 bd-digital">
                        <span class="thumb-info thumb-info-swap-content thumb-info-centered-icons thumb-info-wrapper-direction-aware">
                            <span class="thumb-info-wrapper">
                                <img src="{{ asset('storage/company/all-company/bd-digital/team/' . $companyBdDigitalTeam->image) }}" class="img-fluid" alt="{{ $companyBdDigitalTeam->name }}">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">{{ $companyBdDigitalTeam->name }}</span>
                                    <span class="thumb-info-type">{{ $companyBdDigitalTeam->dignity }}</span>
                                </span>
                                <span class="thumb-info-wrapper-overlay" style="left: 0px; top: 100%; transition: all 300ms ease 0s;">
                                    <span class="thumb-info-action">
                                        <div class="card-body py-3 px-2">
                                            <div class="testimonial testimonial-style-4 border-0 box-shadow-none m-0 p-0 text-start">
                                                <div class="testimonial-author pb-3">
                                                    <p>
                                                        <strong class="font-weight-normal text-light">{{ $companyBdDigitalTeam->name }}</strong>
                                                        <span class="font-weight-normal text-light">{{ $companyBdDigitalTeam->dignity }}</span>
                                                    </p>
                                                </div>
                                                <div class="px-4 mx-2 pt-2 pb-3 text-light full-team-info">
                                                    <p class=" text-light">{{ $companyBdDigitalTeam->description }}</p>
                                                    <h6 class="font-weight-regular text-light"><i class="fa-solid fa-envelope"></i>{{ $companyBdDigitalTeam->email }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </span>
                            </span>
                        </span>
                    </div>
                @endforeach
                @foreach($companyConnectToFlyTeams as $companyConnectToFlyTeam)
                    <div class="col-sm-6 col-lg-3 isotope-item pb-4 connect-to-fly">
                        <span class="thumb-info thumb-info-swap-content thumb-info-centered-icons thumb-info-wrapper-direction-aware">
                            <span class="thumb-info-wrapper">
                                <img src="{{ asset('storage/company/all-company/connect-to-fly/team/' . $companyConnectToFlyTeam->image) }}" class="img-fluid" alt="{{ $companyConnectToFlyTeam->name }}">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">{{ $companyConnectToFlyTeam->name }}</span>
                                    <span class="thumb-info-type">{{ $companyConnectToFlyTeam->dignity }}</span>
                                </span>
                                <span class="thumb-info-wrapper-overlay" style="left: 0px; top: 100%; transition: all 300ms ease 0s;">
                                    <span class="thumb-info-action">
                                        <div class="card-body py-3 px-2">
                                            <div class="testimonial testimonial-style-4 border-0 box-shadow-none m-0 p-0 text-start">
                                                <div class="testimonial-author pb-3">
                                                    <p>
                                                        <strong class="font-weight-normal text-light">{{ $companyConnectToFlyTeam->name }}</strong>
                                                        <span class="font-weight-normal text-light">{{ $companyConnectToFlyTeam->dignity }}</span>
                                                    </p>
                                                </div>
                                                <div class="px-4 mx-2 pt-2 pb-3 text-light full-team-info">
                                                    <p class=" text-light">{{ $companyConnectToFlyTeam->description }}</p>
                                                    <h6 class="font-weight-regular text-light"><i class="fa-solid fa-envelope"></i>{{ $companyConnectToFlyTeam->email }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </span>
                            </span>
                        </span>
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
    <!-- Our Full Team End -->
@endsection
