@extends('layouts.app')

@section('title', 'Create - Address')

@section('content')
    <div class="example">
        <h5>
            Click here to all Address
            <a class="" style="margin-left: 1% !important" href="{{ route('address.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <!-- Contact form start -->
                <form action="{{ route('address.store') }}" method="POST">
                    @csrf

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="officeLocation">Office Location</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('office_location') is-invalid @enderror" name="office_location" id="officeLocation" value="{{ old('office_location') }}" type="text" placeholder="Write your office address location !" />
                            @error('office_location')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="address">Address</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('address') is-invalid @enderror" name="address" id="address" type="text" placeholder="Write your full address here !" />
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="phone">Phone</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" type="text" value="" placeholder="Write your phone number here !" />
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="email">Email</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="email" value="" placeholder="Write your email address here !" />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row pt-4">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-2">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
                <!-- Contact form End -->
            </div>
        </div>
    </div>
@endsection
