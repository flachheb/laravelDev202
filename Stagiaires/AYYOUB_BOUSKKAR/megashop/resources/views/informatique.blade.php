@extends('layouts.app')

@section('title', 'Informatique - MegaShop')

@section('content')

<div class="breadcrumb">
    <span>/</span>
    <strong>Informatique</strong>
</div>

<h1 class="page-title">💻 Informatique</h1>

<div class="products-grid">

    <div class="product-card">
        <div class="product-image">PC Portable</div>
        <div class="product-info">
            <div class="product-name">Ordinateur Portable Pro</div>
            <div class="product-price">1299,99 €</div>
            <div class="product-description">Intel i7, 16GB RAM, SSD 512GB</div>
            <a href="#" class="btn">Détails</a>
        </div>
    </div>

    <div class="product-card">
        <div class="product-image">Desktop PC</div>
        <div class="product-info">
            <div class="product-name">PC Bureau Gaming</div>
            <div class="product-price">1899,99 €</div>
            <div class="product-description">RTX 4070, i9, 32GB RAM</div>
            <a href="#" class="btn">Détails</a>
        </div>
    </div>

    <div class="product-card">
        <div class="product-image">Tablette</div>
        <div class="product-info">
            <div class="product-name">Tablette 12 pouces</div>
            <div class="product-price">599,99 €</div>
            <div class="product-description">OLED, 128GB, Stylet inclus</div>
            <a href="#" class="btn">Détails</a>
        </div>
    </div>

    <div class="product-card">
        <div class="product-image">Clavier Mécanique</div>
        <div class="product-info">
            <div class="product-name">Clavier Mécanique RGB</div>
            <div class="product-price">179,99 €</div>
            <div class="product-description">Switches personnalisées, Rétroéclairage</div>
            <a href="#" class="btn">Détails</a>
        </div>
    </div>


</div>

@endsection