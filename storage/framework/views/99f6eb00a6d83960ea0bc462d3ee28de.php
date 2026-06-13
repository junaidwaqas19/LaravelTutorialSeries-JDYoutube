<?php $__env->startSection('title','Add User'); ?>
<?php $__env->startSection('content'); ?>
<form action="<?php echo e(url('/user/store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
        <div>
            <label for="username">Username</label><br>
            <input type="text" id="username" name="username" required>
        </div>

        <br>

        <div>
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" required>
        </div>

        <br>

        <button type="submit">Submit</button>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminLayout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Administrator\Desktop\New folder\laravelTutorial\resources\views/adminPanel/user/addUser.blade.php ENDPATH**/ ?>