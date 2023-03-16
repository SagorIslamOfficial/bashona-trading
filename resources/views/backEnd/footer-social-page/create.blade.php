@extends('layouts.app')

@section('title', 'Create - Social Page Integration')

@section('content')
    <div class="example">
        <h5>
            Click here to all Social Page Integration
            <a class="" style="margin-left: 1% !important" href="{{ route('footer-page-integration.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <!-- Contact form start -->
                <form action="{{ route('footer-page-integration.store') }}" method="POST">
                    @csrf

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="version">Version(Nullable)</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('version') is-invalid @enderror" name="version" id="version" value="{{ old('version') }}" type="text" placeholder="Insert your: Version. Link that - https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v16.0" />
                            @error('version')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="nonce">Nonce(Nullable)</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('nonce') is-invalid @enderror" name="nonce" id="nonce" value="{{ old('nonce') }}" type="text" placeholder="Insert your: nonce='a code from facebook developer account'" />
                            @error('nonce')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="page_link">Page Link</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('page_link') is-invalid @enderror" name="page_link" id="page_link" value="{{ old('page_link') }}" type="text" placeholder="Insert your: https://www.facebook.com/Your Facebook Page Username" />
                            @error('page_link')
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
