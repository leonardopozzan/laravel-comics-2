<?php 
$links = config('comicsdb.navbar');
?>
<header>
    <nav class="nav-bar my-container">
        <div class="logo-img"><img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo"></div>
        <ul class="links">
            @foreach ($links as $link)
            <li class="{{(Route::currentRouteName() == $link['url'] || (Route::currentRouteName() == 'singlepage' && $link['url'] == 'comics'))  ? 'active' : ''}}">
                <a href="{{route($link['url'])}}">{{$link['text']}}</a>
            </li>
            @endforeach
        </ul>
    </nav>
</header>