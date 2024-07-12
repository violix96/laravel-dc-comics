@extends('layouts.app')
@section('page-title')
    Home-page
@endsection

@section('Tutti_i_fumetti')
    <h1>Tutti i fumetti</h1>
    <a href="{{ route('comics.create') }}">Crea un nuovo fumetto</a>
    <ul>
        @foreach ($comics as $comic)
            <li><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></li>
        @endforeach
    </ul>
@endsection
