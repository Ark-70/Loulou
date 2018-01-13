<?php $__env->startSection('content'); ?>
<h1>Coucou tu n'es pas log et tu ne peux pas accéder au backoffice</h1>
<div class="container">
  <form action="<?php echo e(url('/login')); ?>" method="POST">
    <div class="form-group row">
        <label class="col-2 col-form-label">
          Pseudo :
        </label>
        <div class="col-4">
          <input class="form-control" type="text" size="25" name="username" placeholder="votre pseudo" />
        </div>
      </div>
      <div class="form-group row">
        <label class="col-2 col-form-label">
          Mot de passe :
        </label>
        <div class="col-4">
          <input class="form-control" type="text" size="10" name="password" placeholder="Mot de passe" />
        </div>
      </div>
    <button class="btn btn-outline-primary">Enregistrer</button>
  </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>