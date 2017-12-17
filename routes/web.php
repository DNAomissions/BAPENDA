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

// Pdf & Print
Route::get('/printer/view', 'HomeController@showPrinter');
Route::get('/printer/print', 'HomeController@showPrintPreview');


// Test
Route::get('/t1', function() {
    return view('table.tablegu');
});

Route::get('/t2', function() {
    return view('table.tablels');
});

// Verifikasi
Route::get('/verifikator/show_gu/{id}', 'VerifikatorController@show_gu');
Route::get('/verifikator/show_ls/{id}', 'VerifikatorController@show_ls');

Route::post('/verifikasi/gu/{id}', 'VerifikatorController@store_gu');
Route::post('/verifikasi/ls/{id}', 'VerifikatorController@store_ls');

// CRUD Bpp, User, Kegiatan - Fitur Admin
Route::post('/store/bpp', 'AdminController@storeBPP');
Route::post('/store/kegiatan', 'AdminController@storeKegiatan');
Route::post('/store/user', 'AdminController@storeUser');

Route::get('/edit/bpp/{id_bpp}', 'AdminController@editBPP');
Route::get('/edit/kegiatan/{id}', 'AdminController@editKegiatan');

Route::post('/update/bpp/{id_bpp}', 'AdminController@updateBPP');
Route::post('/update/kegiatan/{id}', 'AdminController@updateKegiatan');

Route::get('/delete/bpp/{id_bpp}', 'AdminController@destroyBPP');
Route::get('/delete/kegiatan/{id}', 'AdminController@destroyKegiatan');

// Input Pengajuan - Fitur User/Bpp
Route::get('/autocomplete', 'HomeController@autocomplete');
Route::post('/gu/insert', 'guController@store');
Route::post('/ls/insert', 'lsController@store');

<<<<<<< HEAD
// Menampilkan Gambar
Route::get('storage/app/public/suratPermohonan/{gu}', function($image = null)
{
    // $file = Storage::get($image);
    // $mimetype = Storage::mimeType($image);
    // return response($file, 200)->header('Content-Type', $mimetype);
    return (explode(" ",$str));
});
=======
//BPP
Route::get('/user/edit/bpp/{id}','UserController@show');
>>>>>>> 930ddf4d581327561c24be12dd0e90bc2e3083a4
