@extends( 'layout' )
@section('title')
Accueil
@endsection
@section('content')
<h1> What a Tuile ! </h1>
<h2>Toute ressemblance avec des personnes existantes ou ayant existées serait purement fortuite</h2>


<!-- Menu Burger -->

<div class="wrapper">
  <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="p-4">
        @foreach($tiles as $tile)
        <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="{{$tile['id']}}"><li>{{$tile['title']}}</li></a>
        @endforeach
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
        @foreach($tiles as $tile)
        <div class="tuile col-4">
<<<<<<< HEAD
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
=======
          <a data-toggle="modal" data-target="#myModal" href="#myGallery" data-slide-to="{{$tile['id']}}"><img src="assets/img/{{$tile['image']}}" class="img-fluid img-responsive"></a>
>>>>>>> View_Will
        </div>
        @endforeach
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


            @foreach($tiles as $tile)
              @if($tile['id']==0+1)
            <div class="carousel-item {{$tile['layout']}} active">
              @else
            <div class="carousel-item {{$tile['layout']}}">
              @endif

              <img src="assets/img/{{$tile['image']}}" alt="item{{$tile['id']-1}}">
              <p>{{$tile['description']}}</p>
              <div class="carousel-caption"></div>
            </div>
            @endforeach



            </div>
            <!--end carousel-inner--></div>
            <!--Begin Previous and Next buttons-->
            <a class="left carousel-control" href="#myGallery" role="button" data-slide="prev"> <i class="fa fa-arrow-left" aria-hidden="true"></i></a> <a class="right carousel-control" href="#myGallery" role="button" data-slide="next"> <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            <!--end carousel--></div>
            <!--end modal-body--></div>
              <!--end modal-footer--></div>
              <!--end modal-content--></div>
              <!--end modal-dialoge--></div>



<!--begin modal window-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="pull-left">What a Gallery</div>
        <button type="button" class="close" data-dismiss="modal" title="Close"></button>
      </div>
      <div class="modal-body">
        <!--begin carousel-->
        <div id="myGallery" class="carousel slide" data-interval="false">
          <div class="carousel-inner">

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

            </div>
            <!--end carousel-inner--></div>
            <!--Begin Previous and Next buttons-->
            <a class="left carousel-control" href="#myGallery" role="button" data-slide="prev"> <i class="fa fa-arrow-left" aria-hidden="true"></i></a> <a class="right carousel-control" href="#myGallery" role="button" data-slide="next"> <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            <!--end carousel--></div>
            <!--end modal-body--></div>
              <!--end modal-footer--></div>
              <!--end modal-content--></div>
              <!--end modal-dialoge--></div>





@endsection

