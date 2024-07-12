@extends('layouts.app')
@section('page-title')
    Show
@endsection
@section('show')
    <h1>{{ $comic->title }}</h1>
    <p>{{ $comic->description }}</p>
    <a href="{{ route('comics.index') }}">Torna alla Home</a>
@endsection
