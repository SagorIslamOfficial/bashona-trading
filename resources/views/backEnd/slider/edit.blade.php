@extends('layouts.app')

@section('title', 'Edit - Slider -')

@section('content')
    <div class="example">
        <h5>Edit {{ $editSlider->name }} - Click here to Slider
            <a class="" style="margin-left: 1% !important" href="{{ route('slider.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <!-- Contact form start -->
                <form method="POST" action="{{ route('slider.update', $editSlider->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="image">Image(w-1920, h-1080)</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('image') is-invalid @enderror" name="image" id="image" type="file" />
                            <img style="width: 90px; height: 50px;" src="{{ asset('storage/slider/' . $editSlider->image) }}" alt="{{ $editSlider->name }}">
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="heading_text">Heading Text</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('heading_text') is-invalid @enderror" name="heading_text" id="heading_text" value="{{ $editSlider->heading_text }}" type="text" placeholder="Update your Slider Heading Text here !" />
                            @error('heading_text')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="sub_text">Sub Text</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('sub_text') is-invalid @enderror" name="sub_text" id="sub_text" value="{{ $editSlider->sub_text }}" type="text" placeholder="Update your Slider Sub Text here !" />
                            @error('sub_text')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="link">Link</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('link') is-invalid @enderror" name="link" id="link" value="{{ $editSlider->link }}" type="text" placeholder="Example: https://www.facebook.com/ (must include #www) or just input #" />
                            @error('link')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="name">Name</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ $editSlider->name }}" type="text" placeholder="Update your Slider Name here !" />
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
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </div>
                </form>
                <!-- Contact form End -->
            </div>
        </div>
    </div>
@endsection

@push('js')
    {{--For Editor--}}
    <script>
        tinymce.init({
            selector: '#heading_text, #sub_text',
            fontsize_formats: "8pt 9pt 10pt 11pt 12pt 14pt 18pt 24pt 30pt 36pt 48pt 60pt 72pt 96pt",
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            font_formats: "Andale Mono=andale mono,times; Arial=arial,helvetica,sans-serif; Arial Black=arial black,avant garde; Book Antiqua=book antiqua,palatino; Comic Sans MS=comic sans ms,sans-serif; Courier New=courier new,courier; Georgia=georgia,palatino; Helvetica=helvetica; Impact=impact,chicago; Oswald=oswald; Symbol=symbol; Tahoma=tahoma,arial,helvetica,sans-serif; Terminal=terminal,monaco; Times New Roman=times new roman,times; Poppins=poppins; Trebuchet MS=trebuchet ms,geneva; Verdana=verdana,geneva; Webdings=webdings; Wingdings=wingdings,zapf dingbats",

            content_style: "@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap'); body { font-family: Poppins; font-size: 14pt; }"
        });
    </script>
@endpush
