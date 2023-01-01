@extends('layouts.app')

@section('title', 'Home - Address -')

@section('content')
    <div class="example">
        <h5>
            {{ $indexAddress->count() < 2 ? 'Click here for create new Address' : "" }}
            <a  class="{{ $indexAddress->count() < 2 ? ' ' : "text-danger btn disabled" }}" style="margin-left: 1% !important" href="{{ route('address.create') }}">
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
                        <th>Address Location</th>
                        <th>Icon(Font Awesome)</th>
                        <th>Heading</th>
                        <th>Full Address</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($indexAddress as $address)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $address->office_location }}</td>
                            <td>{{ $address->address }}</td>
                            <td>{{ $address->phone }}</td>
                            <td>{{ $address->email }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ $address->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('address.destroy', $address->id) }}" method="post">
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
