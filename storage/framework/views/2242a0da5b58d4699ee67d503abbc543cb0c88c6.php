<?php $__env->startSection('content'); ?>

<h1>Produtos</h1>


<?php if($busca != ''): ?>
    <p>
        Exibindo resultados de: <?php echo e($busca); ?>

    </p>
<?php else: ?>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum deleniti ab id cupiditate, ullam magni est. Quod, eius voluptate ea perspiciatis repellendus quo. Quidem nisi quisquam dolor possimus. Ullam, placeat.
    </p>
<?php endif; ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sites/laravel/aulas/hdcevents/resources/views/produtos.blade.php ENDPATH**/ ?>