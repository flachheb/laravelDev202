@extends('layouts.app')
@section('title', 'Products')

@section('content')

    <div class="page-header">
        <h1>📦 All Products</h1>
        <a href="{{ route('products.create') }}" class="btn btn-success">+ New Product</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Categories</th>
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
                        {{-- A product can have MULTIPLE category badges --}}
                        @foreach($product->categories as $category)
                            <span class="badge badge-purple">{{ $category->name }}</span>
                        @endforeach
                    </td>
                    <td>${{ number_format($product->price, 2) }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        <div class="actions">
                            <a href="{{ route('products.show', $product) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST"
                                  onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="text-align:center;color:#999;">No products yet.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection
