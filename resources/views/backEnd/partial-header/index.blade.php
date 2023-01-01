@extends('layouts.app')

@section('title', 'Home - Header -')

@section('content')
    <div class="example">
        <h5>
            {{ $indexHeader->count() < 1 ? 'Click here for create new Header' : "" }}
            <a class="{{ $indexHeader->count() < 1 ? ' ' : "text-danger btn disabled" }}" href="{{ route("partial-header.create") }}">
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
                        <th>P1</th>
                        <th>P2</th>
                        <th>Email 1</th>
                        <th>Email 2</th>
                        <th>Logo</th>
                        <th>Text</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($indexHeader as $header)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $header->number_1 }}</td>
                            <td>{{ $header->number_2 }}</td>
                            <td>{{ $header->email_1 }}</td>
                            <td>{{ $header->email_2 }}</td>
                            <td><img style="width: 90px; height: 50px;" src="{{ asset('storage/partial_header/' . $header->logo) }}" alt="{{ $header->logo }}"></td>
                            <td>{{ \Illuminate\Support\Str::limit($header->text, 100) }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ route('partial-header.edit', $header->id) }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('partial-header.destroy', $header->id) }}" method="post">
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
