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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/get-csrf-token',[
    'uses' => 'ResumeController@getCsrfToken',
    'as' => 'token'
]);

Route::get('/getSplash/{page}',[
    'uses' => 'ResumeController@getSplash',
    'as' => 'splash'
]);

Route::post('/setSplash', array('before' => 'csrf'), [
    'uses' => 'ResumeController@setSplash',
    'as' => 'splash'
]);
