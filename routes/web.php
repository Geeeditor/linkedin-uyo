<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('index.home');
})->name('index');

Route::get('/home', function () {
    return view('welcome');
})->name('index.home');

Route::get('/about', function () {
    return view('about');
})->name('index.about');
