<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function characters(){
        return view('characters');
    }
    public function movies(){
        return view('movies');
    }public function tv(){
        return view('tv');
    }
    public function games(){
        return view('games');
    }
    public function collectibles(){
        return view('collectibles');
    }
    public function videos(){
        return view('videos');
    }
    public function fans(){
        return view('fans');
    }
    public function news(){
        return view('news');
    }
    public function shop(){
        return view('shop');
    }
}
