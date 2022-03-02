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
    $data = [
        'loggia' => 'Grande Oriente di Italia',
        'sede' => 'Torino',
        'adepts_list' => [
            ['Antonio De Curtis', 'antonio-de-curtis'],
            ['Vittorio Amedeo Alfieri', 'vittorio-amedeo-alfieri'],
            ['Giacomo Casanova', 'giacomo-casanova'],
        ],
    ];


    return view('home', $data);
});

Route::view('antonio-de-curtis', 'antonio-de-curtis');
Route::view('vittorio-amedeo-alfieri', 'vittorio-amedeo-alfieri');
Route::view('giacomo-casanova', 'giacomo-casanova');
