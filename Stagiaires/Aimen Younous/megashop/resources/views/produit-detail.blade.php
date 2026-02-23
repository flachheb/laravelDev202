<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail Produit - MegaShop</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    @include("partials/header")

    <main>
        <div class="breadcrumb">
            <a href="/accueil">Accueil</a>
            <span>/</span>
            <a href="/categories/{{$product['category']}}">Informatique</a>
            <span>/</span>
            <strong>{{$product['name']}}</strong>
        </div>

        <h1 class="page-title">Détail du Produit</h1>

        <div class="product-detail">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-bottom: 40px;">
                <div>
                    <div class="product-detail-img">{{$product['image']}}</div>
                </div>
                <div class="product-detail-info">
                    <h2>{{$product['name']}}</h2>
                    <div class="product-detail-price">{{$product['price']}} €</div>
                    
                    <div style="margin-bottom: 30px;">
                        <h3 style="color: #2c3e50; margin-bottom: 10px;">Disponibilité</h3>
                        <p style="color: #27ae60; font-weight: bold; font-size: 18px;">✓ En stock ({{$product['stock']}} unités disponibles)</p>
                    </div>

                    <div style="margin-bottom: 30px;">
                        <h3 style="color: #2c3e50; margin-bottom: 10px;">Évaluation</h3>
                        <p style="color: #f39c12; font-size: 18px;">⭐⭐⭐⭐⭐ ({{$product['rating']}}/5 - {{$product['reviews']}} avis)</p>
                    </div>

                    <button class="btn btn-secondary" style="width: 100%; padding: 15px; font-size: 18px; margin-bottom: 10px;">Ajouter au panier</button>
                    <button class="btn" style="width: 100%; padding: 15px; font-size: 18px;">Acheter maintenant</button>
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
                <div>
                    <div class="product-specs">
                        <h3>Caractéristiques Principales</h3>
                            @foreach($product['specs'] as $key => $value)
                                <ul>
                                    <strong>{{$key}}</strong> : {{$value}}
                                </ul>
                            @endforeach
                
                    </div>
                </div>
                @if(isset($product['port']))
                    <div>
                        <div class="product-specs">
                            <h3>Connexions & Ports</h3>
                            <ul>
                                @foreach($product['port'] as $port)
                                    <li>{{$port}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
            </div>

            @if(isset($product['details']))
            <div style="margin-top: 40px; background: #ecf0f1; padding: 25px; border-radius: 8px;">
                <h3 style="color: #2c3e50; margin-bottom: 15px;">Description Détaillée</h3>
                <p style="margin-bottom: 15px;">
                    {{$product["details"]}}
                </p>
            </div>
            @endif

            <div style="margin-top: 40px;">
                <h3 style="color: #2c3e50; margin-bottom: 20px;">Produits Similaires</h3>
                <div class="products-grid">
                    <div class="product-card">
                        <div class="product-image">PC Portable</div>
                        <div class="product-info">
                            <div class="product-name">Ordinateur Portable Gaming</div>
                            <div class="product-price">1599,99 €</div>
                            <div class="product-description">i9, RTX 4080, 32GB RAM</div>
                            <a href="produit-detail/informatique/2" class="btn">Détails</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image">Desktop PC</div>
                        <div class="product-info">
                            <div class="product-name">PC Bureau Workstation</div>
                            <div class="product-price">2299,99 €</div>
                            <div class="product-description">Xeon, RTX 4090, 64GB RAM</div>
                            <a href="produit-detail/informatique/3" class="btn">Détails</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image">Tablette</div>
                        <div class="product-info">
                            <div class="product-name">Tablette Pro OLED</div>
                            <div class="product-price">799,99 €</div>
                            <div class="product-description">14", M2 Max, 512GB SSD</div>
                            <a href="produit-detail/informatique/4" class="btn">Détails</a>
                        </div>
                    </div>
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
    </main>

    @include("partials/footer")
</body>
</html>
