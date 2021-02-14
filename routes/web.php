<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\VrstaController@all');
Route::get('/korpa', 'App\Http\Controllers\ProizvodController@korpa');
Route::post('/dodaj', 'App\Http\Controllers\ProizvodController@dodajUKorpu');
Route::post('/kupi', 'App\Http\Controllers\NarudzbinaController@create');
Route::get('/{vrsta}', 'App\Http\Controllers\VrstaController@view');
Route::get('/{vrsta}/{proizvod}', 'App\Http\Controllers\ProizvodController@view');
