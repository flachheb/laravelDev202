<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil - MegaShop</title>
  @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">MegaShop</div>
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                    <li><a href="{{ route('informatique') }}">Informatique</a></li>
                    <li><a href="{{ route('petit-electromenager') }}">Petit Électroménager</a></li>
                    <li><a href="{{ route('grand-electromenager') }}">Grand Électroménager</a></li>
                    <li><a href="{{ route('cgv') }}">CGV</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

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
                    <a href="{{ route('informatique') }}" class="btn">Voir les produits</a>
                </div>
                <div class="category-card">
                    <h3>🍳 Petit Électroménager</h3>
                    <p>Cafetières, grille-pain, mixeurs, robots culinaires...</p>
                    <a href="{{ route('petit-electromenager') }}" class="btn">Voir les produits</a>
                </div>
                <div class="category-card">
                    <h3>❄️ Grand Électroménager</h3>
                    <p>Réfrigérateurs, lave-linge, lave-vaisselle, fours...</p>
                    <a href="{{ route('grand-electromenager') }}" class="btn">Voir les produits</a>
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
                        <a href="{{ route('produit-detail', 1) }}" class="btn">Voir les détails</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">Image Produit 2</div>
                    <div class="product-info">
                        <div class="product-name">Cafetière Programmable</div>
                        <div class="product-price">79,99 €</div>
                        <div class="product-description">Réglez l'horaire de votre café</div>
                        <a href="{{ route('produit-detail', 2) }}" class="btn">Voir les détails</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">Image Produit 3</div>
                    <div class="product-info">
                        <div class="product-name">Réfrigérateur Connecté</div>
                        <div class="product-price">1499,99 €</div>
                        <div class="product-description">La technologie au service de la cuisine</div>
                        <a href="{{ route('produit-detail', 3) }}" class="btn">Voir les détails</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 MegaShop - Tous droits réservés</p>
        <div class="footer-links">
            <a href="{{ route('cgv') }}">CGV</a>
            <a href="{{ route('contact') }}">Contact</a>
            <a href="#">Mentions Légales</a>
        </div>
        <p><strong>Email :</strong> info@megashop.com | <strong>Téléphone :</strong> +212 1 23 45 67 89</p>
    </footer>
</body>
</html>
