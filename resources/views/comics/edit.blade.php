@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Modifica: {{ $comic->name}} </h2>
    <form>
        
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci il nome del fumetto" value="{{ $comic->name}}">
        </div>
        <div class="form-group">
            <label for="description">Descrizione:</label>
            <textarea class="form-control" id="description" name="description" placeholder="Inserisci la descrizione del fumetto"  value="{{ $comic->description}}"></textarea>
        </div>
        <div class="form-group">
            <label for="type">Tipo:</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo di fumetto" value="{{ $comic->type}}" >
        </div>
        <div class="form-group">
            <label for="price">Prezzo:</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo del fumetto" value="{{ $comic->price}}">
        </div>
        <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>
</div>
@endsection