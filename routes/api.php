<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('vrsta', 'App\Http\Controllers\VrstaController@getAll');
Route::get('vrsta/{id}', 'App\Http\Controllers\VrstaController@getById');
Route::get('proizvod', 'App\Http\Controllers\ProizvodController@getAll');
Route::get('proizvod/{id}', 'App\Http\Controllers\ProizvodController@getById');
Route::post('proizvod', 'App\Http\Controllers\ProizvodController@save');
Route::delete('proizvod/{id}', 'App\Http\Controllers\ProizvodController@delete');
