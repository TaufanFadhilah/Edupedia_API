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

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');

Route::middleware('auth:api')->group(function(){
  // User
  Route::get('profile', 'UserController@details');

  // University
  Route::resource('university', 'UniversityController');
  Route::resource('universityachievement', 'UniversityAchievementController');
  Route::resource('faculty', 'FacultyController');
  Route::resource('majors', 'MajorsController');

  // Student Detail
  Route::resource('studentDetail', 'StudentDetailController');
  Route::resource('studentScore', 'StudentScoreController');

});
