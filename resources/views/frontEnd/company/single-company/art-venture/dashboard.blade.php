@extends('layouts.frontEndMaster')

@section('title', 'Art Venture | Company -')

@section('content')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md ">
        <div class="container-fluid">
            <div class="row align-items-center">

                <div class="col">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <div class="overflow-hidden pb-2">
                                <h1 class="text-dark font-weight-bold text-9 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="100" style="animation-delay: 100ms;">
                                    {{ $artVentureHeadingAndSubText->headingArtVentureCompany }}</h1>
                                <p class="pt-3">{{ $artVentureHeadingAndSubText->subTextArtVentureCompany }}</p>
                            </div>
                        </div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb d-block text-center appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="300" style="animation-delay: 300ms;">
                                <li><a href="{{ route('front-end-home') }}">Home</a></li>
                                <li><a href="{{ route('front-end-company') }}">Company</a></li>
                                <li class="active">Art Venture</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- About Us Start -->
    <section id="custom-color" class="section section-secondary border-0 py-0 m-0 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" style="animation-delay: 100ms;">
        <div class="container">
            <div id="custom-padding" class="row align-items-center justify-content-center justify-content-lg-between pb-lg-0">
                <div class="col-lg-5 order-2 order-lg-1 pt-4 pt-lg-0 pb-5 pb-lg-0 mt-5 mt-lg-0 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                    <h2 class="font-weight-bold text-color-black text-7 mb-2 about_us_custom">{{ $companyArtVentureAbout->title }}</h2>
                    <p class="lead font-weight-regular text-color-black text-4 text-justify">{!! nl2br(e($companyArtVentureAbout->text)) !!}</p>
                </div>
                <div class="col-9 offset-lg-1 col-lg-5 order-1 order-lg-2">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ asset('storage/company/art-venture/about/' . $companyArtVentureAbout->image) }}" alt="{{ $companyArtVentureAbout->title }}">
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->

    <!-- Services Start -->
    <div id="projects" class="container">
        <div class="row justify-content-center pt-5 mt-5">
            <div class="col-lg-9 text-center">
                <div class="appear-animation" data-appear-animation="fadeInUpShorter">
                    <h2 class="font-weight-bold mb-2">{{ $artVentureHeadingAndSubText->headingArtVentureCompanyService }}</h2>
                    <p class="mb-4">{{ $artVentureHeadingAndSubText->subTextArtVentureCompanyService }}</p>
                </div>
            </div>
        </div>
        <div class="container py-2 mt-4 pb-5">
            <!-- Services Name Start -->

            <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="artVentureCompanyService" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '.{{ $cavsc->slug }}'}">

                @foreach($companyArtVentureServiceCategories as $key => $companyArtVentureServiceCategory)
                    <li @if ($key == 0) class="nav-item active" @else class="nav-item" @endif data-option-value=".{{ $companyArtVentureServiceCategory->slug }}"><a class="nav-link text-1 text-uppercase" href="#">{{ $companyArtVentureServiceCategory->name }}</a></li>
                @endforeach

            </ul>
            <!-- Services Name End -->
            <div class="sort-destination-loader mt-4 pt-2 sort-destination-loader-loaded">
                <div class="row portfolio-list sort-destination" data-sort-id="artVentureCompanyService" style="position: relative; height: 888px;">

                    @foreach($companyArtVentureServiceItems as $companyArtVentureServiceItem)
                        <div class="col-sm-6 col-lg-3 isotope-item {{ $companyArtVentureServiceItem->artVentureCategory->slug }}" style="position: absolute; left: 0px; top: 0px;">
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

                </div>
            </div>

        </div>
    </div>
    <!-- Services End -->

    <!-- Full Team of Particular Company Start -->
    <div class="container py-2 mt-5 mb-5">
        <div class="row mb-4">
            <div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <h2 class="font-weight-bold mb-2">{{ $artVentureHeadingAndSubText->headingArtVentureCompanyTeam }}</h2>
                <p>{{ $artVentureHeadingAndSubText->subTextArtVentureCompanyTeam }}</p>
            </div>
        </div>
        <div class=" sort-destination-loader-showing mt-4 pt-2">
            <div class="row portfolio-list">

                @foreach($companyArtVentureTeams as $key => $companyArtVentureTeam)
                    <div class="col-sm-6 col-lg-4 pb-4">
                        <span class="thumb-info thumb-info-swap-content thumb-info-centered-icons thumb-info-wrapper-direction-aware">
                            <span class="thumb-info-wrapper">
                                <img src="{{ asset('storage/company/all-company/art-venture/team/' . $companyArtVentureTeam->image) }}" class="img-fluid" alt="{{ $companyArtVentureTeam->name }}">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">{{ $companyArtVentureTeam->name }}</span>
                                    <span class="thumb-info-type">{{ $companyArtVentureTeam->position }}</span>
                                </span>
                                <span class="thumb-info-wrapper-overlay" style="left: 0px; top: 100%; transition: all 300ms ease 0s;">
                                    <span class="thumb-info-action">
                                        <div class="card-body py-3 px-2">
                                            <div class="testimonial testimonial-style-4 border-0 box-shadow-none m-0 p-0 text-start">
                                                <div class="testimonial-author pb-3">
                                                    <p><strong class="font-weight-normal text-light">{{ $companyArtVentureTeam->name }}</strong><span class="font-weight-normal text-light">{{ $companyArtVentureTeam->position }}</span></p>
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

            </div>
        </div>
    </div>
    <!-- Full Team of Particular Company End -->
@endsection
