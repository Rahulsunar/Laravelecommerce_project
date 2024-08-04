@extends('admin.layouts.app')

@section('page-title', 'Product List')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Category Management</h3>
                </div>
                <div class="card-body">
                    <!-- Start of category list table -->
                    <h4>Create Category</h4>
                    <div>
                        <form action="{{ route('backend.category.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter Title"
                                    value="{{ old('title') }}">
                                @include('backend.includes.form_element_error', ['field' => 'title'])
                            </div>

                            <div class="form-group">
                                <label for="rank">rank</label>
                                <input type="number" name="rank" class="form-control" placeholder="Enter rank"
                                    value="{{ old('rank') }}">
                                @include('backend.includes.form_element_error', ['field' => 'rank'])
                            </div>

                            <div class="form-group">
                                <label for="icon_file">Icon</label>
                                <input type="file" name="icon_file" class="form-control">
                                @include('backend.includes.form_element_error', ['field' => 'icon_file'])
                            </div>

                            <div class="form-group">
                                <label for="active">Status</label>
                                <input type="radio" name="status" value="1"> Active
                                <input type="radio" name="status" value="2"> Deactive
                                @include('backend.includes.form_element_error', ['field' => 'status'])
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Create">
                                <input type="reset" class="btn btn-danger" value="Reset">
                                @include('backend.includes.form_element_error', ['field' => 'status'])
                            </div>

                        </form>
                    </div>

                    <!-- End of category list table -->
                </div>
            </div>
        </div>
    </div>
@endsection
