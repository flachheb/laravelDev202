@extends('layouts.app')

@section('title', $category['name'])

@section('content')
    <h1>{{ $category['icon'] }} {{ $category['name'] }}</h1>
    <p>{{ $category['description'] }}</p>

    <div class="products-list">
        @foreach($products as $product)
            <div class="item">
                <h3>{{ $product['name'] }}</h3>
                <p>{{ $product['description'] }}</p>
                <a href="{{ route('product.detail', $product['id']) }}">Détails</a>
            </div>
        @endforeach
    </div>
@endsection