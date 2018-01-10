<?php $__env->startSection('title'); ?>
Accueil
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<h1> What a Tuile ! </h1>


<!-- Menu Burger -->

<div class="wrapper">
  <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="p-4">
        <a href="#"><li> Menu 1 </li></a>
        <a href="#"><li> Menu 2 </li></a>
        <a href="#"><li> Menu 3 </li></a>
        <a href="#"><li> Menu 4 </li></a>
      </div>
    </div>
    <nav class="navbar fixed-left navbar-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent">
      <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
  </div>
</div>


<!-- Bouton Se connecter -->

<button type="button" class="btn btn-primary" id="admin" data-toggle="modal" data-target="#connexion">
Se connecter
</button>

<!-- Mise en place du "Pop-Up" -->
<div class="modal fade" id="connexion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Connexion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <form method="get">
          <div class="form-group row">
            <label class="col-form-label">
              Pseudo :
            </label>
            <div>
              <input class="form-control" type="text" size="30" name="pseudo" placeholder="Pseudo" />
            </div>
          </div>
          <div class="form-group row">
            <label class="col-form-label">
              Mot de passe :
            </label>
            <div>
              <input class="form-control" type="text" size="30" name="password" placeholder="Mot de passe" />
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
        <button type="button" class="btn btn-primary">Connexion</button>
      </div>
    </div>
  </div>
</div>


<div class="grille">
    <div class="container">
      <div class="row">
        <div class="tuile" id="1">
          <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid">
        </div>
        <div class="tuile">
          <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid">
        </div>
        <div class="tuile">
          <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid">
        </div>
        <div class="tuile">
          <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid">
        </div>
        <div class="tuile">
          <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid">
        </div>
        <div class="tuile">
          <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid">
        </div>
        <div class="tuile">
          <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid">
        </div>
        <div class="tuile">
          <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid">
        </div>
        <div class="tuile">
          <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid">
        </div>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make( 'layout' , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>