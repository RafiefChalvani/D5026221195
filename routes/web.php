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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/stylepertemuan1', function () {
    return view('stylepertemuan1');
});

Route::get('/newspertemuan1', function () {
    return view('newspertemuan1');
});

Route::get('/linkpertemuan1', function () {
    return view('linkpertemuan1');
});

Route::get('/hellopertemuan1', function () {
    return view('hellopertemuan1');
});

Route::get('latihan1', function () {
    return view('latihan1');
});

Route::get('/beritapertemuan2', function () {
    return view('beritapertemuan2');
});

Route::get('responsivepertemuan3', function () {
    return view('responsivepertemuan3');
});

Route::get('/paginationpertemuan4', function () {
    return view('paginationpertemuan4');
});

Route::get('/validasipertemuan5', function () {
    return view('validasipertemuan5');
});

Route::get('/js1pertemuan5', function () {
    return view('js1pertemuan5');
});

Route::get('/js2pertemuan5', function () {
    return view('js2pertemuan5');
});

Route::get('/linktree', function () {
    return view('linktree');
});

Route::get('/ETS', function () {
    return view('ETS');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/formulir', function () {
    return view('formulir');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/blog1', function () {
    return view('blog1');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('show', 'App\Http\Controllers\DosenController@showBlog');

//Route::get('/pegawai/{nama}', 'App\Http\Controllers\DosenController@shownama');

Route::get('/formulir/{nama}', 'App\Http\Controllers\DosenController@pegawai');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

// route blog
Route::get('/blog', 'App\Http\Controllers\DosenController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\DosenController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\DosenController@kontak');

//route CRUD Pegawai
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

//route CRUD Nilai Kuliah
Route::get('/nilaikuliah','App\Http\Controllers\nilaikuliahController@index');
Route::get('/nilaikuliah/tambah2','App\Http\Controllers\nilaikuliahController@tambah2');
Route::post('/nilaikuliah/store','App\Http\Controllers\nilaikuliahController@store');

//route CRUD Lampu
Route::get('/lampu','App\Http\Controllers\lampuController@index3');
Route::get('/lampu/tambah3','App\Http\Controllers\lampuController@tambah3');
Route::post('/lampu/store','App\Http\Controllers\lampuController@store');
