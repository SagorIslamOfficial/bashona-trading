@extends('layouts.app')

@section('title', 'Home - About Us Team -')

@section('content')
    <div class="example">
        <h5>
            {{ $indexAboutUsTeam->count() < 15 ? 'Click here for create new Slider' : "" }}
            <a  class="{{ $indexAboutUsTeam->count() < 15 ? ' ' : "text-danger btn disabled" }}" style="margin-left: 1% !important" href="{{ route('about-team.create') }}">
                <svg class="nav-icon text-bg-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/brand.svg#cib-addthis') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-387">

                @include('backEnd.inc.error')

                <table class="table">
                    <thead class="">
                    <tr>
                        <th>Right Name</th>
                        <th>Right Position</th>
                        <th>Right Image</th>

                        <th>Left Name</th>
                        <th>Left Position</th>
                        <th>Left Image</th>

                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($indexAboutUsTeam as $aboutUsTeam)
                        <tr>
                            <td>{{ $aboutUsTeam->rightName }}</td>
                            <td>{{ $aboutUsTeam->rightPosition }}</td>
                            <td>{!! (Str::limit($aboutUsTeam->rightMessage, 70)) !!}</td>
                            <td><img style="width: 90px; height: 50px;" src="{{ asset('storage/about-us/team/' . $aboutUsTeam->rightImage) }}" alt="{{ $aboutUsTeam->rightName }}"></td>

                            <td>{{ $aboutUsTeam->leftName }}</td>
                            <td>{{ $aboutUsTeam->leftPosition }}</td>
                            <td>{!! (Str::limit($aboutUsTeam->leftMessage, 70)) !!}</td>
                            @if($aboutUsTeam->leftImage !== null)
                                <td><img style="width: 90px; height: 50px;" src="{{ asset('storage/about-us/team/' . $aboutUsTeam->leftImage) }}" alt="{{ $aboutUsTeam->leftName }}"></td>
                            @else
                                'no image'
                            @endif

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
