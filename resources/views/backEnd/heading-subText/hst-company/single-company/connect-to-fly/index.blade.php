@extends('layouts.app')

@section('title', 'Heading & Sub Text - Connect To Fly -')

@section('content')
    <div class="example">
        <h5>
            {{ $headingConnectToFlyCompany->count() < 1 ? 'Click here for create new Heading & Sub Text' : "" }}
            <a  class="{{ $headingConnectToFlyCompany->count() < 1 ? ' ' : "text-danger btn disabled" }}" style="margin-left: 1% !important" href="{{ route('hst-connect-to-fly.create') }}">
                <svg class="nav-icon text-bg-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/brand.svg#cib-addthis') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-387">

                @include('backEnd.inc.error')

                <table class="table">
                    <thead class="">
                    <tr>
                        <th>CTFH</th>
                        <th>CTFST</th>
                        <th>CTFTH</th>
                        <th>CTFTST</th>
                        <th>CTFCH</th>
                        <th>CTFCST</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($headingConnectToFlyCompany as $connectToFlyCompany)
                        <tr>
                            <td>{{ $connectToFlyCompany->headingConnectToFlyCompany }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($connectToFlyCompany->subTextConnectToFlyCompany, 30) }}</td>
                            <td>{{ $connectToFlyCompany->headingConnectToFlyCompanyService }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($connectToFlyCompany->subTextConnectToFlyCompanyService, 30) }}</td>
                            <td>{{ $connectToFlyCompany->headingConnectToFlyCompanyTeam }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($connectToFlyCompany->subTextConnectToFlyCompanyTeam, 30) }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ $connectToFlyCompany->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('hst-connect-to-fly.destroy', $connectToFlyCompany->id) }}" method="post">
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
