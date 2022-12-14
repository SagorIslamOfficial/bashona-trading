@extends('layouts.app')

@section('title', 'Edit - Tns Company Heading & Sub Text -')

@section('content')
    <div class="example">
        <h5>Edit <span class="text-success">{{ $editTnsCompany->headingTnsCompany }}</span> - Click here to Tns Company Heading & Sub Text
            <a class="" style="margin-left: 1% !important" href="{{ route('hst-tns.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <!-- Contact form start -->
                <form method="POST" action="{{ route('hst-tns.update', $editTnsCompany->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="headingTnsCompany">Tns Company Heading</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('headingTnsCompany') is-invalid @enderror" name="headingTnsCompany" id="headingTnsCompany" value="{{ $editTnsCompany->headingTnsCompany }}" type="text" placeholder="Update your Tns Company Heading here" />
                            @error('headingTnsCompany')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="subTextTnsCompany">Tns Company Sub Text</label>
                        <div class="col-sm-8">
                            <textarea name="subTextTnsCompany" placeholder="Update your Tns Company Sub Text here" rows="2" class="form-control @error('subTextTnsCompany') is-invalid @enderror" id="subTextTnsCompany">{{ $editTnsCompany->subTextTnsCompany }}</textarea>
                            @error('subTextTnsCompany')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="headingTnsCompanyService">Tns Company Service Heading</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('headingTnsCompanyService') is-invalid @enderror" name="headingTnsCompanyService" id="headingTnsCompanyService" value="{{ $editTnsCompany->headingTnsCompanyService }}" type="text" placeholder="Update your Tns Company Service Heading here" />
                            @error('headingTnsCompanyService')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="subTextTnsCompanyService">Tns Company Service Sub Text</label>
                        <div class="col-sm-8">
                            <textarea name="subTextTnsCompanyService" placeholder="Update your Tns Company Service Sub Text here" rows="2" class="form-control @error('subTextTnsCompanyService') is-invalid @enderror" id="subTextTnsCompanyService">{{ $editTnsCompany->subTextTnsCompanyService }}</textarea>
                            @error('subTextTnsCompanyService')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="headingTnsCompanyTeam">Tns Company Team Heading</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('headingTnsCompanyTeam') is-invalid @enderror" name="headingTnsCompanyTeam" id="headingTnsCompanyTeam" value="{{ $editTnsCompany->headingTnsCompanyTeam }}" type="text" placeholder="Update your Tns Company Team Heading here" />
                            @error('headingTnsCompanyTeam')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="subTextTnsCompanyTeam">Tns Company Team Sub Text</label>
                        <div class="col-sm-8">
                            <textarea name="subTextTnsCompanyTeam" placeholder="Update your Tns Company Team Sub Text here" rows="2" class="form-control @error('subTextTnsCompanyTeam') is-invalid @enderror" id="subTextTnsCompanyTeam">{{ $editTnsCompany->subTextTnsCompanyTeam }}</textarea>
                            @error('subTextTnsCompanyTeam')
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
