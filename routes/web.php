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

// Route::get('/user', function () {
//     echo 1222;
// });

Route::get('/user', 'Auth\LoginController@test');

Route::get('/upload', 'Auth\LoginController@getUpload');
Route::post('/upload', 'Auth\LoginController@postUpload');