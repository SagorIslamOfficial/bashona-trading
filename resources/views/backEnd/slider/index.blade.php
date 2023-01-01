@extends('layouts.app')

@section('title', 'Home - Slider -')

@section('content')
    <div class="example">
        <h5>
            {{ $indexSliders->count() < 10 ? 'Click here for create new Slider' : "" }}
            <a  class="{{ $indexSliders->count() < 10 ? ' ' : "text-danger btn disabled" }}" style="margin-left: 1% !important" href="{{ route('slider.create') }}">
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
                        <th>Heading Text</th>
                        <th>Sub Text</th>
                        <th>Link</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($indexSliders as $slider)
                        <tr>
                            <th scope="row">1</th>
                            <td><img style="width: 90px; height: 50px;" src="{{ asset('storage/Slider/' . $slider->image) }}" alt="{{ $slider->name }}"></td>
                            <td>{{ $slider->heading_text }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($slider->sub_text, 70) }}</td>
                            <td>{{ $slider->link }}</td>
                            <td>{{ $slider->name }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ $slider->editPath() }}"> EDIT </a>
                                <form class="d-inline" action="{{ route('slider.destroy', $slider->id) }}" method="post">
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
