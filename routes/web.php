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
    return view('home');
});

Route::get('/home', 'HomeController@index');

Route::get('/ebook-kami', 'EbookController@index');

Route::get('/galeri-kami', 'GaleriController@index');
Route::get('/perpustakaan-kami', 'PerpustakaanController@index');

Route::get('/program-kami', 'ProgramController@index');

Route::get('/pendaftaran', 'PendaftaranController@index');
Route::get('/pendaftaran', 'PendaftaranController@create');
Route::post('/pendaftaran', 'PendaftaranController@store');

Route::get('/testimoni', 'TestimoniController@index');
Route::post('/testimoni', 'TestimoniController@store');

Route::get('/alumni', 'AlumniController@index');
Route::post('/alumni', 'AlumniController@store');

Route::get('/artikel-kami', 'ArtikelController@index');
Route::post('/artikel-kami', 'ArtikelController@store');

Route::get('/tentang-kami', 'KritikController@index');
Route::get('/tentang-kami', 'KritikController@create');
Route::post('/tentang-kami', 'KritikController@store');

Route::get('baca-artikel/{id}', 'BacaArtikelController@index');

Auth::routes();

Route::get('/admin', 'AdminMasterController@index')->name('admin');
Route::get('/admin', 'AdminMasterController@index');

Route::get('/admin-pendaftaran', 'AdminPendaftaranController@index');
Route::get('/admin-tambah-pendaftaran', 'AdminPendaftaranController@create');
Route::post('/admin-simpan-pendaftaran', 'AdminPendaftaranController@store');
Route::get('/admin-edit-pendaftaran/{id}', 'AdminPendaftaranController@edit');
Route::post('/admin-update-pendaftaran/{id}', 'AdminPendaftaranController@update');
Route::get('/admin-delete-pendaftaran/{id}', 'AdminPendaftaranController@destroy');

Route::get('/admin-artikel', 'AdminArtikelController@index');
Route::get('/admin-tambah-artikel', 'AdminArtikelController@create');
Route::post('/admin-simpan-artikel', 'AdminArtikelController@store');
Route::get('/admin-edit-artikel/{id}', 'AdminArtikelController@edit');
Route::post('/admin-update-artikel/{id}', 'AdminArtikelController@update');
Route::get('/admin-delete-artikel/{id}', 'AdminArtikelController@destroy');

Route::get('/admin-alumni', 'AdminAlumniController@index');
Route::get('/admin-tambah-alumni', 'AdminAlumniController@create');
Route::post('/admin-simpan-alumni', 'AdminAlumniController@store');
Route::get('/admin-edit-alumni/{id}', 'AdminAlumniController@edit');
Route::post('/admin-update-alumni/{id}', 'AdminAlumniController@update');
Route::get('/admin-delete-alumni/{id}', 'AdminAlumniController@destroy');

Route::get('/admin-ebook', 'AdminEbookController@index');
Route::get('/admin-tambah-ebook', 'AdminEbookController@create');
Route::post('/admin-simpan-ebook', 'AdminEbookController@store');
Route::get('/admin-edit-ebook/{id}', 'AdminEbookController@edit');
Route::post('/admin-update-ebook/{id}', 'AdminEbookController@update');
Route::get('/admin-delete-ebook/{id}', 'AdminEbookController@destroy');

Route::get('/admin-galeri', 'AdminGaleriController@index');
Route::get('/admin-tambah-galeri', 'AdminGaleriController@create');
Route::post('/admin-simpan-galeri', 'AdminGaleriController@store');
Route::get('/admin-edit-galeri/{id}', 'AdminGaleriController@edit');
Route::post('/admin-update-galeri/{id}', 'AdminGaleriController@update');
Route::get('/admin-delete-galeri/{id}', 'AdminGaleriController@destroy');

Route::get('/admin-kritik-saran', 'AdminkritikController@index');
Route::get('/admin-tambah-kritik-saran', 'AdminkritikController@create');
Route::post('/admin-simpan-kritik-saran', 'AdminkritikController@store');
Route::get('/admin-edit-kritik-saran/{id}', 'AdminkritikController@edit');
Route::post('/admin-update-kritik-saran/{id}', 'AdminkritikController@update');
Route::get('/admin-delete-kritik-saran/{id}', 'AdminkritikController@destroy');

Route::get('/admin-siswa-tk', 'AdminSiswaTKController@index');
Route::get('/admin-tambah-siswa-tk', 'AdminSiswaTKController@create');
Route::post('/admin-simpan-siswa-tk', 'AdminSiswaTKController@store');
Route::get('/admin-edit-siswa-tk/{id}', 'AdminSiswaTKController@edit');
Route::post('/admin-update-siswa-tk/{id}', 'AdminSiswaTKController@update');
Route::get('/admin-delete-siswa-tk/{id}', 'AdminSiswaTKController@destroy');

Route::get('/admin-siswa-sd', 'AdminSiswaSDController@index');
Route::get('/admin-tambah-siswa-sd', 'AdminSiswaSDController@create');
Route::post('/admin-simpan-siswa-sd', 'AdminSiswaSDController@store');
Route::get('/admin-edit-siswa-sd/{id}', 'AdminSiswaSDController@edit');
Route::post('/admin-update-siswa-sd/{id}', 'AdminSiswaSDController@update');
Route::get('/admin-delete-siswa-sd/{id}', 'AdminSiswaSDController@destroy');

Route::get('/admin-siswa-smp', 'AdminSiswaSMPController@index');
Route::get('/admin-tambah-siswa-smp', 'AdminSiswaSMPController@create');
Route::post('/admin-simpan-siswa-smp', 'AdminSiswaSMPController@store');
Route::get('/admin-edit-siswa-smp/{id}', 'AdminSiswaSMPController@edit');
Route::post('/admin-update-siswa-smp/{id}', 'AdminSiswaSMPController@update');
Route::get('/admin-delete-siswa-smp/{id}', 'AdminSiswaSMPController@destroy');

Route::get('/admin-siswa-sma', 'AdminSiswaSMAController@index');
Route::get('/admin-tambah-siswa-sma', 'AdminSiswaSMAController@create');
Route::post('/admin-simpan-siswa-sma', 'AdminSiswaSMAController@store');
Route::get('/admin-edit-siswa-sma/{id}', 'AdminSiswaSMAController@edit');
Route::post('/admin-update-siswa-sma/{id}', 'AdminSiswaSMAController@update');
Route::get('/admin-delete-siswa-sma/{id}', 'AdminSiswaSMAController@destroy');

Route::get('/admin-siswa-unggulan', 'AdminSiswaUnggulanController@index');
Route::get('/admin-tambah-siswa-unggulan', 'AdminSiswaUnggulanController@create');
Route::post('/admin-simpan-siswa-unggulan', 'AdminSiswaUnggulanController@store');
Route::get('/admin-edit-siswa-unggulan/{id}', 'AdminSiswaUnggulanController@edit');
Route::post('/admin-update-siswa-unggulan/{id}', 'AdminSiswaUnggulanController@update');
Route::get('/admin-delete-siswa-unggulan/{id}', 'AdminSiswaUnggulanController@destroy');
