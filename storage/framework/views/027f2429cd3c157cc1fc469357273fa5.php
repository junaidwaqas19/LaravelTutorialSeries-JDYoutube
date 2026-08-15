<?php $__env->startSection('title','User List'); ?>
<?php $__env->startSection('content'); ?>

<div class="bg-white rounded shadow">
         <?php if(@session('success')): ?>
            <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-2 text-center">
                <?php echo e(session('success')); ?>

            </div>
         <?php endif; ?>
    <div class="flex justify-between p-4 border-b">
        <h2 class="font-bold">User List</h2>

        <a href="<?php echo e(route('user-add')); ?>" class="px-3 py-2 text-white bg-blue-600 rounded">
            Add User
        </a>
    </div>
     <table class="w-full">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-3 text-left">ID</th>
                <th class="p-3 text-left">User Name</th>
                <th class="p-3 text-left">Email</th>
                <th class="p-3 text-center">Action</th>
            </tr>
        </thead>

        <tbody>
              <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <tr class="border-t">
                        <td class="p-3"><?php echo e($u->id); ?></td>
                        <td class="p-3"><?php echo e($u->name); ?></td>
                        <td class="p-3"><?php echo e($u->email); ?></td>
                        <td class="p-3 text-center flex justify-center gap-2 ">
                            <a href="<?php echo e(route('user.edit',$u->id)); ?>" class="px-2 py-1 text-white bg-yellow-500 rounded">Edit</a>

                            <form action="<?php echo e(route('user.delete',$u->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="px-2 py-1 text-white bg-red-600 rounded cursor:mouse" >
                                        Delete
                                    </button>
                            </form>
                        </td>
                    </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



        </tbody>
    </table>


 </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminLayout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Administrator\Desktop\New folder\laravelTutorial\resources\views/adminPanel/user/userList.blade.php ENDPATH**/ ?>