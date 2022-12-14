@extends('layouts.app')

@section('title', 'Edit - BD Digital Company Heading & Sub Text -')

@section('content')
    <div class="example">
        <h5>Edit <span class="text-success">{{ $editBdDigitalCompany->headingBdDigitalCompany }}</span> - Click here to BD Digital Company Heading & Sub Text
            <a class="" style="margin-left: 1% !important" href="{{ route('hst-bd-digital.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <!-- Contact form start -->
                <form method="POST" action="{{ route('hst-bd-digital.update', $editBdDigitalCompany->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="headingBdDigitalCompany">BD Digital Company Heading</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('headingBdDigitalCompany') is-invalid @enderror" name="headingBdDigitalCompany" id="headingBdDigitalCompany" value="{{ $editBdDigitalCompany->headingBdDigitalCompany }}" type="text" placeholder="Update your BD Digital Company Heading here" />
                            @error('headingBdDigitalCompany')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="subTextBdDigitalCompany">BD Digital Company Sub Text</label>
                        <div class="col-sm-8">
                            <textarea name="subTextBdDigitalCompany" placeholder="Update your BD Digital Company Sub Text here" rows="2" class="form-control @error('subTextBdDigitalCompany') is-invalid @enderror" id="subTextBdDigitalCompany">{{ $editBdDigitalCompany->subTextBdDigitalCompany }}</textarea>
                            @error('subTextBdDigitalCompany')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="headingBdDigitalCompanyService">BD Digital Company Service Heading</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('headingBdDigitalCompanyService') is-invalid @enderror" name="headingBdDigitalCompanyService" id="headingBdDigitalCompanyService" value="{{ $editBdDigitalCompany->headingBdDigitalCompanyService }}" type="text" placeholder="Update your BD Digital Company Service Heading here" />
                            @error('headingBdDigitalCompanyService')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="subTextBdDigitalCompanyService">BD Digital Company Service Sub Text</label>
                        <div class="col-sm-8">
                            <textarea name="subTextBdDigitalCompanyService" placeholder="Update your BD Digital Company Service Sub Text here" rows="2" class="form-control @error('subTextBdDigitalCompanyService') is-invalid @enderror" id="subTextBdDigitalCompanyService">{{ $editBdDigitalCompany->subTextBdDigitalCompanyService }}</textarea>
                            @error('subTextBdDigitalCompanyService')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="headingBdDigitalCompanyTeam">BD Digital Company Team Heading</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('headingBdDigitalCompanyTeam') is-invalid @enderror" name="headingBdDigitalCompanyTeam" id="headingBdDigitalCompanyTeam" value="{{ $editBdDigitalCompany->headingBdDigitalCompanyTeam }}" type="text" placeholder="Update your BD Digital Company Team Heading here" />
                            @error('headingBdDigitalCompanyTeam')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="subTextBdDigitalCompanyTeam">BD Digital Company Team Sub Text</label>
                        <div class="col-sm-8">
                            <textarea name="subTextBdDigitalCompanyTeam" placeholder="Update your BD Digital Company Team Sub Text here" rows="2" class="form-control @error('subTextBdDigitalCompanyTeam') is-invalid @enderror" id="subTextBdDigitalCompanyTeam">{{ $editBdDigitalCompany->subTextBdDigitalCompanyTeam }}</textarea>
                            @error('subTextBdDigitalCompanyTeam')
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
