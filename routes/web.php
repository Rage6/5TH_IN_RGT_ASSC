<?php

use Illuminate\Support\Facades\Route;
// I had to add the below imports based on...
// ... this StackOverflow link (https://stackoverflow.com/questions/34675057/undefined-method-in-requestall)...
use Illuminate\Http\Request;

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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::prefix('/home')->group(function() {
  Route::get('', 'HomeController@index')->name('home');
  Route::get('edit', 'EditController@index')->name('edit');
  Route::prefix('/edit')->group(function() {
    Route::post('basics','EditController@updateBasicInfo');
    // Route::post('email','EditController@email');
    // Route::post('password','EditController@password');
  });
});

Route::prefix('history')->group(function() {
  Route::get('timeline','HistoryController@index');
  Route::prefix('album')->group(function() {
    Route::get('ww2','AlbumController@ww2');
    Route::get('korea','AlbumController@korea');
    Route::get('vietnam','AlbumController@vietnam');
    Route::get('gwot','AlbumController@gwot');
  });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
