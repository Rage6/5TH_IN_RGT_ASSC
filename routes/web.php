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
  Route::prefix('/admin')->group(function() {
    Route::get('','AdminController@index')->name('admin');
    Route::post('/email','AdminController@changeEmail');
    Route::prefix('/member')->group(function() {
      Route::post('/add','AdminController@addMember');
      Route::post('/delete','AdminController@deleteMember');
      Route::post('/deceased','AdminController@stillAlive');
      Route::post('/cmoh','AdminController@cmohConnection');
      Route::post('/casualty','AdminController@casualtyConnection');
      Route::post('/add-conflict','AdminController@addConflictToMember');
      Route::post('/delete-conflict','AdminController@deleteConflictFromMember');
    });
    Route::prefix('/recipient')->group(function() {
      Route::post('/add','AdminController@addRecipient');
      Route::post('/change','AdminController@changeRecipient');
      Route::post('/delete','AdminController@deleteRecipient');
    });
    Route::prefix('/range')->group(function () {
      Route::post('/add','AdminController@addRange');
      Route::post('/associate','AdminController@addAssociate');
      Route::post('/delete','AdminController@deleteRange');
    });
    Route::prefix('/casualty')->group(function () {
      Route::post('/add','AdminController@addCasualty');
      Route::post('/change','AdminController@changeCasualty');
      Route::post('/details','AdminController@casualtyDetails');
      Route::post('/delete','AdminController@deleteCasualty');
    });
    Route::prefix('/conflict')->group(function () {
      Route::post('/add','AdminController@addConflict');
      Route::post('/change','AdminController@changeConflict');
      Route::post('/delete','AdminController@deleteConflict');
    });
  });
  Route::prefix('/edit')->group(function() {
    Route::post('basics','EditController@updateBasicInfo');
    Route::prefix('/links')->group(function() {
      Route::get('','LinkController@index')->name('link');
      Route::post('add','LinkController@addNewLink')->name('links.add_link');
      Route::post('delete','LinkController@deleteOldLink')->name('links.delete_link');
    });
    Route::get('profile','ProfileController@index')->name('profile');
    Route::prefix('/profile')->group(function() {
      Route::post('update_current','ProfileController@updateProfile')->name('profile.update_current');
      Route::post('update_veteran','ProfileController@updateProfile')->name('profile.update_veteran');
    });
  });
});

Route::prefix('registration')->group(function() {
  Route::get('','RegistrationController@index');
  Route::post('','RegistrationController@post');
  Route::prefix('payment')->group(function() {
    Route::get('','PaymentController@membership_index');
  });
});

Route::prefix('reunion')->group(function() {
  Route::get('','ReunionController@index');
  Route::post('registration','ReunionController@post');
});

Route::prefix('history')->group(function() {
  Route::get('timeline','HistoryController@index');
  Route::prefix('vietnam-history')->group(function() {
    Route::get('preface','HistoryController@vietnam_preface');
    Route::get('1966','HistoryController@vietnam_1966');
    Route::get('1967','HistoryController@vietnam_1967');
    Route::get('1968','HistoryController@vietnam_1968');
  });
  Route::prefix('album')->group(function() {
    Route::get('ww2','AlbumController@ww2');
    Route::get('korea','AlbumController@korea');
    Route::get('vietnam','AlbumController@vietnam');
    Route::get('gwot','AlbumController@gwot');
    Route::get('ben-cui','AlbumController@ben_cui');
  });
  Route::prefix('topic')->group(function() {
    Route::get('ben-cui-battle','HistoryTopicController@ben_cui_battle');
    Route::get('presidential-citation','HistoryTopicController@presidential_citation');
    Route::get('michelin-rubber-plant-battle','HistoryTopicController@michelin_rubber_plant_battle');
    Route::get('the-rifle-and-the-myth','HistoryTopicController@the_rifle_and_the_myth');
    Route::get('ben-cui-forum','HistoryTopicController@ben_cui_forum');
  });
});

Route::prefix('/memorials')->group(function() {
  Route::prefix('/casualties')->group(function() {
    Route::get('','MemorialController@casualties_index');
    Route::post('','MemorialController@casualties_search');
  });
});
