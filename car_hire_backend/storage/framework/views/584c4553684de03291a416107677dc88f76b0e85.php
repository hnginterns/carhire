<?php $__env->startSection('meta-links'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/index.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
 <?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <?php $__env->stopSection(); ?>

 <?php $__env->startSection('footer'); ?>
 <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>