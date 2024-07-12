<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crea un nuovo Fumetto</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container py-5">
        <h1>
            Inserisci un nuovo fumetto
        </h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome fumetto</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Descrizione</label>
                <input type="text" class="form-control" name="description">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Inserisci immagine</label>
                <input type="text" class="form-control" name="thumb">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Data di vendita</label>
                <input type="date" class="form-control" name="sale_date">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Genere</label>
                <input type="text" class="form-control" name="type">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Autori</label>
                <input type="text" class="form-control" name="artists">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Scrittori</label>
                <input type="text" class="form-control" name="writers">
            </div>


            <button class="btn btn-primary">Crea fumetto</button>
        </form>
    </div>




</body>

</html>
