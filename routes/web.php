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
Route::get('/header', function () {
    return view('header');
})->name('header');

Route::get('/', function () {

    $data = [
        'name' => 'Michael',
        'lastname' => 'J. Fox',
        'birth' => '9/06/1961',
    ];

    return view('home', $data);
});


// A questo punto, iniziamo a prendere confidenza con le rotte e le views:
// cancelliamo la view welcome.blade.php e creiamo una nostra homepage.
// Facciamo quindi sì che la rotta / visualizzi home.blade.php
// Inizialmente stampiamo un Hello World, poi passiamo dei dati alla view in modo da visualizzarli dinamicamente con Blade.
// Bonus:
// Creiamo più di una pagina e visualizziamo un header menu con i link di tutte le pagine, utilizzando la funzione route()