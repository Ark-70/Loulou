@extends('layout')
@section('content')
<h1>Coucou tu n'es pas log et tu ne peux pas accéder au backoffice</h1>
<form action="{{ url('/login') }}" method="POST">
  <table>
    <tr><td>Login : </td><td><input name="username" type="text"></td></tr>
    <tr><td>Mot de passe : </td><td><input name="password" type="text"></td></tr>
  </table>
  <button class="btn btn-outline-primary">Enregistrer</button>
</form>
@endsection

