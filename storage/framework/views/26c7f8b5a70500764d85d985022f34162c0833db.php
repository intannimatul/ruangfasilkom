<!DOCTYPE html>
<html lang="id">
    <!-- Intro.js CSS -->
<link href="https://cdn.jsdelivr.net/npm/intro.js/minified/introjs.min.css" rel="stylesheet">
<head>
    <meta charset="UTF-8">
    <title>Ruang Fasilkom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js', 'resource/js/app.js']); ?>
</head>
<!-- Intro.js Script -->
<script src="https://cdn.jsdelivr.net/npm/intro.js/minified/intro.min.js"></script>
<body class="bg-gray-100 min-h-screen flex flex-col">
    
    <nav class="bg-white shadow px-4 py-3 flex justify-between items-center">
        <a href="<?php echo e(route('home')); ?>" class="text-lg font-bold text-blue-600">Ruang Fasilkom</a>
        <div class="space-x-4">
            <a href="<?php echo e(route('home')); ?>" class="text-gray-700 hover:text-blue-600">Home</a>
            <a href="<?php echo e(route('rooms.index')); ?>" class="text-gray-700 hover:text-blue-600">Rooms</a>
            <a href="<?php echo e(route('history.index')); ?>" class="text-gray-700 hover:text-blue-600">History</a>
            <a href="<?php echo e(route('user.profile')); ?>" class="text-gray-700 hover:text-blue-600">Profile</a>
            <form action="<?php echo e(route('logout')); ?>" method="POST" class="inline">
                <?php echo csrf_field(); ?>
                <button type="submit" class="text-red-500 hover:text-red-600">Logout</button>
            </form>
        </div>
    </nav>

    
    <main class="flex-1 py-6 px-4">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    
    <footer class="bg-white text-center py-4 shadow-inner text-sm text-gray-500">
        &copy; <?php echo e(date('Y')); ?> Ruang Fasilkom
    </footer>
</body>
</html>
<?php /**PATH C:\Users\intan\Downloads\ruangfasilkom22\resources\views/layouts/app.blade.php ENDPATH**/ ?>