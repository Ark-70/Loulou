<?php $__env->startSection('title'); ?>
Accueil
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<h1> What a Tuile ! </h1>
<<<<<<< HEAD
=======
<h2>Toute ressemblance avec des personnes existantes ou ayant existées serait purement fortuite</h2>
>>>>>>> View_Will


<!-- Menu Burger -->

<div class="wrapper">
  <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="p-4">
<<<<<<< HEAD
        <a href="#"><li> Menu 1 </li></a>
        <a href="#"><li> Menu 2 </li></a>
        <a href="#"><li> Menu 3 </li></a>
        <a href="#"><li> Menu 4 </li></a>
=======
        <?php $__currentLoopData = $tiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="<?php echo e($tile['id']); ?>"><li><?php echo e($tile['title']); ?></li></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
>>>>>>> View_Will
      </div>
    </div>
    <nav class="navbar fixed-left navbar-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent">
      <i class="fa fa-bars"></i>
      </button>
    </nav>
  </div>
</div>



<div class="grille">
    <div class="container">
      <div class="row">
<<<<<<< HEAD
        <div class="tuile col-4">
          <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="0"><img src="http://www.elementsofstyleblog.com/wp-content/uploads/2010/02/600x400-princeville-sunset.jpg" class="img-fluid"></a>
        </div>
      <div class="tuile col-4" >
          <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="1"><img src="http://fumcames.org/wp-content/uploads/2016/06/image-600x400.jpeg" class="img-fluid"></a>
        </div>
        <div class="tuile col-4">
          <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="2"><img src="http://www.cuded.com/wp-content/uploads/2013/06/20-Bunny-Picture.jpg" class="img-fluid"></a>
        </div>
        <div class="tuile col-4">
          <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="3"><img src="https://dummyimage.com/600x400/000/fff" class="img-fluid"></a>
        </div>
        <div class="tuile col-4">
          <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="4"><img src="https://dummyimage.com/600x400/000/fff" class="img-fluid"></a>
        </div>
        <div class="tuile col-4">
          <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="5"><img src="https://dummyimage.com/600x400/000/fff" class="img-fluid"></a>
        </div>
        <div class="tuile col-4">
          <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="6"><img src="https://dummyimage.com/600x400/000/fff" class="img-fluid"></a>
        </div>
        <div class="tuile col-4">
          <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="7"><img src="https://dummyimage.com/600x400/000/fff" class="img-fluid"></a>
        </div>
        <div class="tuile col-4">
          <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="8"><img src="https://dummyimage.com/600x400/000/fff" class="img-fluid"></a>
        </div>
=======
        <?php $__currentLoopData = $tiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="tuile col-4">
          <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="<?php echo e($tile['id']); ?>"><img src="assets/img/<?php echo e($tile['image']); ?>" class="img-fluid img-responsive"></a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
>>>>>>> View_Will
      </div>
    </div>
</div>



<<<<<<< HEAD






<!--begin modal window-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="pull-left">What a Gallery</div>
=======
<!--begin modal window-->
<div class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <div class="pull-left">Les vacances de Zlataille</div>
>>>>>>> View_Will
        <button type="button" class="close" data-dismiss="modal" title="Close"></button>
      </div>
      <div class="modal-body">
        <!--begin carousel-->
        <div id="myGallery" class="carousel slide" data-interval="false">
          <div class="carousel-inner">

<<<<<<< HEAD
            <div class="carousel-item active">
              <img src="http://www.elementsofstyleblog.com/wp-content/uploads/2010/02/600x400-princeville-sunset.jpg" alt="item0">
              <div class="carousel-caption">
              </div>
            </div>

            <div class="carousel-item">
              <img src="http://fumcames.org/wp-content/uploads/2016/06/image-600x400.jpeg" alt="item1">
              <div class="carousel-caption">
              </div>
            </div>

            <div class="carousel-item">
              <img src="http://www.cuded.com/wp-content/uploads/2013/06/20-Bunny-Picture.jpg" alt="item2">
              <div class="carousel-caption">
              </div>
            </div>
=======

            <?php $__currentLoopData = $tiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($tile['id']==0+1): ?>
            <div class="carousel-item <?php echo e($tile['layout']); ?> active">
              <?php else: ?>
            <div class="carousel-item <?php echo e($tile['layout']); ?>">
              <?php endif; ?>

              <img src="assets/img/<?php echo e($tile['image']); ?>" alt="item<?php echo e($tile['id']-1); ?>">
              <p><?php echo e($tile['description']); ?></p>
              <div class="carousel-caption"></div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


>>>>>>> View_Will

            </div>
            <!--end carousel-inner--></div>
            <!--Begin Previous and Next buttons-->
            <a class="left carousel-control" href="#myGallery" role="button" data-slide="prev"> <i class="fa fa-arrow-left" aria-hidden="true"></i></a> <a class="right carousel-control" href="#myGallery" role="button" data-slide="next"> <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            <!--end carousel--></div>
            <!--end modal-body--></div>
              <!--end modal-footer--></div>
              <!--end modal-content--></div>
              <!--end modal-dialoge--></div>


<<<<<<< HEAD



=======
>>>>>>> View_Will
<?php $__env->stopSection(); ?>


<?php echo $__env->make( 'layout' , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>