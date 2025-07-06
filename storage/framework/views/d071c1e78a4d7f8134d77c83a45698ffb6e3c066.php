

<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('rooms.show', $room->id)); ?>" class="inline-block text-blue-600 hover:underline mb-6">&larr; Kembali ke Detail Ruangan</a>

    <h1 class="text-3xl font-bold mb-6 text-center">Form Peminjaman Ruangan: <?php echo e($room->name); ?></h1>

    <div class="bg-white rounded-lg shadow-lg p-8 border border-gray-200">
        <?php if($errors->any()): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">Ada Kesalahan!</strong>
                <ul class="mt-2 list-disc list-inside">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('room_bookings.store', $room->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="mb-4">
                <label for="room_name" class="block text-gray-700 text-sm font-bold mb-2">Ruangan yang Dipinjam:</label>
                <input type="text" id="room_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 bg-gray-100 leading-tight focus:outline-none focus:shadow-outline" value="<?php echo e($room->name); ?>" readonly disabled>
            </div>

            <div class="mb-4">
                <label for="start_time" class="block text-gray-700 text-sm font-bold mb-2">Waktu Mulai:</label>
                <input type="datetime-local" id="start_time" name="start_time" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline <?php $__errorArgs = ['start_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('start_time')); ?>" required>
                <?php $__errorArgs = ['start_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs italic"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-4">
                <label for="end_time" class="block text-gray-700 text-sm font-bold mb-2">Waktu Selesai:</label>
                <input type="datetime-local" id="end_time" name="end_time" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline <?php $__errorArgs = ['end_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('end_time')); ?>" required>
                <?php $__errorArgs = ['end_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs italic"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-4">
                <label for="purpose" class="block text-gray-700 text-sm font-bold mb-2">Tujuan Peminjaman:</label>
                <textarea id="purpose" name="purpose" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline <?php $__errorArgs = ['purpose'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required><?php echo e(old('purpose')); ?></textarea>
                <?php $__errorArgs = ['purpose'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs italic"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <?php if($isStudent): ?>
                <div class="mb-6 bg-yellow-50 border-l-4 border-yellow-500 text-yellow-700 p-4" role="alert">
                    <p class="font-bold">Perhatian Mahasiswa:</p>
                    <p>Anda wajib mengunggah surat keterangan kegiatan. Ukuran maksimal 2MB, format PDF, DOC, atau DOCX.</p>
                </div>
                <div class="mb-4">
                    <label for="student_letter" class="block text-gray-700 text-sm font-bold mb-2">Unggah Surat Keterangan Kegiatan:</label>
                    <input type="file" id="student_letter" name="student_letter" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline <?php $__errorArgs = ['student_letter'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                    <?php $__errorArgs = ['student_letter'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-red-500 text-xs italic"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            <?php endif; ?>

            <div class="flex items-center justify-end mt-6">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Ajukan Peminjaman
                </button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ruang fasilkom\ruangfasilkom\resources\views/user/bookings/create.blade.php ENDPATH**/ ?>