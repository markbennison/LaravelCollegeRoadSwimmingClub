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

Route::get('/', 'PagesController@home');
Route::get('/login', 'PagesController@login');
Route::get('/register', 'PagesController@register');

Route::get('/account', 'AccountController@index');

Route::resource('users', 'UsersController');
/*
Route::get('/users', 'UsersController@index');
Route::get('/users/create', 'UsersController@create');
Route::get('/users/{user}', 'UsersController@show');
Route::post('/users', 'UsersController@store');
Route::get('/users/{user}/edit', 'UsersController@edit');
Route::patch('/users/{user}', 'UsersController@update');
Route::delete('/users/{user}', 'UsersController@destroy');
*/

//Route::resource('account', 'AccountController');  //use UsersController ...unless Auth works
Route::resource('swimmer', 'SwimmerController');
Route::resource('trainingevent', 'TrainingEventController');
Route::resource('competitionevent', 'CompetitionEventController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
