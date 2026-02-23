<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"></head> -->
<body>
    @include("../partials/header")
    
    <main>
        <div class="hero">
            <h1>Bienvenue chez MegaShop</h1>
            <p>Découvrez notre sélection complète d'électronique et d'électroménager</p>
            <a href="#categories" class="btn">Voir nos catégories</a>
        </div>

        <section id="categories">
            <h2 class="page-title">Nos Catégories</h2>
            <div class="categories-grid">
                <div class="category-card">
                    <h3>💻 Informatique</h3>
                    <p>Ordinateurs, laptops, accessoires informatiques et bien plus...</p>
                    <a href="/categories/informatique" class="btn">Voir les produits</a>
                </div>
                <div class="category-card">
                    <h3>🍳 Petit Électroménager</h3>
                    <p>Cafetières, grille-pain, mixeurs, robots culinaires...</p>
                    <a href="/categories/petit-electromenager" class="btn">Voir les produits</a>
                </div>
                <div class="category-card">
                    <h3>❄️ Grand Électroménager</h3>
                    <p>Réfrigérateurs, lave-linge, lave-vaisselle, fours...</p>
                    <a href="/categories/grand-electromenager" class="btn">Voir les produits</a>
                </div>
            </div>
        </section>

        <section class="featured-products">
            <h2 class="page-title">Produits en Vedette</h2>
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image">Image Produit 1</div>
                    <div class="product-info">
                        <div class="product-name">Ordinateur Portable</div>
                        <div class="product-price">899,99 €</div>
                        <div class="product-description">Puissant et léger, parfait pour le travail</div>
                        <a href="pages/produit-detail.html?id=1" class="btn">Voir les détails</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">Image Produit 2</div>
                    <div class="product-info">
                        <div class="product-name">Cafetière Programmable</div>
                        <div class="product-price">79,99 €</div>
                        <div class="product-description">Réglez l'horaire de votre café</div>
                        <a href="pages/produit-detail.html?id=2" class="btn">Voir les détails</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">Image Produit 3</div>
                    <div class="product-info">
                        <div class="product-name">Réfrigérateur Connecté</div>
                        <div class="product-price">1499,99 €</div>
                        <div class="product-description">La technologie au service de la cuisine</div>
                        <a href="pages/produit-detail.html?id=3" class="btn">Voir les détails</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include("../partials/footer")
</body>
</html>