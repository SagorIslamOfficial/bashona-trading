@extends('layouts.app')

@section('title', 'Edit - About Us Team -')

@section('content')
    <div class="example">
        <h5>Edit <span class="text-success">{{ $editAboutUsTeam->slug }}</span> - Click here to About Us Team
            <a class="" style="margin-left: 1% !important" href="{{ route('about-team.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">

            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <form action="{{ route('about-team.update', $editAboutUsTeam->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="rightName">Right Side Name</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('rightName') is-invalid @enderror" name="rightName" id="rightName" value="{{ $editAboutUsTeam->rightName }}" type="text" placeholder="Right Side About Us Team Name"/>
                            @error('rightName')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="rightPosition">Right Side Position</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('rightPosition') is-invalid @enderror" name="rightPosition" id="rightPosition" value="{{ $editAboutUsTeam->rightPosition }}" type="text" placeholder="Right Side About Us Team Position"/>
                            @error('rightPosition')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="rightMessage">Right Side Message</label>
                        <div class="col-sm-8">
                            <textarea name="rightMessage" placeholder="Right Side About Us Team Message here" class="form-control @error('rightMessage') is-invalid @enderror" id="rightMessage">{{ $editAboutUsTeam->rightMessage }}</textarea>
                            @error('rightMessage')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="rightPhone">Right Side Phone</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('rightPhone') is-invalid @enderror" name="rightPhone" id="rightPhone" value="{{ $editAboutUsTeam->rightPhone }}" type="text" placeholder="Right Side About Us Team  Phone" />
                            @error('rightPhone')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="rightEmail">Right Side Email</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('rightEmail') is-invalid @enderror" name="rightEmail" id="rightEmail" value="{{ $editAboutUsTeam->rightEmail }}" type="text" placeholder="Right Side About Us Team  Email" />
                            @error('rightEmail')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="rightImage">Right Side Image</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('rightImage') is-invalid @enderror" name="rightImage" id="rightImage" type="file" />
                            @if($editAboutUsTeam->rightImage !== null)
                                <img style="width: 90px; height: 50px;" src="{{ asset('storage/about-us/team/' . $editAboutUsTeam->rightImage) }}" alt="{{ $editAboutUsTeam->rightName }}">
                            @endif
                            @error('rightImage')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="leftName">Left Side Name</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('leftName') is-invalid @enderror" name="leftName" id="leftName" value="{{ $editAboutUsTeam->leftName }}" type="text" placeholder="Left Side About Us Team Name"/>
                            @error('leftName')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="leftPosition">Left Side Position</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('leftPosition') is-invalid @enderror" name="leftPosition" id="leftPosition" value="{{ $editAboutUsTeam->leftPosition }}" type="text" placeholder="Left Side About Us Team Position"/>
                            @error('leftPosition')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="leftMessage">Left Side Message</label>
                        <div class="col-sm-8">
                            <textarea name="leftMessage" placeholder="Left Side About Us Team Message here" class="form-control @error('leftMessage') is-invalid @enderror" id="leftMessage">{{ $editAboutUsTeam->leftMessage }}</textarea>
                            @error('leftMessage')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="leftPhone">Left Side Phone</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('leftPhone') is-invalid @enderror" name="leftPhone" id="leftPhone" value="{{ $editAboutUsTeam->leftPhone }}" type="text" placeholder="Left Side About Us Team  Phone" />
                            @error('leftPhone')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="leftEmail">Left Side Email</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('leftEmail') is-invalid @enderror" name="leftEmail" id="leftEmail" value="{{ $editAboutUsTeam->leftEmail }}" type="text" placeholder="Left Side About Us Team  Email" />
                            @error('leftEmail')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="leftImage">Left Side Image</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('leftImage') is-invalid @enderror" name="leftImage" id="leftImage" type="file" />
                            @if($editAboutUsTeam->leftImage !== null)
                                <img style="width: 90px; height: 50px;" src="{{ asset('storage/about-us/team/' . $editAboutUsTeam->leftImage) }}" alt="{{ $editAboutUsTeam->leftName }}">
                            @endif
                            @error('leftImage')
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
            </div>

        </div>
    </div>
@endsection

@push('js')
    {{--For Editor--}}
    <script>
        tinymce.init({
            selector: '#rightMessage',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            font_formats: "Andale Mono=andale mono,times; Arial=arial,helvetica,sans-serif; Arial Black=arial black,avant garde; Book Antiqua=book antiqua,palatino; Comic Sans MS=comic sans ms,sans-serif; Courier New=courier new,courier; Georgia=georgia,palatino; Helvetica=helvetica; Impact=impact,chicago; Oswald=oswald; Symbol=symbol; Tahoma=tahoma,arial,helvetica,sans-serif; Terminal=terminal,monaco; Times New Roman=times new roman,times; Poppins=poppins; Trebuchet MS=trebuchet ms,geneva; Verdana=verdana,geneva; Webdings=webdings; Wingdings=wingdings,zapf dingbats",

            content_style: "@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap'); body { font-family: Poppins; }"
        });
    </script>
    <script>
        tinymce.init({
            selector: '#leftMessage',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            font_formats: "Andale Mono=andale mono,times; Arial=arial,helvetica,sans-serif; Arial Black=arial black,avant garde; Book Antiqua=book antiqua,palatino; Comic Sans MS=comic sans ms,sans-serif; Courier New=courier new,courier; Georgia=georgia,palatino; Helvetica=helvetica; Impact=impact,chicago; Oswald=oswald; Symbol=symbol; Tahoma=tahoma,arial,helvetica,sans-serif; Terminal=terminal,monaco; Times New Roman=times new roman,times; Poppins=poppins; Trebuchet MS=trebuchet ms,geneva; Verdana=verdana,geneva; Webdings=webdings; Wingdings=wingdings,zapf dingbats",

            content_style: "@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap'); body { font-family: Poppins; }"
        });
    </script>
@endpush
