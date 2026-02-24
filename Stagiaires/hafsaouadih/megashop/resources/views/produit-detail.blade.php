@extends('layouts.app')

@section('content')
<h2>{{ $product['name'] }}</h2>

<p><strong>Prix :</strong> {{ $product['price'] }} DH</p>

<p>Produit de qualité MegaShop 💗</p>

<a href="javascript:history.back()">⬅️ Retour</a>
@endsection