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
        <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="0"><li> GrimpyCat </li></a>
        <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="1"><li> ZlataillePain </li></a>
        <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="2"><li> ZlataillePlage </li></a>
        <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="3"><li> ZlataillePlongée </li></a>
        <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="4"><li> ZlatailleCiné </li></a>
        <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="5"><li> ZlataillePolice </li></a>
        <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="6"><li> ZlatailleRPG </li></a>
        <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="7"><li> ZlatailleCarnaval </li></a>
        <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="8"><li> ZlatailleOtage </li></a>

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

        <div class="tuile col-12" >
          <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="0"><img  src="assets/img/Cat.jpg" class="img-fluid img-responsive"></a>
        </div>

        <div class="tuile col-4">
          <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="1"><img src="assets/img/ZlataillePain.jpg" class="img-fluid img-responsive"></a>
        </div>
        <div class="tuile col-4">
          <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="2"><img src="assets/img/ZlataillePlage.jpg" class="img-fluid img-responsive"></a>
        </div>
        <div class="tuile col-4">
          <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="3"><img src="assets/img/ZlataillePlonge.jpg" class="img-fluid img-responsive"></a>
        </div>
        <div class="tuile col-4">
          <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="4"><img src="assets/img/ZlatailleCine.jpg" class="img-fluid img-responsive"></a>
        </div>
        <div class="tuile col-4">
          <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="5"><img src="assets/img/ZlataillePolice.jpg" class="img-fluid img-responsive"></a>
        </div>
        <div class="tuile col-4">
          <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="6"><img src="assets/img/ZlatailleRPG.jpg" class="img-fluid img-responsive"></a>
        </div>
        <div class="tuile col-4">
          <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="7"><img src="assets/img/ZlatailleCarnaval.jpg" class="img-fluid img-responsive"></a>
        </div>
        <div class="tuile col-4">
          <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="8"><img src="assets/img/ZlatailleOtage.jpg" class="img-fluid img-responsive"></a>
        </div>
      </div>
    </div>
</div>









<!--begin modal window-->
<div class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <div class="pull-left">Les vacances de Zlataille</div>
        <button type="button" class="close" data-dismiss="modal" title="Close"></button>
      </div>
      <div class="modal-body">
        <!--begin carousel-->
        <div id="myGallery" class="carousel slide" data-interval="false">
          <div class="carousel-inner">



            <div class="carousel-item active">
              <img class="full" src="assets/img/Cat.jpg" alt="item0">
              <div class="carousel-caption">
              </div>
            </div>

            <div class="carousel-item">
              <img class="half order-2" src="assets/img/ZlataillePain.jpg" alt="item1">
              <div class="halfTexte order-1"><p>Zlataille va chercher son pain</p></div>
              <div class="carousel-caption">
                <p>  </p>
              </div>
            </div>

            <div  class="carousel-item">
              <img class="half order-1" src="assets/img/ZlataillePlage.jpg" alt="item2">
              <div class="halfTexte"><p>Zlataille va à la plage</p></div>
            </div>

            <div  class="carousel-item">
              <img class="tier order-1" src="assets/img/ZlataillePlonge.jpg" alt="item3">
              <div class="tierTexte" ><p> Zlataille va faire de la plongée </p></div>
              <div class="carousel-caption">

              </div>
            </div>

            <div  class="carousel-item">
              <img class="tier order-2" src="assets/img/ZlatailleCine.jpg" alt="item4">
              <div class="tierTexte" ><p> Zlataille va regarder un bon film au cinéma </p></div>
              <div class="carousel-caption">

              </div>
            </div>

            <div  class="carousel-item">
              <img class="full" src="assets/img/ZlataillePolice.jpg" alt="item5">
              <div class="carousel-caption">
                <p> Zlataille joue aux policiers avec son fils </p>
              </div>
            </div>

            <div  class="carousel-item">
              <img class="full" src="assets/img/ZlatailleRPG.jpg" alt="item6">
              <div class="carousel-caption">
                <p> Zlataille se rend au Comic Con avec son cosplay </p>
              </div>
            </div>

            <div  class="carousel-item">
              <img class="full" src="assets/img/ZlatailleCarnaval.jpg" alt="item7">
              <div class="carousel-caption">
                <p> Zlataille participe au carnaval de Rio </p>
              </div>
            </div>

            <div  class="carousel-item">
              <img class="full" src="assets/img/ZlatailleOtage.jpg" alt="item8">
              <div class="carousel-caption">
                <p> Zlataille est pris en otage alors qu'il était au cirque</p>
              </div>
            </div>


            </div>
            <!--end carousel-inner--></div>
            <!--Begin Previous and Next buttons-->
            <a class="left carousel-control" href="#myGallery" role="button" data-slide="prev"> <i class="fa fa-arrow-left" aria-hidden="true"></i></a> <a class="right carousel-control" href="#myGallery" role="button" data-slide="next"> <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            <!--end carousel--></div>
            <!--end modal-body--></div>
              <!--end modal-footer--></div>
              <!--end modal-content--></div>
              <!--end modal-dialoge--></div>





<?php $__env->stopSection(); ?>


<?php echo $__env->make( 'layout' , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>