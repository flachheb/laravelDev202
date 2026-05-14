<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">MegaShop</div>
            <nav>
    <ul>
        <?php $__currentLoopData = $navigation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                
                <?php
                    $href = '#';
                    if (!empty($item['url'])) {
                        // page d'accueil
                        if ($item['url'] === 'index.html') {
                            $href = route('home');
                        }
                        // CGV
                        elseif (strpos($item['url'], 'cgv') !== false) {
                            $href = route('cgv');
                        }
                        // Contact
                        elseif (strpos($item['url'], 'contact') !== false) {
                            $href = route('contact');
                        }
                        // catégories (pages/<slug>.html) -> route('category', slug)
                        elseif (preg_match('#pages/([a-z0-9-]+)\.html#i', $item['url'], $m)) {
                            $slug = $m[1];
                            $href = route('category', ['slug' => $slug]);
                        }
                        else {
                            // fallback vers l'URL fournie
                            $href = url($item['url']);
                        }
                    }
                ?>

                <a href="<?php echo e($href); ?>"><?php echo e($item['label']); ?></a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</nav>
        </div>
    </header>
</body>
</html><?php /**PATH C:\Users\pc\Herd\Laravel dev 202\laravelDev202\megashop\resources\views/partials/header.blade.php ENDPATH**/ ?>