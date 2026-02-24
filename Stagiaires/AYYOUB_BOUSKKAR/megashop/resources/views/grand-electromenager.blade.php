@extends('layouts.app')

@section('title', 'Grand Électroménager - MegaShop')

@section('content')

<div class="breadcrumb">
    <span>/</span>
    <strong>Grand Électroménager</strong>
</div>

<h1 class="page-title">❄️ Grand Électroménager</h1>

<div class="products-grid">

    <div class="product-card">
        <div class="product-image">Réfrigérateur</div>
        <div class="product-info">
            <div class="product-name">Réfrigérateur Connecté</div>
            <div class="product-price">1499,99 €</div>
            <div class="product-description">French Door, 620L, WiFi intégré</div>
            <a href="#" class="btn">Détails</a>
        </div>
    </div>

    <div class="product-card">
        <div class="product-image">Lave-linge</div>
        <div class="product-info">
            <div class="product-name">Lave-linge Haut de Gamme</div>
            <div class="product-price">899,99 €</div>
            <div class="product-description">9kg, A+++, 1400 tours/min</div>
            <a href="#" class="btn">Détails</a>
        </div>
    </div>

    <div class="product-card">
        <div class="product-image">Lave-vaisselle</div>
        <div class="product-info">
            <div class="product-name">Lave-vaisselle Encastrable</div>
            <div class="product-price">599,99 €</div>
            <div class="product-description">14 couverts, A+++, 42dB</div>
            <a href="#" class="btn">Détails</a>
        </div>
    </div>

</div>

@endsection