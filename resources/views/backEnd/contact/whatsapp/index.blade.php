@extends('layouts.app')

@section('title', "Home - What's App")

@section('content')
    <div class="example">
        <h5>
            {{ $indexWhatsApp->count() < 1 ? 'Click here for create new Whats App Link' : "" }}
            <a  class="{{ $indexWhatsApp->count() < 1 ? ' ' : "text-danger btn disabled" }}" style="margin-left: 1% !important" href="{{ route('whatsapp.create') }}">
                <svg class="nav-icon text-bg-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/brand.svg#cib-addthis') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-387">

                @include('backEnd.inc.error')

                <table class="table">
                    <thead class="">
                    <tr>
                        <th>Number</th>
                        <th>Message</th>
                        <th>Color</th>
                        <th>Text</th>
                        <th>Theme</th>
                        <th>Position</th>
                        <th>Radius</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($indexWhatsApp as $whatsapp)
                        <tr>
                            <td>{{ $whatsapp->number }}</td>
                            <td>{{ $whatsapp->message }}</td>
                            <td>{{ $whatsapp->color }}</td>
                            <td>{{ $whatsapp->text }}</td>
                            <td>{{ $whatsapp->theme }}</td>
                            <td>{{ $whatsapp->position }}</td>
                            <td>{{ $whatsapp->radius }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ $whatsapp->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('whatsapp.destroy', $whatsapp->id) }}" method="post">
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
