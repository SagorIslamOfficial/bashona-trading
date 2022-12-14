@extends('layouts.app')

@section('title', 'Home - Tns Team -')

@section('content')
    <div class="example">
        <h5>
            Click here for create new Tns Team
            <a class="" style="margin-left: 1% !important" href="{{ route('tns-team.create') }}">
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

                    @foreach($indexTnsTeams as $key => $tnsTeam)
                        <tr>
                            <th scope="row">{{ $key +1 }}</th>
                            <td>{{ $tnsTeam->name }}</td>
                            <td>{{ $tnsTeam->position }}</td>
                            <td>{{ $tnsTeam->description }}</td>
                            <td>{{ $tnsTeam->email }}</td>
                            <td><img style="width: 90px; height: 50px;" src="{{ asset('storage/company/all-company/tns/team/' . $tnsTeam->image) }}" alt="{{ $tnsTeam->name }}"></td>
                            <td>
                                <a class="btn btn-success" href="{{ $tnsTeam->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('tns-team.destroy', $tnsTeam->id) }}" method="post">
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
