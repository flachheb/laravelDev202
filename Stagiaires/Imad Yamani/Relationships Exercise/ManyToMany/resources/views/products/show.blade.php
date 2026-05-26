@extends('layouts.app')
@section('title', $product->name)

@section('content')
<a href="{{ route('products.index') }}" class="text-muted text-decoration-none">← Back to Products</a>

<div class="card shadow-sm mt-3">
    <div class="card-body">
        <h1>{{ $product->name }}</h1>

        {{-- Show all categories this product belongs to --}}
        <div class="mb-3">
            <strong>Categories:</strong>
            @foreach ($product->categories as $category)
                <a href="{{ route('categories.show', $category) }}"
                   class="badge bg-info text-dark text-decoration-none me-1">
                    {{ $category->name }}
                </a>
            @endforeach
        </div>

        <p><strong>Description:</strong> {{ $product->description ?? 'No description.' }}</p>
        <h3 class="text-success">${{ number_format($product->price, 2) }}</h3>
        <p>
            <strong>Stock:</strong>
            <span class="badge {{ $product->stock > 0 ? 'bg-success' : 'bg-danger' }} fs-6">
                {{ $product->stock > 0 ? $product->stock . ' available' : 'Out of stock' }}
            </span>
        </p>

        <div class="d-flex gap-2 mt-3">
            <a href="{{ route('products.edit', $product) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('products.destroy', $product) }}" method="POST"
                  onsubmit="return confirm('Delete this product?')">
                @csrf @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
