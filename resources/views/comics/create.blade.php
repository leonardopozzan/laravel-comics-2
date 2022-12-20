@extends('layout.app')

@section('content')
<div class="container">
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title">
            </div>
            <div>
                <label for="description">Descrizione</label>
                <input type="text" name="description" id="description">
            </div>
            <div>
                <label for="thumb">Immagine</label>
                <input type="text" name="thumb" id="thumb">
            </div>
            <div>
                <label for="price">Prezzo</label>
                <input type="text" name="price" id="price">
            </div>
            <div>
                <label for="series">Series</label>
                <input type="text" name="series" id="series">
            </div>
            <div>
                <label for="sale_date">Data di Uscita</label>
                <input type="text" name="sale_date" id="sale_date">
            </div>
            <div>
                <label for="type">Tipo</label>
                <input type="text" name="type" id="type">
            </div>
            <div>
                <label for="artists">Artisti</label>
                <input type="text" name="artists" id="artists">
            </div>
            <div>
                <label for="writers">Scrittori</label>
                <input type="text" name="writers" id="writers">
            </div>
            <input type="submit" value="Invia">
        </form>
</div>
@endsection