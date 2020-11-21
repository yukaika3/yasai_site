<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Models\Stock;

class BeginnerController extends Controller
{
    public function index()
     {
       return view('beginner');
     }
     public function list()
     {
        $stocks = Stock::Paginate(34);
        return view('list',compact('stocks')); //追記変更
     }
    public function menu()
    {
        // ログインしていたら、colorieを表示
        if (Auth::check()) {
            return view('/calorie');
        } else {
            // ログインしていなかったら、Login画面を表示
            return view('/auth/login');
        }
    }
    public function asupara()
    {
        return view('asupara');
    }
    public function burokori()
    {
        return view('burokori');
    }  
    public function daikon()
    {
        return view('daikon');
    }  
    public function edamame()
    {
        return view('edamame');
    }
    public function gobou()
    {
        return view('gobou');
    }
    public function goya()
    {
        return view('goya');
    }
    public function hakusai()
    {
        return view('hakusai');
    }
    public function hourensou()
    {
        return view('hourensou');
    }
    public function kabocha()
    {
        return view('kabocha');
    }
    public function kabu()
    {
        return view('kabu');
    }
    public function kaiware()
    {
        return view('kaiware');
    }
    public function kyabetu()
    {
        return view('kyabetu');
    }
    public function kyuri()
    {
        return view('kyuri');
    }
    public function mizuna()
    {
        return view('mizuna');
    }
    public function nasu()
    {
        return view('nasu');
    }
    public function negi()
    {
        return view('negi');
    }
    public function ninjin()
    {
        return view('ninjin');
    }
    public function okura()
    {
        return view('okura');
    }
    public function papurika()
    {
        return view('papurika');
    }
    public function paseri()
    {
        return view('paseri');
    }
    public function piman()
    {
        return view('piman');
    }
    public function renkon()
    {
        return view('renkon');
    }
    public function retasu()
    {
        return view('retasu');
    }
    public function satoimo()
    {
        return view('satoimo');
    }    
    public function satumaimo()
    {
        return view('satumaimo');
    }
    public function serori()
    {
        return view('serori');
    }
    public function syoga()
    {
        return view('syoga');
    }
    public function tamanegi()
    {
        return view('tamanegi');
    }
    public function tingen()
    {
        return view('tingen');
    }
    public function togarashi()
    {
        return view('togarashi');
    }
    public function tomato()
    {
        return view('tomato');
    }
    public function tomorokoshi()
    {
        return view('tomorokoshi');
    }

}