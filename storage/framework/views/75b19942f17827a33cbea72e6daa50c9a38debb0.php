
 

<?php $__env->startSection('content'); ?>
    <h1 class="text-3xl font-bold mb-6 text-center">Dashboard Admin</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-blue-100 p-6 rounded-lg shadow-md text-center">
            <h3 class="text-lg font-semibold text-blue-800">Total Pengguna</h3>
            
            <p class="text-4xl font-bold text-blue-600"><?php echo e($totalUsers ?? 0); ?></p>
        </div>
        <div class="bg-green-100 p-6 rounded-lg shadow-md text-center">
            <h3 class="text-lg font-semibold text-green-800">Total Ruangan</h3>
            
            <p class="text-4xl font-bold text-green-600"><?php echo e($totalRooms ?? 0); ?></p>
        </div>
        <div class="bg-yellow-100 p-6 rounded-lg shadow-md text-center">
            <h3 class="text-lg font-semibold text-yellow-800">Peminjaman Pending</h3>
            
            <p class="text-4xl font-bold text-yellow-600"><?php echo e($pendingBookings ?? 0); ?></p>
        </div>
        <div class="bg-purple-100 p-6 rounded-lg shadow-md text-center">
            <h3 class="text-lg font-semibold text-purple-800">Peminjaman Sukses</h3>
            
            <p class="text-4xl font-bold text-purple-600"><?php echo e($approvedBookings ?? 0); ?></p>
        </div>
    </div>

    <h2 class="text-2xl font-bold mb-4">Aksi Cepat</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <a href="<?php echo e(route('dashboard.bookings.index')); ?>" class="flex items-center justify-center p-4 bg-red-600 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 transition duration-300">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
            Kelola Peminjaman
        </a>
        
        
        <a href="<?php echo e(route('dashboard.rooms.index')); ?>" class="flex items-center justify-center p-4 bg-orange-600 text-white font-semibold rounded-lg shadow-md hover:bg-orange-700 transition duration-300">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h12a2 2 0 012 2v8a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM10 18v1a1 1 0 001 1h2a1 1 0 001-1v-1m-4-8h.01M16 10h.01"></path></svg>
            Kelola Ruangan
        </a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ruang fasilkom\ruangfasilkom\resources\views/dashboard/admin/index.blade.php ENDPATH**/ ?>