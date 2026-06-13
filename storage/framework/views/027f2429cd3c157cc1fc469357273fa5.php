<?php $__env->startSection('title','User List'); ?>
<?php $__env->startSection('content'); ?>

<div class="bg-white rounded shadow">

    <div class="flex justify-between p-4 border-b">
        <h2 class="font-bold">User List</h2>

        <a href="<?php echo e(url('/user/add')); ?>" class="px-3 py-2 text-white bg-blue-600 rounded">
            Add User
        </a>
    </div>
     <div>
         <li><?php echo e(session('username')); ?></li>
         <li><?php echo e(session('email')); ?></li>
     </div>


 </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminLayout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Administrator\Desktop\New folder\laravelTutorial\resources\views/adminPanel/user/userList.blade.php ENDPATH**/ ?>