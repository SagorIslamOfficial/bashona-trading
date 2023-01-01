@extends('layouts.app')

@section('title', 'Home - Art Venture Team -')

@section('content')
    <div class="example">
        <h5>
            Click here for create new Art Venture Team
            <a class="" style="margin-left: 1% !important" href="{{ route('art-venture-team.create') }}">
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

                    @foreach($indexArtVentureTeams as $key => $artVentureTeam)
                        <tr>
                            <th scope="row">{{ $key +1 }}</th>
                            <td>{{ $artVentureTeam->name }}</td>
                            <td>{{ $artVentureTeam->position }}</td>
                            <td>{{ $artVentureTeam->description }}</td>
                            <td>{{ $artVentureTeam->email }}</td>
                            <td><img style="width: 90px; height: 50px;" src="{{ asset('storage/company/all-company/art-venture/team/' . $artVentureTeam->image) }}" alt="{{ $artVentureTeam->name }}"></td>
                            <td>
                                <a class="btn btn-success" href="{{ $artVentureTeam->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('art-venture-team.destroy', $artVentureTeam->id) }}" method="post">
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
