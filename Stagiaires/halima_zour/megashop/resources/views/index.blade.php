@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<h2>Bienvenue sur MegaShop</h2>
<p>Choisissez une catégorie :</p>
<ul>
    <li><a href="/categorie/informatique">Informatique</a></li>
    <li><a href="/categorie/petit-electromenager">Petit Électroménager</a></li>
    <li><a href="/categorie/grand-electromenager">Grand Électroménager</a></li>
</ul>
@endsection