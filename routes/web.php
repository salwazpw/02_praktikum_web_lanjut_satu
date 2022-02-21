<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    echo "Selamat Datang";
});

// Route::get('/about/{nim}/{nama}', function ($nim , $nama) {
//     echo "Nama:" . $nama.'<br>';
//     echo "NIM:" . $nim;
// });

Route::get('/about', function () {
    echo "Nama: Salwa Zhafira Pratiwi Wahyudi  <br> ";
    echo "NIM: 2041720138";
});

Route::get('/articles/{id}', function ($id) {
    echo "Halaman Artikel dengan ID " . $id ;
});
