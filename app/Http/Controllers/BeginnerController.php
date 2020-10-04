<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BeginnerController extends Controller
{
    public function index()
    {
      return view('beginner');
    }
    public function menu()
    {
        // ログインしていたら、test/menuを表示
        if (Auth::check()) {
            return view('calorie');
        } else {
            // ログインしていなかったら、Login画面を表示
            return view('beginner');
        }
    }
}