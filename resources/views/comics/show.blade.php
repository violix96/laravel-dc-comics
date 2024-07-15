@extends('layouts.app')
@section('page-title')
    Show
@endsection
@section('show')
    <main>

        <div class="container mt-5">

            <h1 class="title-show">Titolo: {{ $comic->title }}</h1>

            <div class="text-center">
                <img class="card-img-bottom" src="{{ $comic->thumb }}" alt="Card image cap"
                    style="width: 20%; height: auto; object-fit: cover;">
            </div>


            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">{{ $comic->description }}</p>
                    <p class="card-text">Prezzo: {{ $comic->price }}</p>
                    <p class="card-text">{{ $comic->series }}</p>
                    <p class="card-text">Data di uscita: {{ $comic->sale_date }}</p>
                    <p class="card-text">Tipo: {{ $comic->type }}</p>
                    <strong>Artists:</strong>
                    @foreach (json_decode($comic->artists) as $artist)
                        <span>{{ $artist }}</span>
                    @endforeach
                    <strong>Writers:</strong>
                    @foreach (json_decode($comic->writers) as $writer)
                        <span>{{ $writer }}</span>
                    @endforeach
                </div>
            </div>

            <a href="{{ route('comics.index') }}" style="color: white; text-decoration: none;">
                <button class="btn btn-primary mt-5 mb-5">Torna alla Home</button>
            </a>

            <a href="{{ route('comics.edit', $comic->id) }}">
                <button class="btn btn-primary">Modifica fumetto</button>
            </a>

        </div>
    </main>
@endsection
