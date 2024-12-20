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

Route::get('/event', function () {
    return view('event');
})->name('index.event');


Route::get('/contact', function () {
    return view('contact');
})->name('index.contact');
