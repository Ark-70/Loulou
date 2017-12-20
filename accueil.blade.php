@extends( 'layout' )
@section('title')
Accueil
@endsection
@section('content')
<h1> What a Tuile ! </h1>
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


<button type="button" class="btn btn-primary" id="admin" data-toggle="modal" data-target="#exampleModal">
  Se connecter
</button>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

@endsection