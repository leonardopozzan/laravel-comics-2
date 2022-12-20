
@extends('layout.app')
@section('content')
<div class="container pt-5">
    <a href="{{route('comics.create')}}">Crea un comic</a>
    @foreach ($comics as $key => $comic)
    <ul>
        <li><a href="{{route('comics.show', ['comic'=> $comic->id])}}">{{$comic->title}}</a></li>
    </ul>
    @endforeach
</div>

@endsection