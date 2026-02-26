<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petit Électroménager - MegaShop</title>
    <link rel="stylesheet" href="../css/style.css">
         @include('../css')

</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">MegaShop</div>
            <nav>
                <ul>
                    <li><a href="../index.html">Accueil</a></li>
                    <li><a href="informatique.html">Informatique</a></li>
                    <li><a href="petit-electromenager.html">Petit Électroménager</a></li>
                    <li><a href="grand-electromenager.html">Grand Électroménager</a></li>
                    <li><a href="cgv.html">CGV</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="breadcrumb">
            <a href="/accueil">Accueil</a>
            <span>/</span>
            <strong>Petit Électroménager</strong>
        </div>

        <h1 class="page-title">🍳 Petit Électroménager</h1>

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

    @include('partials/footer')
</body>
</html>
