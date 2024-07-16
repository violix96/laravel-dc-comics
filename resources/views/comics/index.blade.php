@extends('layouts.app')

@section('page-title')
    Home-page
@endsection

@section('Tutti_i_fumetti')
    <main>
        <img class="jumbo w-100 mb-4" src="{{ Vite::asset('resources/img/jumbo.jpg') }}" alt="Logo">

        <div class="container text-center position-relative">
            <a class="" href="{{ route('comics.create') }}">
                <button class="btn btn-primary btn-lg mb-3 mt-3 top position-absolute">
                    Aggiungi un nuovo fumetto
                </button>
            </a>
        </div>

        <div class="container py-5">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                @foreach ($comics as $comic)
                    <div class="col">
                        <div class="card h-100 text-white bg-dark  position-relative">
                            <a href="{{ route('comics.show', $comic->id) }}" class="text-decoration-none text-white">
                                <div>
                                    <img class="card-img-top" src="{{ $comic->thumb }}" alt="{{ $comic->title }}"
                                        style="height: 320px; object-fit: cover;">
                                </div>
                                <div class="pb-5 bg-card-color">
                                    <h5 class="card-title">{{ $comic->title }}</h5>
                                </div>
                            </a>
                            <div class="card-footer d-flex justify-content-between bottom-card">
                                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary btn-sm">Modifica</a>
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Elimina</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
