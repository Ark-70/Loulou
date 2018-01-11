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


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">
Ajouter
</button>
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title">Ajouter une tuile</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">iCloseFont</button>
        </div>

        <div class="modal-body">

          <div class="form-group">
            <label for="exampleInputEmail1">Titre</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer titre">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <textarea type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Écrire description"></textarea>
          </div>

            <div class="custom-file col-1">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>

        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
        <button type="button" class="btn btn-primary  " data-dismiss="modal">Ajouter</button>
      </div>
    </form>
  </div>
</div>
@endsection
