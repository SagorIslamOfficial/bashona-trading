@extends('layouts.app')

@section('title', 'Edit - BD Digital Team -')

@section('content')
    <div class="example">
        <h5>Edit
            <span class="text-info">{{ $editBdDigitalTeam->name }}</span> - Click here to all BD Digital Team
            <a class="" style="margin-left: 1% !important" href="{{ route('bd-digital-team.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <!-- Contact form start -->
                <form method="POST" action="{{ route('bd-digital-team.update', $editBdDigitalTeam->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="name">Name</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text" value="{{ $editBdDigitalTeam->name }}" placeholder="Update your BD Digital Team Name" />
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="position">Position</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('position') is-invalid @enderror" name="position" id="position" type="text" value="{{ $editBdDigitalTeam->position }}" placeholder="Update your BD Digital Team Position" />
                            @error('position')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="description">Description</label>
                        <div class="col-sm-8">
                            <textarea name="description" placeholder="Update your BD Digital Team Description" rows="5" class="form-control @error('description') is-invalid @enderror" id="description">{{ $editBdDigitalTeam->description }}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="email">Email</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="email" value="{{ $editBdDigitalTeam->email }}" placeholder="Update your BD Digital Team Email" />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="image">Image(w-356, h-356)</label>
                        <div class="col-sm-5">
                            <input class="form-control @error('image') is-invalid @enderror" name="image" id="image" type="file" />
                            <img style="width: 90px; height: 50px;" src="{{ asset('storage/company/all-company/bd-digital/team/' . $editBdDigitalTeam->image) }}" alt="{{ $editBdDigitalTeam->name }}">
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
