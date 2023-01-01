@extends('layouts.app')

@section('title', 'Edit - Connect To Fly Company Heading & Sub Text -')

@section('content')
    <div class="example">
        <h5>Edit <span class="text-success">{{ $editConnectToFlyCompany->headingConnectToFlyCompany }}</span> - Click here to Connect To Fly Company Heading & Sub Text
            <a class="" style="margin-left: 1% !important" href="{{ route('hst-connect-to-fly.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <!-- Contact form start -->
                <form method="POST" action="{{ route('hst-connect-to-fly.update', $editConnectToFlyCompany->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="headingConnectToFlyCompany">Connect To Fly Company Heading</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('headingConnectToFlyCompany') is-invalid @enderror" name="headingConnectToFlyCompany" id="headingConnectToFlyCompany" value="{{ $editConnectToFlyCompany->headingConnectToFlyCompany }}" type="text" placeholder="Update your Connect To Fly Company Heading here" />
                            @error('headingConnectToFlyCompany')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="subTextConnectToFlyCompany">Connect To Fly Company Sub Text</label>
                        <div class="col-sm-8">
                            <textarea name="subTextConnectToFlyCompany" placeholder="Update your Connect To Fly Company Sub Text here" rows="2" class="form-control @error('subTextConnectToFlyCompany') is-invalid @enderror" id="subTextConnectToFlyCompany">{{ $editConnectToFlyCompany->subTextConnectToFlyCompany }}</textarea>
                            @error('subTextConnectToFlyCompany')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="headingConnectToFlyCompanyService">Connect To Fly Company Service Heading</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('headingConnectToFlyCompanyService') is-invalid @enderror" name="headingConnectToFlyCompanyService" id="headingConnectToFlyCompanyService" value="{{ $editConnectToFlyCompany->headingConnectToFlyCompanyService }}" type="text" placeholder="Update your Connect To Fly Company Service Heading here" />
                            @error('headingConnectToFlyCompanyService')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="subTextConnectToFlyCompanyService">Connect To Fly Company Service Sub Text</label>
                        <div class="col-sm-8">
                            <textarea name="subTextConnectToFlyCompanyService" placeholder="Update your Connect To Fly Company Service Sub Text here" rows="2" class="form-control @error('subTextConnectToFlyCompanyService') is-invalid @enderror" id="subTextConnectToFlyCompanyService">{{ $editConnectToFlyCompany->subTextConnectToFlyCompanyService }}</textarea>
                            @error('subTextConnectToFlyCompanyService')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="headingConnectToFlyCompanyTeam">Connect To Fly Company Team Heading</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('headingConnectToFlyCompanyTeam') is-invalid @enderror" name="headingConnectToFlyCompanyTeam" id="headingConnectToFlyCompanyTeam" value="{{ $editConnectToFlyCompany->headingConnectToFlyCompanyTeam }}" type="text" placeholder="Update your Connect To Fly Company Team Heading here" />
                            @error('headingConnectToFlyCompanyTeam')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="subTextConnectToFlyCompanyTeam">Connect To Fly Company Team Sub Text</label>
                        <div class="col-sm-8">
                            <textarea name="subTextConnectToFlyCompanyTeam" placeholder="Update your Connect To Fly Company Team Sub Text here" rows="2" class="form-control @error('subTextConnectToFlyCompanyTeam') is-invalid @enderror" id="subTextConnectToFlyCompanyTeam">{{ $editConnectToFlyCompany->subTextConnectToFlyCompanyTeam }}</textarea>
                            @error('subTextConnectToFlyCompanyTeam')
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
