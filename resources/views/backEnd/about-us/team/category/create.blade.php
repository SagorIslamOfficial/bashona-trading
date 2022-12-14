@extends('layouts.app')

@section('title', 'Create - Team Category')

@section('content')
    <div class="example">
        <h5>
            Click here to all Team Category
            <a class="" style="margin-left: 1% !important" href="{{ route('team-category.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <!-- Contact form start -->
                <form action="{{ route('team-category.store') }}" method="POST">
                    @csrf

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="name">Name</label>
                        <div class="col-sm-8">
{{--                            <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" type="text" placeholder="Write your team Category Name. Example: Left or Right side" />--}}
                            <textarea  class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" type="text" cols="30" rows="30"></textarea>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="abc">Name</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('abc') is-invalid @enderror" name="abc" id="abc" value="{{ old('abc') }}" type="text" placeholder="Write your team Category Name. Example: Left or Right side" />
                            @error('abc')
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