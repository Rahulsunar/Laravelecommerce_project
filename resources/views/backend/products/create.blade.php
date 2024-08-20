@extends('admin.layouts.app')

@section('page-title', 'Add Product')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Products Management</h3>
                </div>
                <div class="card-body">
                    <!-- Start of products list table -->
                    <h6>Create Products
                        <a class="btn btn-primary" href="{{ route('backend.products.index') }}">List</a>
                    </h6>
                    <div>
                        <form action="{{ route('backend.products.store') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            
                            <!-- Category Field -->
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach($data['categories'] as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                                @include('backend.includes.form_element_error', ['field' => 'category_id'])
                            </div>
                            
                            <!-- Title Field -->
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter Title"
                                    value="{{ old('title') }}">
                                @include('backend.includes.form_element_error', ['field' => 'title'])
                            </div>
                            
                            <!-- Rank Field -->
                            <div class="form-group">
                                <label for="rank">Rank</label>
                                <input type="number" name="rank" class="form-control" placeholder="Enter Rank"
                                    value="{{ old('rank') }}">
                                @include('backend.includes.form_element_error', ['field' => 'rank'])
                            </div>

                            <!-- Price Field -->
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" name="price" class="form-control" placeholder="Enter price"
                                    value="{{ old('price') }}">
                                @include('backend.includes.form_element_error', ['field' => 'price'])
                            </div>

                            <!-- Discount Field (Optional) -->
                            <div class="form-group">
                                <label for="discount">Discount</label>
                                <input type="number" name="discount" class="form-control" placeholder="Enter discount"
                                    value="{{ old('discount') }}">
                                @include('backend.includes.form_element_error', ['field' => 'discount'])
                            </div>

                            <!-- Thumb Image Field -->
                            <div class="form-group">
                                <label for="thumb_image_file">Thumb Image</label>
                                <input type="file" name="thumb_image_file" class="form-control">
                                @include('backend.includes.form_element_error', ['field' => 'thumb_image_file'])
                            </div>

                            <!-- Description Field -->
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea rows="3" name="description" class="form-control" placeholder="Enter description">{{ old('description') }}</textarea>
                                @include('backend.includes.form_element_error', ['field' => 'description'])
                            </div>

                            <!-- Featured Image Field -->
                            <div class="form-group">
                                <label for="feature_image_file">Featured Image</label>
                                <input type="file" name="feature_image_file" class="form-control">
                                @include('backend.includes.form_element_error', ['field' => 'feature_image_file'])
                            </div>
                            
                            <!-- Feature Food Key Radio Buttons -->
                            <div class="form-group">
                                <label for="feature_food_key">Display as Featured Food</label><br>
                                <input type="radio" name="feature_food_key" value="1" {{ old('feature_food_key') == '1' ? 'checked' : '' }}> Active
                                <input type="radio" name="feature_food_key" value="2" {{ old('feature_food_key') == '2' ? 'checked' : '' }}> Deactive
                                @include('backend.includes.form_element_error', ['field' => 'feature_food_key'])
                            </div>

                            <!-- Form Submit and Reset Buttons -->
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Create">
                                <input type="reset" class="btn btn-danger" value="Reset">
                            </div>
                        </form>
                    </div>
                    <!-- End of products list table -->
                </div>
            </div>
        </div>
    </div>
@endsection
