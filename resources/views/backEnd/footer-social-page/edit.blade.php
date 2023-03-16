@extends('layouts.app')

@section('title', 'Edit - Social Page Integration -')

@section('content')
    <div class="example">
        <h5>Edit
            <span class="text-info">{{ $editSocialPageIntegration->name }}</span> - Click here to all Social Page Integration
            <a class="" style="margin-left: 1% !important" href="{{ route('footer-page-integration.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <!-- Contact form start -->
                <form method="POST" action="{{ route('footer-page-integration.update', $editSocialPageIntegration->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="version">Version(Nullable)</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('version') is-invalid @enderror" name="version" id="version" value="{{ $editSocialPageIntegration->version }}" type="text" placeholder="Update your: Version. Link that - https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v16.0" />
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
                            <input class="form-control @error('nonce') is-invalid @enderror" name="nonce" id="nonce" value="{{ $editSocialPageIntegration->nonce }}" type="text" placeholder="Update your: nonce='a code from facebook developer account'" />
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
                            <input class="form-control @error('page_link') is-invalid @enderror" name="page_link" id="page_link" value="{{ $editSocialPageIntegration->page_link }}" type="text" placeholder="Update your: https://www.facebook.com/Your Facebook Page Username" />
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
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </div>
                </form>
                <!-- Contact form End -->
            </div>
        </div>
    </div>
@endsection
