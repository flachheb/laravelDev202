@extends('layouts.app')
@section('title', 'Products')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>📦 Products</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">+ Add Product</a>
</div>

@if ($products->isEmpty())
    <div class="alert alert-info">No products yet.</div>
@else
    <div class="table-responsive">
        <table class="table table-hover bg-white shadow-sm">
            <thead class="table-dark">
                <tr><th>#</th><th>Name</th><th>Categories</th><th>Price</th><th>Stock</th><th>Actions</th></tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>

                            @foreach ($product->categories as $category)
                                <a href="{{ route('categories.show', $category) }}"
                                   class="badge bg-info text-dark text-decoration-none me-1">
                                    {{ $category->name }}
                                </a>
                            @endforeach
                        </td>
                        <td>${{ number_format($product->price, 2) }}</td>
                        <td><span class="badge {{ $product->stock > 0 ? 'bg-success' : 'bg-danger' }}">{{ $product->stock }}</span></td>
                        <td class="d-flex gap-1">
                            <a href="{{ route('products.show', $product) }}" class="btn btn-sm btn-outline-primary">View</a>
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST"
                                  onsubmit="return confirm('Delete?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif
@endsection
