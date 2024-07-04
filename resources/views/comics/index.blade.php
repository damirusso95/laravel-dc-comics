@extends('layouts.app')

@section('content')

<h2>Lista fumetti:</h2>
@foreach ($list as $fumetto)
<p> <a href=" {{route("comics.show", $fumetto->id) }}">{{ $fumetto->name}} </a></p>
    
@endforeach
@endsection