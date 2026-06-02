<?php $__env->startSection('title','Home Page'); ?>
<?php $__env->startSection('content'); ?>
 <h1> Welcome in Programming</h1>
 <button onclick="Message()">Click Me</button>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('styles'); ?>
<style>
 h1{
        color:blue;
    }
    button{
        padding:10px;
        background-color:black;
        color:white;
    }

</style>
   
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
      function Message(){
        alert('Welcome in Laravel Tutorial Series')
      }    
    
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.appLayout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Administrator\Desktop\New folder\laravelTutorial\resources\views/welcome.blade.php ENDPATH**/ ?>