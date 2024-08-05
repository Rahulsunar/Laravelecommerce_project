@extends('admin.layouts.app')

@section('page-title', 'Category Details')

@section('content')
    <div class="row">
        @include('backend.includes.flash_message')
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Category Details</h3>
                </div>
                <div class="card-body">
                    <!-- Start of category list table -->
                    <h6>Category Details
                        <a class="btn btn-primary" href="{{ route('backend.category.create') }}">Create</a>
                        <a class="btn btn-secondary" href="{{ route('backend.category.index') }}">List</a>


                    </h6>
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <td>{{ $data['record']->title }}</td>
                        </tr>
                        <tr>
                            <th>Rank</th>
                            <td>{{ $data['record']->rank }}</td>
                        </tr>
                        <tr>
                            <th>Icon</th>
                            <td><img src="{{ asset('assets/images/category/' . $data['record']->icon) }}" width="35%"
                                    alt=""></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <th>@include('backend.includes.display_status_message', [
                                'status' => $data['record']->status,
                            ])</th>
                        </tr>
                        <tr>
                            <th>Created By</th>
                            <td>

                                {{ $data['record']->createdBy->name }}</td>
                        </tr>
                        <tr>
                            <th>Updated By</th>
                            <td>
                                @if ($data['record']->updated_by)
                                    {{ $data['record']->updatedBy->name }}
                                @endif

                            </td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td>{{ $data['record']->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Updated At</th>
                            <td>{{ $data['record']->updated_at }}</td>
                        </tr>


                    </table>
                    <!-- End of category list table -->
                </div>
            </div>
        </div>
    </div>
@endsection
