@extends('layouts.app')

@section('title', $product->name)

@section('content')

<a href="{{ route('products.index') }}" class="text-muted text-decoration-none">← Back to Products</a>

<div class="card shadow-sm mt-3">
    <div class="card-body">
        <h1 class="card-title">{{ $product->name }}</h1>

        {{-- One-to-Many in action: accessing the category via the relationship --}}
        <p>
            <strong>Category:</strong>
            <a href="{{ route('categories.show', $product->category) }}" class="badge bg-info text-dark text-decoration-none">
                {{ $product->category->name }}
            </a>
        </p>

        <p><strong>Description:</strong> {{ $product->description ?? 'No description provided.' }}</p>

        <h3 class="text-success">${{ number_format($product->price, 2) }}</h3>

        <p>
            <strong>Stock:</strong>
            <span class="badge {{ $product->stock > 0 ? 'bg-success' : 'bg-danger' }} fs-6">
                {{ $product->stock > 0 ? $product->stock . ' available' : 'Out of stock' }}
            </span>
        </p>

        <p class="text-muted small">
            Added: {{ $product->created_at->format('d M Y') }} |
            Updated: {{ $product->updated_at->format('d M Y') }}
        </p>

        <div class="d-flex gap-2 mt-3">
            <a href="{{ route('products.edit', $product) }}" class="btn btn-primary">Edit Product</a>
            <form action="{{ route('products.destroy', $product) }}" method="POST"
                  onsubmit="return confirm('Are you sure you want to delete this product?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Product</button>
            </form>
        </div>
    </div>
</div>

@endsection
