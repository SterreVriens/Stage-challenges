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
    return view('index');
})->name('index');

Route::get('/opdracht2', function () {
    return view('fizzbuzz');
})->name('fizzbuzz');

Route::get('/opdracht1', function () {
    return view('cleanup');
})->name('cleanup');

Route::get('/opdracht4', function () {
    return view('trickortreat');
})->name('trickortreat');

Route::get('/opdracht5', function () {
    return view('romanumerals');
})->name('romannumerals');

