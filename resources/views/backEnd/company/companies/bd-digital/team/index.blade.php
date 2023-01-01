@extends('layouts.app')

@section('title', 'Home - BD Digital Team -')

@section('content')
    <div class="example">
        <h5>
            Click here for create new BD Digital Team
            <a class="" style="margin-left: 1% !important" href="{{ route('bd-digital-team.create') }}">
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
                        <th>Name</th>
                        <th>Position</th>
                        <th>Description</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($indexBdDigitalTeams as $key => $bdDigitalTeam)
                        <tr>
                            <th scope="row">{{ $key +1 }}</th>
                            <td>{{ $bdDigitalTeam->name }}</td>
                            <td>{{ $bdDigitalTeam->position }}</td>
                            <td>{{ $bdDigitalTeam->description }}</td>
                            <td>{{ $bdDigitalTeam->email }}</td>
                            <td><img style="width: 90px; height: 50px;" src="{{ asset('storage/company/all-company/bd-digital/team/' . $bdDigitalTeam->image) }}" alt="{{ $bdDigitalTeam->name }}"></td>
                            <td>
                                <a class="btn btn-success" href="{{ $bdDigitalTeam->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('bd-digital-team.destroy', $bdDigitalTeam->id) }}" method="post">
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
