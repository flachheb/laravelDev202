@extends('layouts.app')

@section('content')
<h2>Bienvenue sur MegaShop</h2>
<p>Site e-commerce proposant produits électroniques et électroménagers.</p>

<h3>Catégories principales :</h3>
<ul>
    <li><a href="/categorie">Informatique</a></li>
    <li><a href="/categorie">Petit électroménager</a></li>
    <li><a href="/categorie">Grand électroménager</a></li>
</ul>

<h3>Produits en vedette :</h3>
<ul>
    <li>Ordinateur portable</li>
    <li>Réfrigérateur</li>
    <li>Mixeur</li>
</ul>
@endsection
