@extends('layouts.app')

@section('title', 'Home - Tns About -')

@section('content')
    <div class="example">
        <h5>
            {{ $indexTnsAbout->count() < 1 ? 'Click here for create new Tns About' : "" }}
            <a  class="{{ $indexTnsAbout->count() < 1 ? ' ' : "text-danger btn disabled" }}" style="margin-left: 1% !important" href="{{ route('tns-about.create') }}">
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

                    @foreach($indexTnsAbout as $tnsAbout)
                        <tr>
                            <td>{{ $tnsAbout->title }}</td>
                            <td>{{ $tnsAbout->text }}</td>
                            <td><img style="width: 90px; height: 50px;" src="{{ asset('storage/company/all-company/tns/about/' . $tnsAbout->image) }}" alt="{{ $tnsAbout->title }}"></td>
                            <td>
                                <a class="btn btn-success" href="{{ $tnsAbout->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('tns-about.destroy', $tnsAbout->id) }}" method="post">
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
