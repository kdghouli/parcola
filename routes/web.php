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

Route::get('', function () {
    return view('main');
});

Route::resource('vhl', 'VhlController');
Route::resource('agence', 'AgenceController');
Route::resource('commentaire', 'CommentaireController');



Route::get('cumul','VhlController@cumul');

Route::get('/creatComment/{id}','VhlController@linkComment')->name('vhlComment');
Route::post('/creatComment','VhlController@storeComment')->name('vhlCommentSave');

Route::get('/creatStatus/{id}','VhlController@linkStatus')->name('vhlStatus');
Route::post('/creatStatus','VhlController@storeStatus')->name('vhlStatusSave');


Route::view('admin','admin.admin');

Route::get('test','VhlController@test');

Route::view('pageVue','pageVue');

Route::post('/pago','VhlController@storeAgence');
