@extends('layouts.app')

@section('title', 'Create - Add Company')

@section('content')
    <div class="example">
        <h5>
            Click here to all Add Company
            <a class="" style="margin-left: 1% !important" href="{{ route('add-company.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <!-- Contact form start -->
                <form action="{{ route('add-company.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="name">Name</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text" value="{{ old('name') }}" placeholder="Write your Add Company Name" />
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="singleCompanyDescription">Description</label>
                        <div class="col-sm-8">
                            <textarea name="text" placeholder="Write your Add Company Description" rows="5" class="form-control @error('text') is-invalid @enderror" id="singleCompanyDescription">{{ old('text') }}</textarea>
                            @error('text')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="link">Link</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('link') is-invalid @enderror" name="link" id="link" type="text" value="{{ old('link') }}" placeholder="Write your Add Company Link" />
                            @error('link')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="image">Image(w-110, h-110)</label>
                        <div class="col-sm-5">
                            <input class="form-control @error('image') is-invalid @enderror" name="image" id="image" type="file" />
                            @error('image')
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
