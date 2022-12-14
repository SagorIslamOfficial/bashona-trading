@extends('layouts.app')

@section('title', 'Heading & Sub Text - Tns -')

@section('content')
    <div class="example">
        <h5>
            {{ $headingTnsCompany->count() < 1 ? 'Click here for create new Heading & Sub Text' : "" }}
            <a  class="{{ $headingTnsCompany->count() < 1 ? ' ' : "text-danger btn disabled" }}" style="margin-left: 1% !important" href="{{ route('hst-tns.create') }}">
                <svg class="nav-icon text-bg-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/brand.svg#cib-addthis') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-387">

                @include('backEnd.inc.error')

                <table class="table">
                    <thead class="">
                    <tr>
                        <th>TnsH</th>
                        <th>TnsST</th>
                        <th>TnsTH</th>
                        <th>TnsTST</th>
                        <th>TnsCH</th>
                        <th>TnsCST</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($headingTnsCompany as $tnsCompany)
                        <tr>
                            <td>{{ $tnsCompany->headingTnsCompany }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($tnsCompany->subTextTnsCompany, 30) }}</td>
                            <td>{{ $tnsCompany->headingTnsCompanyService }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($tnsCompany->subTextTnsCompanyService, 30) }}</td>
                            <td>{{ $tnsCompany->headingTnsCompanyTeam }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($tnsCompany->subTextTnsCompanyTeam, 30) }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ $tnsCompany->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('hst-tns.destroy', $tnsCompany->id) }}" method="post">
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
