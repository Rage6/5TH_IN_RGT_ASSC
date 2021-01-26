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

Auth::routes(['verify' => true]);

Route::prefix('/home')->group(function() {
  Route::get('', 'HomeController@index')->name('home')->middleware('verified');
  Route::get('view/{id}', 'ViewController@index')->name('view');
  Route::get('message/{id}', 'MessageController@index')->name('message');
  Route::post('message/{id}', 'MessageController@post');
  Route::get('edit', 'EditController@index')->name('edit');
  Route::get('admin','AdminController@index')->name('admin');
  Route::post('admin/email','AdminController@changeEmail');
  Route::post('admin/member/add','AdminController@addMember');
  Route::post('admin/member/delete','AdminController@deleteMember');
  Route::post('admin/range/add','AdminController@addRange');
  Route::post('admin/range/associate','AdminController@addAssociate');
  Route::post('admin/range/delete','AdminController@deleteRange');
  Route::prefix('/edit')->group(function() {
    Route::post('basics','EditController@updateBasicInfo');
    Route::get('profile','ProfileController@index')->name('profile');
    Route::prefix('/profile')->group(function() {
      Route::post('update_current','ProfileController@updateProfile')->name('profile.update_current');
      Route::post('update_veteran','ProfileController@updateProfile')->name('profile.update_veteran');
    });
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
  Route::prefix('topic')->group(function() {
    Route::get('michelin-rubber-plant-battle','HistoryTopicController@michelin_rubber_plant_battle');
    Route::get('the-rifle-and-the-myth','HistoryTopicController@the_rifle_and_the_myth');
  });
});
