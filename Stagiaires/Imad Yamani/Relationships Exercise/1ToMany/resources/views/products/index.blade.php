@extends('layouts.app')

@section('title', 'All Products')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>📦 Products</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">+ Add Product</a>
</div>

@if ($products->isEmpty())
    <div class="alert alert-info">No products yet. <a href="{{ route('products.create') }}">Add the first one!</a></div>
@else
    <div class="table-responsive">
        <table class="table table-hover shadow-sm bg-white rounded">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>

                        <td>
                            <a href="{{ route('categories.show', $product->category) }}"
                               class="badge bg-info text-decoration-none text-dark">
                                {{ $product->category->name }}
                            </a>
                        </td>
                        <td>${{ number_format($product->price, 2) }}</td>
                        <td>
                            <span class="badge {{ $product->stock > 0 ? 'bg-success' : 'bg-danger' }}">
                                {{ $product->stock }}
                            </span>
                        </td>
                        <td class="d-flex gap-1">
                            <a href="{{ route('products.show', $product) }}" class="btn btn-sm btn-outline-primary">View</a>
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST"
                                  onsubmit="return confirm('Delete this product?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif

@endsection
