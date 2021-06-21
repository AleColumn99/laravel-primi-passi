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
       "name" => "Pato",
       "lastname" => "O'Ward",
       "wins" => [
           'Texas 2 - 2021',
           'Belle Isle 2 - 2021'
       ]
       ];

    return view('home', $data);

});

Route::get('/about', function () {

    return view('about');

});
