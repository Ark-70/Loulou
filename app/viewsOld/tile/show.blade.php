@extend('layout')
@section('content')
<h1>Coucou</h1>
<table>
  <thead>
    <tr>
      <td></td>
    </tr>
  </thead>
  <tbody>
    <tr>
@foreach( $tile as $champs )
      <td></td>
@endforeach
    </tr>
  </tbody>
</table>
@endsection

