@extends('layouts.app')

@section('title', 'Home - Quick Link -')

@section('content')
    <div class="example">
        <h5>
            {{ $indexFooterTags->count() < 10 ? 'Click here for create new Footer Tag' : "" }}
            <a  class="{{ $indexFooterTags->count() < 10 ? ' ' : "text-danger btn disabled" }}" style="margin-left: 1% !important" href="{{ route('footer-tag.create') }}">
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
                        <th>Name</th>
                        <th>Link</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($indexFooterTags as $footerTag)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $footerTag->name }}</td>
                            <td>{{ $footerTag->link }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ $footerTag->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('footer-tag.destroy', $footerTag->id) }}" method="post">
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
