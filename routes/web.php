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
Route::get('/canciones', function () {
    $canciones = [];
$canciones[0] = ['cancion'=>'sundress','artista'=>'ASAP Roky'];
$canciones[1] = ['cancion' => 'space song','artista'=>'beach house'];
$canciones[2] = ['cancion' => 'sweet dreams','artista'=>'eurythmics'];
    return view('index')->with(['canciones' => $canciones]);
});
Route::get('/canciones/{id}', function ($id) {
    $canciones = [];
    $canciones[0] = ['cancion'=>'sundress','artista'=>'ASAP Roky'];
    $canciones[1] = ['cancion' => 'space song','artista'=>'beach house'];
    $canciones[2] = ['cancion' => 'sweet dreams','artista'=>'eurythmics'];

    $cancion = $canciones[$id];
    return view('detalle',compact('cancion'));
});

Route::get('/', function () {
    return view('welcome');
});
