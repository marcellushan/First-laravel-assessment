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

//Route::get('/assessment', 'AssessmentController@index');

//Route::resource('assessment', 'AssessmentController');
Route::get('/assessment/create/{user_id}/{team_id}', 'AssessmentController@create');
Route::post('/assessment', 'AssessmentController@store');
Route::resource('team', 'TeamController');
Route::resource('slo', 'SloController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard/{id}', 'DashboardController@index');
Route::get('/dashboard/team/{user_id}/{team_id}', 'DashboardController@team');
