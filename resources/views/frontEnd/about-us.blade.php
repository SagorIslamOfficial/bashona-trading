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
            <div id="custom-padding" class="row align-items-center justify-content-center justify-content-lg-between">
                <div class="col-lg-6 appear-animation animated fadeInRightShorter appear-animation-visible"
                    data-appear-animation="fadeInRightShorter"
                    data-appear-animation-delay="200"
                    style="animation-delay: 200ms">
                    <h2 class="font-weight-bold text-color-black text-7 mb-2 about_us_custom">{{ $aboutUs->heading }}</h2>
                    <p class="lead">
                        {!! \Illuminate\Support\Str::limit($aboutUs->description, 600) !!}
                    </p>

                    <button type="button" data-bs-toggle="modal" data-bs-target="#modalCenteredScrollable" class="btn btn-dark-scale-2 btn-px-5 btn-py-2 text-2">READ MORE</button>
                </div>
                <div class="col-9 col-lg-5 order-1 order-lg-2">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ asset('storage/about-us/about/' . $aboutUs->image) }}" alt="{{ $aboutUs->heading }}" />
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->

    <!-- Managing Directors Message Start -->
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md mt-xl-5 mb-xl-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 ">
                    <div class="overflow-hidden pb-2">
                        <h1 class="word-rotator text-black slide font-weight-bold text-8 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" style="animation-delay: 100ms">
                            <span>{{ $directoriesMessages->heading }}</span>
                        </h1>
                        <span class="text-justify text-black message-custom" data-appear-animation="maskUp" data-appear-animation-delay="10" style="animation-delay: 10ms">
                            <i class="fa-solid fa-quote-left quote-custom"></i><span>{!! $directoriesMessages->message !!}</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Managing Directors Message Start -->

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

    {{--  Managing Directors  --}}
    <div class="container">

        @foreach($aboutUsTeam as $team)
            <div class="row" style="padding-top: 4% !important;">
                <div class="col-md-7 order-2">
                    @if($team->rightName !== null)
                        <div class="overflow-hidden">
                            <h2
                                class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation animated maskUp appear-animation-visible"
                                data-appear-animation="maskUp"
                                data-appear-animation-delay="300"
                                style="animation-delay: 300ms">
                                {{ $team->rightName }}
                            </h2>
                        </div>
                    @endif

                    @if($team->rightPosition !== null)
                        <div class="overflow-hidden mb-3">
                            <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="500" style="animation-delay: 500ms">
                                {{ $team->rightPosition }}
                            </p>
                        </div>
                    @endif

                    @if($team->rightMessage !== null)
                        <section class="custom-for-managing-dir">
                            <p class="lead appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" style="animation-delay: 700ms; text-align: justify !important;">
                                {!! $team->rightMessage !!}
                            </p>
                        </section>
                    @endif

                    @if($team->rightPhone && $team->rightEmail !== null)
                        <ul class="list list-icons list-icons-style-2 mt-4">
                            <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> {{ $team->rightPhone }}</li>
                            <li>
                                <i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong>
                                <a class="text-decoration-none" href="mailto:{{ $team->rightEmail }}"><span class="">{{ $team->rightEmail }}</span></a>
                            </li>
                        </ul>
                    @endif
                </div>
                @if($team->rightImage && $team->rightImage !== null)
                    <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms">
                        <img src="{{ asset('storage/about-us/team/' . $team->rightImage) }}" class="img-fluid border-radius" alt="{{ $team->rightImage }}" />
                    </div>
                @endif
            </div>

            <div class="row">
                <div class="col">
                    <hr class="solid my-5" />
                </div>
            </div>

            <div class="row">
                @if($team->leftImage !== null)
                    <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" style="animation-delay: 100ms">
                        <img src="{{ asset('storage/about-us/team/' . $team->leftImage) }}" class="img-fluid border-radius" alt="{{ $team->leftName }}" />
                    </div>
                @endif

                <div class="col-md-7 order-2">
                    @if($team->leftName !== null)
                        <div class="overflow-hidden">
                            <h2
                                class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation animated maskUp appear-animation-visible"
                                data-appear-animation="maskUp"
                                data-appear-animation-delay="300"
                                style="animation-delay: 300ms">
                                {{ $team->leftName }}
                            </h2>
                        </div>
                    @endif

                    @if($team->leftPosition !== null)
                        <div class="overflow-hidden mb-3">
                            <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="500" style="animation-delay: 500ms">
                                {{ $team->leftPosition }}
                            </p>
                        </div>
                    @endif

                    @if($team->leftMessage !== null)
                        <p class="lead appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" style="animation-delay: 700ms">
                            {!! $team->leftMessage !!}
                        </p>
                    @endif

                    @if($team->leftPhone && $team->leftEmail !== null)
                        <ul class="list list-icons list-icons-style-2 mt-4">
                            <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> {{ $team->leftPhone }}</li>
                            <li>
                                <i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong>
                                <a class="text-decoration-none" href="mailto:{{ $team->leftEmail }}"><span class="">{{ $team->leftEmail }}</span></a>
                            </li>
                        </ul>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col bot-margin">
                    <hr class="solid-bot" />
                </div>
            </div>
        @endforeach

    </div>
    <!-- Team End -->
@endsection

@push('modal')
    {{--  Modal for About Us  --}}
    <div class="modal fade" id="modalCenteredScrollable" tabindex="-1" aria-labelledby="modalCenteredScrollableTitle" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenteredScrollableTitle">{{ $aboutUs->heading }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-justify">
                        {!! $aboutUs->description !!}
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endpush
