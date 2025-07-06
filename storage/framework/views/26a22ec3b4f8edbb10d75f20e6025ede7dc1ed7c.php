

<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-8">
    <a href="<?php echo e(route('user.profile')); ?>" class="text-blue-600 hover:underline mb-6 inline-block">&larr; Kembali ke Profil</a>

    <h1 class="text-3xl font-bold mb-6 text-center">Edit Profil Petualang</h1>

    <div class="bg-white rounded-lg shadow-lg p-8 border border-gray-200">
        <?php if($errors->any()): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <strong class="font-bold">Ada Kesalahan:</strong>
                <ul class="mt-2 list-disc list-inside">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php if(session('success')): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('user.update_profile')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            
            <div class="mb-4 text-center">
                <label class="block text-gray-700 font-bold mb-2">Avatar:</label>
                <img src="<?php echo e($user->avatar ? asset('storage/' . $user->avatar) : asset('images/default_avatar.png')); ?>"
                     alt="Avatar" class="w-24 h-24 rounded-full mx-auto object-cover border-2 border-gray-300 mb-2">
                <input type="file" name="avatar" class="mt-2 text-sm text-gray-600">
                <?php $__errorArgs = ['avatar'];
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
                <label for="name" class="block text-gray-700 font-bold mb-2">Nama:</label>
                <input type="text" name="name" value="<?php echo e(old('name', $user->name)); ?>"
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                <?php $__errorArgs = ['name'];
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
                <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                <input type="email" name="email" value="<?php echo e(old('email', $user->email)); ?>"
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                <?php $__errorArgs = ['email'];
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
                <label for="organization_id" class="block text-gray-700 font-bold mb-2">Organisasi:</label>
                <select name="organization_id" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring">
                    <option value="">Pilih Organisasi (Opsional)</option>
                    <?php $__currentLoopData = $organizations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $org): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($org->id); ?>" <?php echo e(old('organization_id', $user->organization_id) == $org->id ? 'selected' : ''); ?>>
                            <?php echo e($org->name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">Kata Sandi Baru (opsional):</label>
                <input type="password" name="password"
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <?php $__errorArgs = ['password'];
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

            
            <div class="mb-6">
                <label for="password_confirmation" class="block text-gray-700 font-bold mb-2">Konfirmasi Kata Sandi Baru:</label>
                <input type="password" name="password_confirmation"
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring">
            </div>

            <div class="text-right">
                <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700">Perbarui</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ruang fasilkom\ruangfasilkom\resources\views/user/profile/edit.blade.php ENDPATH**/ ?>