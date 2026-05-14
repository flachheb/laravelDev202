@extends('layouts.app')
@section('title', 'New Category')

@section('content')

    <a href="{{ route('categories.index') }}" class="btn btn-secondary" style="margin-bottom:16px;">← Back</a>
    <h1>➕ Create Category</h1>

    <div class="form-card" style="margin-top:20px;">
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="3">{{ old('description') }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Save Category</button>
        </form>
    </div>

@endsection
