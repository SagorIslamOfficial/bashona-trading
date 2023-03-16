@extends('layouts.app')

@section('title', 'Home - Social Page Integration -')

@section('content')
    <div class="example">
        <h5>
            {{ $indexSocialPageIntegration->count() < 1 ? 'Click here for create new Social Page Integration' : "" }}
            <a  class="{{ $indexSocialPageIntegration->count() < 1 ? ' ' : "text-danger btn disabled" }}" style="margin-left: 1% !important" href="{{ route('footer-page-integration.create') }}">
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
                        <th>Version(Nullable)</th>
                        <th>Nonce(Nullable)</th>
                        <th>Page Link</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($indexSocialPageIntegration as $socialPageIntegration)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $socialPageIntegration->version }}</td>
                            <td>{{ $socialPageIntegration->nonce }}</td>
                            <td>{{ $socialPageIntegration->page_link }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ $socialPageIntegration->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('footer-page-integration.destroy', $socialPageIntegration->id) }}" method="post">
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
