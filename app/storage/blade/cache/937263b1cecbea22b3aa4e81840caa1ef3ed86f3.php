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


<div class="grille">
    <div class="container">
      <div class="row">
        <div class="tuile col-4">
          <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid">
        </div>
      <div class="tuile col-4" >
          <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid">
        </div>
        <div class="tuile col-4">
          <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid">
        </div>
        <div class="tuile col-4">
          <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid">
        </div>
        <div class="tuile col-4">
          <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid">
        </div>
        <div class="tuile col-4">
          <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid">
        </div>
        <div class="tuile col-4">
          <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid">
        </div>
        <div class="tuile col-4">
          <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid">
        </div>
        <div class="tuile col-4">
          <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid">
        </div>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make( 'layout' , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>