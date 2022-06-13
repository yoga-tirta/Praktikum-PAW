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

/**Route::get('/', function () {
    return view('data-mahasiswa', [
        "title" => "Data Mahasiswa"
    ]);
});**/

Route::get('/about-me', function () {
    return view('about-me', [
        "title" => "About Me"
    ]);
});

Route::get('/data-mahasiswa', 'MahasiswaController@index')->name('data-mahasiswa');
Route::get('/create-mahasiswa', 'MahasiswaController@create')->name('create-mahasiswa');
Route::post('/save-mahasiswa', 'MahasiswaController@store')->name('save-mahasiswa');
Route::get('/edit-mahasiswa/{id}', 'MahasiswaController@edit')->name('edit-mahasiswa');
Route::post('/update-mahasiswa/{id}', 'MahasiswaController@update')->name('update-mahasiswa');
Route::get('/delete-mahasiswa/{id}', 'MahasiswaController@destroy')->name('delete-mahasiswa');