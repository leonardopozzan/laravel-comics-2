
@extends('layout.app')
@section('content')
<div class="container pt-5">
    <a href="">Crea un comic</a>
    @foreach ($comics as $key => $comic)
    <ul>
        <li><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a></li>
    </ul>
    @endforeach
</div>

@endsection