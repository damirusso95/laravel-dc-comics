@extends('layouts.app')

@section('content')

<h2>{{ $comic->name}}</h2>
<h3>Genere: {{$comic->type}}</h3>
<h3>Prezzo: {{$comic->price}}</h3>

@endsection