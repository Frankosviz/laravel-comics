<!-- Con extends andiamo ad estendere la pagina app.blade.php, modificando alcuni valori di essa -->
@extends('layouts.app')
<!-- Con section andiamo a modificare il 'title' in 'Home' -->
@section('title', 'Tv')
<!-- Con section andiamo a modificare il 'content' con una semplice stringa o con un template -->
@section('content')
    <h1>Tv</h1>
    <p class="fw-bold">Qui verranno inseriti i 'tv'</p>
<!-- Ricordarsi di inserire l'endsection per chiudere la sessione -->
@endsection