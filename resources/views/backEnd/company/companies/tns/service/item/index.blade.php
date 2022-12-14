@extends('layouts.app')

@section('title', 'Home - Tns Service Item -')

@section('content')
    <div class="example">
        <h5>
            Click here for create new Tns Service Item
            <a  class="text-danger" style="margin-left: 1% !important" href="{{ route('tns-item.create') }}">
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

                    @foreach($indexTnsServiceItems as $tnsServiceItem)
                        <tr>
                            <td>{{ $tnsServiceItem->tnsServiceCategory->name }}</td>
                            <td>{{ $tnsServiceItem->name }}</td>
                            <td>{{ $tnsServiceItem->company }}</td>
                            <td><img style="width: 90px; height: 60px;" src="{{ asset('storage/company/all-company/tns/service/item/' . $tnsServiceItem->image) }}" alt="{{ $tnsServiceItem->name }}"></td>
                            <td>{{ $tnsServiceItem->project_link }}</td>
                            <td>
                                @php($images = json_decode($tnsServiceItem->images))
                                @foreach($images as $file)
                                    <img style="width: 50px; height: 35px;" src="{{ asset('storage/company/all-company/tns/service/item/details/' . $file) }}" alt="{{ $tnsServiceItem->name }}">
                                @endforeach
                            </td>
                            <td>
                                @php($images = json_decode($tnsServiceItem->portfolio_images))
                                @foreach($images as $file)
                                    <img style="width: 50px; height: 35px;" src="{{ asset('storage/company/all-company/tns/service/item/portfolio/' . $file) }}" alt="{{ $tnsServiceItem->name }}">
                                @endforeach
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{ $tnsServiceItem->editPath() }}"> EDIT </a>
                                <a class="btn btn-info" href="{{ $tnsServiceItem->showPath() }}"> VIEW </a>
                                <form class="d-inline" action="{{ route('tns-item.destroy', $tnsServiceItem->id) }}" method="post">
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
