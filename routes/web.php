<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\landingpageController;
use App\Http\Controllers\ObatPages;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\buyController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ObatController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/login', function () {
//     return view('auth.login');
// });

Route::get('/', function () {
    return view('landingpage');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\pasienController::class, 'index'])->name('home');
Route::get('/landingpage', [App\Http\Controllers\landingpageController::class, 'index'])->name('landingpage');

// Route Navigasi Bar
Route::get('/obatpage', [App\Http\Controllers\ObatPages::class, 'index'])->name('obatpage');
Route::get('/aboutpage', [App\Http\Controllers\aboutController::class, 'index'])->name('aboutpage');
Route::get('/buy', [App\Http\Controllers\buyController::class, 'index'])->name('buy');
Route::get('/news', [App\Http\Controllers\newsController::class, 'index'])->name('news');
Route::get('/contact', [App\Http\Controllers\contactController::class, 'index'])->name('contact');

//logout
Route::get('/logout', [App\Http\Controllers\logoutController::class, 'index'])->name('logout');

//CRUD
Route::resource('/posts', \App\Http\Controllers\PostController::class);

//Dokter
Route::get('/dokter', [App\Http\Controllers\DokterController::class, 'index'])->name('index');
Route::get('/dokter/create', [App\Http\Controllers\DokterController::class, 'create'])->name('create.dokter');
Route::post('/dokter/create/save', [App\Http\Controllers\DokterController::class, 'store'])->name('store.dokter');

//Karyawan
Route::get('/karyawan', [App\Http\Controllers\KaryawanController::class, 'index'])->name('index');
Route::get('/karyawan/create', [App\Http\Controllers\KaryawanController::class, 'create'])->name('create.karyawan');
Route::post('/karyawan/create/save', [App\Http\Controllers\KaryawanController::class, 'store'])->name('store.karyawan');

//Obat
Route::get('/obat', [App\Http\Controllers\ObatController::class, 'index'])->name('index');
Route::get('/obat/create', [App\Http\Controllers\ObatController::class, 'create'])->name('create.obat');
Route::post('/obat/create/save', [App\Http\Controllers\ObatController::class, 'store'])->name('store.obat');
















