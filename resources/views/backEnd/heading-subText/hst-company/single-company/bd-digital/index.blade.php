@extends('layouts.app')

@section('title', 'Heading & Sub Text - BD Digital -')

@section('content')
    <div class="example">
        <h5>
            {{ $headingBdDigitalCompany->count() < 1 ? 'Click here for create new Heading & Sub Text' : "" }}
            <a  class="{{ $headingBdDigitalCompany->count() < 1 ? ' ' : "text-danger btn disabled" }}" style="margin-left: 1% !important" href="{{ route('hst-bd-digital.create') }}">
                <svg class="nav-icon text-bg-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/brand.svg#cib-addthis') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-387">

                @include('backEnd.inc.error')

                <table class="table">
                    <thead class="">
                    <tr>
                        <th>BDDH</th>
                        <th>BDDST</th>
                        <th>BDDTH</th>
                        <th>BDDTST</th>
                        <th>BDDCH</th>
                        <th>BDDCST</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($headingBdDigitalCompany as $bdDigitalCompany)
                        <tr>
                            <td>{{ $bdDigitalCompany->headingBdDigitalCompany }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($bdDigitalCompany->subTextBdDigitalCompany, 30) }}</td>
                            <td>{{ $bdDigitalCompany->headingBdDigitalCompanyService }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($bdDigitalCompany->subTextBdDigitalCompanyService, 30) }}</td>
                            <td>{{ $bdDigitalCompany->headingBdDigitalCompanyTeam }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($bdDigitalCompany->subTextBdDigitalCompanyTeam, 30) }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ $bdDigitalCompany->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('hst-bd-digital.destroy', $bdDigitalCompany->id) }}" method="post">
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
