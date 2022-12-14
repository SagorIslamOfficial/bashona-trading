@extends('layouts.app')

@section('title', 'Heading & Sub Text - Gallery -')

@section('content')
    <div class="example">
        <h5>
            {{ $headingGallery->count() < 1 ? 'Click here for create new Heading & Sub Text' : "" }}
            <a  class="{{ $headingGallery->count() < 1 ? ' ' : "text-danger btn disabled" }}" style="margin-left: 1% !important" href="{{ route('hst-gallery.create') }}">
                <svg class="nav-icon text-bg-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/brand.svg#cib-addthis') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-387">

                @include('backEnd.inc.error')

                <table class="table">
                    <thead class="">
                    <tr>
                        <th>Gallery Heading</th>
                        <th>Gallery Sub Text</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($headingGallery as $gallery)
                        <tr>
                            <td>{{ $gallery->headingGallery }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($gallery->subTextGallery, 90) }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ $gallery->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('hst-gallery.destroy', $gallery->id) }}" method="post">
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
