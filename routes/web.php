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



Route::get('/home', function () {
    $data = [
        'istituto' => 'Università degli Studi di Torino',
        'corso' => 'Economia Aziendale',
        'lista_studenti' => [
            'Fabrizio Fornone',
            'Mario Etticia',
            'Gianni Giannelli',
        ],
    ];


    return view('home', $data);
});
