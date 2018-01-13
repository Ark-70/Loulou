<?php $__env->startSection('warningmessage'); ?>
<h3 style="color:white"><?php echo e($msg); ?></h3>
<?php $__env->stopSection(); ?>

<?php echo $__env->make( 'backoffice/boindex' , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>