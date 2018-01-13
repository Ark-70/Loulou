<?php $__env->startSection('formedit'); ?>
<script>

</script>
<!-- ***CACHÉ DANS LE BOUTON ÉDITER *** -->
<div class="modal in" id="editer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="<?php echo e(url('/bo/tile/editsave')); ?>" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo e($tileEdit['id']); ?>">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title">Ajouter une tuile</h5>
          <button type="button" class="close edit" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
        </div>

        <div class="modal-body">

          <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Entrer titre" value="<?php echo e($tileEdit['title']); ?>">
          </div>

          <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" placeholder="Écrire description" value="<?php echo e($tileEdit['description']); ?>"></textarea>
          </div>

          <div class="form-group">
            <label for="poster">Image de la tuile</label>
            <div class="input-group">
              <input type="file" id="poster" name="poster" class="form-control" aria-describedby="basic-addon2" value="<?php echo e($tileEdit['image']); ?>">
            </div>
          </div>

          <div class="form-group">
            <label for="layout">Gabarit de tuile</label>
            <select class="form-control" id="layout" name="layout">
              <option value="full" selected>Image dans son ensemble</option>
              <option value="half">Moitié/moitié : image et texte (image à gauche)</option>
              <option value="half txtfirst">Moitié/moitié : texte et image (texte à gauche)</option>
              <option value="tier">Deux tiers/un tier : image et texte (image à gauche)</option>
              <option value="tier txtfirst">Un tier/deux tiers : texte et image (texte à gauche)</option>
            </select>
          </div>

        </div>
      </div>

      <div class="modal-footer">
        <button type="button" id="retouredit" class="close edit btn btn-secondary" data-dismiss="modal">Retour</button>
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </div>
    </form>
  </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make( 'backoffice/boindex' , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>