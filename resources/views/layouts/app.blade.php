<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>@yield('page-title')</title>
</head>

<body>
    @include('comics.shared.header')
    @yield('Tutti_i_fumetti')
    @yield('form')
    @yield('show')
    @include('comics.shared.footer')
</body>

</html>
