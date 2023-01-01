@extends('layouts.app')

@section('title', 'Edit - Company Heading & Sub Text -')

@section('content')
    <div class="example">
        <h5>Edit <span class="text-success">{{ $editCompany->headingCompanies }}</span> - Click here to Company Heading & Sub Text
            <a class="" style="margin-left: 1% !important" href="{{ route('hst-companies.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <!-- Contact form start -->
                <form method="POST" action="{{ route('hst-companies.update', $editCompany->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="headingCompanies">Company Heading</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('headingCompanies') is-invalid @enderror" name="headingCompanies" id="headingCompanies" value="{{ $editCompany->headingCompanies }}" type="text" placeholder="Update your Company Heading here" />
                            @error('headingCompanies')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="subTextCompanies">Company Sub Text</label>
                        <div class="col-sm-8">
                            <textarea name="subTextCompanies" placeholder="Update your Company Sub Text here" rows="2" class="form-control @error('subTextCompanies') is-invalid @enderror" id="subTextCompanies">{{ $editCompany->subTextCompanies }}</textarea>
                            @error('subTextCompanies')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="headingCompanyTeam">Company Team Heading</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('headingCompanyTeam') is-invalid @enderror" name="headingCompanyTeam" id="headingCompanyTeam" value="{{ $editCompany->headingCompanyTeam }}" type="text" placeholder="Update your Company Team Heading here" />
                            @error('headingCompanyTeam')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="subTextCompanyTeam">Company Team Sub Text</label>
                        <div class="col-sm-8">
                            <textarea name="subTextCompanyTeam" placeholder="Update your Company Team Sub Text here" rows="2" class="form-control @error('subTextCompanyTeam') is-invalid @enderror" id="subTextCompanyTeam">{{ $editCompany->subTextCompanyTeam }}</textarea>
                            @error('subTextCompanyTeam')
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
