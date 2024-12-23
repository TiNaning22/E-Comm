<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/web', function () {
    return view('dasboard.index');
});


Route::get('/home', function () {
    return view('home');
});


Route::get('/katalog', function () {
    return view('katalog');
});


