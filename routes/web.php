<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('ingredients');
});
Route::get('/ingredients', function () {
    return view('ingredients');
})->name('ingredients');
Route::get('/drinks', function () {
    return view('drinks');
})->name('drinks');