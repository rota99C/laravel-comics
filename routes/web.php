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
    return view('homepage');
})->name('homepage');



Route::get('/comics', function () {
    $comics = config('comics.data');
    /* dd($comics); */
    return view('index', compact('comics'));
})->name('comics');

Route::get('/comics/{id}', function ($id) {
    $comics = config('comics.data');
    $comic= $comics[$id];

    /* dd($comic); */
    /* dd($comic['artists']); */

    return view('show', compact('comic'));
})->name('comic');



