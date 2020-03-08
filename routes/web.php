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
    // return view('download.top');
    return view('download.top');
});

Route::get('download/top', 'DownloadController@top');
Route::get('download/top2', 'DownloadController@top2');
Route::get('download/top3', 'DownloadController@top3');