@extends('layouts.app')

@section('title', 'Create - Contact Us Heading & Sub Text')

@section('content')
    <div class="example">
        <h5>
            Click here to all Contact Us Heading & Sub Text
            <a class="" style="margin-left: 1% !important" href="{{ route('hst-contact-us.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <!-- Contact form start -->
                <form action="{{ route('hst-contact-us.store') }}" method="POST">
                    @csrf

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="headingContact">Contact Heading</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('headingContact') is-invalid @enderror" name="headingContact" id="headingContact" value="{{ old('headingContact') }}" type="text" placeholder="Write your Contact Heading here" />
                            @error('headingContact')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="subTextContact">Contact Sub Text</label>
                        <div class="col-sm-8">
                            <textarea name="subTextContact" placeholder="Write your Contact Sub Text here" rows="2" class="form-control @error('subTextContact') is-invalid @enderror" id="subTextContact"></textarea>
                            @error('subTextContact')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="headingContactUs">Contact Us Heading</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('headingContactUs') is-invalid @enderror" name="headingContactUs" id="headingContactUs" value="{{ old('headingContactUs') }}" type="text" placeholder="Write your Contact Us Heading here" />
                            @error('headingContactUs')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="subTextContactUs">Contact Us Sub Text</label>
                        <div class="col-sm-8">
                            <textarea name="subTextContactUs" placeholder="Write your Contact Us Sub Text here" rows="2" class="form-control @error('subTextContactUs') is-invalid @enderror" id="subTextContactUs"></textarea>
                            @error('subTextContactUs')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row pt-4">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-2">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                </form>
                <!-- Contact form End -->
            </div>
        </div>
    </div>
@endsection
