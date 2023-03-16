@extends('layouts.app')

@section('title', 'Create - About Us')

@section('content')
    <div class="example">
        <h5>
            Click here to all About Us
            <a class="" style="margin-left: 1% !important" href="{{ route('about-us.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <!-- Contact form start -->
                <form action="{{ route('about-us.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="heading">Heading</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('heading') is-invalid @enderror" name="heading" id="heading" value="{{ old('heading') }}" type="text" placeholder="Write your About Us Heading here !" />
                            @error('heading')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="description">Description</label>
                        <div class="col-sm-8">
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description"></textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="image">Image(w-450, h-450)</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('image') is-invalid @enderror" name="image" id="image" value="{{ old('image') }}" type="file" />
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="link">Link</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('link') is-invalid @enderror" name="link" id="link" value="{{ old('link') }}" type="text" placeholder="Write your About Us Link here !" />
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

@push('js')
    <script>
        tinymce.init({
            selector: '#description',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            font_formats: "Andale Mono=andale mono,times; Arial=arial,helvetica,sans-serif; Arial Black=arial black,avant garde; Book Antiqua=book antiqua,palatino; Comic Sans MS=comic sans ms,sans-serif; Courier New=courier new,courier; Georgia=georgia,palatino; Helvetica=helvetica; Impact=impact,chicago; Oswald=oswald; Symbol=symbol; Tahoma=tahoma,arial,helvetica,sans-serif; Terminal=terminal,monaco; Times New Roman=times new roman,times; Poppins=poppins; Trebuchet MS=trebuchet ms,geneva; Verdana=verdana,geneva; Webdings=webdings; Wingdings=wingdings,zapf dingbats",

            content_style: "@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap'); body { font-family: Poppins; }"
        });
    </script>
@endpush
