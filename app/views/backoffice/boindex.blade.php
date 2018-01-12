@extends( 'layout' )
@section('title')
Accueil
@endsection
@section('content')
<h1> Back-office </h1>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tuile">
Voir tuiles
</button>
<div class="modal fade" id="tuile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Liste tuiles</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Titre</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
    </div>
  </div>
</div>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">Ajouter</button>

@yield('warningmessage')


<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="{{ url('/prepTile') }}" method="POST" enctype="multipart/form-data">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title">Ajouter une tuile</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">iCloseFont</button>
        </div>

        <div class="modal-body">

          <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Entrer titre">
          </div>

          <div class="form-group">
            <label for="excerpt">Description</label>
            <textarea class="form-control" id="excerpt" name="excerpt" placeholder="Écrire description"></textarea>
          </div>

          <div class="input-group">
            <input type="file" name="poster" class="form-control" aria-describedby="basic-addon2">
          </div>



<!--
            <div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Browse&hellip; <input type="file" style="display: none;" multiple>
                    </span>
                </label>
                <input type="text" class="form-control" readonly>
            </div>


marche pas
-->


        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </div>
    </form>
  </div>
</div>

@endsection
