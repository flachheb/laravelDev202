<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informatique - MegaShop</title>
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
        <div class="breadcrumb">
            <a href="../index.html">Accueil</a>
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
                    <a href="{{ route('produit-detail', 10) }}" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Desktop PC</div>
                <div class="product-info">
                    <div class="product-name">PC Bureau Gaming</div>
                    <div class="product-price">1899,99 €</div>
                    <div class="product-description">RTX 4070, i9, 32GB RAM</div>
                    <a href="{{ route('produit-detail', 11) }}" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Tablette</div>
                <div class="product-info">
                    <div class="product-name">Tablette 12 pouces</div>
                    <div class="product-price">599,99 €</div>
                    <div class="product-description">OLED, 128GB, Stylet inclus</div>
                    <a href="{{ route('produit-detail', 12) }}" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Clavier Mécanique</div>
                <div class="product-info">
                    <div class="product-name">Clavier Mécanique RGB</div>
                    <div class="product-price">179,99 €</div>
                    <div class="product-description">Switches personnalisées, Rétroéclairage</div>
                    <a href="{{ route('produit-detail', 13) }}" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Souris</div>
                <div class="product-info">
                    <div class="product-name">Souris Gamer Wireless</div>
                    <div class="product-price">89,99 €</div>
                    <div class="product-description">12000 DPI, Batterie 100h</div>
                    <a href="{{ route('produit-detail', 14) }}" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Écran 4K</div>
                <div class="product-info">
                    <div class="product-name">Écran 4K 27 pouces</div>
                    <div class="product-price">449,99 €</div>
                    <div class="product-description">144Hz, HDR, USB-C</div>
                    <a href="{{ route('produit-detail', 15) }}" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Casque Audio</div>
                <div class="product-info">
                    <div class="product-name">Casque Bluetooth Pro</div>
                    <div class="product-price">249,99 €</div>
                    <div class="product-description">Réduction active, 40h autonomie</div>
                    <a href="{{ route('produit-detail', 16) }}" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Webcam HD</div>
                <div class="product-info">
                    <div class="product-name">Webcam 4K Auto-focus</div>
                    <div class="product-price">129,99 €</div>
                    <div class="product-description">Microphone intégré, Vision nocturne</div>
                    <a href="{{ route('produit-detail', 17) }}" class="btn">Détails</a>
                </div>
            </div>
        </div>
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
