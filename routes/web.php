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

Route::get('/getSplash/{page}',[
    'uses' => 'ResumeController@getSplash',
    'as' => 'splash'
]);

Route::post('/setSplash',[
    'uses' => 'ResumeController@setSplash',
    'as' => 'splash'
]);
