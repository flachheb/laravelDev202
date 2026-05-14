@extends('layouts.app')
@section('title', 'Categories')

@section('content')

    <div class="page-header">
        <h1>📂 All Categories</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-success">+ New Category</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Products</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td><a href="{{ route('categories.show', $category) }}">{{ $category->name }}</a></td>
                    <td>{{ $category->description ?? '—' }}</td>
                    <td><span class="badge">{{ $category->products_count }} products</span></td>
                    <td>
                        <div class="actions">
                            <a href="{{ route('categories.show', $category) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('categories.destroy', $category) }}" method="POST"
                                  onsubmit="return confirm('Delete this category?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align:center;color:#999;">No categories yet.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection
