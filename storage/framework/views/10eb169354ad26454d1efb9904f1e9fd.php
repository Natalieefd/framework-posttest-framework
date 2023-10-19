<?php $__env->startSection('title'); ?>
Dashboard - Admin
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('components.navigationAdmin', ['nama' => 'Natalie Fuad', 'gambar' => 'assets/images/gray won.jpg'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components.admin_staff', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components.admin_cafe_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components.operationHours', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.global', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\GITHUB\framework-posttest-framework\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>