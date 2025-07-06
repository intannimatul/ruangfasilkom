

<?php $__env->startSection('content'); ?>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Manajemen Ruangan</h1>
        <a href="<?php echo e(route('dashboard.rooms.create')); ?>"
           class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition duration-300">
            + Tambahkan Ruangan Baru
        </a>
    </div>

    <div class="bg-white rounded-lg shadow overflow-x-auto">
        <table class="min-w-full table-auto text-left">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="px-4 py-3">#</th>
                    <th class="px-4 py-3">Nama Ruangan</th>
                    <th class="px-4 py-3">Lokasi</th>
                    <th class="px-4 py-3">Kapasitas</th>
                    <th class="px-4 py-3">Deskripsi</th>
                    <th class="px-4 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <?php $__empty_1 = true; $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3"><?php echo e($loop->iteration); ?></td>
                        <td class="px-4 py-3"><?php echo e($room->name); ?></td>
                        <td class="px-4 py-3"><?php echo e($room->location); ?></td>
                        <td class="px-4 py-3"><?php echo e($room->capacity); ?></td>
                        <td class="px-4 py-3"><?php echo e($room->description); ?></td>
                        <td class="px-4 py-3 space-x-2">
                            <a href="<?php echo e(route('dashboard.rooms.edit', $room->id)); ?>"
                               class="text-blue-600 hover:underline">Sunting</a>
                            <form action="<?php echo e(route('dashboard.rooms.destroy', $room->id)); ?>" method="POST" class="inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="text-red-600 hover:underline"
                                        onclick="return confirm('Yakin ingin menghapus ruangan ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="px-4 py-3 text-center text-gray-500">Tidak ada data ruangan.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ruang fasilkom\ruangfasilkom\resources\views/dashboard/admin/rooms/index.blade.php ENDPATH**/ ?>