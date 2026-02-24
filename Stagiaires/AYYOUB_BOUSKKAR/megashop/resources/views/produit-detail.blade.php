@extends('layouts.app')

@section('title', $produit->name . ' - MegaShop')

@section('content')

<div class="breadcrumb">
    <a href="{{ route('home') }}">Accueil</a>
    <span>/</span>
    <a href="{{ route('categorie', $produit->categorie->slug) }}">{{ $produit->categorie->name }}</a>
    <span>/</span>
    <strong>{{ $produit->name }}</strong>
</div>

<h1 class="page-title">Détail du Produit</h1>

<div class="product-detail">
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-bottom: 40px;">
        <div>
            <div class="product-detail-img">
                <img src="{{ asset('storage/' . $produit->image) }}" alt="{{ $produit->name }}" style="width:100%; border-radius:8px;">
            </div>
        </div>
        <div class="product-detail-info">
            <h2>{{ $produit->name }}</h2>
            <div class="product-detail-price">{{ number_format($produit->price, 2, ',', ' ') }} €</div>
            
            <div style="margin-bottom: 30px;">
                <h3 style="color: #2c3e50; margin-bottom: 10px;">Disponibilité</h3>
                @if($produit->stock > 0)
                    <p style="color: #27ae60; font-weight: bold; font-size: 18px;">✓ En stock ({{ $produit->stock }} unités disponibles)</p>
                @else
                    <p style="color: #c0392b; font-weight: bold; font-size: 18px;">✗ Rupture de stock</p>
                @endif
            </div>

            <div style="margin-bottom: 30px;">
                <h3 style="color: #2c3e50; margin-bottom: 10px;">Évaluation</h3>
                <p style="color: #f39c12; font-size: 18px;">
                    @for($i=0; $i < floor($produit->rating); $i++) ⭐ @endfor
                    ({{ number_format($produit->rating, 1) }}/5 - {{ $produit->reviews_count }} avis)
                </p>
            </div>

            <form action="{{ route('panier.ajouter', $produit->id) }}" method="POST">
                @csrf
                <button class="btn btn-secondary" style="width: 100%; padding: 15px; font-size: 18px; margin-bottom: 10px;">Ajouter au panier</button>
            </form>
            <a href="{{ route('checkout.direct', $produit->id) }}" class="btn" style="width: 100%; padding: 15px; font-size: 18px;">Acheter maintenant</a>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
        <div>
            <div class="product-specs">
                <h3>Caractéristiques Principales</h3>
                <ul>
                    @foreach($produit->specs as $spec)
                        <li><strong>{{ $spec->label }} :</strong> {{ $spec->value }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div>
            <div class="product-specs">
                <h3>Connexions & Ports</h3>
                <ul>
                    @foreach($produit->ports as $port)
                        <li>{{ $port }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div style="margin-top: 40px; background: #ecf0f1; padding: 25px; border-radius: 8px;">
        <h3 style="color: #2c3e50; margin-bottom: 15px;">Description Détaillée</h3>
        <p>{{ $produit->description }}</p>
    </div>

    <div style="margin-top: 40px;">
        <h3 style="color: #2c3e50; margin-bottom: 20px;">Produits Similaires</h3>
        <div class="products-grid">
            @foreach($produit->categorie->produits()->where('id','!=',$produit->id)->take(3)->get() as $similaire)
            <div class="product-card">
                <div class="product-image">{{ $similaire->name }}</div>
                <div class="product-info">
                    <div class="product-name">{{ $similaire->name }}</div>
                    <div class="product-price">{{ number_format($similaire->price, 2, ',', ' ') }} €</div>
                    <div class="product-description">{{ $similaire->short_description }}</div>
                    <a href="{{ route('produit.detail', $similaire->id) }}" class="btn">Détails</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div style="margin-top: 40px; background: #fff3cd; padding: 20px; border-radius: 8px; border-left: 4px solid #ffc107;">
        <h4 style="color: #856404; margin-bottom: 10px;">📦 Livraison et Service</h4>
        <ul style="color: #856404; margin-left: 20px;">
            <li>Livraison gratuite en France métropolitaine</li>
            <li>Garantie 2 ans pièces et main d'œuvre</li>
            <li>Service client disponible 7j/7</li>
            <li>Retour gratuit sous 30 jours</li>
            <li>Installation et configuration gratuites</li>
        </ul>
    </div>

</div>

@endsection