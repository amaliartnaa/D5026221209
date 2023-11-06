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
    return view('welcome');
});

Route::get('halo', function () {
    return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('halo2', function () {
    return "<marquee>Halo, Selamat datang</marquee>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('hello', function () {
    return view('hello');
});

Route::get('pertemuan1', function () {
    return view('pertemuan1');
});

Route::get('berita', function () {
    return view('berita');
});

Route::get('index', function () {
    return view('index');
});

Route::get('pertemuan3', function () {
    return view('pertemuan3');
});

Route::get('linktree', function () {
    return view('linktree');
});

Route::get('payment', function () {
    return view('payment');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('validasi1', function () {
    return view('validasi1');
});

Route::get('tugas2', function () {
    return view('tugas2');
});

Route::get('news', function () {
    return view('news');
});

// materi controller
Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('show', 'App\Http\Controllers\DosenController@showBlog');


