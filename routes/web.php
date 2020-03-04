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
    return redirect('https://preaf.jp/pa.do?s=v04031&o=45028&guid=ON');
});

Route::get('download/top', 'DownloadController@top');
