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
    return view('home');
});

Route::get('dogs', function () {
    return view('dogs');
})->name('dogs');
Route::get('cats', function () {
    return view('cats');
})->name('cats');
Route::get('horse', function () {
    return view('horse');
})->name('horse');
Route::get('bears', function () {
    return view('bears');
})->name('bears');
