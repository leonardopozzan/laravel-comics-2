@extends('layout.app')
<?php 
$linksImage = config('comicsdb.linksImage');
?>
@section('content')

<main>
    <div class="inner-main">
        <div class="my-container position-relative">
            <div class="title-section">
                current series
            </div>
            <div class="link-section">
                <a href="{{route('comics.create')}}">Aggiungi il tuo comic</a>
            </div>
            <div class="cards">
                @foreach ($comics as $key => $comic)
                
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <a href="{{route('comics.show', ['comic'=> $comic->id])}}">
                                <div class="img-box"><img src="{{$comic['thumb']}}" alt=""></div>
                            </a>
                            <span class="title">{{$comic['series']}}</span>
                        </div>
                        <div class="flip-card-back">
                            <a href="{{route('comics.show', ['comic'=> $comic->id])}}">
                                <div class="img-box">
                                    <button class="delete bg-danger myBtn"><i class="fa-solid fa-trash"></i></button>
                                    {{-- <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="delete bg-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                                    </form> --}}
                                    <img src="{{$comic['thumb']}}" alt="">
                                    <a href="{{route('comics.edit',$comic->id)}}" class="edit">Edit</a>
                                </div>
                            </a>
                            <span class="title">{{$comic['price']}}$</span>
                        </div>
                    </div>
                </div>
                <div class="modal myModal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="form-delete">
                        @csrf
                        @method('DELETE')
                        <span>Sei sicuro di elimiare {{$comic->series}}?</span> 
                        <button  type="submit" class="btn-delete">Si</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
<section class="icons-wrap">
    <div class="icons">
        @foreach ($linksImage as $link)
        <div class="icon">
            <img src="{{Vite::asset('resources/img/' . $link['url'] )}}" class="img-icon">
            <a href="#">{{$link['text']}}</a>
        </div>
        @endforeach
    </div>
</section>
@endsection