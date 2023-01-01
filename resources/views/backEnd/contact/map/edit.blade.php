@extends('layouts.app')

@section('title', 'Edit - Address -')

@section('content')
    <div class="example">
        <h5>Edit
            <span class="text-info">{{ $editMap->map_location }}</span> office map - Click here to all Address
            <a class="" style="margin-left: 1% !important" href="{{ route('map.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <!-- Contact form start -->
                <form method="POST" action="{{ route('map.update', $editMap->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="map_location">Map Location</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('map_location') is-invalid @enderror" name="map_location" id="map_location" type="text" value="{{ $editMap->map_location }}" placeholder="Write your map location !" />
                            @error('map_location')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="map">Map</label>
                        <div class="col-sm-8">
                            <textarea name="map" placeholder="Example: Input codes in between src=''' here from googleMap->share->embed_map. Rest of codes are set." rows="5" class="form-control @error('map') is-invalid @enderror" id="map">{{ $editMap->map }}</textarea>
                            @error('map')
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
