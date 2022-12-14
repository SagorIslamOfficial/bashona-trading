@extends('layouts.app')

@section('title', 'Home - Connect To Fly Team -')

@section('content')
    <div class="example">
        <h5>
            Click here for create new Connect To Fly Team
            <a class="" style="margin-left: 1% !important" href="{{ route('ctf-team.create') }}">
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

                    @foreach($indexConnectToFlyTeams as $key => $connectToFlyTeam)
                        <tr>
                            <th scope="row">{{ $key +1 }}</th>
                            <td>{{ $connectToFlyTeam->name }}</td>
                            <td>{{ $connectToFlyTeam->position }}</td>
                            <td>{{ $connectToFlyTeam->description }}</td>
                            <td>{{ $connectToFlyTeam->email }}</td>
                            <td><img style="width: 90px; height: 50px;" src="{{ asset('storage/company/all-company/connect-to-fly/team/' . $connectToFlyTeam->image) }}" alt="{{ $connectToFlyTeam->name }}"></td>
                            <td>
                                <a class="btn btn-success" href="{{ $connectToFlyTeam->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('ctf-team.destroy', $connectToFlyTeam->id) }}" method="post">
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
