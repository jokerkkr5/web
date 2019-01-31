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
    return view('user.index');
})->name('index');
Route::get('/post', function () {
    return view('user.front.post');
})->name('post');
Route::get('/about', function () {
    return view('user.front.about');
})->name('about');
Route::get('/contact', function () {
    return view('user.front.contact');
})->name('contact');
