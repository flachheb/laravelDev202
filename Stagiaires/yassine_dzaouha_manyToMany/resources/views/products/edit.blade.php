@extends('layouts.app')
@section('title', 'Edit Product')

@section('content')

    <a href="{{ route('products.index') }}" class="btn btn-secondary" style="margin-bottom:16px;">← Back</a>
    <h1>✏️ Edit: {{ $product->name }}</h1>

    <div class="form-card" style="margin-top:20px;">
        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Product Name *</label>
                <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="3">{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Price ($) *</label>
                <input type="number" id="price" name="price" value="{{ old('price', $product->price) }}" step="0.01" min="0" required>
            </div>

            <div class="form-group">
                <label for="stock">Stock *</label>
                <input type="number" id="stock" name="stock" value="{{ old('stock', $product->stock) }}" min="0" required>
            </div>

            <div class="form-group">
                <label>Categories * (select one or more)</label>
                <div class="checkbox-group">
                    @foreach($categories as $category)
                        <label>
                            <input type="checkbox"
                                   name="category_ids[]"
                                   value="{{ $category->id }}"
                                   {{-- Pre-check if this category is already attached --}}
                                   {{ in_array($category->id, old('category_ids', $selectedCategories)) ? 'checked' : '' }}>
                            {{ $category->name }}
                        </label>
                    @endforeach
                </div>
            </div>

            <button type="submit" class="btn btn-warning">Update Product</button>
        </form>
    </div>

@endsection
