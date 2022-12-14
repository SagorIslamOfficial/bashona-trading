@extends('layouts.app')

@section('title', 'Heading & Sub Text - About Us -')

@section('content')
    <div class="example">
        <h5>
            {{ $headingAboutUs->count() < 1 ? 'Click here for create new Heading & Sub Text' : "" }}
            <a  class="{{ $headingAboutUs->count() < 1 ? ' ' : "text-danger btn disabled" }}" style="margin-left: 1% !important" href="{{ route('hst-about-us.create') }}">
                <svg class="nav-icon text-bg-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/brand.svg#cib-addthis') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-387">

                @include('backEnd.inc.error')

                <table class="table">
                    <thead class="">
                    <tr>
                        <th>AUH</th>
                        <th>AUST</th>
                        <th>AUTH</th>
                        <th>AUTST</th>
                        <th>AUCH</th>
                        <th>AUCST</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($headingAboutUs as $aboutUs)
                        <tr>
                            <td>{{ $aboutUs->headingAboutUs }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($aboutUs->subTextAboutUs, 30) }}</td>
                            <td>{{ $aboutUs->headingAboutUsTeam }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($aboutUs->subTextAboutUsTeam, 30) }}</td>
                            <td>{{ $aboutUs->headingAboutUsClient }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($aboutUs->subTextAboutUsClient, 30) }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ $aboutUs->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('hst-about-us.destroy', $aboutUs->id) }}" method="post">
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
