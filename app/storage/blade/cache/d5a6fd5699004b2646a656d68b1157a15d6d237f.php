<?php $__env->startSection('content'); ?>
<h1>Coucou tu n'es pas log et tu ne peux pas accéder au backoffice</h1>
<form action="<?php echo e(url('/login')); ?>" method="POST">
  <table>
    <tr><td>Login : </td><td><input name="username" type="text"></td></tr>
    <tr><td>Mot de passe : </td><td><input name="password" type="text"></td></tr>
  </table>
  <button class="btn btn-outline-primary">Enregistrer</button>
</form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>