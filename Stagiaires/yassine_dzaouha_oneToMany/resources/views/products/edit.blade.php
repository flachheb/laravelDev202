@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')

    <a href="{{ route('products.index') }}" class="btn btn-secondary" style="margin-bottom:16px;">
        ← Back
    </a>

    <h1>Edit Product: {{ $product->name }}</h1>

    <div class="form-card" style="margin-top:20px;">
        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Product Name *</label>
                <input type="text" id="name" name="name"
                       value="{{ old('name', $product->name) }}"
                       required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="3">{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Price ($) *</label>
                <input type="number" id="price" name="price"
                       value="{{ old('price', $product->price) }}"
                       step="0.01" min="0" required>
            </div>

            <div class="form-group">
                <label for="stock">Stock *</label>
                <input type="number" id="stock" name="stock"
                       value="{{ old('stock', $product->stock) }}"
                       min="0" required>
            </div>

            <div class="form-group">
                <label for="category_id">Category *</label>
                <select id="category_id" name="category_id" required>
                    <option value="">— Select a Category —</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                            {{-- Pre-select the current category --}}
                            {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-warning">Update Product</button>
        </form>
    </div>

@endsection
