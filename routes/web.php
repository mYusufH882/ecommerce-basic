<?php

use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\HomeController;
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
<<<<<<< HEAD

=======
>>>>>>> 51c8063 (Update laravel/ui only 1 user can login)
Route::get('/', [LandingPageController::class, 'index'])->name('landing_page');
Route::get('/about', [LandingPageController::class, 'about'])->name('about');

Route::middleware(['auth'])->group(function () {
<<<<<<< HEAD
<<<<<<< HEAD
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    Route::get('/transaksi', [TransaksiController::class, 'index']);

    Route::middleware('can:isUser')->group(function () {
        Route::get('/belanja/{id}', [BelanjaController::class, 'show'])->name('belanja');
        Route::post('/belanja', [BelanjaController::class, 'beli'])->name('belanja-sekarang');
        Route::get('/konfirmasi/{id}', [BelanjaController::class, 'view_pembayaran'])->name('pembayaran');
        Route::post('/konfirmasi', [BelanjaController::class, 'konfirmasi'])->name('konfirmasi');
    });

    Route::middleware('can:isAdmin')->group(function () {
        Route::resource('/produk', ProdukController::class);
        Route::resource('/kategori', KategoriController::class);
    });
=======
    //Admin
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::resource('/produk', ProdukController::class);
    Route::resource('/kategori', KategoriController::class);
    Route::resource('/transaksi', TransaksiController::class);

    //User
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> 51c8063 (Update laravel/ui only 1 user can login)
=======
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::middleware(['auth', 'can:isAdmin'])->group(function () {
        Route::resource('/produk', ProdukController::class);
        Route::resource('/kategori', KategoriController::class);
        Route::get('/transaksi', [TransaksiController::class, 'index']);
    });
>>>>>>> 30d693e (Update dashboard)
});
