<?php

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

Route::get('/kosong', function () {
    //return view('welcome');
    echo "Selamat Datang Brito Reza Daud";
});

Route::get('/satu', function () {
    //return view('welcome');
    echo "One";
});

Route::get('/dua', function () {
    //return view('welcome');
    echo "Two";
});

Route::get('/tiga', function () {
    //return view('welcome');
    echo "Three";
});

Route::get('/empat', function () {
    //return view('welcome');
    echo "Four";
});

Route::get('/lima', function () {
    //return view('welcome');
    echo "Five";
});

Route::get('/enam', function () {
    //return view('welcome');
    echo "Six";
});

Route::get('/tujuh', function () {
    //return view('welcome');
    echo "Seven";
});

Route::get('/delapan', function () {
    //return view('welcome');
    echo "Eight";
});

Route::get('/sembilan', function () {
    //return view('welcome');
    echo "Nine";
});

Route::get('/', function () {
    return view('template');
    //echo "Ten";
});

Route::get('/','kontrak@index');

Route::get('/cleaning','cleaning@index');

Route::resource('kontak', 'kontrak');

Route::get('/', function(){
    return view('index');
});
