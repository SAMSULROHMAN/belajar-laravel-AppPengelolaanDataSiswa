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

Route::get('siswa','SiswaController@index');
Route::get('siswa/create','SiswaController@create')->name('siswa.create');
Route::get('siswa/{siswa}','SiswaController@show');
Route::post('siswa','SiswaController@store');
Route::get('siswa/{siswa}/edit','SiswaController@edit');
Route::patch('siswa/{siswa}','SiswaController@update');
Route::delete('siswa/{siswa}','SiswaController@destroy');

Route::get('date-mutator','SiswaController@dateMutator');

