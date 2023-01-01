@extends('layouts.frontEndMaster')

@section('title', 'Gallery -')

@section('content')
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <div class="overflow-hidden pb-2">
                                <h1 class="text-dark font-weight-bold text-9 appear-animation animated maskUp appear-animation-visible"
                                    data-appear-animation="maskUp" data-appear-animation-delay="100"
                                    style="animation-delay: 100ms">
                                    {{ $galleryHeadingAndSubText->headingGallery }}
                                </h1>
                                <p class="pt-3">{{ $galleryHeadingAndSubText->subTextGallery }}</p>
                            </div>
                        </div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb d-block text-center appear-animation animated fadeIn appear-animation-visible"
                                data-appear-animation="fadeIn" data-appear-animation-delay="300"
                                style="animation-delay: 300ms">
                                <li><a href="{{ route('front-end-home') }}">Home</a></li>
                                <li class="active">Gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Start -->
        <div class="container pt-5">
            <div class="row">
                <div class="col">
                    <div class="tabs tabs-bottom tabs-center tabs-simple">
                        <ul class="nav nav-tabs">
                            @foreach($galleryCategories as $galleryCategory)
                                <li class="nav-item {{ $galleryCategory->id == 1 ? 'active' : '' }}">
                                    <a class="nav-link {{ $galleryCategory->id == 1 ? 'active' : '' }}" href="#{{ $galleryCategory->slug }}" data-bs-toggle="tab">{{ $galleryCategory->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="tab-content">
                            @foreach($galleryCategories as $key => $galleryItem)
                                <div id="{{ $galleryItem->slug }}" class="tab-pane {{ $galleryItem->id == 1 ? 'active' : '' }}">
                                    <div class="masonry lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">

                                        @foreach($galleryItem->items as $item)
                                            <div class="mItem">
                                                <div class="grid-sizer"></div>
                                                <div class="grid-item">
                                                    <a href="{{ asset('storage/gallery-item/' . $item->image) }}" class="">
                                                        <img src="{{ asset('storage/gallery-item/' . $item->image) }}" alt="{{ $item->name }}">
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Gallery End -->
@endsection
