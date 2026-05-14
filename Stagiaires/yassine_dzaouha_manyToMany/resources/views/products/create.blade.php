@extends('layouts.app')
@section('title', 'New Product')

@section('content')

    <a href="{{ route('products.index') }}" class="btn btn-secondary" style="margin-bottom:16px;">← Back</a>
    <h1>➕ Add New Product</h1>

    <div class="form-card" style="margin-top:20px;">
        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Product Name *</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="3">{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Price ($) *</label>
                <input type="number" id="price" name="price" value="{{ old('price') }}" step="0.01" min="0" required>
            </div>

            <div class="form-group">
                <label for="stock">Stock *</label>
                <input type="number" id="stock" name="stock" value="{{ old('stock', 0) }}" min="0" required>
            </div>

            {{--
                CHECKBOXES instead of a single dropdown.
                The user can pick MULTIPLE categories.
                Each checkbox sends category_ids[] to the controller.
            --}}
            <div class="form-group">
                <label>Categories * (select one or more)</label>
                <div class="checkbox-group">
                    @foreach($categories as $category)
                        <label>
                            <input type="checkbox"
                                   name="category_ids[]"
                                   value="{{ $category->id }}"
                                   {{ in_array($category->id, old('category_ids', [])) ? 'checked' : '' }}>
                            {{ $category->name }}
                        </label>
                    @endforeach
                </div>
            </div>

            <button type="submit" class="btn btn-success">Save Product</button>
        </form>
    </div>

@endsection
