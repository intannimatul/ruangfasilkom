

<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('rooms.index')); ?>" class="inline-block text-blue-600 hover:underline mb-6">&larr; Kembali ke Daftar Ruangan</a>

    <h1 class="text-3xl font-bold mb-6 text-center">🏰 Detail Ruangan: <?php echo e($room->name); ?></h1>

    <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-gray-200">
        <?php if($room->image): ?>
            <img src="<?php echo e(asset('storage/' . $room->image)); ?>" alt="Gambar <?php echo e($room->name); ?>" class="w-full h-64 object-cover">
        <?php else: ?>
            <img src="<?php echo e(asset('images/default_room.png')); ?>" alt="Gambar Default Ruangan" class="w-full h-64 object-cover">
        <?php endif; ?>

        <div class="p-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-3"><?php echo e($room->name); ?></h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-700 text-lg mb-6">
                <p>📍 <strong>Lokasi:</strong> <?php echo e($room->location ?? 'Tidak ada informasi lokasi'); ?></p>
                <p>👥 <strong>Kapasitas:</strong> <?php echo e($room->capacity); ?> orang</p>
                <p>⚔️ <strong>Kesulitan:</strong> <span class="font-bold text-blue-600"><?php echo e($room->difficulty->name ?? 'Tidak Diketahui'); ?></span></p>
                <p>✨ <strong>Hadiah XP:</strong> <?php echo e($room->difficulty->xp_reward ?? 0); ?> XP</p>
            </div>
            <p class="text-gray-800 mb-6"><?php echo e($room->description ?? 'Tidak ada deskripsi untuk ruangan ini.'); ?></p>

            <div class="text-center mt-6">
                <a href="<?php echo e(route('room_bookings.create', $room->id)); ?>"
                   class="inline-block px-8 py-3 bg-green-600 text-white text-lg font-semibold rounded-lg shadow-md hover:bg-green-700 transition duration-300">
                    📅 Pesan Ruangan Ini
                </a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ruang fasilkom\ruangfasilkom\resources\views/user/rooms/show.blade.php ENDPATH**/ ?>