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

Route::get('studies/index', 'StudiesController@index')->name('studies.index');
Route::get('studies/create', 'StudiesController@create')->name('studies.create');
Route::post('studies/store', 'StudiesController@store')->name('studies.store');
Route::get('studies/show/{id}', 'StudiesController@show')->name('studies.show');
Route::get('studies/edit/{id}', 'StudiesController@edit')->name('studies.edit');
Route::post('studies/update/{id}', 'StudiesController@update')->name('studies.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
