@extends('layout.app')

@section('content')
<div class="container">
    <form action="{{ route('comics.store') }}" method="POST" class="my-form">
        @csrf
        <h1 class="text-center fs-1">Aggiungi il tuo Comic</h1>
            <div>
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title">
            </div>
            <div>
                <label for="price">Prezzo $</label>
                <input type="text" name="price" id="price" placeholder="25.99">
            </div>
            <div>
                <label for="series">Series</label>
                <input type="text" name="series" id="series">
            </div>
            <div>
                <label for="sale_date">Data di Uscita</label>
                <input type="text" name="sale_date" id="sale_date" placeholder="yyyy-mm-gg">
            </div>
            <div>
                <label for="type">Tipo</label>
                <input type="text" name="type" id="type" placeholder="es. comic book">
            </div>
            <div>
                <label for="artists">Artisti</label>
                <input type="text" name="artists" id="artists" placeholder="Artista1, Artista2,...">
            </div>
            <div>
                <label for="writers">Scrittori</label>
                <input type="text" name="writers" id="writers" placeholder="Scrittore1, Scrittore2,...">
            </div>
            <div>
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" rows="4"></textarea>
            </div>
            <button type="submit" class="my-btn">Invia</button>
        </form>
</div>
@endsection