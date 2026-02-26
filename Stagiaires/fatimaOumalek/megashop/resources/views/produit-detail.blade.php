@extends('layouts.app')

@section('content')
<h2>{{ $product['name'] }}</h2>
<p>Catégorie: {{ ucfirst($product['category']) }}</p>
<p>Prix: {{ $product['price'] }}</p>
<p>Description détaillée du produit...</p>
<a href="/categorie/{{ $product['category'] }}">Retour à la catégorie</a>
@endsectiongit 