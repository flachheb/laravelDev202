@extends('layouts.app')

@section('title', ucfirst(str_replace('-', ' ', $slug)))

@section('content')
<h2>{{ ucfirst(str_replace('-', ' ', $slug)) }}</h2>
<ul>
    @foreach($categoryProducts as $product)
        <li>
            <a href="/produit/{{ $product['id'] }}">{{ $product['name'] }} - {{ $product['price'] }} €</a>
        </li>
    @endforeach
</ul>
@endsection