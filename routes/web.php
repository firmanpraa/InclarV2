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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/speakers', function () {
    return view('speakers');
})->name('speakers');

Route::get('/committee', function () {
    return view('committee');
})->name('committee');

Route::get('/callforpaper', function () {
    return view('callforpaper');
})->name('callforpaper');

Route::get('/publication', function () {
    return view('publication');
})->name('publication');

Route::get('/information', function () {
    return view('information');
})->name('information');

Route::get('/important_dates', function () {
    return view('important_dates');
})->name('important_dates');

Route::get('/registration', function () {
    return view('registration');
})->name('registration');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/history', function () {
    return view('history');
})->name('history');

Route::get('/venue', function () {
    return view('venue');
})->name('venue');