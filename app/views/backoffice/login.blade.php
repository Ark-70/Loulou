@extends('layout')
@section('content')
<h1>Coucou tu n'es pas log et tu ne peux pas accéder au backoffice</h1>
<div class="container">
  <form action="{{ url('/login') }}" method="POST">
    <div class="form-group row">
        <label class="col-2 col-form-label">
          Pseudo :
        </label>
        <div class="col-4">
          <input class="form-control" type="text" size="25" name="username" placeholder="votre pseudo" />
        </div>
      </div>
      <div class="form-group row">
        <label class="col-2 col-form-label">
          Mot de passe :
        </label>
        <div class="col-4">
          <input class="form-control" type="text" size="10" name="password" placeholder="Mot de passe" />
        </div>
      </div>
    <button class="btn btn-outline-primary">Enregistrer</button>
  </form>
</div>
@endsection
