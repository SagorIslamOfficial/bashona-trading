@extends('layouts.frontEndMaster')

@section('title', 'About Us -')

@section('content')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <div class="overflow-hidden pb-2">
                                <h1 class="text-dark font-weight-bold text-9 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="100" style="animation-delay: 100ms">
                                    {{ $aboutUsHeadingAndSubText->headingAboutUs }}
                                </h1>
                                <p class="pt-3">{{ $aboutUsHeadingAndSubText->subTextAboutUs }}</p>
                            </div>
                        </div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb d-block text-center appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="300" style="animation-delay: 300ms">
                                <li><a href="{{ route('front-end-home') }}">Home</a></li>
                                <li class="active">About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Start -->
    <section id="custom-color" class="section section-secondary border-0 py-0 m-0 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" style="animation-delay: 100ms">
        <div class="container">
            <div id="custom-padding" class="row align-items-center justify-content-center justify-content-lg-between pb-lg-0">
                <div
                    class="col-lg-5 order-2 order-lg-1 pt-4 pt-lg-0 pb-5 pb-lg-0 mt-lg-0 appear-animation animated fadeInRightShorter appear-animation-visible"
                    data-appear-animation="fadeInRightShorter"
                    data-appear-animation-delay="200"
                    style="animation-delay: 200ms">
                    <h2 class="font-weight-bold text-color-black text-7 mb-2 about_us_custom">{{ $aboutUs->heading }}</h2>
                    <p class="lead font-weight-light text-color-black text-4 text-justify">
                        {!!  nl2br(e($aboutUs->description)) !!}
                    </p>

                    <!-- <a href="#" class="btn btn-dark-scale-2 btn-px-5 btn-py-2 text-2">LEARN MORE</a> -->
                </div>
                <div class="col-9 offset-lg-1 col-lg-5 order-1 order-lg-2">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ asset('storage/about-us/about/' . $aboutUs->image) }}" alt="{{ $aboutUs->heading }}" />
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->

    <!-- Team Start -->
    <div class="container">
        <div class="row pt-5">
            <div class="col">
                <div class="row text-center pb-5">
                    <div class="col-md-9 mx-md-auto">
                        <div class="overflow-hidden mb-3">
                            <h1 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" style="animation-delay: 100ms">
                                <span>{{ $aboutUsHeadingAndSubText->headingAboutUsTeam }}</span>
                            </h1>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <p class="lead mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="200" style="animation-delay: 200ms">{{ $aboutUsHeadingAndSubText->subTextAboutUsTeam }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-4 pb-5">
        <div class="row">
            <div class="col-md-7 order-2">
                <div class="overflow-hidden">
                    <h2
                        class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation animated maskUp appear-animation-visible"
                        data-appear-animation="maskUp"
                        data-appear-animation-delay="300"
                        style="animation-delay: 300ms">
                        {{ $aboutUsTeam->name1 }}
                    </h2>
                </div>
                <div class="overflow-hidden mb-3">
                    <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="500" style="animation-delay: 500ms">
                        {{ $aboutUsTeam->position1 }}
                    </p>
                </div>
                <p class="lead appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" style="animation-delay: 700ms">
                    {!!  nl2br(e($aboutUsTeam->description1)) !!}
                </p>

                <ul class="list list-icons list-icons-style-2 mt-4">
                    <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> {{ $aboutUsTeam->phone1 }}</li>
                    <li>
                        <i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong>
                        <a class="text-decoration-none" href="mailto:{{ $aboutUsTeam->email1 }}"><span class="">{{ $aboutUsTeam->email1 }}</span></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms">
                <img src="{{ asset('storage/about-us/team/' . $aboutUsTeam->image1) }}" class="img-fluid border-radius" alt="{{ $aboutUsTeam->name1 }}" />
            </div>
        </div>

        <div class="row">
            <div class="col">
                <hr class="solid my-5" />
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" style="animation-delay: 100ms">
                <img src="{{ asset('storage/about-us/team/' . $aboutUsTeam->image2) }}" class="img-fluid border-radius" alt="{{ $aboutUsTeam->name2 }}" />
            </div>
            <div class="col-md-7 order-2">
                <div class="overflow-hidden">
                    <h2
                        class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation animated maskUp appear-animation-visible"
                        data-appear-animation="maskUp"
                        data-appear-animation-delay="300"
                        style="animation-delay: 300ms">
                        {{ $aboutUsTeam->name2 }}
                    </h2>
                </div>
                <div class="overflow-hidden mb-3">
                    <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="500" style="animation-delay: 500ms">
                        {{ $aboutUsTeam->position2 }}
                    </p>
                </div>
                <p class="lead appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" style="animation-delay: 700ms">
                    {!!  nl2br(e($aboutUsTeam->description2)) !!}
                </p>

                <ul class="list list-icons list-icons-style-2 mt-4">
                    <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> {{ $aboutUsTeam->phone2 }}</li>
                    <li>
                        <i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong>
                        <a class="text-decoration-none" href="mailto:{{ $aboutUsTeam->email2 }}"><span class="">{{ $aboutUsTeam->email2 }}</span></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <hr class="solid my-5" />
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 order-2">
                <div class="overflow-hidden">
                    <h2
                        class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation animated maskUp appear-animation-visible"
                        data-appear-animation="maskUp"
                        data-appear-animation-delay="300"
                        style="animation-delay: 300ms">
                        {{ $aboutUsTeam->name3 }}
                    </h2>
                </div>
                <div class="overflow-hidden mb-3">
                    <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="500" style="animation-delay: 500ms">
                        {{ $aboutUsTeam->position3 }}
                    </p>
                </div>
                <p class="lead appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" style="animation-delay: 700ms">
                    {!!  nl2br(e($aboutUsTeam->description3)) !!}
                </p>

                <ul class="list list-icons list-icons-style-2 mt-4">
                    <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> {{ $aboutUsTeam->phone3 }}</li>
                    <li>
                        <i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong>
                        <a class="text-decoration-none" href="mailto:{{ $aboutUsTeam->email3 }}"><span class="">{{ $aboutUsTeam->email3 }}</span></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms">
                <img src="{{ asset('storage/about-us/team/' . $aboutUsTeam->image3) }}" class="img-fluid border-radius" alt="{{ $aboutUsTeam->name3 }}" />
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
