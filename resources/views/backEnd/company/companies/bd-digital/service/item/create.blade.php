@extends('layouts.app')

@section('title', 'Create - BD Digital Service Category')

@section('content')
    <div class="example">
        <h5>
            Click here to all BD Digital Service Item
            <a class="" style="margin-left: 1% !important" href="{{ route('bd-digital-service-item.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <!-- Contact form start -->
                <form action="{{ route('bd-digital-service-item.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3 row">
                        <label for="bd_digital_service_category_id" class="col-sm-2 col-form-label">Categories</label>
                        <div class="col-sm-8">
                            <select class="form-control form-select @error('bd_digital_service_category_id') is-invalid @enderror" aria-label="Default select example" name="bd_digital_service_category_id" id="bd_digital_service_category_id">
                                <option selected disabled>Select Category</option>
                                @foreach($getBdDigitalServiceCategories as $bdDigitalServiceCategory)
                                    <option value="{{ $bdDigitalServiceCategory->id }}">{{ $bdDigitalServiceCategory->name }}</option>
                                @endforeach
                            </select>
                            @error('bd_digital_service_category_id')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="name">Name</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" type="text" placeholder="Write your BD Digital Service Item Name" />
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="company">Company</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('company') is-invalid @enderror" name="company" id="company" value="{{ old('company') }}" type="text" placeholder="Write your BD Digital Company Item Name" />
                            @error('company')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="image">Image(w-260, h-260)</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('image') is-invalid @enderror" name="image" id="image" type="file" />
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="images">Images(w-1115, h-515)</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('images') is-invalid @enderror" name="images[]" multiple id="images" type="file" />
                            @error('images')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="project_heading">Project Heading</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('project_heading') is-invalid @enderror" name="project_heading" id="project_heading" value="{{ old('project_heading') }}" type="text" placeholder="Write your BD Digital Single Service Project Heading" />
                            @error('project_heading')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="project_description">Project Description</label>
                        <div class="col-sm-8">
                            <textarea name="project_description" placeholder="Write your BD Digital Single Service Project Description" rows="5" class="form-control @error('project_description') is-invalid @enderror" id="project_description">{{ old('project_description') }}</textarea>
                            @error('project_description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="project_details_heading">Project Details Heading</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('project_details_heading') is-invalid @enderror" name="project_details_heading" id="project_details_heading" value="{{ old('project_details_heading') }}" type="text" placeholder="Write your BD Digital Single Service Project Details Heading" />
                            @error('project_details_heading')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="project_client">Project Client</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('project_client') is-invalid @enderror" name="project_client" id="project_client" value="{{ old('project_client') }}" type="text" placeholder="Write your BD Digital Single Service Item Project Client" />
                            @error('project_client')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="project_client_content">Project Client Content</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('project_client_content') is-invalid @enderror" name="project_client_content" id="project_client_content" value="{{ old('project_client_content') }}" type="text" placeholder="Write your BD Digital Single Service Item Project Client Content" />
                            @error('project_client_content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="project_date">Project Date</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('project_date') is-invalid @enderror" name="project_date" id="project_date" value="{{ old('project_date') }}" type="text" placeholder="Write your BD Digital Single Service Item Project Date" />
                            @error('project_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="project_date_content">Project Date Content</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('project_date_content') is-invalid @enderror" name="project_date_content" id="project_date_content" value="{{ old('project_date_content') }}" type="text" placeholder="Write your BD Digital Single Service Item Project Date Content" />
                            @error('project_date_content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="project_date">Project Skills</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('project_skills') is-invalid @enderror" name="project_skills" id="project_skills" value="{{ old('project_skills') }}" type="text" placeholder="Write your BD Digital Single Service Item Project Skills" />
                            @error('project_skills')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="project_date_content">Project Skills Content</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('project_skills_content') is-invalid @enderror" name="project_skills_content" id="project_skills_content" value="{{ old('project_skills_content') }}" type="text" placeholder="Write your BD Digital Single Service Item Project Skills Content" />
                            @error('project_skills_content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="project_date">Project URL</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('project_url') is-invalid @enderror" name="project_url" id="project_url" value="{{ old('project_url') }}" type="text" placeholder="Write your BD Digital Single Service Item Project URL" />
                            @error('project_url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="project_date_content">Project URL Content</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('project_url_content') is-invalid @enderror" name="project_url_content" id="project_url_content" value="{{ old('project_url_content') }}" type="text" placeholder="Write your BD Digital Single Service Item Project URL Content" />
                            @error('project_url_content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="project_link">Project Link</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('project_link') is-invalid @enderror" name="project_link" id="project_link" value="{{ old('project_link') }}" type="text" placeholder="Write your BD Digital Single Service Project Link" />
                            @error('project_link')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="portfolio_heading">Portfolio Heading</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('portfolio_heading') is-invalid @enderror" name="portfolio_heading" id="portfolio_heading" value="{{ old('portfolio_heading') }}" type="text" placeholder="Write your BD Digital Portfolio Heading" />
                            @error('portfolio_heading')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="portfolio_images">Portfolio Images(any size)</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('portfolio_images') is-invalid @enderror" name="portfolio_images[]" multiple id="portfolio_images" type="file" />
                            @error('portfolio_images')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row pt-4">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-2">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                </form>
                <!-- Contact form End -->
            </div>
        </div>
    </div>
@endsection
