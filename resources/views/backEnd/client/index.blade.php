@extends('layouts.app')

@section('title', 'Home - Client -')

@section('content')
    <div class="example">
        <h5>
            Click here for create new Client
            <a class="" style="margin-left: 1% !important" href="{{ route('client.create') }}">
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
                        <th>Image</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($indexClient as $client)
                        <tr>
                            <th scope="row">1</th>
                            <td><img style="width: 90px; height: 50px;" src="{{ asset('storage/client/' . $client->image) }}" alt="{{ $client->name }}"></td>
                            <td>{{ $client->name }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ $client->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('client.destroy', $client->id) }}" method="post">
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
