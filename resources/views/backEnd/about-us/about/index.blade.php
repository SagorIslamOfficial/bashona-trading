@extends('layouts.app')

@section('title', 'Home - About Us -')

@section('content')
    <div class="example">
        <h5>
            {{ $indexAboutUs->count() < 1 ? 'Click here for create new Slider' : "" }}
            <a  class="{{ $indexAboutUs->count() < 1 ? ' ' : "text-danger btn disabled" }}" style="margin-left: 1% !important" href="{{ route('about-us.create') }}">
                <svg class="nav-icon text-bg-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/brand.svg#cib-addthis') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-387">

                @include('backEnd.inc.error')

                <table class="table">
                    <thead class="">
                    <tr>
                        <th scope="col">#</th>
                        <th>Heading</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Link</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($indexAboutUs as $aboutUs)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $aboutUs->heading }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($aboutUs->description, 70) }}</td>
                            <td><img style="width: 90px; height: 50px;" src="{{ asset('storage/about-us/about/' . $aboutUs->image) }}" alt="{{ $aboutUs->heading }}"></td>
                            <td>{{ $aboutUs->link }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ $aboutUs->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('about-us.destroy', $aboutUs->id) }}" method="post">
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
