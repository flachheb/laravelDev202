@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header">
                <h4 class="mb-0">✏️ Edit Category: {{ $category->name }}</h4>
            </div>
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- PUT method: update an existing category --}}
                <form action="{{ route('categories.update', $category) }}" method="POST">
                    @csrf
                    @method('PUT') {{-- HTML forms only support GET/POST, so we spoof PUT --}}

                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">Category Name *</label>
                        <input type="text" name="name" id="name"
                               class="form-control @error('name') is-invalid @enderror"
                               value="{{ old('name', $category->name) }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label fw-bold">Description</label>
                        <textarea name="description" id="description"
                                  class="form-control"
                                  rows="3">{{ old('description', $category->description) }}</textarea>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">Update Category</button>
                        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
