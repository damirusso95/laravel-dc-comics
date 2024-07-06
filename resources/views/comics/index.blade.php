@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mt-4 mb-4">Lista Fumetti</h2>
    <ul class="list-group">
        @foreach ($list as $fumetto)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('comics.show', $fumetto->id) }}" class="fumetto-link">{{ $fumetto->name }}</a>
                <a href="{{ route('comics.edit', $fumetto->id) }}" class="btn btn-primary btn-sm">Modifica Fumetto</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
