@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <h1>Produits à la Une</h1>
    <div class="products-grid">
        @foreach($products as $product)
            <div class="product-card">
                <img src="{{ asset('images/' . $product['image']) }}" alt="{{ $product['name'] }}">
                <h3>{{ $product['name'] }}</h3>
                <p>{{ $product['price'] }} €</p>
                <a href="{{ route('product.detail', $product['id']) }}">Voir le produit</a>
            </div>
        @endforeach
    </div>
@endsection