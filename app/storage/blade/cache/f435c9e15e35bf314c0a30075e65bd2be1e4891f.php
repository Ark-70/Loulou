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
      <i class="fa fa-bars"></i>
      </button>
    </nav>
  </div>
</div>



<div class="grille">
    <div class="container">
      <div class="row">
        <div class="tuile col-4">
          <a href="#" data-toggle="modal" data-target="#myModal"><img src="http://www.elementsofstyleblog.com/wp-content/uploads/2010/02/600x400-princeville-sunset.jpg" class="img-fluid"></a>>
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




<div class="container text-center">

<h1> Click Me </h1>
<!-- Large modal -->
<button class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">



  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
     <img class="img-responsive" src="http://placehold.it/1200x600/555/000&text=One" alt="...">
      <div class="carousel-caption">
        One Image
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="http://placehold.it/1200x600/fffccc/000&text=Two" alt="...">
      <div class="carousel-caption">
        Another Image
      </div>
    </div>
     <div class="item">
      <img class="img-responsive" src="http://placehold.it/1200x600/fcf00c/000&text=Three" alt="...">
      <div class="carousel-caption">
        Another Image
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
    </div>
  </div>
</div>
</div>



<?php $__env->stopSection(); ?>


<?php echo $__env->make( 'layout' , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>