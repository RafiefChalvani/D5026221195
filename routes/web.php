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

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('show', 'App\Http\Controllers\DosenController@showBlog');
