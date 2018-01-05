<?php $__env->startSection('content'); ?>
<h1>Coucou</h1>
<?php $__currentLoopData = $tiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul>
  <?php $__currentLoopData = $champs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $champ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
<?php echo e($champ); ?>

    </li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><br/>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>