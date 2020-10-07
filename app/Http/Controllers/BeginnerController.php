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
}