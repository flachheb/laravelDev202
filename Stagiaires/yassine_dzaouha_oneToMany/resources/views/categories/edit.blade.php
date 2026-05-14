@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')

    <a href="{{ route('categories.index') }}" class="btn btn-secondary" style="margin-bottom:16px;">
        ← Back
    </a>

    <h1> Edit Category: {{ $category->name }}</h1>

    <div class="form-card" style="margin-top:20px;">
        {{-- Use PUT method (spoofed via @method) since HTML forms only support GET/POST --}}
        <form action="{{ route('categories.update', $category) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Category Name *</label>
                <input type="text" id="name" name="name"
                       value="{{ old('name', $category->name) }}"
                       required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="3">{{ old('description', $category->description) }}</textarea>
            </div>

            <button type="submit" class="btn btn-warning">Update Category</button>
        </form>
    </div>

@endsection
