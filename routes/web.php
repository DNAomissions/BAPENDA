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
    if(Auth::guard()){
        return redirect()->to('/home');
    }else{
        return view('welcome');
    }
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/printer/view', 'HomeController@showPrinter');
Route::get('/printer/print', 'HomeController@showPrintPreview');

Route::get('/inputgu', function() {
    return view('input_gu');
});

Route::get('/verifikasigu', 'HomeController@verifikasigu');
Route::get('/verifikasils', 'HomeController@verifikasils');
