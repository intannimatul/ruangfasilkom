

<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-8">
    <a href="<?php echo e(route('home')); ?>" class="inline-block text-blue-600 hover:underline mb-6">&larr; Kembali ke Home</a>

    <h1 class="text-3xl font-bold mb-6 text-center">Profil Petualang Anda</h1>

    <div class="bg-white rounded-lg shadow-lg p-8 border border-gray-200 text-center">

        
        <div class="relative w-48 h-48 mx-auto mb-4">
            
            <?php if($user->avatar): ?>
                <img src="<?php echo e(asset('storage/' . $user->avatar)); ?>" alt="Avatar Pengguna"
                     class="absolute inset-0 w-32 h-32 rounded-full object-cover border-4 border-blue-300 shadow-md z-10"
                     style="top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <?php else: ?>
                <img src="<?php echo e(asset('images/default_avatar.png')); ?>" alt="Avatar Default"
                     class="absolute inset-0 w-32 h-32 rounded-full object-cover border-4 border-gray-300 shadow-md z-10"
                     style="top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <?php endif; ?>

            
            <img src="<?php echo e(asset($user->frame_image)); ?>" alt="Bingkai XP"
                 class="absolute inset-0 w-full h-full object-contain z-20">
        </div>

        <h2 class="text-2xl font-bold text-gray-800 mb-2"><?php echo e($user->name); ?></h2>
        <p class="text-gray-600 mb-1">Email: <?php echo e($user->email); ?></p>
        <p class="text-gray-600 mb-1">Peran: <span class="font-semibold"><?php echo e($user->role->name ?? 'Tidak Diketahui'); ?></span></p>
        <p class="text-gray-600 mb-4">Organisasi: <span class="font-semibold"><?php echo e($user->organization->name ?? 'Solo Player'); ?></span></p>

        <div class="text-center bg-blue-50 p-4 rounded-lg mb-6">
            <p class="text-lg font-semibold text-blue-800">Poin Pengalaman (XP): <?php echo e($user->xp); ?></p>
        </div>

        
        <div class="mt-8">
            <h3 class="text-xl font-bold text-gray-800 mb-4">Anda adalah seorang:</h3>

            <?php
                $xp = $user->xp;
                $badge = null;

                if ($xp >= 6 && $xp <= 30) {
                    $badge = 'Beginner';
                } elseif ($xp >= 31 && $xp <= 74) {
                    $badge = 'Intermediate';
                } elseif ($xp >= 75 && $xp <= 99) {
                    $badge = 'Expert';
                } elseif ($xp >= 100) {
                    $badge = 'Legendary';
                }
            ?>

            <?php if($badge): ?>
                <div class="flex flex-col items-center">
                    <p class="font-semibold text-purple-700 text-lg"><?php echo e($badge); ?></p>
                </div>
            <?php else: ?>
                <p class="text-gray-600">Newbie. Lakukan lebih banyak misi!</p>
            <?php endif; ?>
        </div>

        <div class="mt-8">
            <a href="<?php echo e(route('user.edit_profile')); ?>"
               class="inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
                Edit Profil
            </a>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ruang fasilkom\ruangfasilkom\resources\views/user/profile/show.blade.php ENDPATH**/ ?>