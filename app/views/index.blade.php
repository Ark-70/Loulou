@extends( 'layout' )
@section('title')
Accueil
@endsection
@section('content')
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








@endsection

