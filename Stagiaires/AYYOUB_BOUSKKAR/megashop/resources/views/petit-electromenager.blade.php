@extends('layouts.app')

@section('title', 'Petit Électroménager - MegaShop')

@section('content')

<div class="breadcrumb">
    <span>/</span>
    <strong>Petit Électroménager</strong>
</div>

<h1 class="page-title">🍳 Petit Électroménager</h1>

<div class="products-grid">

    <div class="product-card">
        <div class="product-image">Cafetière</div>
        <div class="product-info">
            <div class="product-name">Cafetière Programmable</div>
            <div class="product-price">79,99 €</div>
            <div class="product-description">12 tasses, Minuteur programmable</div>
            <a href="#" class="btn">Détails</a>
        </div>
    </div>

    <div class="product-card">
        <div class="product-image">Grille-pain</div>
        <div class="product-info">
            <div class="product-name">Grille-pain Premium</div>
            <div class="product-price">49,99 €</div>
            <div class="product-description">4 fentes, 7 niveaux de cuisson</div>
            <a href="#" class="btn">Détails</a>
        </div>
    </div>

    <div class="product-card">
        <div class="product-image">Mixeur</div>
        <div class="product-info">
            <div class="product-name">Blender Haute Vitesse</div>
            <div class="product-price">129,99 €</div>
            <div class="product-description">2000W, 8 vitesses, Bol sans BPA</div>
            <a href="#" class="btn">Détails</a>
        </div>
    </div>

    <div class="product-card">
        <div class="product-image">Bouilloire</div>
        <div class="product-info">
            <div class="product-name">Bouilloire Électrique Sans Fil</div>
            <div class="product-price">34,99 €</div>
            <div class="product-description">Arrêt automatique, 1.7L</div>
            <a href="#" class="btn">Détails</a>
        </div>
    </div>


</div>

@endsection