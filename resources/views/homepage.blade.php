<!-- Con extends andiamo ad estendere la pagina app.blade.php, modificando alcuni valori di essa -->
@extends('layouts.app')
<!-- Con section andiamo a modificare il 'title' in 'Home' -->
@section('title', 'Home')
<!-- Con section andiamo a modificare il 'content' con una semplice stringa o con un template -->
@section('content')
<div class="bg-black">
    <div class="container bg-black">
        <button class="fd-current-series-btn">CURRENT SERIES</button>
    </div>
    <div class="container d-flex flex-wrap gap-5 bg-blackFD">
        @foreach ($products as $comics)
            <img src="{{ $comics['thumb']}}" class="card-img-top imgComics" alt="imgComic">
            <div class="card-body">
                <h5 class="card-title"></h5>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center pt-5 pb-5">
        <button class="fd-button">
            LOAD MORE
        </button>
    </div>
</div>

<!-- Ricordarsi di inserire l'endsection per chiudere la sessione -->
@endsection