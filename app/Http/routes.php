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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});

Route::get('berita/{berita?}', function ($berita = "laravel 5") {
    return "hello world saya belajar $berita";
});

// Route::get('hello-world', function () {
//     return 'hello world';
// });

=======
Route::get('pengguna/{pengguna?}', function ($pengguna="laravel 5 rayzal") 
{
    return "maaf $pengguna belum bisa login";
});
>>>>>>> 6b2a0e8970553b4e609067fc04d357d8f2d84241
