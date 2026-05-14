@extends('layouts.app')

@section('title', 'New Product')

@section('content')

    <a href="{{ route('products.index') }}" class="btn btn-secondary" style="margin-bottom:16px;">
        ← Back
    </a>

    <h1>Add New Product</h1>

    <div class="form-card" style="margin-top:20px;">
        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Product Name *</label>
                <input type="text" id="name" name="name"
                       value="{{ old('name') }}"
                       placeholder="e.g. iPhone 15"
                       required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="3"
                          placeholder="Describe the product...">{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Price ($) *</label>
                <input type="number" id="price" name="price"
                       value="{{ old('price') }}"
                       step="0.01" min="0"
                       placeholder="0.00"
                       required>
            </div>

            <div class="form-group">
                <label for="stock">Stock *</label>
                <input type="number" id="stock" name="stock"
                       value="{{ old('stock', 0) }}"
                       min="0"
                       required>
            </div>

            {{-- Category dropdown — selecting this sets the category_id (foreign key) --}}
            <div class="form-group">
                <label for="category_id">Category *</label>
                <select id="category_id" name="category_id" required>
                    <option value="">— Select a Category —</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">Save Product</button>
        </form>
    </div>

@endsection
