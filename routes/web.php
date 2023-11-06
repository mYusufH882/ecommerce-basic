<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();
Route::get('/', [LandingPageController::class, 'index'])->name('landing_page');

Route::middleware(['auth'])->group(function () {
    //Admin
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::resource('/produk', ProdukController::class);
    Route::resource('/kategori', KategoriController::class);
    Route::resource('/transaksi', TransaksiController::class);

    //User
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
