<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petit Électroménager - MegaShop</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">MegaShop</div>
            <nav>
                <ul>
                    <li><a href="<?php echo e(route('home')); ?>">Accueil</a></li>
                    <li><a href="<?php echo e(route('informatique')); ?>">Informatique</a></li>
                    <li><a href="<?php echo e(route('petit')); ?>">Petit Électroménager</a></li>
                    <li><a href="<?php echo e(route('grand')); ?>">Grand Électroménager</a></li>
                    <li><a href="<?php echo e(route('cgv')); ?>">CGV</a></li>
                    <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="breadcrumb">
            <a href="../index">Accueil</a>
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
                    <a href="<?php echo e(route('produit.detail',1)); ?>" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Grille-pain</div>
                <div class="product-info">
                    <div class="product-name">Grille-pain Premium</div>
                    <div class="product-price">49,99 €</div>
                    <div class="product-description">4 fentes, 7 niveaux de cuisson</div>
                    <a href="<?php echo e(route('produit.detail',2)); ?>" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Mixeur</div>
                <div class="product-info">
                    <div class="product-name">Blender Haute Vitesse</div>
                    <div class="product-price">129,99 €</div>
                    <div class="product-description">2000W, 8 vitesses, Bol sans BPA</div>
                    <a href="<?php echo e(route('produit.detail',3)); ?>" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Bouilloire</div>
                <div class="product-info">
                    <div class="product-name">Bouilloire Électrique Sans Fil</div>
                    <div class="product-price">34,99 €</div>
                    <div class="product-description">Arrêt automatique, 1.7L</div>
                    <a href="<?php echo e(route('produit.detail',4)); ?>" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Robot Culinaire</div>
                <div class="product-info">
                    <div class="product-name">Robot Culinaire Multifonction</div>
                    <div class="product-price">189,99 €</div>
                    <div class="product-description">15 accessoires, 1200W</div>
                    <a href="<?php echo e(route('produit.detail',5)); ?>" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Micro-ondes</div>
                <div class="product-info">
                    <div class="product-name">Micro-ondes Numérique</div>
                    <div class="product-price">99,99 €</div>
                    <div class="product-description">800W, 20L, Mode grill</div>
                    <a href="<?php echo e(route('produit.detail',6)); ?>" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Fer à repasser</div>
                <div class="product-info">
                    <div class="product-name">Fer à Repasser Vapeur</div>
                    <div class="product-price">59,99 €</div>
                    <div class="product-description">2400W, Semelle en céramique</div>
                    <a href="<?php echo e(route('produit.detail',9)); ?>" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Appareil Raclette</div>
                <div class="product-info">
                    <div class="product-name">Appareil à Raclette Électrique</div>
                    <div class="product-price">44,99 €</div>
                    <div class="product-description">4 portions, Non-adhésif</div>
                    <a href="<?php echo e(route('produit.detail',10)); ?>" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Aspirateur</div>
                <div class="product-info">
                    <div class="product-name">Aspirateur Sans Fil Cyclonique</div>
                    <div class="product-price">299,99 €</div>
                    <div class="product-description">60 min autonomie, Programmable</div>
                    <a href="<?php echo e(route('produit.detail',11)); ?>" class="btn">Détails</a>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 MegaShop - Tous droits réservés</p>
        <div class="footer-links">
            <a href="<?php echo e(route('cgv')); ?>">CGV</a>
            <a href="<?php echo e(route('contact')); ?>">Contact</a>
            <a href="#">Mentions Légales</a>
        </div>
        <p><strong>Email :</strong> info@megashop.com | <strong>Téléphone :</strong> +212 1 23 45 67 89</p>
    </footer>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\tp laravel\laravelDev202\Stagiaires\saif benkaddour\megashop\resources\views/petit-electromenager.blade.php ENDPATH**/ ?>