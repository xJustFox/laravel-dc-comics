<?php

use App\Http\Controllers\ComicController;
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
    $navLinks = config('nav_links');
    $footerArr = config('footer_arr');

    return view('home', compact('footerArr', 'navLinks'));
})->name('home');

Route::get('/movies', function () {
    $navLinks = config('nav_links');
    $footerArr = config('footer_arr');

    return view('movies', compact('footerArr','navLinks'));
})->name('movies');

Route::get('/characters', function () {
    $navLinks = config('nav_links');
    $footerArr = config('footer_arr');

    return view('characters', compact('footerArr', 'navLinks'));
})->name('characters');

Route::get('/tv', function () {
    $navLinks = config('nav_links');
    $footerArr = config('footer_arr');

    return view('tv', compact('footerArr', 'navLinks'));
})->name('tv');

Route::get('/games', function () {
    $navLinks = config('nav_links');
    $footerArr = config('footer_arr');

    return view('games', compact('footerArr', 'navLinks'));
})->name('games');

Route::get('/collectibles', function () {
    $navLinks = config('nav_links');
    $footerArr = config('footer_arr');

    return view('collectibles', compact('footerArr', 'navLinks'));
})->name('collectibles');

Route::get('/videos', function () {
    $navLinks = config('nav_links');
    $footerArr = config('footer_arr');

    return view('videos', compact('footerArr', 'navLinks'));
})->name('videos');

Route::get('/fans', function () {
    $navLinks = config('nav_links');
    $footerArr = config('footer_arr');

    return view('fans', compact('footerArr', 'navLinks'));
})->name('fans');

Route::get('/news', function () {
    $navLinks = config('nav_links');
    $footerArr = config('footer_arr');

    return view('news', compact('footerArr', 'navLinks'));
})->name('news');

Route::get('/shop', function () {
    $navLinks = config('nav_links');
    $footerArr = config('footer_arr');
    
    return view('shop', compact('footerArr', 'navLinks'));
})->name('shop');

// ---------------------------------------------------------

Route::resource('comics', ComicController::class);