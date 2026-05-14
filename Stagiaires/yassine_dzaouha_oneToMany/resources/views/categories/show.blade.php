@extends('layouts.app')

@section('title', $category->name)

@section('content')

    <a href="{{ route('categories.index') }}" class="btn btn-secondary" style="margin-bottom:16px;">
        ← Back to Categories
    </a>

    {{-- Category Details --}}
    <div class="detail-card">
        <h1> {{ $category->name }}</h1>
        <p style="color:#718096; margin-top:8px;">{{ $category->description ?? 'No description provided.' }}</p>
        <p style="margin-top:12px;">
            <span class="badge">{{ $category->products->count() }} products</span>
        </p>
    </div>

    {{-- Products that belong to this category --}}
    {{-- This is the ONE-TO-MANY relationship in action:
         One Category → Many Products --}}
    <div class="page-header">
        <h2>📦 Products in this Category</h2>
        <a href="{{ route('products.create') }}" class="btn btn-success">+ Add Product</a>
    </div>

    @if($category->products->isEmpty())
        <p style="color:#999;">No products in this category yet.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- Loop through all products that belong to this category --}}
                @foreach($category->products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>${{ number_format($product->price, 2) }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>
                            <div class="actions">
                                <a href="{{ route('products.show', $product) }}" class="btn btn-primary">View</a>
                                <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Edit</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

@endsection
