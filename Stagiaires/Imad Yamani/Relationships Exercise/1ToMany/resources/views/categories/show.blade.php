@extends('layouts.app')

@section('title', $category->name)

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <a href="{{ route('categories.index') }}" class="text-muted text-decoration-none">← Back to Categories</a>
        <h1 class="mt-1">📂 {{ $category->name }}</h1>
        @if ($category->description)
            <p class="text-muted">{{ $category->description }}</p>
        @endif
    </div>
    <a href="{{ route('products.create') }}" class="btn btn-primary">+ Add Product</a>
</div>

<h4>Products in this category ({{ $category->products->count() }})</h4>
<hr>

{{-- This is the One-to-Many in action: $category->products gives us all related products --}}
@if ($category->products->isEmpty())
    <div class="alert alert-info">No products in this category yet.</div>
@else
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category->products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>${{ number_format($product->price, 2) }}</td>
                        <td>
                            <span class="badge {{ $product->stock > 0 ? 'bg-success' : 'bg-danger' }}">
                                {{ $product->stock }} in stock
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('products.show', $product) }}" class="btn btn-sm btn-outline-primary">View</a>
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif

@endsection
