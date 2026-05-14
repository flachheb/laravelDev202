@extends('layouts.app')

@section('title', 'Products')

@section('content')

    <div class="page-header">
        <h1>All Products</h1>
        <a href="{{ route('products.create') }}" class="btn btn-success">+ New Product</a>
    </div>

    <table>
        <thead>
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
            @forelse($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>
                        {{-- Access the related category via the relationship --}}
                        <a href="{{ route('categories.show', $product->category) }}">
                            {{ $product->category->name }}
                        </a>
                    </td>
                    <td>${{ number_format($product->price, 2) }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        <div class="actions">
                            <a href="{{ route('products.show', $product) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST"
                                  onsubmit="return confirm('Delete this product?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="text-align:center; color:#999;">
                        No products yet. <a href="{{ route('products.create') }}">Add one!</a>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection
