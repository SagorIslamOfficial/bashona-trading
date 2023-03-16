@extends('layouts.app')

@section('title', 'Create - Art Venture About')

@section('content')
    <div class="example">
        <h5>
            Click here to all Art Venture About
            <a class="" style="margin-left: 1% !important" href="{{ route('art-venture-about.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <!-- Contact form start -->
                <form action="{{ route('art-venture-about.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="title">Title</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('title') is-invalid @enderror" name="title" id="title" type="text" value="" placeholder="Write your Art Venture About Title !" />
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="artVentureAbout">Text</label>
                        <div class="col-sm-8">
                            <textarea name="text" placeholder="Write your Art Venture About Text" class="form-control @error('text') is-invalid @enderror" id="artVentureAbout"></textarea>
                            @error('text')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="image">Image(w-450, h-480)</label>
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
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
                <!-- Contact form End -->
            </div>
        </div>
    </div>
@endsection
