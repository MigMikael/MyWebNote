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

/*Route::get('note', 'NoteController@index');
Route::get('note/create', 'NoteController@create');
Route::get('note/{id}', 'NoteController@show');
Route::post('note' , 'NoteController@store');*/

Route::resource('note', 'NoteController');

Route::get('/current_weather', 'WeatherController@getCurrentWeather');