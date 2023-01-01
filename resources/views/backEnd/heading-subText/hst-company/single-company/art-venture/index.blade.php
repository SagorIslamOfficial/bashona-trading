@extends('layouts.app')

@section('title', 'Heading & Sub Text - Art Venture -')

@section('content')
    <div class="example">
        <h5>
            {{ $headingArtVentureCompany->count() < 1 ? 'Click here for create new Heading & Sub Text' : "" }}
            <a  class="{{ $headingArtVentureCompany->count() < 1 ? ' ' : "text-danger btn disabled" }}" style="margin-left: 1% !important" href="{{ route('hst-art-venture.create') }}">
                <svg class="nav-icon text-bg-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/brand.svg#cib-addthis') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-387">

                @include('backEnd.inc.error')

                <table class="table">
                    <thead class="">
                    <tr>
                        <th>AVH</th>
                        <th>AVST</th>
                        <th>AVTH</th>
                        <th>AVTST</th>
                        <th>AVCH</th>
                        <th>AVCST</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($headingArtVentureCompany as $artVentureCompany)
                        <tr>
                            <td>{{ $artVentureCompany->headingArtVentureCompany }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($artVentureCompany->subTextArtVentureCompany, 30) }}</td>
                            <td>{{ $artVentureCompany->headingArtVentureCompanyService }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($artVentureCompany->subTextArtVentureCompanyService, 30) }}</td>
                            <td>{{ $artVentureCompany->headingArtVentureCompanyTeam }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($artVentureCompany->subTextArtVentureCompanyTeam, 30) }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ $artVentureCompany->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('hst-art-venture.destroy', $artVentureCompany->id) }}" method="post">
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
