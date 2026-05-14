@extends('layouts.app')
@section('title', $category->name)

@section('content')

    <a href="{{ route('categories.index') }}" class="btn btn-secondary" style="margin-bottom:16px;">← Back</a>

    <div class="detail-card">
        <h1>📂 {{ $category->name }}</h1>
        <p style="color:#718096; margin-top:8px;">{{ $category->description ?? 'No description.' }}</p>
        <p style="margin-top:12px;"><span class="badge">{{ $category->products->count() }} products</span></p>
    </div>

    <h2>📦 Products in this Category</h2>

    @if($category->products->isEmpty())
        <p style="color:#999;">No products in this category yet.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($category->products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>${{ number_format($product->price, 2) }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>
                            <a href="{{ route('products.show', $product) }}" class="btn btn-primary">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

@endsection
