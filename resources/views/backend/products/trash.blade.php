@extends('admin.layouts.app')

@section('page-title', 'Products Details')

@section('content')
    <h1>Trashed Categories</h1>
    @include('backend.includes.flash_message')
    @if($data['records']->isEmpty())
        <p>No trashed categories found.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data['records'] as $products)
                    <tr>
                        <td>{{ $products->id }}</td>
                        <td>{{ $products->name }}</td>
                        <td>
                            <!-- Add buttons for restoring or permanently deleting the products -->
                            <form action="{{ route('backend.products.restore', $products->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit">Restore</button>
                            </form>
                            <form action="{{ route('backend.products.forceDelete', $products->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete Permanently</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
