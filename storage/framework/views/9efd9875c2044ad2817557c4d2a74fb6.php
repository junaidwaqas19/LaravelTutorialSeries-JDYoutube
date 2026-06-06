<?php $__env->startSection('title','Dashboards'); ?>
<?php $__env->startSection('content'); ?>
<div class="bg-white rounded shadow">

    <div class="flex justify-between p-4 border-b">
        <h2 class="font-bold">Category List</h2>

        <a href="#" class="px-3 py-2 text-white bg-blue-600 rounded">
            Add Category
        </a>
    </div>

    <table class="w-full">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-3 text-left">ID</th>
                <th class="p-3 text-left">Name</th>
                <th class="p-3 text-left">Slug</th>
                <th class="p-3 text-left">Status</th>
                <th class="p-3 text-center">Action</th>
            </tr>
        </thead>

        <tbody>
            <tr class="border-t">
                <td class="p-3">1</td>
                <td class="p-3">Electronics</td>
                <td class="p-3">electronics</td>
                <td class="p-3">Active</td>
                <td class="p-3 text-center">
                    <a href="#" class="px-2 py-1 text-white bg-yellow-500 rounded">Edit</a>
                    <a href="#" class="px-2 py-1 text-white bg-red-600 rounded">Delete</a>
                </td>
            </tr>

            <tr class="border-t">
                <td class="p-3">2</td>
                <td class="p-3">Fashion</td>
                <td class="p-3">fashion</td>
                <td class="p-3">Inactive</td>
                <td class="p-3 text-center">
                    <a href="#" class="px-2 py-1 text-white bg-yellow-500 rounded">Edit</a>
                    <a href="#" class="px-2 py-1 text-white bg-red-600 rounded">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminLayout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Administrator\Desktop\New folder\laravelTutorial\resources\views/adminPanel/postList.blade.php ENDPATH**/ ?>