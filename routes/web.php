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

Route::post('guest', 'App\Http\Controllers\LoginController@authenticate')->name('login.guest'); //guest機能

Route::get('asupara', 'App\Http\Controllers\BeginnerController@asupara');
Route::get('burokori', 'App\Http\Controllers\BeginnerController@burokori');
Route::get('daikon', 'App\Http\Controllers\BeginnerController@daikon');
Route::get('edamame', 'App\Http\Controllers\BeginnerController@edamame');
Route::get('gobou', 'App\Http\Controllers\BeginnerController@gobou');
Route::get('goya', 'App\Http\Controllers\BeginnerController@goya');
 