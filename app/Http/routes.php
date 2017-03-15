<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('berita/{berita?}', function ($berita = "laravel 5") {
    return "hello world saya belajar $berita";
});

// Route::get('hello-world', function () {
//     return 'hello world';
// });

// Route::get('pengguna/{pengguna?}', function ($pengguna="laravel 5 rayzal") 
// {
//     return "maaf $pengguna belum bisa login";// });
Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');

Route::get('matakuliah','matakuliahController@awal');
Route::get('matakuliah/tambah','matakuliahController@tambah');

Route::get('ruangan','ruanganController@awal');
Route::get('ruangan/tambah','ruanganController@tambah');

Route::get('mahasiswa','mahasiswaController@awal');
Route::get('mahasiswa/tambah','mahasiswaController@tambah');

Route::get('dosen','dosenController@awal');
Route::get('dosen/tambah','dosenController@tambah');

Route::get('dosen_matakuliah','dosen_matakuliahController@awal');
Route::get('dosen_matakuliah/tambah','dosen_matakuliahController@tambah');

Route::get('jadwal_matakuliah','jadwal_matakuliahController@awal');
Route::get('jadwal_matakuliah/tambah','jadwal_matakuliahController@tambah');

// Route::get('pengguna/rizal',function() {
//     	$pengguna = new App\pengguna();
//     	$pengguna ->username ='rizal';
//     	$pengguna ->password ='rizal';
//     	$pengguna ->save();
//     	return "data dengan username($pengguna->username) telah disimpan";
    
// });
