<!-- Con extends andiamo ad estendere la pagina app.blade.php, modificando alcuni valori di essa -->
@extends('layouts.app')
<!-- Con section andiamo a modificare il 'title' in 'Home' -->
@section('title', 'Games')
<!-- Con section andiamo a modificare il 'content' con una semplice stringa o con un template -->
@section('content')
    <h1>Games</h1>
    <p class="fw-bold">Qui verranno inseriti i 'Games'</p>
<!-- Ricordarsi di inserire l'endsection per chiudere la sessione -->
@endsection