<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGV - <?php echo e(config('app.name', 'MegaShop')); ?></title>
    <link rel="stylesheet" href="/css/style.css">
    <style>body{background:#f5f7fa;padding:20px;font-family:Arial,Helvetica,sans-serif}</style>
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo"><?php echo e(config('app.name', 'MegaShop')); ?></div>
        </div>
    </header>

    <main>
        <h1 class="page-title">Conditions Générales de Vente (CGV)</h1>

        <div class="cgv-content">
            <?php if(!empty($cgv) && is_array($cgv)): ?>
                <?php $__currentLoopData = $cgv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="cgv-section" style="background:white;padding:20px;border-radius:6px;margin-bottom:15px;">
                        <h2><?php echo e($section['title'] ?? 'Section'); ?></h2>
                        <p><?php echo e($section['content'] ?? ''); ?></p>
                        <?php if(!empty($section['items']) && is_array($section['items'])): ?>
                            <ul>
                                <?php $__currentLoopData = $section['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $li): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($li); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <p>Aucune CGV disponible pour le moment.</p>
            <?php endif; ?>

            <div style="background: #d4edda; padding: 20px; border-radius: 8px; margin-top: 30px; border-left: 4px solid #28a745;">
                <p><strong>Date de mise à jour :</strong> <?php echo e(date('d F Y')); ?></p>
                <p>Ces Conditions Générales de Vente sont valables à compter de la date mentionnée et jusqu'à modification ultérieure.</p>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 <?php echo e(config('app.name', 'MegaShop')); ?> - Tous droits réservés</p>
    </footer>
</body>
</html>
<?php /**PATH C:\Users\pc\Herd\Laravel dev 202\laravelDev202\megashop\resources\views/cgv.blade.php ENDPATH**/ ?>