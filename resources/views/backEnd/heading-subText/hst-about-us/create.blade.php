@extends('layouts.app')

@section('title', 'Create - About Us Heading & Sub Text')

@section('content')
    <div class="example">
        <h5>
            Click here to all About Us Heading & Sub Text
            <a class="" style="margin-left: 1% !important" href="{{ route('hst-about-us.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <!-- Contact form start -->
                <form action="{{ route('hst-about-us.store') }}" method="POST">
                    @csrf

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="headingAboutUs">About Us Heading</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('headingAboutUs') is-invalid @enderror" name="headingAboutUs" id="headingAboutUs" value="{{ old('headingAboutUs') }}" type="text" placeholder="Write your About Us Heading here" />
                            @error('headingAboutUs')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="subTextAboutUs">About Us Sub Text</label>
                        <div class="col-sm-8">
                            <textarea name="subTextAboutUs" placeholder="Write your About Us Sub Text here" rows="2" class="form-control @error('subTextAboutUs') is-invalid @enderror" id="subTextAboutUs"></textarea>
                            @error('subTextAboutUs')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="headingAboutUsTeam">About Us Team Heading</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('headingAboutUsTeam') is-invalid @enderror" name="headingAboutUsTeam" id="headingAboutUsTeam" value="{{ old('headingAboutUsTeam') }}" type="text" placeholder="Write your About Us Team Heading here" />
                            @error('headingAboutUsTeam')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="subTextAboutUsTeam">About Us Team Sub Text</label>
                        <div class="col-sm-8">
                            <textarea name="subTextAboutUsTeam" placeholder="Write your About Us Team Sub Text here" rows="2" class="form-control @error('subTextAboutUsTeam') is-invalid @enderror" id="subTextAboutUsTeam"></textarea>
                            @error('subTextAboutUsTeam')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="headingAboutUsClient">About Us Client Heading</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('headingAboutUsClient') is-invalid @enderror" name="headingAboutUsClient" id="headingAboutUsClient" value="{{ old('headingAboutUsClient') }}" type="text" placeholder="Write your About Us Client Heading here" />
                            @error('headingAboutUsClient')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="subTextAboutUsClient">About Us Client Sub Text</label>
                        <div class="col-sm-8">
                            <textarea name="subTextAboutUsClient" placeholder="Write your About Us Client Sub Text here" rows="2" class="form-control @error('subTextAboutUsClient') is-invalid @enderror" id="subTextAboutUsClient"></textarea>
                            @error('subTextAboutUsClient')
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
