@extends('layouts.app')

@section('title', 'Home - About Us Team -')

@section('content')
    <div class="example">
        <h5>
            {{ $indexAboutUsTeam->count() < 1 ? 'Click here for create new Slider' : "" }}
            <a  class="{{ $indexAboutUsTeam->count() < 1 ? ' ' : "text-danger btn disabled" }}" style="margin-left: 1% !important" href="{{ route('about-team.create') }}">
                <svg class="nav-icon text-bg-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/brand.svg#cib-addthis') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-387">

                @include('backEnd.inc.error')

                <table class="table">
                    <thead class="">
                    <tr>
                        <th>Name 1</th>
                        <th>Position 1</th>
                        <th>Image 1</th>
                        <th>Name 2</th>
                        <th>Position 2</th>
                        <th>Image 2</th>
                        <th>Name 3</th>
                        <th>Position 3</th>
                        <th>Image 3</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($indexAboutUsTeam as $aboutUsTeam)
                        <tr>
                            <td>{{ $aboutUsTeam->name1 }}</td>
                            <td>{{ $aboutUsTeam->position1 }}</td>
                            <td><img style="width: 90px; height: 50px;" src="{{ asset('storage/about-us/team/' . $aboutUsTeam->image1) }}" alt="{{ $aboutUsTeam->name1 }}"></td>
                            <td>{{ $aboutUsTeam->name2 }}</td>
                            <td>{{ $aboutUsTeam->position2 }}</td>
                            <td><img style="width: 90px; height: 50px;" src="{{ asset('storage/about-us/team/' . $aboutUsTeam->image2) }}" alt="{{ $aboutUsTeam->name2 }}"></td>
                            <td>{{ $aboutUsTeam->name3 }}</td>
                            <td>{{ $aboutUsTeam->position3 }}</td>
                            <td><img style="width: 90px; height: 50px;" src="{{ asset('storage/about-us/team/' . $aboutUsTeam->image3) }}" alt="{{ $aboutUsTeam->name3 }}"></td>
                            <td>
                                <a class="btn btn-success" href="{{ $aboutUsTeam->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('about-team.destroy', $aboutUsTeam->id) }}" method="post">
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
