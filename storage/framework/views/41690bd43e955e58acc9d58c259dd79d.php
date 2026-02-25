<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($company['name'] ?? 'MegaShop'); ?> - Contact</title>
    <link rel="stylesheet" href="/css/style.css">
    <style>body{background:#f5f7fa;padding:20px;font-family:Arial,Helvetica,sans-serif}</style>
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo"><?php echo e($company['name'] ?? 'MegaShop'); ?></div>
        </div>
    </header>

    <main>
        <h1 class="page-title">Nous Contacter</h1>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-bottom: 40px;">
            <!-- Formulaire de contact (non fonctionnel ici) -->
            <div class="form-container" style="margin: 0;">
                <h2>Formulaire de Contact</h2>
                <form>
                    <div class="form-group">
                        <label for="nom">Nom Complet *</label>
                        <input type="text" id="nom" name="nom" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Adresse Email *</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="tel" id="telephone" name="telephone">
                    </div>

                    <div class="form-group">
                        <label for="sujet">Sujet *</label>
                        <select id="sujet" name="sujet" required>
                            <option value="">-- Sélectionnez un sujet --</option>
                            <option value="commande">À propos d'une commande</option>
                            <option value="retour">Retour / Échange</option>
                            <option value="produit">Informations sur un produit</option>
                            <option value="technique">Problème technique</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-secondary" style="width: 100%; padding: 15px; font-size: 16px;">
                        Envoyer le message
                    </button>
                </form>
            </div>

            <!-- Informations de contact -->
            <div>
                <div style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); margin-bottom: 25px;">
                    <h3 style="color: #2c3e50; margin-bottom: 20px;">📞 Nos Coordonnées</h3>
                    
                    <div style="margin-bottom: 25px;">
                        <h4 style="color: #3498db; margin-bottom: 8px;">Siège Social</h4>
                        <p style="color: #555; line-height: 1.8;">
                            <?php echo e($company['name'] ?? 'MegaShop'); ?><br>
                            <?php echo e($company['address'] ?? ''); ?><br>
                            <?php echo e($company['zip'] ?? ''); ?> <?php echo e($company['city'] ?? ''); ?><br>
                            <?php echo e($company['country'] ?? ''); ?>

                        </p>
                    </div>

                    <div style="margin-bottom: 25px;">
                        <h4 style="color: #3498db; margin-bottom: 8px;">Téléphone</h4>
                        <p style="color: #555;">
                            <strong>Général :</strong> <?php echo e($contact['phone_general'] ?? $company['phone'] ?? ''); ?><br>
                            <strong>Support :</strong> <?php echo e($contact['phone_support'] ?? ''); ?><br>
                            <strong>Ventes :</strong> <?php echo e($contact['phone_sales'] ?? ''); ?>

                        </p>
                    </div>

                    <div style="margin-bottom: 25px;">
                        <h4 style="color: #3498db; margin-bottom: 8px;">Email</h4>
                        <p style="color: #555;">
                            <strong>Général :</strong> <?php echo e($company['email'] ?? ''); ?><br>
                            <strong>Support :</strong> <?php echo e($company['support_email'] ?? ''); ?><br>
                            <strong>Ventes :</strong> <?php echo e($company['sales_email'] ?? ''); ?>

                        </p>
                    </div>

                    <div>
                        <h4 style="color: #3498db; margin-bottom: 8px;">Horaires d'Ouverture</h4>
                        <p style="color: #555;">
                            Lundi - Vendredi : <?php echo e($hours['monday_friday'] ?? ''); ?><br>
                            Samedi : <?php echo e($hours['saturday'] ?? ''); ?><br>
                            Dimanche : <?php echo e($hours['sunday'] ?? ''); ?>

                        </p>
                    </div>
                </div>

                <div style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
                    <h3 style="color: #2c3e50; margin-bottom: 20px;">💬 Réseaux Sociaux</h3>
                    <p style="margin-bottom: 15px;">Suivez-nous sur nos réseaux sociaux pour les dernières actualités et offres :</p>
                    <div style="display: flex; gap: 15px;">
                        <a href="<?php echo e($social['facebook'] ?? '#'); ?>" style="color: #3498db; text-decoration: none; font-weight: bold;">📘 Facebook</a>
                        <a href="<?php echo e($social['instagram'] ?? '#'); ?>" style="color: #3498db; text-decoration: none; font-weight: bold;">📷 Instagram</a>
                        <a href="<?php echo e($social['twitter'] ?? '#'); ?>" style="color: #3498db; text-decoration: none; font-weight: bold;">🐦 Twitter</a>
                        <a href="<?php echo e($social['youtube'] ?? '#'); ?>" style="color: #3498db; text-decoration: none; font-weight: bold;">▶️ YouTube</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Questions fréquemment posées -->
        <section style="background: white; padding: 30px; border-radius: 8px; margin-bottom: 40px;">
            <h2 style="color: #2c3e50; margin-bottom: 30px; border-bottom: 3px solid #3498db; padding-bottom: 15px;">❓ Questions Fréquemment Posées</h2>

            <div style="display: grid; gap: 20px;">
                <?php $__currentLoopData = ($faq ?? []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <h4 style="color: #2c3e50; margin-bottom: 8px;"><?php echo e($item['question'] ?? $item['title'] ?? ''); ?></h4>
                        <p style="color: #555; margin-left: 15px;"><?php echo e($item['answer'] ?? $item['content'] ?? ''); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </section>

        <!-- Localisation -->
        <section style="background: white; padding: 30px; border-radius: 8px;">
            <h2 style="color: #2c3e50; margin-bottom: 20px; border-bottom: 3px solid #3498db; padding-bottom: 15px;">📍 Où nous trouver</h2>
            <p style="color: #555; margin-bottom: 20px;">Notre siège social est situé au cœur de <?php echo e($company['city'] ?? 'la ville'); ?>. Vous pouvez nous rendre visite sur rendez-vous.</p>
            <div style="width: 100%; height: 300px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-size: 18px;">Carte Google Maps (à intégrer)</div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 <?php echo e($company['name'] ?? 'MegaShop'); ?> - Tous droits réservés</p>
        <div class="footer-links">
            <a href="/cgv">CGV</a>
            <a href="/contact">Contact</a>
            <a href="#">Mentions Légales</a>
        </div>
        <p><strong>Email :</strong> <?php echo e($company['email'] ?? ''); ?> | <strong>Téléphone :</strong> <?php echo e($company['phone'] ?? ''); ?></p>
    </footer>
</body>
</html>
<?php /**PATH C:\Users\pc\Herd\Laravel dev 202\laravelDev202\megashop\resources\views/contact.blade.php ENDPATH**/ ?>