@extends('admin.layouts.app')

@section('page-title', 'Trash List')

@section('content')
    <div class="row">
        @include('backend.includes.flash_message')
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Trash Management</h3>
                </div>
                <div class="card-body">
                    <!-- Start of category list table -->
                    <h6 class="m-0 font-weight-bold text-primary">Trash List
                        <a class="btn btn-primary" href="{{route('backend.category.create')}}">Create</a>
                        <a class="btn btn-secondary" href="{{route('backend.category.index')}}">List</a>


                    </h6>
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
                                        <a class="btn btn-warning" href="{{route('backend.category.restore',$record->id)}}">Restore</a>
                                        <a class="btn btn-warning" href="{{route('backend.category.edit',$record->id)}}">Edit</a> 
                                        <form action="{{route('backend.category.force_delete',$record->id)}}" method="POST" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                        
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
