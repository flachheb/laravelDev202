@extends('layouts.app')

@section('content')
<h2>Bienvenue sur MegaShop</h2>
<p>Site e-commerce proposant produits électroniques et électroménagers.</p>

<h3>Catégories principales :</h3>
<ul>
   <a href="/categorie/informatique">Informatique</a>
<a href="/categorie/petit-electromenager">Petit électroménager</a>
<a href="/categorie/grand-electromenager">Grand électroménager</a>
</ul>

<h3>Produits en vedette :</h3>
<ul>
    <li>Ordinateur portable</li>
    <li>Réfrigérateur</li>
    <li>Mixeur</li>
</ul>
@endsection