<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail Produit - MegaShop</title>
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
            <a href="informatique.">Informatique</a>
            <span>/</span>
            <strong>Ordinateur Portable Pro</strong>
        </div>

        <h1 class="page-title">Détail du Produit</h1>

        <div class="product-detail">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-bottom: 40px;">
                <div>
                    <div class="product-detail-img">Image du Produit - Ordinateur Portable Pro</div>
                </div>
                <div class="product-detail-info">
                    <h2>Ordinateur Portable Pro</h2>
                    <div class="product-detail-price">1299,99 €</div>
                    
                    <div style="margin-bottom: 30px;">
                        <h3 style="color: #2c3e50; margin-bottom: 10px;">Disponibilité</h3>
                        <p style="color: #27ae60; font-weight: bold; font-size: 18px;">✓ En stock (5 unités disponibles)</p>
                    </div>

                    <div style="margin-bottom: 30px;">
                        <h3 style="color: #2c3e50; margin-bottom: 10px;">Évaluation</h3>
                        <p style="color: #f39c12; font-size: 18px;">⭐⭐⭐⭐⭐ (4.8/5 - 156 avis)</p>
                    </div>

                    <button class="btn btn-secondary" style="width: 100%; padding: 15px; font-size: 18px; margin-bottom: 10px;">Ajouter au panier</button>
                    <button class="btn" style="width: 100%; padding: 15px; font-size: 18px;">Acheter maintenant</button>
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
                <div>
                    <div class="product-specs">
                        <h3>Caractéristiques Principales</h3>
                        <ul>
                            <li><strong>Processeur :</strong> Intel Core i7-13700K</li>
                            <li><strong>RAM :</strong> 16 GB DDR5</li>
                            <li><strong>Stockage :</strong> SSD NVMe 512 GB</li>
                            <li><strong>Écran :</strong> 15.6" IPS 1920x1080</li>
                            <li><strong>Carte Graphique :</strong> NVIDIA RTX 4060</li>
                            <li><strong>Batterie :</strong> 80 Wh (10 heures autonomie)</li>
                            <li><strong>Poids :</strong> 1.8 kg</li>
                            <li><strong>Couleur :</strong> Gris Sidéral</li>
                        </ul>
                    </div>
                </div>

                <div>
                    <div class="product-specs">
                        <h3>Connexions & Ports</h3>
                        <ul>
                            <li>2x USB-C Thunderbolt 4</li>
                            <li>2x USB-A 3.2</li>
                            <li>1x HDMI 2.1</li>
                            <li>1x Jack audio 3.5mm</li>
                            <li>WiFi 6E 802.11ax</li>
                            <li>Bluetooth 5.3</li>
                            <li>Webcam 1080p HD</li>
                            <li>Microphone stéréo intégré</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div style="margin-top: 40px; background: #ecf0f1; padding: 25px; border-radius: 8px;">
                <h3 style="color: #2c3e50; margin-bottom: 15px;">Description Détaillée</h3>
                <p style="margin-bottom: 15px;">
                    L'Ordinateur Portable Pro est conçu pour les professionnels qui exigent performance et mobilité. 
                    Avec son processeur Intel de dernière génération et sa carte graphique NVIDIA, ce portable peut gérer 
                    sans effort les tâches les plus exigeantes, du traitement vidéo à la modélisation 3D.
                </p>
                <p style="margin-bottom: 15px;">
                    Son écran IPS offre une reproduction des couleurs exceptionnelle, idéal pour le design et la retouche photo. 
                    La batterie longue durée vous permet de travailler toute la journée sans recharge, tandis que le design 
                    élégant et compact le rend facile à transporter.
                </p>
                <p>
                    Équipé de ports Thunderbolt 4 dernière génération, cet ordinateur offre une connectivité haut débit 
                    pour vos périphériques externes. Le clavier mécanique low-profile offre une expérience de frappe précise 
                    et confortable pour de longues sessions de travail.
                </p>
            </div>

            <div style="margin-top: 40px;">
                <h3 style="color: #2c3e50; margin-bottom: 20px;">Produits Similaires</h3>
                <div class="products-grid">
                    <div class="product-card">
                        <div class="product-image">PC Portable</div>
                        <div class="product-info">
                            <div class="product-name">Ordinateur Portable Gaming</div>
                            <div class="product-price">1599,99 €</div>
                            <div class="product-description">i9, RTX 4080, 32GB RAM</div>
                            <a href="produit-detail.html?id=2" class="btn">Détails</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image">Desktop PC</div>
                        <div class="product-info">
                            <div class="product-name">PC Bureau Workstation</div>
                            <div class="product-price">2299,99 €</div>
                            <div class="product-description">Xeon, RTX 4090, 64GB RAM</div>
                            <a href="produit-detail.html?id=3" class="btn">Détails</a>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-image">Tablette</div>
                        <div class="product-info">
                            <div class="product-name">Tablette Pro OLED</div>
                            <div class="product-price">799,99 €</div>
                            <div class="product-description">14", M2 Max, 512GB SSD</div>
                            <a href="produit-detail.html?id=4" class="btn">Détails</a>
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
<?php /**PATH C:\xampp\htdocs\tp laravel\laravelDev202\Stagiaires\saif benkaddour\megashop\resources\views/produit-detail.blade.php ENDPATH**/ ?>