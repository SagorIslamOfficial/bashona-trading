@extends('layouts.app')

@section('title', 'Heading & Sub Text - Company -')

@section('content')
    <div class="example">
        <h5>
            {{ $headingCompany->count() < 1 ? 'Click here for create new Heading & Sub Text' : "" }}
            <a  class="{{ $headingCompany->count() < 1 ? ' ' : "text-danger btn disabled" }}" style="margin-left: 1% !important" href="{{ route('hst-companies.create') }}">
                <svg class="nav-icon text-bg-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/brand.svg#cib-addthis') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-387">

                @include('backEnd.inc.error')

                <table class="table">
                    <thead class="">
                    <tr>
                        <th>CH</th>
                        <th>CST</th>
                        <th>CTH</th>
                        <th>CTST</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($headingCompany as $company)
                        <tr>
                            <td>{{ $company->headingCompanies }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($company->subTextCompanies, 30) }}</td>
                            <td>{{ $company->headingCompanyTeam }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($company->subTextCompanyTeam, 30) }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ $company->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('hst-companies.destroy', $company->id) }}" method="post">
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
