@extends('layouts.app')

@section('title', 'Home - Map -')

@section('content')
    <div class="example">
        <h5>
            {{ $indexMap->count() < 2 ? 'Click here for create new Map' : "" }}
            <a  class="{{ $indexMap->count() < 2 ? ' ' : "text-danger btn disabled" }}" style="margin-left: 1% !important" href="{{ route('map.create') }}">
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
                        <th>Map Location</th>
                        <th>Map</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($indexMap as $map)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $map->map_location }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($map->map, 100) }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ $map->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('map.destroy', $map->id) }}" method="post">
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
