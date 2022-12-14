@extends('layouts.app')

@section('title', 'Create - Footer Social Accounts')

@section('content')
    <div class="example">
        <h5>
            Click here to all Footer Social Link
            <a class="" style="margin-left: 1% !important" href="{{ route('footer-social.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <!-- Contact form start -->
                <form action="{{ route('footer-social.store') }}" method="POST">
                    @csrf

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="name">Name</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" type="text" placeholder="Write your Footer Social name here !" />
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="color">Color</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('color') is-invalid @enderror" name="color" id="color" value="{{ old('color') }}" type="text" placeholder="Write your Footer Social Color here !" />
                            @error('color')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="link">Footer Social Link</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('link') is-invalid @enderror" name="link" id="link" value="{{ old('link') }}" type="text" placeholder="Write your Footer Social link here !" />
                            @error('link')
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
