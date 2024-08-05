@extends('admin.layouts.app')

@section('page-title', 'Edit Category')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Category Management</h3>
                </div>
                <div class="card-body">
                    <!-- Start of category list table -->
                    <h6>Edit Category
                        <a class="btn btn-primary" href="{{ route('backend.category.create') }}">Create</a>
                        <a class="btn btn-secondary" href="{{ route('backend.category.index') }}">List</a>


                    </h6>
                    <div>
                        <form action="{{ route('backend.category.update', $data['record']->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter Title"
                                    value="{{ $data['record']->title }}">
                                @include('backend.includes.form_element_error', ['field' => 'title'])
                            </div>

                            <div class="form-group">
                                <label for="rank">rank</label>
                                <input type="number" name="rank" class="form-control" placeholder="Enter rank"
                                    value="{{ $data['record']->rank }}">
                                @include('backend.includes.form_element_error', ['field' => 'rank'])
                            </div>

                            <div class="form-group">
                                <label for="icon_file">Icon</label>
                                <input type="file" name="icon_file" class="form-control">
                                @include('backend.includes.form_element_error', ['field' => 'icon_file'])
                                <img src="{{ asset('assets/images/category/' . $data['record']->icon) }}" width="100px"
                                    height="100px" alt="">
                            </div>

                            <div class="form-group">
                                <label for="active">Status</label>
                                @if ($data['record']->status == 1)
                                    <input type="radio" name="status" value="1" checked> Active
                                    <input type="radio" name="status" value="0"> Deactive
                                @else
                                    <input type="radio" name="status" value="1"> Active
                                    <input type="radio" name="status" value="2"> Deactive
                                @endif


                                @include('backend.includes.form_element_error', ['field' => 'status'])
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Update">
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
