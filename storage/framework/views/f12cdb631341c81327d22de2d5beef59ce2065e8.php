<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin | Ruang Fasilkom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

    <!-- Navbar Admin -->
    <nav class="bg-white shadow-md py-4 px-8 flex justify-between items-center">
        <div class="text-xl font-bold text-blue-600">Ruang Fasilkom</div>
        <div class="space-x-4">
            <a href="<?php echo e(route('dashboard.index')); ?>" class="hover:text-blue-600">Dashboard</a>
            <a href="<?php echo e(route('dashboard.rooms.index')); ?>" class="text-gray-700 hover:text-blue-600">Kelola Ruangan</a>
            <a href="<?php echo e(route('dashboard.bookings.index')); ?>" class="text-gray-700 hover:text-blue-600">Kelola Peminjaman</a>
            <a href="<?php echo e(route('dashboard.users.index')); ?>" class="text-gray-700 hover:text-blue-600">Pengguna</a>
            <a href="<?php echo e(route('logout')); ?>" class="text-red-500 hover:underline" 
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="hidden">
                <?php echo csrf_field(); ?>
            </form>
        </div>
    </nav>

    <!-- Konten Halaman -->
    <main class="p-8">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

</body>
</html>
<?php /**PATH D:\ruang fasilkom\ruangfasilkom\resources\views/layouts/admin.blade.php ENDPATH**/ ?>