@extends('layouts.app')
@section('page-title')
    Home-page
@endsection

@section('Tutti_i_fumetti')
    <main>
        <img class="jumbo" src="{{ Vite::asset('resources/img/jumbo.jpg') }}" alt="Logo">

        <div class="container d-flex justify-content-center">
            <a class="mt-3 mb-3" href="{{ route('comics.create') }}"><button class="btn btn-primary">
                    Aggiungi un nuovo fumetto
                </button></a>
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-4">
                @foreach ($comics as $comic)
                    <div class="col mb-4">
                        <div class="card bg-dark text-white h-100">
                            <a href="{{ route('comics.show', $comic->id) }}">
                                <img class="card-img" src="{{ $comic->thumb }}" alt="{{ $comic->title }}"
                                    style="max-height: 300px; object-fit: cover;">
                                {{-- <div class="card-img-overlay d-flex flex-column justify-content-end">
                                </div> --}}
                                <h5 class="card-title">{{ $comic->title }}</h5>
                            </a>
                            <a href="{{ route('comics.edit', $comic->id) }}">
                                <button class="btn btn-primary">
                                    Modifica
                                </button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>



    </main>
@endsection
