<?php $__env->startSection('title'); ?>
Accueil
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<h1> Back-office </h1>

<?php echo $__env->yieldContent('warningmessage'); ?>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tuile">
Voir tuiles
</button>

<!-- ***CACHÉ DANS LE BOUTON VOIR TUILES*** -->
      <div class="modal fade" id="tuile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog botable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Liste tuiles</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
            </div>
            <div class="modal-body">
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Layout</th>
                    <th>Supprimer</th>
                    <th>Éditer</th>
                  </tr>
                </thead>
                <tbody>
                <?php

                // Oui j'écris en dur sans faire de boucle sur les champs CAR :
                // Un problème inexplicable est survenu : lorsque je récupérais un tuple de la bdd avec Tile->getAll(), il me renvoit un tableau avec tous les champs en doublons : un exemplaire avec la clef (d'un tableau associatif) et l'autre avec un numéro d'index
                //(je précise qu'il n'y a rien d'anormal dans ma bdd sur PhpMyAdmin pourtant. C'est à n'y rien comprendre)
                //Si vous avez une idée je suis preneur !

                // testez ici vvvvvvvvvvvvvvvvvvvvv
                // dump($tiles)

                foreach ($tiles as $tile) {
                  ?>
                  <tr>
                      <td><?php echo $tile['id'] ?></td>
                      <td><?php echo $tile['title'] ?></td>
                      <td><?php echo $tile['description'] ?></td>
                      <td><?php echo $tile['layout'] ?></td>
                    <form action="<?php echo e(url('/tile/delete')); ?>" method="POST">
                      <input type="text" name="id" value="<?php echo $tile['id'] ?>" hidden>
                      <td><button class="btn btn-secondary" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
                    </form>

                    <form action="<?php echo e(url('/bo/tile/edit')); ?>" method="POST">
                    <input type="text" name="id" value="<?php echo $tile['id'] ?>" hidden>
                    <td><button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
                    </form>
                  </tr>

                  <?php
                }
                 ?>

                </tbody>
              </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
          </div>
        </div>
      </div>
<!-- *** *** -->

<?php echo $__env->yieldContent('formedit'); ?>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">Ajouter</button>



<!-- ***CACHÉ DANS LE BOUTON AJOUTER *** -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="<?php echo e(url('/bo/tile/add')); ?>" method="POST" enctype="multipart/form-data">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title">Ajouter une tuile</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-bars"></i></button>
        </div>

        <div class="modal-body">

          <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Entrer titre">
          </div>

          <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" placeholder="Écrire description"></textarea>
          </div>

          <div class="form-group">
            <label for="poster">Image de la tuile</label>
            <div class="input-group">
              <input type="file" id="poster" name="poster" class="form-control" aria-describedby="basic-addon2">
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </div>
    </form>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make( 'layout' , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>