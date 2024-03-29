@extends('layouts.frontEndMaster')

@section('title', 'BD Digital Service -')

@section('content')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md ">
        <div class="container-fluid">
            <div class="row align-items-center">

                <div class="col">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <div class="overflow-hidden pb-2">
                                <h1 class="text-dark font-weight-bold text-9 appear-animation animated maskUp appear-animation-visible"
                                    data-appear-animation="maskUp" data-appear-animation-delay="100"
                                    style="animation-delay: 100ms;">{{ $bdDigitalHeadingAndSubText->headingBdDigitalCompany }}</h1>
                            </div>
                        </div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb d-block text-center appear-animation animated fadeIn appear-animation-visible"
                                data-appear-animation="fadeIn" data-appear-animation-delay="300"
                                style="animation-delay: 300ms;">
                                <li><a href="{{ route('front-end-home') }}">Home</a></li>
                                <li><a href="{{ route('front-end-service') }}">Service</a></li>
                                <li class="active">{{ $singleCompanyBdDigitalServiceItem->name }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="container py-4">
        <div class="row">
            <div class="col appear-animation animated fadeInUpShorter appear-animation-visible"
                 data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"
                 style="animation-delay: 300ms;">
                <div
                    class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark nav-lg d-block overflow-hidden owl-loaded owl-drag owl-carousel-init"
                    data-plugin-options="{'items': 1, 'margin': 10, 'loop': true, 'autoplay': true, 'autoplayTimeout': 3000, 'autoplayHoverPause': true, 'nav': true, 'dots': false, 'autoHeight': true}"
                    style="height: auto;">

                    <div class="owl-stage-outer owl-height" style="height:515.062px;">
                        <div class="owl-stage"
                             style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3378px;">

                            @php($images = json_decode($singleCompanyBdDigitalServiceItem->images))
                            @foreach($images as $image)
                                <div class="owl-item active" style="width: 1116px; margin-right: 10px;">
                                    <div>
                                        <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                            <img
                                                src="{{ asset('storage/company/all-company/bd-digital/service/item/details/' . $image) }}"
                                                class="img-fluid border-radius-0"
                                                alt="{{ $singleCompanyBdDigitalServiceItem->name }}">
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="owl-nav">
                        <button type="button" role="presentation" class="owl-prev disabled"></button>
                        <button type="button" role="presentation" class="owl-next"></button>
                    </div>
                    <div class="owl-dots disabled"></div>
                </div>
            </div>
        </div>

        <div class="row pt-4 mt-2 mb-5">
            <div class="col-md-7 mb-4 mb-md-0">
                <h2 class="text-color-dark font-weight-normal text-5 mb-2"><strong
                        class="font-weight-extra-bold">{{ $singleCompanyBdDigitalServiceItem->project_heading }}</strong>
                </h2>
                <p class="text-justify">{!! $singleCompanyBdDigitalServiceItem->project_description !!}</p>
            </div>
            <div class="col-md-5">
                @if($singleCompanyBdDigitalServiceItem->project_details_heading == !null)
                    <h2 class="text-color-dark font-weight-normal text-5 mb-2"><strong class="font-weight-extra-bold">{{ $singleCompanyBdDigitalServiceItem->project_details_heading }}</strong>
                    </h2>
                @endif
                <ul class="list list-icons list-primary list-borders text-2">
                    @if($singleCompanyBdDigitalServiceItem->project_client && $singleCompanyBdDigitalServiceItem->project_client_content == !null)
                        <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">{{ $singleCompanyBdDigitalServiceItem->project_client }}: </strong> {{ $singleCompanyBdDigitalServiceItem->project_client_content }}</li>
                    @endif

                    @if($singleCompanyBdDigitalServiceItem->project_date && $singleCompanyBdDigitalServiceItem->project_date_content == !null)
                        <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">{{ $singleCompanyBdDigitalServiceItem->project_date }}: </strong>{{ $singleCompanyBdDigitalServiceItem->project_date_content }}</li>
                    @endif

                    @if($singleCompanyBdDigitalServiceItem->project_skills && $singleCompanyBdDigitalServiceItem->project_skills_content == !null)
                        <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">{{ $singleCompanyBdDigitalServiceItem->project_skills }}: </strong> {{ $singleCompanyBdDigitalServiceItem->project_skills_content }}</li>
                    @endif

                    @if($singleCompanyBdDigitalServiceItem->project_url && $singleCompanyBdDigitalServiceItem->project_link && $singleCompanyBdDigitalServiceItem->project_url_content == !null)
                        <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">{{ $singleCompanyBdDigitalServiceItem->project_url }}: </strong> <a href="{{ $singleCompanyBdDigitalServiceItem->project_link }}" target="_blank" class="text-dark">{{ $singleCompanyBdDigitalServiceItem->project_url_content }}</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="row pt-lg-5">
            <div class="col-lg-12">
                <h4 class="pb-3">{{ $singleCompanyBdDigitalServiceItem->portfolio_heading }}</h4>
                <div class="lightbox"
                     data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                    <div class="row">

                        @php($images = json_decode($singleCompanyBdDigitalServiceItem->portfolio_images))
                        @foreach($images as $image)
                            <div class="col-lg-4 col-md-4 col-sm-6" style="padding: 2px 2px !important;">
                                <a style="width: 100%"
                                   class="d-inline-block img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon mb-1 me-1"
                                   href="{{ asset('storage/company/all-company/bd-digital/service/item/portfolio/' . $image) }}">
                                    <img style="border-radius: 1% !important; height: 250px; width: 100% !important;"
                                         src="{{ asset('storage/company/all-company/bd-digital/service/item/portfolio/' . $image) }}"
                                         alt="{{ $singleCompanyBdDigitalServiceItem->name }}">
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
