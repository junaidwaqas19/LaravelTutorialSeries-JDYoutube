<?php $__env->startSection('title', isset($user)?'Edit User':'Add User'); ?>
<?php $__env->startSection('content'); ?>
<div class="bg-white max-w-md rounded-lg shadow p-6">
    <h2 class="text-xl font-bold mb-6"><?php echo e(isset($user)?'Edit User':'Add User'); ?></h2>
<form action="<?php echo e(isset($user)?route('user.update',$user->user_id):route('user.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php if(isset($user)): ?>
        <?php echo method_field('PUT'); ?>
    <?php endif; ?>
        <div>
            <label for="username">Username</label><br>
            <input type="text" id="username" name="username" class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-blue-500"
              value=<?php echo e(isset($user)?$user->user_name:''); ?> >
            <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-red-500 text-sm mt-1 block">
                    <?php echo e($message); ?>

                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <br>

        <div>
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-blue-500"
              value=<?php echo e(isset($user)?$user->user_email:''); ?>>
                 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-red-500 text-sm mt-1 block">
                        <?php echo e($message); ?>

                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>


        <br>

        <button type="submit"  class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700"><?php echo e(isset($user)?'Update':'Submit'); ?></button>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminLayout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Administrator\Desktop\New folder\laravelTutorial\resources\views/adminPanel/user/addUser.blade.php ENDPATH**/ ?>