@extends('layouts.app')

@section('title', 'Edit - Gallery Item')

@section('content')
    <div class="example">
        <h5>Edit
            <span class="text-info">{{ $editGalleryItem->name }}</span> - Click here to all Gallery Item
            <a class="" style="margin-left: 1% !important" href="{{ route('gallery-item.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <!-- Contact form start -->
                <form action="{{ route('gallery-item.update', $editGalleryItem->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3 row">
                        <label for="gallery_category_id" class="col-sm-2 col-form-label">Categories</label>
                        <div class="col-sm-8">
                            <select class="form-control form-select @error('gallery_category_id') is-invalid @enderror" aria-label="Default select example" name="gallery_category_id" id="gallery_category_id">
                                <option selected>Select Category</option>
                                @foreach($editGalleryCategory as $galleryCategory)
                                    <option {{ $galleryCategory->id == $editGalleryItem->category->id ? 'selected' : '' }} value="{{ $galleryCategory->id }}">{{ $galleryCategory->name }}</option>
                                @endforeach
                            </select>
                            @error('gallery_category_id')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="image">Image</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('image') is-invalid @enderror" name="image" id="image" type="file" />
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <img style="width: 90px; height: 50px;" src="{{ asset('storage/gallery-item/' . $editGalleryItem->image) }}" alt="{{ $editGalleryItem->name }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="name">Name</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ $editGalleryItem->name }}" type="text" placeholder="Update your Gallery Item Name" />
                            @error('name')
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
