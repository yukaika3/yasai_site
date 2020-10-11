<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('beginner', 'App\Http\Controllers\BeginnerController@index');
Auth::routes();

Route::get('/colorie', 'colorie\BeginnerController@menu');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/calorie', function () {
    return view('calorie');
  });

Route::get('/calorie', 'App\Http\Controllers\BeginnerController@menu')->middleware('auth');
Route::get('list', 'App\Http\Controllers\BeginnerController@list');

 