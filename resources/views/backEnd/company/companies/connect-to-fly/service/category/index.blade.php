@extends('layouts.app')

@section('title', 'Home - Connect To Fly Service Category -')

@section('content')
    <div class="example">
        <h5>
            {{ $indexConnectToFlyServiceCategories->count() < 10 ? 'Click here for create new Connect To Fly Category' : "" }}
            <a  class="{{ $indexConnectToFlyServiceCategories->count() < 10 ? ' ' : "text-danger btn disabled" }}" style="margin-left: 1% !important" href="{{ route('ctf-service-category.create') }}">
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

                    @foreach($indexConnectToFlyServiceCategories as $key => $connectToFlyServiceCategory)
                        <tr>
                            <th scope="row">{{ $key +1 }}</th>
                            <td>{{ $connectToFlyServiceCategory->name }}</td>
                            <td>{{ $connectToFlyServiceCategory->slug }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ $connectToFlyServiceCategory->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('ctf-service-category.destroy', $connectToFlyServiceCategory->id) }}" method="post">
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
