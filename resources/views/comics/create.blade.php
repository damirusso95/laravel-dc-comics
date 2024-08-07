@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Aggiungi un nuovo fumetto</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci il nome del fumetto" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="description">Descrizione:</label>
            <textarea class="form-control" id="description" name="description" placeholder="Inserisci la descrizione del fumetto">{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="type">Tipo:</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo di fumetto" value="{{ old('type') }}">
        </div>
        <div class="form-group">
            <label for="price">Prezzo:</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo del fumetto" value="{{ old('price') }}">
        </div>
        <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>
</div>
@endsection
