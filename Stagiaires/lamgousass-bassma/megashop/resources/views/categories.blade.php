@extends('layouts.app')

@section('content')
<h2>Catégories de produits</h2>

<h3>Informatique :</h3>
<ul>
    <li>PC Portable</li>
    <li>Desktop</li>
    <li>Tablette</li>
    <li>Accessoires</li>
</ul>

<h3>Petit électroménager :</h3>
<ul>
    <li>Cafetière</li>
    <li>Grille-pain</li>
    <li>Mixeur</li>
    <li>Robot culinaire</li>
</ul>

<h3>Grand électroménager :</h3>
<ul>
    <li>Réfrigérateur</li>
    <li>Lave-linge</li>
    <li>Lave-vaisselle</li>
    <li>Climatiseur</li>
</ul>

<a href="/produit">Voir produit</a>
@endsection