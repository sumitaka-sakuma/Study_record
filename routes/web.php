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


Route::group(['prefix' => 'users', 'middleware' => 'auth'], function() {

    Route::get('index', 'UsersController@index')->name('users.index');
    Route::get('show/{id}', 'UsersController@show')->name('users.show');
    Route::get('edit/{id}', 'UsersController@edit')->name('users.edit');
    Route::post('update/{id}', 'UsersController@update')->name('users.update');
});


Route::group(['prefix' => 'studies', 'middleware' => 'auth'], function() {

    Route::get('index', 'StudiesController@index')->name('studies.index');
    Route::get('create', 'StudiesController@create')->name('studies.create');
    Route::post('store', 'StudiesController@store')->name('studies.store');
    Route::get('show/{id}', 'StudiesController@show')->name('studies.show');
    Route::get('edit/{id}', 'StudiesController@edit')->name('studies.edit');
    Route::post('update/{id}', 'StudiesController@update')->name('studies.update');
    Route::post('destroy/{id}', 'StudiesController@destroy')->name('studies.destroy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
