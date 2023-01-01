@extends('layouts.app')

@section('title', 'Home - Add Company -')

@section('content')
    <div class="example">
        <h5>
            Click here for create new Add Company
            <a class="" style="margin-left: 1% !important" href="{{ route('add-company.create') }}">
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
                        <th>Text</th>
                        <th>Link</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($indexAddCompanies as $key => $addCompany)
                        <tr>
                            <th scope="row">{{ $key +1 }}</th>
                            <td>{{ $addCompany->name }}</td>
                            <td>{{ $addCompany->text }}</td>
                            <td>{{ $addCompany->link }}</td>
                            <td><img style="width: 90px; height: 50px;" src="{{ asset('storage/company/companies/' . $addCompany->image) }}" alt="{{ $addCompany->name }}"></td>
                            <td>
                                <a class="btn btn-success" href="{{ $addCompany->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('add-company.destroy', $addCompany->id) }}" method="post">
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
