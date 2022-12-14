@extends('layouts.app')

@section('title', 'Create - Service Heading & Sub Text')

@section('content')
    <div class="example">
        <h5>
            Click here to all Service Heading & Sub Text
            <a class="" style="margin-left: 1% !important" href="{{ route('hst-service.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <!-- Contact form start -->
                <form action="{{ route('hst-service.store') }}" method="POST">
                    @csrf

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="headingService">Service Heading</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('headingService') is-invalid @enderror" name="headingService" id="headingService" value="{{ old('headingService') }}" type="text" placeholder="Write your Service Heading here" />
                            @error('headingService')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="subTextService">Service Sub Text</label>
                        <div class="col-sm-8">
                            <textarea name="subTextService" placeholder="Write your Service Sub Text here" rows="2" class="form-control @error('subTextService') is-invalid @enderror" id="subTextService"></textarea>
                            @error('subTextService')
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
