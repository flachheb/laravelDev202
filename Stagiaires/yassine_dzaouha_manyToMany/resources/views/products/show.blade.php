@extends('layouts.app')
@section('title', $product->name)

@section('content')

    <a href="{{ route('products.index') }}" class="btn btn-secondary" style="margin-bottom:16px;">← Back</a>

    <div class="detail-card">
        <h1>📦 {{ $product->name }}</h1>
        <p style="margin-top:12px;">{{ $product->description ?? 'No description.' }}</p>
        <p style="margin-top:14px;"><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
        <p><strong>Stock:</strong> {{ $product->stock }} units</p>
        <p style="margin-top:10px;">
            <strong>Categories:</strong>
            {{-- Show ALL categories this product belongs to --}}
            @foreach($product->categories as $category)
                <a href="{{ route('categories.show', $category) }}" class="badge badge-purple">
                    {{ $category->name }}
                </a>
            @endforeach
        </p>
    </div>

    <div class="actions">
        <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('products.destroy', $product) }}" method="POST"
              onsubmit="return confirm('Delete?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>

@endsection
