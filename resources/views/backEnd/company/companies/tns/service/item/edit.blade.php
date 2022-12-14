@extends('layouts.app')

@section('title', 'Edit - Tns Service Item')

@section('content')
    <div class="example">
        <h5>Edit
            <span class="text-info">{{ $editTnsServiceItem->name }}</span> - Click here to all Tns Service Item
            <a class="" style="margin-left: 1% !important" href="{{ route('tns-item.index') }}">
                <svg class="nav-icon text-success" style="height: 25px !important; width: 25px !important;"><use xlink:href="{{ asset('backEnd/vendors/@coreui/icons/svg/free.svg#cil-media-skip-backward') }}"></use></svg>
            </a>
        </h5>
        <div class="tab-content rounded-bottom">
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-824">
                <!-- Contact form start -->
                <form method="POST" action="{{ route('tns-item.update', $editTnsServiceItem->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3 row">
                        <label for="tns_service_category_id" class="col-sm-2 col-form-label">Categories</label>
                        <div class="col-sm-8">
                            <select class="form-control form-select @error('tns_service_category_id') is-invalid @enderror" aria-label="Default select example" name="tns_service_category_id" id="tns_service_category_id">
                                <option selected>Select Category</option>
                                @foreach($editTnsServiceCategory as $tnsServiceCategory)
                                    <option {{ $tnsServiceCategory->id == $editTnsServiceItem->tnsServiceCategory->id ? 'selected' : '' }} value="{{ $tnsServiceCategory->id }}">{{ $tnsServiceCategory->name }}</option>
                                @endforeach
                            </select>
                            @error('tns_service_category_id')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="name">Name</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ $editTnsServiceItem->name }}" type="text" placeholder="Update your Tns Service Item Name" />
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
                            <input class="form-control @error('company') is-invalid @enderror" name="company" id="company" value="{{ $editTnsServiceItem->company }}" type="text" placeholder="Update your Tns Service Item Name" />
                            @error('company')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="image">Image</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('image') is-invalid @enderror" name="image" id="image" value="{{ old('image') }}" type="file" />
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <img style="width: 90px; height: 50px;" src="{{ asset('storage/company/all-company/tns/service/item/' . $editTnsServiceItem->image) }}" alt="{{ $editTnsServiceItem->name }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="images">Images</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('images') is-invalid @enderror" name="images[]" multiple id="images" type="file" />
                            @error('images')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div>
                                @php($images = json_decode($editTnsServiceItem->images))
                                @foreach($images as $file)
                                    <img style="width: 50px; height: 35px;" src="{{ asset('storage/company/all-company/tns/service/item/details/' . $file) }}" alt="{{ $editTnsServiceItem->name }}">
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="project_heading">Project Heading</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('project_heading') is-invalid @enderror" name="project_heading" id="project_heading" value="{{ $editTnsServiceItem->project_heading }}" type="text" placeholder="Update your Tns Service Project Heading" />
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
                            <textarea name="project_description" placeholder="Update your Tns Service Project Description" rows="10" class="form-control @error('project_description') is-invalid @enderror" id="project_description">{{ $editTnsServiceItem->project_description }}</textarea>
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
                            <input class="form-control @error('project_details_heading') is-invalid @enderror" name="project_details_heading" id="project_details_heading" value="{{ $editTnsServiceItem->project_details_heading }}" type="text" placeholder="Update your Tns Service Project Details Heading" />
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
                            <input class="form-control @error('project_client') is-invalid @enderror" name="project_client" id="project_client" value="{{ $editTnsServiceItem->project_client }}" type="text" placeholder="Update your Tns Service Item Project Client" />
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
                            <input class="form-control @error('project_client_content') is-invalid @enderror" name="project_client_content" id="project_client_content" value="{{ $editTnsServiceItem->project_client_content }}" type="text" placeholder="Update your Tns Service Item Project Client Content" />
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
                            <input class="form-control @error('project_date') is-invalid @enderror" name="project_date" id="project_date" value="{{ $editTnsServiceItem->project_date }}" type="text" placeholder="Update your Tns Service Item Project Date" />
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
                            <input class="form-control @error('project_date_content') is-invalid @enderror" name="project_date_content" id="project_date_content" value="{{ $editTnsServiceItem->project_date_content }}" type="text" placeholder="Update your Tns Service Item Project Date Content" />
                            @error('project_date_content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="project_skills">Project Skills</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('project_skills') is-invalid @enderror" name="project_skills" id="project_skills" value="{{ $editTnsServiceItem->project_skills }}" type="text" placeholder="Update your Tns Service Item Project Skills" />
                            @error('project_skills')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="project_skills_content">Project Skills Content</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('project_skills_content') is-invalid @enderror" name="project_skills_content" id="project_skills_content" value="{{ $editTnsServiceItem->project_skills_content }}" type="text" placeholder="Update your Tns Service Item Project Skills Content" />
                            @error('project_skills_content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="project_url">Project URL</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('project_url') is-invalid @enderror" name="project_url" id="project_url" value="{{ $editTnsServiceItem->project_url }}" type="text" placeholder="Update your Tns Service Item Project URL" />
                            @error('project_url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="project_url_content">Project URL Content</label>
                        <div class="col-sm-8">
                            <input class="form-control @error('project_url_content') is-invalid @enderror" name="project_url_content" id="project_url_content" value="{{ $editTnsServiceItem->project_url_content }}" type="text" placeholder="Update your Tns Service Item Project URL Content" />
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
                            <input class="form-control @error('project_link') is-invalid @enderror" name="project_link" id="project_link" value="{{ $editTnsServiceItem->project_link }}" type="text" placeholder="Update your Tns Service Project Link" />
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
                            <input class="form-control @error('portfolio_heading') is-invalid @enderror" name="portfolio_heading" id="portfolio_heading" value="{{ $editTnsServiceItem->portfolio_heading }}" type="text" placeholder="Update your Tns Portfolio Heading" />
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
                            <div>
                                @php($images = json_decode($editTnsServiceItem->portfolio_images))
                                @foreach($images as $file)
                                    <img style="width: 50px; height: 35px;" src="{{ asset('storage/company/all-company/tns/service/item/portfolio/' . $file) }}" alt="{{ $editTnsServiceItem->name }}">
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row pt-4">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-2">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </div>
                </form>
                <!-- Contact form End -->
            </div>
        </div>
    </div>
@endsection
