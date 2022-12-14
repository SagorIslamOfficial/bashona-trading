@extends('layouts.app')

@section('title', 'Create - Art Venture Company Heading & Sub Text')

@section('content')
    <div class="example">
        <h5>
            Click here to all Art Venture Company Heading & Sub Text
            <a class="" style="margin-left: 1% !important" href="{{ route('hst-art-venture.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <!-- Contact form start -->
                <form action="{{ route('hst-art-venture.store') }}" method="POST">
                    @csrf

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="headingArtVentureCompany">Art Venture Company Heading</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('headingArtVentureCompany') is-invalid @enderror" name="headingArtVentureCompany" id="headingArtVentureCompany" value="{{ old('headingArtVentureCompany') }}" type="text" placeholder="Write your Art Venture Company Heading here" />
                            @error('headingArtVentureCompany')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="subTextArtVentureCompany">Art Venture Company Sub Text</label>
                        <div class="col-sm-8">
                            <textarea name="subTextArtVentureCompany" placeholder="Write your Art Venture Company Sub Text here" rows="2" class="form-control @error('subTextArtVentureCompany') is-invalid @enderror" id="subTextArtVentureCompany"></textarea>
                            @error('subTextArtVentureCompany')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="headingArtVentureCompanyService">Art Venture Company Service Heading</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('headingArtVentureCompanyService') is-invalid @enderror" name="headingArtVentureCompanyService" id="headingArtVentureCompanyService" value="{{ old('headingArtVentureCompanyService') }}" type="text" placeholder="Write your Art Venture Company Service Heading here" />
                            @error('headingArtVentureCompanyService')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="subTextArtVentureCompanyService">Art Venture Company Service Sub Text</label>
                        <div class="col-sm-8">
                            <textarea name="subTextArtVentureCompanyService" placeholder="Write your Art Venture Company Service Sub Text here" rows="2" class="form-control @error('subTextArtVentureCompanyService') is-invalid @enderror" id="subTextArtVentureCompanyService"></textarea>
                            @error('subTextArtVentureCompanyService')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="headingArtVentureCompanyTeam">Art Venture Company Team Heading</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('headingArtVentureCompanyTeam') is-invalid @enderror" name="headingArtVentureCompanyTeam" id="headingArtVentureCompanyTeam" value="{{ old('headingArtVentureCompanyTeam') }}" type="text" placeholder="Write your Art Venture Company Team Heading here" />
                            @error('headingArtVentureCompanyTeam')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="subTextArtVentureCompanyTeam">Art Venture Company Team Sub Text</label>
                        <div class="col-sm-8">
                            <textarea name="subTextArtVentureCompanyTeam" placeholder="Write your Art Venture Company Team Sub Text here" rows="2" class="form-control @error('subTextArtVentureCompanyTeam') is-invalid @enderror" id="subTextArtVentureCompanyTeam"></textarea>
                            @error('subTextArtVentureCompanyTeam')
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
