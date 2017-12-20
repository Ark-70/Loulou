@extends('layout')
@section('content')
<h1>Coucou</h1>
@foreach( $tiles as $tile )
<ul>
  @foreach( $champs as $champ )
    <li>
{{$champ}}
    </li>
  @endforeach
</ul><br/>
@endforeach
@endsection

