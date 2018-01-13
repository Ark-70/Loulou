@extends( 'backoffice/boindex' )
@section('editcontent')

<!-- ***CACHÉ DANS LE BOUTON ÉDITER *** -->
<div class="modal fade in" id="editer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="{{ url('/bo/tile/editsave') }}" method="POST" enctype="multipart/form-data">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title">Ajouter une tuile</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">iCloseFont</button>
        </div>

        <div class="modal-body">

          <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Entrer titre" value="{{$tileEdit['titre']}}">
          </div>

          <div class="form-group">
            <label for="excerpt">Description</label>
            <textarea class="form-control" id="excerpt" name="excerpt" placeholder="Écrire description" value="{{$tileEdit['description']}}"></textarea>
          </div>

          <div class="form-group">
            <label for="poster">Image de la tuile</label>
            <div class="input-group">
              <input type="file" id="poster" name="poster" class="form-control" aria-describedby="basic-addon2" value="{{$tileEdit['image']}}">
            </div>
          </div>

          <div class="form-group">
            <label for="layout">Gabarit de tuile</label>
            <select class="form-control" id="layout" name="layout" value="{{$tileEdit['layout']}}">
              <option value="1">Image dans son ensemble</option>
              <option value="2">Moitié/moitié : image et texte (image à gauche)</option>
              <option value="3">Moitié/moitié : texte et image (texte à gauche)</option>
              <option value="4">Deux tiers/un tier : image et texte (image à gauche)</option>
              <option value="5">Un tier/deux tiers : texte et image (texte à gauche)</option>
            </select>
          </div>

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
