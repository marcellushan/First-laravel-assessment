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
    return view('home', ['goal' => 'bunch of crap', 'label' => 'College Goals']);
});

//Route::get('/assessment', 'AssessmentController@index');

Route::resource('assessment', 'AssessmentController');
Route::resource('team', 'TeamController');
