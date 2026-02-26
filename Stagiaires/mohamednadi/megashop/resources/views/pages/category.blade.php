@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $category['icon'] }} {{ $category['name'] }}</h1>
        <p>{{ $category['description'] }}</p>

        <div class="products-grid">
            @foreach($products as $product)
                <div class="product-card">
                    <div class="product-image">Image: {{ $product['image'] }}</div>
                    <div class="product-info">
                        <h3>{{ $product['name'] }}</h3>
                        <p class="price">{{ $product['price'] }} €</p>
                        <p>{{ $product['description'] }}</p>
                        <a href="/product/{{ $product['id'] }}" class="btn">Détails</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection