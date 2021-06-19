<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TwrController;

use App\Http\Middleware\CekLevel;

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
    return view('admin.v_home');
});*/

Route::get('/', [HomeController::class, 'index']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/film/detail/{kode_film}', [FilmController::class, 'detail']);
Route::get('/film/bid/{kode_film}', [FilmController::class, 'bid']);

Route::get('/penawaran', [TwrController::class, 'index'])->name('penawaran');
Route::get('/penawaran/add', [TwrController::class, 'add']);
Route::post('/penawaran/insert', [TwrController::class, 'insert']);



//Hak Akses Untuk Admin
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', [AdminController::class, 'index']);

    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/users/add', [UserController::class, 'add']);
    Route::post('/users/insert', [UserController::class, 'insert']);
    Route::get('/users/detail/{id}', [UserController::class, 'detail']);
    Route::get('/users/edit/{id}', [UserController::class, 'edit']);
    Route::post('/users/update/{id}', [UserController::class, 'update']);
    Route::get('/users/delete/{id}', [UserController::class, 'delete']);


    Route::get('/penjual', [PenjualController::class, 'index'])->name('penjual');
    Route::get('/penjual/add', [PenjualController::class, 'add']);
    Route::post('/penjual/insert', [PenjualController::class, 'insert']);
    Route::get('/penjual/detail/{id}', [PenjualController::class, 'detail']);


    Route::get('/pembeli', [PembeliController::class, 'index'])->name('pembeli');

    Route::get('/film', [FilmController::class, 'index'])->name('film');
    Route::get('/film/add', [FilmController::class, 'add']);
    Route::post('/film/insert', [FilmController::class, 'insert']);
    Route::get('/film/edit/{kode_film}', [FilmController::class, 'edit']);
    Route::post('/film/update/{kode_film}', [FilmController::class, 'update']);
    Route::get('/film/delete/{kode_film}', [FilmController::class, 'delete']);
});



//Hak Akses Untuk Penjual
//Route::group(['middleware' => 'penjual'], function () {

//});


//Hak Akses Untuk Pembeli

//});


//Route::group(['middleware' => ['auth', 'ceklevel:penjual']], function () {
    //Route::get('/penjual', [PenjualController::class, 'index'])->name('penjual');
//});