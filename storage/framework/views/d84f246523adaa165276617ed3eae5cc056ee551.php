


<?php $__env->startSection('content'); ?>
    <h1 class="text-3xl font-bold mb-6 text-center">Manajemen Pengguna</h1>

    <div class="mb-4 text-right">
        <a href="<?php echo e(route('dashboard.users.create')); ?>" class="inline-block px-6 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 transition duration-300">
            Tambah Pengguna Baru
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Nama
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Email
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Peran
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Organisasi
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        XP
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-10 h-10">
                                    <?php if($user->avatar): ?>
                                        <img class="w-full h-full rounded-full object-cover" src="<?php echo e(asset($user->avatar)); ?>" alt="Avatar">
                                    <?php else: ?>
                                        <img class="w-full h-full rounded-full object-cover" src="<?php echo e(asset('images/default_avatar.png')); ?>" alt="Default Avatar">
                                    <?php endif; ?>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        <?php echo e($user->name); ?>

                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap"><?php echo e($user->email); ?></p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap"><?php echo e($user->role->name ?? 'N/A'); ?></p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap"><?php echo e($user->organization->name ?? 'Solo Player'); ?></p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap"><?php echo e($user->xp); ?></p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                            <a href="<?php echo e(route('dashboard.users.edit', $user->id)); ?>" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                            <form action="<?php echo e(route('dashboard.users.destroy', $user->id)); ?>" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?');">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center text-gray-600">
                            Belum ada pengguna terdaftar.
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ruang fasilkom\ruangfasilkom\resources\views/dashboard/admin/users/index.blade.php ENDPATH**/ ?>