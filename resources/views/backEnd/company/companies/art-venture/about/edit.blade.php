@extends('layouts.app')

@section('title', 'Edit - Art Venture About -')

@section('content')
    <div class="example">
        <h5>Edit
            <span class="text-info">{{ $editArtVentureAbout->title }}</span> - Click here to all Art Venture About
            <a class="" style="margin-left: 1% !important" href="{{ route('art-venture-about.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <!-- Contact form start -->
                <form method="POST" action="{{ route('art-venture-about.update', $editArtVentureAbout->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="title">Title</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('title') is-invalid @enderror" name="title" id="title" type="text" value="{{ $editArtVentureAbout->title }}" placeholder="Update your Art Venture About Title !" />
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
                            <textarea name="text" placeholder="Update your Art Venture About Text" rows="5" class="form-control @error('text') is-invalid @enderror" id="artVentureAbout">{{ $editArtVentureAbout->text }}</textarea>
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
                            <img style="width: 90px; height: 50px;" src="{{ asset('storage/company/art-venture/about/' . $editArtVentureAbout->image) }}" alt="{{ $editArtVentureAbout->title }}">
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
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </div>

                </form>
                <!-- Contact form End -->
            </div>
        </div>
    </div>
@endsection
