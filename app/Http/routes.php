<?php

use App\Task;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

// Word Routes
Route::get('/words', 'WordController@index');
Route::post('/word', 'WordController@store');
Route::delete('/word/{word}', 'WordController@destroy')->middleware('auth');

// Task Routes
Route::get('/tasks', 'TaskController@index');
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');

// Authentication Routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration Routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');