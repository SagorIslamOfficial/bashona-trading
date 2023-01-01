@extends('layouts.app')

@section('title', 'Heading & Sub Text - Contact Us -')

@section('content')
    <div class="example">
        <h5>
            {{ $headingContact->count() < 1 ? 'Click here for create new Heading & Sub Text' : "" }}
            <a  class="{{ $headingContact->count() < 1 ? ' ' : "text-danger btn disabled" }}" style="margin-left: 1% !important" href="{{ route('hst-contact-us.create') }}">
                <svg class="nav-icon text-bg-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/brand.svg#cib-addthis') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-387">

                @include('backEnd.inc.error')

                <table class="table">
                    <thead class="">
                    <tr>
                        <th>Contact Heading</th>
                        <th>Contact Sub Text</th>
                        <th>Contact Us Heading</th>
                        <th>Contact Us Sub Text</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($headingContact as $contactUs)
                        <tr>
                            <td>{{ $contactUs->headingContact }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($contactUs->subTextContact, 30) }}</td>
                            <td>{{ $contactUs->headingContactUs }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($contactUs->subTextContactUs, 30) }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ $contactUs->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('hst-contact-us.destroy', $contactUs->id) }}" method="post">
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
