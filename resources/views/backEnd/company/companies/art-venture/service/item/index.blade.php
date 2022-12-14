@extends('layouts.app')

@section('title', 'Home - Art Venture Service Item -')

@section('content')
    <div class="example">
        <h5>
            Click here for create new Art Venture Service Item
            <a  class="text-danger" style="margin-left: 1% !important" href="{{ route('art-venture-item.create') }}">
                <svg class="nav-icon text-bg-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/brand.svg#cib-addthis') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-387">

                @include('backEnd.inc.error')

                <table class="table">
                    <thead class="">
                    <tr>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Company</th>
                        <th>Image</th>
                        <th>link</th>
                        <th>Images</th>
                        <th>Portfolio</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($indexArtVentureServiceItems as $artVentureServiceItem)
                        <tr>
                            <td>{{ $artVentureServiceItem->artVentureCategory->name }}</td>
                            <td>{{ $artVentureServiceItem->name }}</td>
                            <td>{{ $artVentureServiceItem->company }}</td>
                            <td><img style="width: 90px; height: 60px;" src="{{ asset('storage/company/all-company/art-venture/service/item/' . $artVentureServiceItem->image) }}" alt="{{ $artVentureServiceItem->name }}"></td>
                            <td>{{ $artVentureServiceItem->project_link }}</td>
                            <td>
                                @php($images = json_decode($artVentureServiceItem->images))
                                @foreach($images as $file)
                                    <img style="width: 50px; height: 35px;" src="{{ asset('storage/company/all-company/art-venture/service/item/details/' . $file) }}" alt="{{ $artVentureServiceItem->name }}">
                                @endforeach
                            </td>
                            <td>
                                @php($images = json_decode($artVentureServiceItem->portfolio_images))
                                @foreach($images as $file)
                                    <img style="width: 50px; height: 35px;" src="{{ asset('storage/company/all-company/art-venture/service/item/portfolio/' . $file) }}" alt="{{ $artVentureServiceItem->name }}">
                                @endforeach
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{ $artVentureServiceItem->editPath() }}"> EDIT </a>
                                <a class="btn btn-info" href="{{ $artVentureServiceItem->showPath() }}"> VIEW </a>
                                <form class="d-inline" action="{{ route('art-venture-item.destroy', $artVentureServiceItem->id) }}" method="post">
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
