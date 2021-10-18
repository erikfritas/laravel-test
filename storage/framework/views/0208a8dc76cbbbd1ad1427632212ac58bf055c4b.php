<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('css'); ?>
<?php $__currentLoopData = $css; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <link rel="stylesheet" type="text/css" href="/css/<?php echo e($value); ?>.css">
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<h1>EAE</h1>

<?php if(isset($_GET['name'])): ?>
    <h3>var == <?php echo e($var); ?></h3>
<?php else: ?>
    <h3>false</h3>
<?php endif; ?>

<hr>


<article>
    <h2>Users</h2>

    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <br>
        <div id="user" style="
        background-color: rgba(0, 0, 255, .5);
        display: flex;
        align-content: flex-start;
        justify-content: space-evenly;
        ">
            <h4><?php echo e($value['nome']); ?></h4>
            <p>Idade: <?php echo e($value['idade']); ?></p>
            <p>Github Profile: <?php echo e($value['github']); ?></p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</article>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__currentLoopData = $js; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <script src="/js/<?php echo e($value); ?>.js"></script>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sites/laravel/aulas/hdcevents/resources/views/index.blade.php ENDPATH**/ ?>