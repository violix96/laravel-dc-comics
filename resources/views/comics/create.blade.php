@extends('layouts.app')
@section('page-title')
    Form
@endsection
@section('form')
    <main>
        <div class="container py-5">
            <h1 class="form-text">
                Inserisci un nuovo fumetto
            </h1>
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-text" for="exampleFormControlInput1" class="form-label">Nome fumetto</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="mb-3">
                    <label class="form-text" for="exampleFormControlInput1" class="form-label">Descrizione</label>
                    <input type="text" class="form-control" name="description">
                </div>
                <div class="mb-3">
                    <label class="form-text" for="exampleFormControlInput1" class="form-label">Inserisci immagine</label>
                    <input type="text" class="form-control" name="thumb">
                </div>
                <div class="mb-3">
                    <label class="form-text" for="exampleFormControlInput1" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" name="price">
                </div>
                <div class="mb-3">
                    <label class="form-text" for="exampleFormControlInput1" class="form-label">Serie</label>
                    <input type="text" class="form-control" name="series">
                </div>
                <div class="mb-3">
                    <label class="form-text" for="exampleFormControlInput1" class="form-label">Data di vendita</label>
                    <input type="date" class="form-control" name="sale_date">
                </div>
                <div class="mb-3">
                    <label class="form-text" for="exampleFormControlInput1" class="form-label">Genere</label>
                    <input type="text" class="form-control" name="type">
                </div>
                <div class="mb-3">
                    <label class="form-text" for="exampleFormControlInput1" class="form-label">Autori</label>
                    <input type="text" class="form-control" name="artists">
                </div>
                <div class="mb-3">
                    <label class="form-text" for="exampleFormControlInput1" class="form-label">Scrittori</label>
                    <input type="text" class="form-control" name="writers">
                </div>


                <button class="btn btn-primary">Crea fumetto</button>

            </form>
            <div class="my-5">
                <a class="btn btn-primary text-white" href="{{ route('comics.index') }}">Torna alla Home</a>
            </div>
        </div>

    </main>
@endsection
