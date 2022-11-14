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

Route::get('/', 'PagesController@homepage');

Route::get('about','PagesController@about');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('siswa/cari', 'SiswaController@cari');

Route::resource('siswa', SiswaController::class);

Route::resource('kelas', KelasController::class)->parameters([
    'kelas' => 'kelas'
]);

Route::resource('hobi', HobiController::class);

Route::get('date-mutator','SiswaController@dateMutator');

