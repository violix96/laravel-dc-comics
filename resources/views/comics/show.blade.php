@extends('layouts.app')
@section('page-title')
    Show
@endsection
@section('show')
    <main>

        <div class="container mt-5">

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
                    <p class="card-text">{{ $comic->sale_date }}</p>
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


            <button class="btn btn-primary mt-5 mb-5">
                <a href="{{ route('comics.index') }}" style="color: white; text-decoration: none;">Torna alla Home</a>
            </button>
        </div>
    </main>
@endsection
