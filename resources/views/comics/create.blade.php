@extends('layouts.app')
@section('page-title')
    Form
@endsection
@section('form')
    <main>
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-e">
                        Inserisci un nuovo fumetto
                    </h1>
                </div>
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="text-e" for="exampleFormControlInput1" class="form-label">Nome
                                    fumetto</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="mb-3">
                                <label class="text-e" for="exampleFormControlInput1" class="form-label">Descrizione</label>
                                <input type="text" class="form-control" name="description">
                            </div>
                            <div class="mb-3">
                                <label class="text-e" for="exampleFormControlInput1" class="form-label">Inserisci
                                    immagine</label>
                                <input type="text" class="form-control" name="thumb">
                            </div>
                            <div class="mb-3">
                                <label class="text-e" for="exampleFormControlInput1" class="form-label">Prezzo</label>
                                <input type="text" class="form-control" name="price">
                            </div>
                            <div class="mb-3">
                                <label class="text-e" for="exampleFormControlInput1" class="form-label">Serie</label>
                                <input type="text" class="form-control" name="series">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="text-e" for="exampleFormControlInput1" class="form-label">Data di
                                    vendita</label>
                                <input type="date" class="form-control" name="sale_date">
                            </div>
                            <div class="mb-3">
                                <label class="text-e" for="exampleFormControlInput1" class="form-label">Genere</label>
                                <input type="text" class="form-control" name="type">
                            </div>
                            <div class="mb-3">
                                <label class="text-e" for="exampleFormControlInput1" class="form-label">Autori</label>
                                <input type="text" class="form-control" name="artists">
                            </div>
                            <div class="mb-3">
                                <label class="text-e" for="exampleFormControlInput1" class="form-label">Scrittori</label>
                                <input type="text" class="form-control" name="writers">
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary">Crea fumetto</button>
                    <div class="my-5">
                        <a class="btn btn-primary text-white" href="{{ route('comics.index') }}">Torna alla Home</a>
                    </div>
                </form>
            </div>


        </div>

    </main>
@endsection
