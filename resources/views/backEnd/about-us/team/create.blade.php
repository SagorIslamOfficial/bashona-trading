@extends('layouts.app')

@section('title', 'Create - About Us Team')

@section('content')
    <div class="example">
        <h5>
            Click here to all About Us Team
            <a class="" style="margin-left: 1% !important" href="{{ route('about-team.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <!-- Contact form start -->
                <form action="{{ route('about-team.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="name1">Name 1</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('name1') is-invalid @enderror" name="name1" id="name1" value="{{ old('name1') }}" type="text" placeholder="Write your About Us Team Name1" />
                            @error('name1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="position1">Position 1</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('position1') is-invalid @enderror" name="position1" id="position1" value="{{ old('position1') }}" type="text" placeholder="Write your About Us Team Position1" />
                            @error('position1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="description1">Description 1</label>
                        <div class="col-sm-8">
                            <textarea name="description1" placeholder="Write your About Us Team Description1 here" rows="5" class="form-control @error('description1') is-invalid @enderror" id="description1"></textarea>
                            @error('description1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="phone1">Phone 1</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('phone1') is-invalid @enderror" name="phone1" id="phone1" value="{{ old('phone1') }}" type="text" placeholder="Write your About Us Team  Phone1" />
                            @error('phone1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="email1">Email 1</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('email1') is-invalid @enderror" name="email1" id="email1" value="{{ old('email1') }}" type="text" placeholder="Write your About Us Team  Email1" />
                            @error('email1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="image1">Image 1</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('image1') is-invalid @enderror" name="image1" id="image1" type="file" />
                            @error('image1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="name2">Name 2</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('name2') is-invalid @enderror" name="name2" id="name2" value="{{ old('name2') }}" type="text" placeholder="Write your About Us Team Name 2" />
                            @error('name2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="position2">Position 2</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('position2') is-invalid @enderror" name="position2" id="position2" value="{{ old('position2') }}" type="text" placeholder="Write your About Us Team Position 2" />
                            @error('position2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="description2">Description 2</label>
                        <div class="col-sm-8">
                            <textarea name="description2" placeholder="Write your About Us Team Description 2 here" rows="5" class="form-control @error('description2') is-invalid @enderror" id="description2"></textarea>
                            @error('description2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="phone2">Phone 2</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('phone2') is-invalid @enderror" name="phone2" id="phone2" value="{{ old('phone2') }}" type="text" placeholder="Write your About Us Team Phone 2" />
                            @error('phone2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="email2"> Email 2</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('email2') is-invalid @enderror" name="email2" id="email2" value="{{ old('email2') }}" type="text" placeholder="Write your About Us Team Email 2" />
                            @error('email2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="image2">Image 2</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('image2') is-invalid @enderror" name="image2" id="image2" type="file" />
                            @error('image2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="name3">Name 3</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('name3') is-invalid @enderror" name="name3" id="name3" value="{{ old('name3') }}" type="text" placeholder="Write your About Us Team Name 3" />
                            @error('name3')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="position3">Position 3</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('position3') is-invalid @enderror" name="position3" id="position3" value="{{ old('position3') }}" type="text" placeholder="Write your About Us Team Position 3" />
                            @error('position3')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="description3">Description 3</label>
                        <div class="col-sm-8">
                            <textarea name="description3" placeholder="Write your About Us Team Description 3 here" rows="5" class="form-control @error('description3') is-invalid @enderror" id="description3"></textarea>
                            @error('description3')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="phone3">Phone 2</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('phone3') is-invalid @enderror" name="phone3" id="phone3" value="{{ old('phone3') }}" type="text" placeholder="Write your About Us Team Phone 3" />
                            @error('phone3')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="email3"> Email 3</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('email3') is-invalid @enderror" name="email3" id="email2" value="{{ old('email3') }}" type="text" placeholder="Write your About Us Team Email 3" />
                            @error('email3')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="image3">Image 3</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('image3') is-invalid @enderror" name="image3" id="image3" type="file" />
                            @error('image3')
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
