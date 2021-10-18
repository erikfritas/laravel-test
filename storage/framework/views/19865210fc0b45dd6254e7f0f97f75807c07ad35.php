<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    
    <?php echo $__env->yieldContent('css'); ?>
    
</head>
<body>
    
    <nav>
        <h2 class="title"><a href="/">Laravel teste</a></h2>
        <ul class="list">
            <?php $__currentLoopData = [
                '#sobre' => 'Sobre',
                '#produtos' => 'Produtos',
                '#footer' => 'Footer'
            ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="<?php echo e($key); ?>"><?php echo e($value); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </nav>
    

    
    <?php echo $__env->yieldContent('content'); ?>
    

    
    <footer>
        <h3>&copy; Direitos Reservados - 2021</h3>
    </footer>
    

    
    <?php echo $__env->yieldContent('js'); ?>
    
</body>
</html>
<?php /**PATH /var/www/html/sites/laravel/aulas/hdcevents/resources/views/layouts/main.blade.php ENDPATH**/ ?>