

<?php $__env->startSection('content'); ?>
<div class="main-content">
    <h3>Home page</h3>
    <p><?php echo e($content); ?></p>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\slim-project\resources\views/pages/home.blade.php ENDPATH**/ ?>