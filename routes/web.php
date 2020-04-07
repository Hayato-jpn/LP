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
Route::get('download/top4', 'DownloadController@top4'); //FATEY
Route::get('download/bis', 'DownloadController@bis'); //ビスコール
Route::get('download/win', 'DownloadController@win'); //winticket
Route::get('download/fy', 'DownloadController@fy'); //FATEY preaf → トークウィズ
Route::get('download/money', 'DownloadController@money'); //チャットレディーLP
Route::get('download/game4', 'DownloadController@game'); //エロゲー
Route::get('download/side-job', 'DownloadController@side'); //チャットレディーLP(改)。download/money & download/k-moneyにも適用
Route::get('download/marrish2', 'DownloadController@marrish'); //マリッシュLP
Route::get('download/k-money', 'DownloadController@kanto'); //チャットレディー関東圏LP
Route::get('download/papa', 'DownloadController@papa'); //リスティング用パパ活LP・・・作業中！
// Route::get('download/os', 'DownloadController@os'); //OS識別、表示先切り替えテスト