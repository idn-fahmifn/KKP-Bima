<?php

use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TanggapanController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminCheck;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});


// middlware admin
Route::prefix('admin')->group(function () {

    // halaman admin
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('laporan', LaporanController::class);

    // Route admin pengaduan
    Route::prefix('pengaduan')->group(function () {
        Route::get('semua', [PengaduanController::class, 'semua'])->name('pengaduan.semua');
        Route::get('pending', [PengaduanController::class, 'pending'])->name('pengaduan.pending');
        Route::get('diproses', [PengaduanController::class, 'diproses'])->name('pengaduan.diproses');
        Route::get('selesai', [PengaduanController::class, 'selesai'])->name('pengaduan.selesai');
        Route::get('detail/{laporan:slug}', [PengaduanController::class, 'detail'])->name('pengaduan.detail');
    });

    // Route admin tanggapan
    Route::resource('tanggapan', TanggapanController::class);

})->middleware(['auth', 'verified', AdminCheck::class]);

// area user
Route::prefix('user-area')->group(function () {
    Route::get('dashboard', [UserController::class, 'index'])->name('user');
    Route::get('ajukan-pengaduan', [UserController::class, 'createPengaduan'])->name('create.pengaduan');
    Route::get('myreport', [UserController::class, 'pengaduanSaya'])->name('myreport');
    Route::post('pengaduan', [UserController::class, 'storePengaduan'])->name('kirim-pengaduan');
    Route::get('myreport/detail/{laporan:slug}', [UserController::class, 'detail'])->name('myreport.detail');
});


Route::view('tampilan', 'template.template');

require __DIR__ . '/auth.php';




// Route Aplikasi
Route::resource('laporan', LaporanController::class)->middleware('auth');
