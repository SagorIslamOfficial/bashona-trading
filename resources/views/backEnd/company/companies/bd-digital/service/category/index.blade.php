@extends('layouts.app')

@section('title', 'Home - BD Digital Service Category -')

@section('content')
    <div class="example">
        <h5>
            {{ $indexBdDigitalServiceCategories->count() < 10 ? 'Click here for create new BD Digital Category' : "" }}
            <a  class="{{ $indexBdDigitalServiceCategories->count() < 10 ? ' ' : "text-danger btn disabled" }}" style="margin-left: 1% !important" href="{{ route('bd-digital-service-category.create') }}">
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
                        <th>Slug</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($indexBdDigitalServiceCategories as $key => $bdDigitalServiceCategory)
                        <tr>
                            <th scope="row">{{ $key +1 }}</th>
                            <td>{{ $bdDigitalServiceCategory->name }}</td>
                            <td>{{ $bdDigitalServiceCategory->slug }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ $bdDigitalServiceCategory->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('bd-digital-service-category.destroy', $bdDigitalServiceCategory->id) }}" method="post">
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
