@extends('layouts.app')

@section('title', 'Home - BD Digital Service Item -')

@section('content')
    <div class="example">
        <h5>
            Click here for create new BD Digital Service Item
            <a  class="text-danger" style="margin-left: 1% !important" href="{{ route('bd-digital-service-item.create') }}">
                <svg class="nav-icon text-bg-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/brand.svg#cib-addthis') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-387">

                @include('backEnd.inc.error')

                <table class="table" id="companies">
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

                    @foreach($indexBdDigitalServiceItems as $bdDigitalServiceItem)
                        <tr>
                            <td>{{ $bdDigitalServiceItem->bdDigitalServiceCategory->name }}</td>
                            <td>{{ $bdDigitalServiceItem->name }}</td>
                            <td>{{ $bdDigitalServiceItem->company }}</td>
                            <td><img style="width: 90px; height: 60px;" src="{{ asset('storage/company/all-company/bd-digital/service/item/' . $bdDigitalServiceItem->image) }}" alt="{{ $bdDigitalServiceItem->name }}"></td>
                            <td>{{ $bdDigitalServiceItem->project_link }}</td>
                            <td>
                                @php($images = json_decode($bdDigitalServiceItem->images))
                                @if(!empty($images))
                                    @foreach($images as $file)
                                        <img style="width: 50px; height: 35px;" src="{{ asset('storage/company/all-company/bd-digital/service/item/details/' . $file) }}" alt="{{ $bdDigitalServiceItem->name }}">
                                    @endforeach
                                    <form class="text-center" action="{{ route('bd-digital-item-images.destroy', $bdDigitalServiceItem->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Are you sure you want to delete this one?')" class="btn btn-danger mt-1">Delete</button>
                                    </form>
                                @else
                                    No Images found
                                @endif
                            </td>
                            <td>
                                @php($images = json_decode($bdDigitalServiceItem->portfolio_images))
                                @if(!empty($images))
                                    @foreach($images as $file)
                                        <img style="width: 50px; height: 35px;" src="{{ asset('storage/company/all-company/bd-digital/service/item/portfolio/' . $file) }}" alt="{{ $bdDigitalServiceItem->name }}">
                                    @endforeach
                                    <form class="text-center" action="{{ route('bd-digital-item-portfolio.destroy', $bdDigitalServiceItem->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Are you sure you want to delete this one?')" class="btn btn-danger mt-1">Delete</button>
                                    </form>
                                @else
                                    No Images found
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{ $bdDigitalServiceItem->editPath() }}"> EDIT </a>
                                <a class="btn btn-info" href="{{ $bdDigitalServiceItem->showPath() }}"> VIEW </a>
                                <form class="d-inline" action="{{ route('bd-digital-service-item.destroy', $bdDigitalServiceItem->id) }}" method="post">
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
