<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informatique - MegaShop</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
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
                    <a href="<?php echo e(route('produit.detail',1)); ?>" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Desktop PC</div>
                <div class="product-info">
                    <div class="product-name">PC Bureau Gaming</div>
                    <div class="product-price">1899,99 €</div>
                    <div class="product-description">RTX 4070, i9, 32GB RAM</div>
                    <a href="<?php echo e(route('produit.detail',2)); ?>" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Tablette</div>
                <div class="product-info">
                    <div class="product-name">Tablette 12 pouces</div>
                    <div class="product-price">599,99 €</div>
                    <div class="product-description">OLED, 128GB, Stylet inclus</div>
                    <a href="<?php echo e(route('produit.detail',3)); ?>" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Clavier Mécanique</div>
                <div class="product-info">
                    <div class="product-name">Clavier Mécanique RGB</div>
                    <div class="product-price">179,99 €</div>
                    <div class="product-description">Switches personnalisées, Rétroéclairage</div>
                    <a href="<?php echo e(route('produit.detail',4)); ?>" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Souris</div>
                <div class="product-info">
                    <div class="product-name">Souris Gamer Wireless</div>
                    <div class="product-price">89,99 €</div>
                    <div class="product-description">12000 DPI, Batterie 100h</div>
                    <a href="<?php echo e(route('produit.detail',5)); ?>" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Écran 4K</div>
                <div class="product-info">
                    <div class="product-name">Écran 4K 27 pouces</div>
                    <div class="product-price">449,99 €</div>
                    <div class="product-description">144Hz, HDR, USB-C</div>
                    <a href="<?php echo e(route('produit.detail',6)); ?>" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Casque Audio</div>
                <div class="product-info">
                    <div class="product-name">Casque Bluetooth Pro</div>
                    <div class="product-price">249,99 €</div>
                    <div class="product-description">Réduction active, 40h autonomie</div>
                    <a href="<?php echo e(route('produit.detail',7)); ?>" class="btn">Détails</a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">Webcam HD</div>
                <div class="product-info">
                    <div class="product-name">Webcam 4K Auto-focus</div>
                    <div class="product-price">129,99 €</div>
                    <div class="product-description">Microphone intégré, Vision nocturne</div>
                    <a href="<?php echo e(route('produit.detail',8)); ?>" class="btn">Détails</a>
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
<?php /**PATH C:\xampp\htdocs\tp laravel\laravelDev202\Stagiaires\saif benkaddour\megashop\resources\views/informatique.blade.php ENDPATH**/ ?>