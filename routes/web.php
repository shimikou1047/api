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
Route::get('/index', 'App\Http\Controllers\SessionController@index');
Route::post('/form', 'App\Http\Controllers\SessionController@form');
Route::get('/destruction', 'App\Http\Controllers\SessionController@destruction');

# mailSever
Route::get('/mail', 'App\Console\Commands\mailCommand@handle');

# chatform
Route::get('/chat','App\Http\Controllers\chatForntController@index');
# js 練習
Route::view('/js', 'jsPractice');

