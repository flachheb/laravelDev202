<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Électroménager - MegaShop</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
     @include("partials/header")

    <main>
        <div class="breadcrumb">
            <a href="/accueil">Accueil</a>
            <span>/</span>
            <strong>Grand Électroménager</strong>
        </div>

        <h1 class="page-title">❄️ Grand Électroménager</h1>

        <div class="products-grid">
                        @foreach($products as $product)
                <div class="product-card">
                    <div class="product-image">PC Portable</div>
                    <div class="product-info">
                        <div class="product-name">{{$product["name"]}}</div>
                        <div class="product-price">{{$product["price"]}} $</div>
                        <div class="product-description">{{$product["description"]}}</div>
                        <a href="/produitDetail/{{$product['category']}}/{{$product['id']}}" class="btn">Détails</a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

     @include("partials/footer")
</body>
</html>
