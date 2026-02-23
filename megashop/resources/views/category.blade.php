@extends('layouts.app')

@section('content')
<h2>Catégorie : {{ ucfirst(str_replace('-', ' ', $slug)) }}</h2>

<div class="products">
    @foreach($products as $product)
        <div class="card">
            <h3>{{ $product['name'] }}</h3>
            <p>{{ $product['price'] }} DH</p>
            <a href="/produit/{{ $product['id'] }}">Voir détail</a>
        </div>
    @endforeach
</div>
@endsection