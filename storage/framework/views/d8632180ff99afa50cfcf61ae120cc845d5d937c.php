<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/index.css">
</head>
<body class="antialiased">
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
    

    <!-- JS -->
    <script src="/js/index.js"></script>
</body>
</html>
<?php /**PATH /var/www/html/sites/laravel/aulas/hdcevents/resources/views/welcome.blade.php ENDPATH**/ ?>