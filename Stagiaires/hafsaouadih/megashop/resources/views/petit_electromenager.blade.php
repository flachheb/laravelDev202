<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petit Électroménager - MegaShop</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    @include('partials.header')

    <main>
        <div class="breadcrumb">
            <a href="../index.html">Accueil</a>
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
                    <a href="produit-detail.html?id=21" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Grille-pain</div>
                <div class="product-info">
                    <div class="product-name">Grille-pain Premium</div>
                    <div class="product-price">49,99 €</div>
                    <div class="product-description">4 fentes, 7 niveaux de cuisson</div>
                    <a href="produit-detail.html?id=22" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Mixeur</div>
                <div class="product-info">
                    <div class="product-name">Blender Haute Vitesse</div>
                    <div class="product-price">129,99 €</div>
                    <div class="product-description">2000W, 8 vitesses, Bol sans BPA</div>
                    <a href="produit-detail.html?id=23" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Bouilloire</div>
                <div class="product-info">
                    <div class="product-name">Bouilloire Électrique Sans Fil</div>
                    <div class="product-price">34,99 €</div>
                    <div class="product-description">Arrêt automatique, 1.7L</div>
                    <a href="produit-detail.html?id=24" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Robot Culinaire</div>
                <div class="product-info">
                    <div class="product-name">Robot Culinaire Multifonction</div>
                    <div class="product-price">189,99 €</div>
                    <div class="product-description">15 accessoires, 1200W</div>
                    <a href="produit-detail.html?id=25" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Micro-ondes</div>
                <div class="product-info">
                    <div class="product-name">Micro-ondes Numérique</div>
                    <div class="product-price">99,99 €</div>
                    <div class="product-description">800W, 20L, Mode grill</div>
                    <a href="produit-detail.html?id=26" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Fer à repasser</div>
                <div class="product-info">
                    <div class="product-name">Fer à Repasser Vapeur</div>
                    <div class="product-price">59,99 €</div>
                    <div class="product-description">2400W, Semelle en céramique</div>
                    <a href="produit-detail.html?id=27" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Appareil Raclette</div>
                <div class="product-info">
                    <div class="product-name">Appareil à Raclette Électrique</div>
                    <div class="product-price">44,99 €</div>
                    <div class="product-description">4 portions, Non-adhésif</div>
                    <a href="produit-detail.html?id=28" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Aspirateur</div>
                <div class="product-info">
                    <div class="product-name">Aspirateur Sans Fil Cyclonique</div>
                    <div class="product-price">299,99 €</div>
                    <div class="product-description">60 min autonomie, Programmable</div>
                    <a href="produit-detail.html?id=29" class="btn">Détails</a>
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')
</body>
</html>
