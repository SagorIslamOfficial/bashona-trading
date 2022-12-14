@extends('layouts.app')

@section('title', 'Home - Gallery Item -')

@section('content')
    <div class="example">
        <h5>
            Click here for create new Gallery Item
            <a  class="text-danger" style="margin-left: 1% !important" href="{{ route('gallery-item.create') }}">
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
                        <th>Category</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($indexGalleryItems as $key => $indexGalleryItem)
                        <tr>
                            <th scope="row">{{ $key +1 }}</th>
                            <td>{{ $indexGalleryItem->category->name }}</td>
                            <td>{{ $indexGalleryItem->name }}</td>
                            <td><img style="width: 90px; height: 60px;" src="{{ asset('storage/gallery-item/' . $indexGalleryItem->image) }}" alt="{{ $indexGalleryItem->name }}"></td>
                            <td>
                                <a class="btn btn-success" href="{{ $indexGalleryItem->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('gallery-item.destroy', $indexGalleryItem->id) }}" method="post">
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
