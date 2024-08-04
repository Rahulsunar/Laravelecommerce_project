@extends('admin.layouts.app')

@section('page-title', 'Product List')

@section('content')
    <div class="row">
        @include('backend.includes.flash_message')
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Category Management</h3>
                </div>
                <div class="card-body">
                    <!-- Start of category list table -->
                    <h4>List Category</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sn</th>
                                <th>Title</th>
                                <th>Rank</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data['records'] as $record)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $record->title }}</td>
                                    <td>{{ $record->rank }}</td>
                                    <td>
                                        @include('backend.includes.display_status_message', [
                                            'status' => $record->status,
                                        ])
                                    </td>

                                    <td>
                                        <!-- Buttons for Edit, Delete, and View without functionality -->
                                        <button class="btn btn-warning btn-sm">Edit</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                        <button class="btn btn-info btn-sm">View</button>
                                    </td>


                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5"><span class="text-danger">No records.</span></td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <!-- End of category list table -->
                </div>
            </div>
        </div>
    </div>
@endsection
