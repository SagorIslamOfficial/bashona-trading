@extends('layouts.frontEndMaster')

@section('title', 'Contact |')

@section('content')
    <!-- Breadcrumb Start -->
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <div class="overflow-hidden pb-2">
                                <h1 class="text-dark font-weight-bold text-9 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="100" style="animation-delay: 100ms">
                                    {{ $contactUsHeadingAndSubText->headingContact }}
                                </h1>
                                <p class="pt-3">{{ $contactUsHeadingAndSubText->subTextContact }}</p>
                            </div>
                        </div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb d-block text-center appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="300" style="animation-delay: 300ms">
                                <li><a href="{{ route('front-end-home') }}">Home</a></li>
                                <li class="active">Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Office Address Start -->
    <div class="container">
        <div class="row py-4">
            @foreach($addresses as $address)
                <div class="col-lg-6 col-md-6 col" style="padding-left: 15%">
                    <div class="appear-animation animated fadeIn appear-animation-visible pb-5" data-appear-animation="fadeIn" data-appear-animation-delay="800" style="animation-delay: 800ms">
                        <h4 class="mt-2 mb-1"><strong> {{ $address->office_location }}</strong></h4>
                        <ul class="list list-icons list-icons-style-2 mt-2">
                            <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong> {{ $address->address }}</li>
                            <li>
                                <i class="fas fa-phone top-6"></i><strong class="text-dark">Phone:</strong>
                                <a style="color: #4CBFC3" href="tel:{{ $address->phone }}"><span>{{ $address->phone }}</span></a>
                            </li>
                            <li>
                                <i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong>
                                <a style="color: #4CBFC3" href="mailto:{{ $address->email }}"><span>{{ $address->email }}</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Office Address End -->

    <!-- Map Start -->
    <div class="container-fluid">
        <div class="row">

            @foreach($maps as $map)
            <div class="col-lg-6 col-md-12 col-sm-12 pb-5-5">
                <div id="" class="google-map mt-0 pt-5 m-0" style="height: 500px; position: relative; overflow: hidden">
                    <div class="m-0" style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223)">
                        <iframe
                            src="{{ $map->map }}"
                            width="100%"
                            height="100%"
                            style="border: 0"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <!-- Map End -->

    <!-- Contact us form Start -->
    <div class="container pt-5 pb-5 pl">
        <div class="row py-4">
            <!-- Contact us form Start -->
            <div class="col-lg-12">
                <h2 class="font-weight-bold text-8 mt-2 mb-0">{{ $contactUsHeadingAndSubText->headingContactUs }}</h2>
                <p class="mb-4">{{ $contactUsHeadingAndSubText->subTextContactUs }}</p>


                @include('layouts.errors')

                <form class="contact-form" action="{{ route('front-end-contact-email') }}" method="POST">
                    @csrf

                    <div class="contact-form-success alert alert-success d-none mt-4"><strong>Success!</strong> Your message has been sent to us.</div>
                    <div class="contact-form-error alert alert-danger d-none mt-4">
                        <strong>Error!</strong> There was an error sending your message.
                        <span class="mail-error-message text-1 d-block"></span>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="form-label mb-1 text-2" for="name">Full Name</label>
                            <input type="text" value="{{ old('name') }}" id="name" maxlength="20" class="form-control text-3 h-auto py-2 0 @error('name') is-invalid @enderror" name="name"/>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="form-label mb-1 text-2" for="email">Email Address</label>
                            <input type="email" value="{{ old('email') }}" maxlength="30" class="form-control text-3 h-auto py-2 @error('email') is-invalid @enderror" name="email" id="email"/>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label mb-1 text-2" for="subject">Subject</label>
                            <input type="text" value="{{ old('subject') }}" id="subject" maxlength="100" class="form-control text-3 h-auto py-2 @error('subject') is-invalid @enderror" name="subject"/>
                            @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label mb-1 text-2" for="message">Message</label>
                            <textarea maxlength="5000" id="message" rows="8" class="form-control text-3 h-auto py-2 @error('message') is-invalid @enderror" name="message">{{ old('message') }}</textarea>
                            @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <input type="submit" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading..." />
                        </div>
                    </div>
                </form>
            </div>
            <!-- Contact us form End -->
        </div>
    </div>
    <!-- Contact us form End -->
@endsection

{{--@include('frontEnd.inc.google-map-js')--}}
