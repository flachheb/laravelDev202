@extends('layouts.app')

@section('title', $product->name)

@section('content')

    <a href="{{ route('products.index') }}" class="btn btn-secondary" style="margin-bottom:16px;">
        ← Back to Products
    </a>

    <div class="detail-card">
        <h1>{{ $product->name }}</h1>

        <p style="margin-top:14px;">{{ $product->description ?? 'No description.' }}</p>

        <p style="margin-top:14px;">
            <strong>Price:</strong> ${{ number_format($product->price, 2) }}
        </p>
        <p>
            <strong>Stock:</strong> {{ $product->stock }} units
        </p>
        <p>
            {{-- This shows the belongsTo relationship: get the category from the product --}}
            <strong>Category:</strong>
            <a href="{{ route('categories.show', $product->category) }}" class="badge">
                {{ $product->category->name }}
            </a>
        </p>
    </div>

    <div class="actions">
        <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Edit Product</a>
        <form action="{{ route('products.destroy', $product) }}" method="POST"
              onsubmit="return confirm('Delete this product?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Product</button>
        </form>
    </div>

@endsection
