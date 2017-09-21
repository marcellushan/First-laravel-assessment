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
    return view('welcome', ['goal' => 'bunch of crap', 'label' => 'College Goals']);
});

// Assessment Routes
Route::prefix('assessment')->group(function () {
    Route::get('create/{user_id}/{team_id}', 'AssessmentController@create');
    Route::get('{assessment_id}/edit', 'AssessmentController@edit');
    Route::get('{assessment_id}', 'AssessmentController@show');
    Route::put('{assessment_id}', 'AssessmentController@update');
    Route::post('/', 'AssessmentController@store');
});

Route::resource('user', 'UserController');

Route::resource('team', 'TeamController');

Route::resource('slo', 'SloController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/{id}', 'DashboardController@show');
Route::get('/dashboard/team/{user_id}/{team_id}', 'DashboardController@team');

Route::get('/admin', 'AdminController@index');
Route::get('/admin/select_team', 'AdminController@selectTeam');
Route::get('/admin/select_user/{id}', 'AdminController@selectUser');
