@extends('layouts.app')

@section('title', 'Home - Gallery Category -')

@section('content')
    <div class="example">
        <h5>
            {{ $indexGalleryCategories->count() < 10 ? 'Click here for create new Gallery Category' : "" }}
            <a  class="{{ $indexGalleryCategories->count() < 10 ? ' ' : "text-danger btn disabled" }}" style="margin-left: 1% !important" href="{{ route('gallery-category.create') }}">
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
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($indexGalleryCategories as $key => $galleryCategory)
                        <tr>
                            <th scope="row">{{ $key +1 }}</th>
                            <td>{{ $galleryCategory->name }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ $galleryCategory->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('gallery-category.destroy', $galleryCategory->id) }}" method="post">
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
