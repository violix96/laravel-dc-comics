<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')

</head>

<body>

    <h1>Tutti i fumetti</h1>
    <a href="{{ route('comics.create') }}">Crea un nuovo fumetto</a>
    <ul>
        @foreach ($comics as $comic)
            <li><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></li>
        @endforeach
    </ul>

</body>

</html>
