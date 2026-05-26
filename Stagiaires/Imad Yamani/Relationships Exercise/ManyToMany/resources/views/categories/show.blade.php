@extends('layouts.app')
@section('title', $category->name)

@section('content')
<a href="{{ route('categories.index') }}" class="text-muted text-decoration-none">← Back to Categories</a>
<h1 class="mt-2">📂 {{ $category->name }}</h1>
<p class="text-muted">{{ $category->description }}</p>

<h4 class="mt-4">Products in this category ({{ $category->products->count() }})</h4>
<hr>

@if ($category->products->isEmpty())
    <div class="alert alert-info">No products linked to this category yet.</div>
@else
    <div class="table-responsive">
        <table class="table table-hover bg-white shadow-sm">
            <thead class="table-dark">
                <tr><th>Name</th><th>Price</th><th>Stock</th><th>Actions</th></tr>
            </thead>
            <tbody>
                @foreach ($category->products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>${{ number_format($product->price, 2) }}</td>
                        <td><span class="badge {{ $product->stock > 0 ? 'bg-success' : 'bg-danger' }}">{{ $product->stock }}</span></td>
                        <td><a href="{{ route('products.show', $product) }}" class="btn btn-sm btn-outline-primary">View</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif
@endsection
