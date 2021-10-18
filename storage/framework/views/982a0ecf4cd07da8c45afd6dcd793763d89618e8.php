<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    
    
    <header></header>
    

    
    <?php echo $__env->yieldContent('content'); ?>
    

    
    <footer>
        <h3>&copy; Direitos Reservados - 2021</h3>
    </footer>
    

</body>
</html>
<?php /**PATH /var/www/html/sites/laravel/aulas/hdcevents/resources/views/main.blade.php ENDPATH**/ ?>