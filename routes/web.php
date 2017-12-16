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


// Verifikasi
Route::get('/verifikasigu', 'HomeController@verifikasigu');
Route::get('/verifikasils', 'HomeController@verifikasils');

// Route untuk Fitur Admin
Route::post('/store/bpp', 'AdminController@storeBPP');
Route::post('/store/kegiatan', 'AdminController@storeKegiatan');
Route::post('/store/user', 'AdminController@storeUser');

Route::get('/edit/bpp/{id}', 'AdminController@editBPP');
Route::post('/update/bpp/{id}', 'AdminController@updateBPP');

// Input Pengajuan
Route::get('/autocomplete', 'HomeController@autocomplete');
Route::post('/gu/insert', 'guController@store');
Route::post('/ls/insert', 'lsController@store');