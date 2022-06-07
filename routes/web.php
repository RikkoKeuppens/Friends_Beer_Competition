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

Route::resource('/', 'BeerController');
Route::put('/{id}','BeerController@plusAndMin');
Route::get('lol123', 'BeerController@deletePage');
Route::delete('/', 'BeerController@delete');
Route::get('/{id}/EditProfile', 'BeerController@EditProfile');
Route::put('/{id}/EditIT', 'BeerController@EditIT');
Route::get('/ad', 'BeerController@ad');
Route::get('/settings', 'SettingController@settings');
Route::put('/{id}/setSetting', 'SettingController@setSetting');





