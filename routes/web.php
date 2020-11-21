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
Route::get('hakusai', 'App\Http\Controllers\BeginnerController@hakusai');
Route::get('kabocha', 'App\Http\Controllers\BeginnerController@kabocha');
Route::get('kabu', 'App\Http\Controllers\BeginnerController@kabu');
Route::get('kaiware', 'App\Http\Controllers\BeginnerController@kaiware');
Route::get('kyabetu', 'App\Http\Controllers\BeginnerController@kyabetu');
Route::get('kyuri', 'App\Http\Controllers\BeginnerController@kyuri');
Route::get('mizuna', 'App\Http\Controllers\BeginnerController@mizuna');
Route::get('nasu', 'App\Http\Controllers\BeginnerController@nasu');
Route::get('negi', 'App\Http\Controllers\BeginnerController@negi');
Route::get('ninjin', 'App\Http\Controllers\BeginnerController@ninjin');
Route::get('okura', 'App\Http\Controllers\BeginnerController@okura');
Route::get('papurika', 'App\Http\Controllers\BeginnerController@papurika');
Route::get('paseri', 'App\Http\Controllers\BeginnerController@paseri');
Route::get('piman', 'App\Http\Controllers\BeginnerController@piman');
Route::get('renkon', 'App\Http\Controllers\BeginnerController@renkon');
Route::get('retasu', 'App\Http\Controllers\BeginnerController@retasu');
Route::get('satoimo', 'App\Http\Controllers\BeginnerController@satoimo');
Route::get('satumaimo', 'App\Http\Controllers\BeginnerController@satumaimo');
Route::get('serori', 'App\Http\Controllers\BeginnerController@serori');
Route::get('syoga', 'App\Http\Controllers\BeginnerController@syoga');
Route::get('tamanegi', 'App\Http\Controllers\BeginnerController@tamanegi');
Route::get('tingen', 'App\Http\Controllers\BeginnerController@tingen');
Route::get('togarashi', 'App\Http\Controllers\BeginnerController@togarashi');
Route::get('tomato', 'App\Http\Controllers\BeginnerController@tomato');
Route::get('tomorokoshi', 'App\Http\Controllers\BeginnerController@tomorokoshi');
Route::get('zyagaimo', 'App\Http\Controllers\BeginnerController@zyagaimo');