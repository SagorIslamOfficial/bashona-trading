@extends('layouts.app')

@section('title', 'Home - About Us Directories Messages-')

@section('content')
    <div class="example">
        <h5>
            {{ $indexAboutUsMessage->count() < 1 ? 'Click here for create new About Us Directories Messages' : "" }}
            <a  class="{{ $indexAboutUsMessage->count() < 1 ? ' ' : "text-danger btn disabled" }}" style="margin-left: 1% !important" href="{{ route('about-message.create') }}">
                <svg class="nav-icon text-bg-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/brand.svg#cib-addthis') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-387">

                @include('backEnd.inc.error')

                <table class="table">
                    <thead class="">
                    <tr>
                        <th>Heading</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($indexAboutUsMessage as $message)
                        <tr>
                            <td>{{ $message->heading }}</td>
                            <td>{!! \Illuminate\Support\Str::limit($message->message, 150) !!}</td>
                            <td>
                                <a class="btn btn-success" href="{{ $message->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('about-message.destroy', $message->id) }}" method="post">
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
