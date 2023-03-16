@extends('layouts.app')

@section('title', "Create - What's App")

@section('content')
    <div class="example">
        <h5>
            Click here to all What's App Link
            <a class="" style="margin-left: 1% !important" href="{{ route('whatsapp.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <!-- Contact form start -->
                <form action="{{ route('whatsapp.store') }}" method="POST">
                    @csrf

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="number">Number</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('number') is-invalid @enderror" name="number" id="number" value="{{ old('number') }}" type="text" placeholder="Write your whats app number. Example: 8801933126160. Add country code except + sign" />
                            @error('number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="whatsAppMessage">Message</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('message') is-invalid @enderror" name="message" id="whatsAppMessage" value="{{ old('message') }}" type="text" placeholder="Write your whats app message. Example: WhatsApp us or message us" />
                            @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="color">Color</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('color') is-invalid @enderror" name="color" id="color" value="{{ old('color') }}" type="text" placeholder="Write your whats app color. Example: ffffff" />
                            @error('color')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="whatsAppText">Text</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('text') is-invalid @enderror" name="text" id="whatsAppText" value="{{ old('text') }}" type="text" placeholder="Write your whats app text. Example: Hello, how can we help u?" />
                            @error('text')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="theme">Theme</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('theme') is-invalid @enderror" name="theme" id="theme" value="{{ old('theme') }}" type="text" placeholder="Write your whats app theme color. Example: 'light' or 'dark'" />
                            @error('theme')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="position">Position</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('position') is-invalid @enderror" name="position" id="position" value="{{ old('position') }}" type="text" placeholder="Write your whats app position. Example: 'right' or 'left'" />
                            @error('position')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="radius">Radius</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('radius') is-invalid @enderror" name="radius" id="radius" value="{{ old('radius') }}" type="text" placeholder="Write your whats app radius. Example: 10px" />
                            @error('radius')
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
