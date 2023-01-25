@extends('layouts.app')

@section('title', 'Show - Art Venture Service Item -')

@section('content')
    <div class="example">
        <h5>
            Click here for create new Service Item
            <a  class="" style="margin-left: 1% !important" href="{{ route('art-venture-item.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-387">
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-sm-3"><h6>Serial No</h6></div>
                        <div class="col-sm-9"><h6>:<span style="padding-left: 2%">{{ $viewArtVentureServiceItem->id }}</span> </h6></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3"><h6>Category Name</h6></div>
                        <div class="col-sm-9"><h6>:<span style="padding-left: 2%">{{ $viewArtVentureServiceItem->artVentureCategory->name }}</h6></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3"><h6>Company</h6></div>
                        <div class="col-sm-9"><h6>:<span style="padding-left: 2%">{{ $viewArtVentureServiceItem->company }}</span></h6></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3"><h6>Image</h6></div>
                        <div class="col-sm-9"><h6>:<span style="padding-left: 2%"><img style="width: 150px; height: 90px;" src="{{ asset('storage/company/all-company/art-venture/service/item/' . $viewArtVentureServiceItem->image) }}" alt="{{ $viewArtVentureServiceItem->name }}"></span></h6></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3"><h6>Images</h6></div>
                        <div class="col-sm-9"><h6>:<span style="padding-left: 2%">
                                @php($images = json_decode($viewArtVentureServiceItem->images))
                                @foreach($images as $file)
                                    <img style="width: 90px; height: 60px;" src="{{ asset('storage/company/all-company/art-venture/service/item/details/' . $file) }}" alt="{{ $viewArtVentureServiceItem->name }}">
                                @endforeach
                            </h6>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3"><h6>Project Heading</h6></div>
                        <div class="col-sm-9"><h6>:<span style="padding-left: 2%">{{ $viewArtVentureServiceItem->project_heading }}</h6></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3"><h6>Project Description</h6></div>
                        <div class="col-sm-9"><h6>:<span style="padding-left: 2%">{{ $viewArtVentureServiceItem->project_description }}</h6></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3"><h6>Project Details Heading</h6></div>
                        <div class="col-sm-9"><h6>:<span style="padding-left: 2%">{{ $viewArtVentureServiceItem->project_details_heading }}</h6></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3"><h6>Project Client</h6></div>
                        <div class="col-sm-9"><h6>:<span style="padding-left: 2%">{{ $viewArtVentureServiceItem->project_client }}</h6></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3"><h6>Project Client Content</h6></div>
                        <div class="col-sm-9"><h6>:<span style="padding-left: 2%">{{ $viewArtVentureServiceItem->project_client_content }}</h6></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3"><h6>Project Date</h6></div>
                        <div class="col-sm-9"><h6>:<span style="padding-left: 2%">{{ $viewArtVentureServiceItem->project_date }}</h6></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3"><h6>Project Date Content</h6></div>
                        <div class="col-sm-9"><h6>:<span style="padding-left: 2%">{{ $viewArtVentureServiceItem->project_date_content }}</h6></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3"><h6>Project Skills</h6></div>
                        <div class="col-sm-9"><h6>:<span style="padding-left: 2%">{{ $viewArtVentureServiceItem->project_skills }}</h6></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3"><h6>Project Skills Content</h6></div>
                        <div class="col-sm-9"><h6>:<span style="padding-left: 2%">{{ $viewArtVentureServiceItem->project_skills_content }}</h6></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3"><h6>Project URL</h6></div>
                        <div class="col-sm-9"><h6>:<span style="padding-left: 2%">{{ $viewArtVentureServiceItem->project_url }}</h6></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3"><h6>Project URL Content</h6></div>
                        <div class="col-sm-9"><h6>:<span style="padding-left: 2%">{{ $viewArtVentureServiceItem->project_url_content }}</h6></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3"><h6>Project Link</h6></div>
                        <div class="col-sm-9"><h6>:<span style="padding-left: 2%">{{ $viewArtVentureServiceItem->project_link }}</h6></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3"><h6>Portfolio Heading</h6></div>
                        <div class="col-sm-9"><h6>:<span style="padding-left: 2%">{{ $viewArtVentureServiceItem->portfolio_heading }}</h6></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3"><h6>Portfolio Images</h6></div>
                        <div class="col-sm-9"><h6>:<span style="padding-left: 2%">
                                @php($images = json_decode($viewArtVentureServiceItem->portfolio_images))
                                    @foreach($images as $file)
                                        <img style="width: 90px; height: 60px;" src="{{ asset('storage/company/all-company/art-venture/service/item/portfolio/' . $file) }}" alt="{{ $viewArtVentureServiceItem->name }}">
                                @endforeach
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
