

<?php $__env->startSection('title', 'Accueil'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Produits à la Une</h1>
    <div class="products-grid">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="product-card">
                <img src="<?php echo e(asset('images/' . $product['image'])); ?>" alt="<?php echo e($product['name']); ?>">
                <h3><?php echo e($product['name']); ?></h3>
                <p><?php echo e($product['price']); ?> €</p>
                <a href="<?php echo e(route('product.detail', $product['id'])); ?>">Voir le produit</a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\pc\Herd\Laravel dev 202\laravelDev202\megashop\resources\views/index.blade.php ENDPATH**/ ?>