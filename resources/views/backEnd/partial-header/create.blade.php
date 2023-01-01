@extends('layouts.app')

@section('title', 'Create - Partial Header')

@section('content')
    <div class="example">
        <h5>
            Click here to all Partial Header
            <a class="" style="margin-left: 1% !important" href="{{ route('partial-header.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <!-- Contact form start -->
                <form action="{{ route('partial-header.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="number_1">Phone Number 1</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('number_1') is-invalid @enderror" name="number_1" id="number_1" value="{{ old('number_1') }}" type="text" placeholder="Write your Phone number 1 here !" />
                            @error('number_1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="number_1">Phone Number 2</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('number_2') is-invalid @enderror" name="number_2" id="number_2" value="{{ old('number_2') }}" type="text" placeholder="Write your Phone number 2 here !" />
                            @error('number_2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="email_1">Email Address 1</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('email_1') is-invalid @enderror" name="email_1" id="email_1" value="{{ old('email_1') }}" type="email" placeholder="Write your email address 1 here !" />
                            @error('email_1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="email_2">Email Address 2</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('email_2') is-invalid @enderror" name="email_2" id="email_2" value="{{ old('email_2') }}" type="email" placeholder="Write your email address 2 here !" />
                            @error('email_2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="logo">Logo(w-160, h-48)</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('logo') is-invalid @enderror" name="logo" id="logo" value="{{ old('logo') }}" type="file" />
                            @error('logo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="text">Text</label>
                        <div class="col-sm-8">
                            <textarea name="text" placeholder="Write your footer logo text here" rows="5" class="form-control @error('text') is-invalid @enderror" id="text"></textarea>
                            @error('text')
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
