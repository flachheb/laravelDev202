@extends('layouts.app')

@section('title', $product['name'])

@section('content')
<h2>{{ $product['name'] }}</h2>
<p>Prix: {{ $product['price'] }} €</p>
<p>Description: Produit simple pour débutant.</p>
<a href="javascript:history.back()">Retour</a>
@endsection