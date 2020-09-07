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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
