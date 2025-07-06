

<?php $__env->startSection('content'); ?>
    <h1 class="text-3xl font-bold mb-6 text-center">Manajemen Persetujuan Peminjaman</h1>

    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Peminjam
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Ruangan
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Waktu Peminjaman
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Tujuan
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Status
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                <?php echo e($booking->user->name); ?> (<?php echo e($booking->user->role->name ?? 'N/A'); ?>)
                            </p>
                            <?php if($booking->is_for_student && $booking->student_letter_path): ?>
                                <p class="text-gray-600 text-xs">
                                    <a href="<?php echo e(asset($booking->student_letter_path)); ?>" target="_blank" class="text-blue-500 hover:underline">Surat Mahasiswa</a>
                                </p>
                            <?php endif; ?>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap"><?php echo e($booking->room->name); ?></p>
                            <p class="text-gray-600 text-xs">(<?php echo e($booking->room->difficulty->name ?? 'N/A'); ?> - <?php echo e($booking->room->difficulty->xp_reward ?? 0); ?> XP)</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap"><?php echo e($booking->start_time->format('d M Y H:i')); ?></p>
                            <p class="text-gray-600 whitespace-no-wrap">- <?php echo e($booking->end_time->format('d M Y H:i')); ?></p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap"><?php echo e($booking->purpose); ?></p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <span class="relative inline-block px-3 py-1 font-semibold leading-tight <?php echo e($booking->status->name == 'Sukses' ? 'text-green-900' :
                                ($booking->status->name == 'Selesai/LPJ diupload' ? 'text-green-900' :
                                ($booking->status->name == 'Ditolak TU' || $booking->status->name == 'Ditolak Wadek' ? 'text-red-900' :
                                'text-yellow-900'))); ?>">
                                <span aria-hidden="true" class="absolute inset-0 opacity-50 rounded-full <?php echo e($booking->status->name == 'Sukses' ? 'bg-green-200' :
                                    ($booking->status->name == 'Selesai/LPJ diupload' ? 'bg-green-200' :
                                    ($booking->status->name == 'Ditolak TU' || $booking->status->name == 'Ditolak Wadek' ? 'bg-red-200' :
                                    'bg-yellow-200'))); ?>"></span>
                                <span class="relative"><?php echo e($booking->status->name); ?></span>
                            </span>
                            <?php if($booking->rejection_reason): ?>
                                <p class="text-red-600 text-xs mt-1">Alasan: <?php echo e($booking->rejection_reason); ?></p>
                            <?php endif; ?>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                            <a href="<?php echo e(route('dashboard.bookings.show', $booking->id)); ?>" class="text-blue-600 hover:text-blue-900">Lihat/Proses</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center text-gray-600">
                            Belum ada peminjaman yang memerlukan persetujuan.
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ruang fasilkom\ruangfasilkom\resources\views/dashboard/admin/bookings/index.blade.php ENDPATH**/ ?>