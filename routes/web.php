<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NilaiKuliahController;

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

Route::get('/blog2', function () {
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

Route::get('/shownama/{nama}', 'App\Http\Controllers\DosenController@shownama');

Route::get('/formulir', 'App\Http\Controllers\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\PegawaiController@proses');

Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

Route::get('/pegawai/view/{id}', 'App\Http\Controllers\PegawaiController@view');


Route::get('/nilai','App\Http\Controllers\NilaiKuliahController@index');
Route::get('/nilai/tambah','App\Http\Controllers\NilaiKuliahController@create');
Route::get('/nilai/view/{id}', 'App\Http\Controllers\NilaiKuliahController@view');
Route::get('/nilai/hapus/{id}','App\Http\Controllers\NilaiKuliahController@hapus');
Route::post('/nilai/update','App\Http\Controllers\NilaiKuliahController@update');
Route::get('/nilai/edit/{id}','App\Http\Controllers\NilaiKuliahController@edit');
Route::post('/nilai','App\Http\Controllers\NilaiKuliahController@store');


Route::get('/topi', 'App\Http\Controllers\TopiController@index');
Route::get('/topi/tambah','App\Http\Controllers\TopiController@create');
Route::get('/topi/view/{id}', 'App\Http\Controllers\TopiController@view');
Route::get('/topi/hapus/{id}','App\Http\Controllers\TopiController@hapus');
Route::post('/topi/update','App\Http\Controllers\TopiController@update');
Route::get('/topi/edit/{id}','App\Http\Controllers\TopiController@edit');
Route::post('/topi','App\Http\Controllers\TopiController@store');

Route::get('/karyawan', 'App\Http\Controllers\KaryawanController@index');
// Route::get('karyawan', 'App\Http\Controllers\KaryawanController@getNama');
Route::get('/karyawan/tambah','App\Http\Controllers\KaryawanController@tambah');
Route::get('/karyawan/hapus/{id}','App\Http\Controllers\KaryawanController@hapus');
Route::post('/karyawan','App\Http\Controllers\KaryawanController@store');
