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

Route::get('/homepage', 'LeavingController@home');
Route::post('/display', 'LeavingController@displayCont');

Route::resource('posts','LeavingController');

Route::post('/pdfview','LeavingController@thepdfview');

