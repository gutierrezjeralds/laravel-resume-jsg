<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['json.response']], function () {

    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });

    // public routes
    // Route::get('/get-csrf-token', 'ResumeController@getCsrfToken')->name('token.api');
    Route::get('/getSplash/{page}', 'ResumeController@getSplash')->name('getSplash.api');
    Route::post('/setSplash', 'ResumeController@setSplash')->name('setSplash.api');
    Route::get('/getHome', 'ResumeController@getHome')->name('getHome.api');
    Route::post('/setHome', 'ResumeController@setHome')->name('setHome.api');
    Route::get('/getSkills', 'ResumeController@getSkills')->name('getSkills.api');
    Route::post('/setSkills', 'ResumeController@setSkills')->name('setSkills.api');
    Route::get('/getSkillsTitle', 'ResumeController@getSkillsTitle')->name('getSkillsTitle.api');
    Route::get('/getSkillById', 'ResumeController@getSkillById')->name('getSkillById.api');
    Route::get('/get-all-experience', 'ResumeController@getAllExperience')->name('getAllExperience.api');
    Route::get('/getEducational', 'ResumeController@getEducational')->name('getEducational.api');
    Route::get('/getProjects', 'ResumeController@getProjects')->name('getProjects.api');
    Route::post('/setProjects', 'ResumeController@setProjects')->name('setProjects.api');
    Route::get('/getProjectsTitle', 'ResumeController@getProjectsTitle')->name('getProjectsTitle.api');
    Route::get('/getProjectById', 'ResumeController@getProjectById')->name('getProjectById.api');
    Route::get('/getExperienceTag', 'ResumeController@getExperienceTag')->name('getExperienceTag.api');
    Route::get('/multi-select-skills', 'ResumeController@getSkills4MultiSelect')->name('getSkills4MultiSelect.api');
    Route::post('/set-file-upload/{folder}', 'ResumeController@setFileUploads')->name('setFileUploads.api');

    // Exam Routes
    Route::get('/exam-login', 'ExamController@isLogin')->name('isLogin.api');
    Route::get('/exam-users', 'ExamController@getUsers')->name('getUsers.api');
    Route::get('/exam-user-info', 'ExamController@getUserById')->name('getUserById.api');
    Route::post('/exam-command-users', 'ExamController@commandUsers')->name('commandUsers.api');
    Route::get('/exam-login-loc', 'ExamController@getLoginLocById')->name('getLoginLocById.api');
});
