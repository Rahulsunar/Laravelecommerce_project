@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Categories</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <h1><b>Add Category</b></h1>
      <div class="div_deg">
        
     <form action="{{url('add_category')}}" method="POST">
        @csrf
        <div>
            <input type="text" name="category">
            <input class="btn btn-primary" type="submit" value="Add Category">
        </div>
     </form>
     
    </div>

@endsection