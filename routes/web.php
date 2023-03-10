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
    $dati = config("comics");

    return view('home', [
        "comics" => $dati
    ]);
});

Route::get('/comics', function () {
    $dati = config("comics");
    ddd($dati);
})->name("comics");
