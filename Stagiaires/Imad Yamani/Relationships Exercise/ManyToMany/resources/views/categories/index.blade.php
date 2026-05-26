@extends('layouts.app')
@section('title', 'Categories')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>📂 Categories</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">+ Add Category</a>
</div>

@if ($categories->isEmpty())
    <div class="alert alert-info">No categories yet.</div>
@else
    <div class="row">
        @foreach ($categories as $category)
            <div class="col-md-4 mb-3">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        <p class="text-muted">{{ $category->description ?? 'No description.' }}</p>
                        <span class="badge bg-secondary">{{ $category->products_count }} product(s)</span>
                    </div>
                    <div class="card-footer d-flex gap-2">
                        <a href="{{ route('categories.show', $category) }}" class="btn btn-sm btn-outline-primary">View</a>
                        <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST"
                              onsubmit="return confirm('Delete this category?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif
@endsection
