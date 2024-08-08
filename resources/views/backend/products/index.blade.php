@extends('admin.layouts.app')

@section('page-title', 'Product List')

@section('content')
    <div class="row">
        @include('backend.includes.flash_message')
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Products Management</h3>
                </div>
                <div class="card-body">
                    <!-- Start of products list table -->
                    <h6>List Products
                        <a class="btn btn-primary" href="{{route('backend.products.create')}}">Create</a>


                    </h6>
                    <table class="table table-bordered">
                        
                            <tr>
                                <th>Sn</th>
                                <th>Title</th>
                                <th>Rank</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Bike</td>
                                <td>5</td>
                                <td>Active</td>
                                <td>View/Edit/Delete</td>
                            </tr>
                        
                        
                       
                    </table>
                    <!-- End of products list table -->
                </div>
            </div>
        </div>
    </div>
@endsection
