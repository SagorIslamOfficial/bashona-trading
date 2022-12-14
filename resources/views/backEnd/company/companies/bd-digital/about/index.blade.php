@extends('layouts.app')

@section('title', 'Home - BD Digital About -')

@section('content')
    <div class="example">
        <h5>
            {{ $indexBdDigitalAbout->count() < 1 ? 'Click here for create new BD Digital About' : "" }}
            <a  class="{{ $indexBdDigitalAbout->count() < 1 ? ' ' : "text-danger btn disabled" }}" style="margin-left: 1% !important" href="{{ route('bd-digital-about.create') }}">
                <svg class="nav-icon text-bg-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/brand.svg#cib-addthis') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-387">

                @include('backEnd.inc.error')

                <table class="table">
                    <thead class="">
                    <tr>
                        <th>Title</th>
                        <th>Text</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($indexBdDigitalAbout as $bdDigitalAbout)
                        <tr>
                            <td>{{ $bdDigitalAbout->title }}</td>
                            <td>{{ $bdDigitalAbout->text }}</td>
                            <td><img style="width: 90px; height: 50px;" src="{{ asset('storage/company/all-company/bd-digital/about/' . $bdDigitalAbout->image) }}" alt="{{ $bdDigitalAbout->title }}"></td>
                            <td>
                                <a class="btn btn-success" href="{{ $bdDigitalAbout->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('bd-digital-about.destroy', $bdDigitalAbout->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">DELETE</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
