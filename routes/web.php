<?php

use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('laporan', LaporanController::class);

    Route::prefix('pengaduan')->group(function(){
        Route::get('masuk', [PengaduanController::class, 'masuk'])->name('pengaduan.masuk');
        Route::get('diproses', [PengaduanController::class, 'diproses'])->name('pengaduan.diproses');
        Route::get('tanggapan', [PengaduanController::class, 'tanggapan'])->name('pengaduan.tanggapan');
    });

});



Route::view('tampilan', 'template.template');

require __DIR__ . '/auth.php';




// Route Aplikasi
Route::resource('laporan', LaporanController::class)->middleware('auth');
