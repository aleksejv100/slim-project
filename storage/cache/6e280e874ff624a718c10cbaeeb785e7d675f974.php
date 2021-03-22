

<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <h3>Test page</h3>
        <p><?php echo e($content); ?></p>
        <small>Your ID: <?php echo e($id); ?></small>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\slim-project\resources\views/pages/test.blade.php ENDPATH**/ ?>