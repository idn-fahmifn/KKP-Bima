<?php

use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminCheck;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', AdminCheck::class])->name('dashboard');

Route::middleware('auth')->group(function () {

    // middlware admin
    Route::middleware(AdminCheck::class)->group(function(){
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        Route::resource('laporan', LaporanController::class);
    
        Route::prefix('admin/pengaduan')->group(function(){
            Route::get('semua', [PengaduanController::class, 'semua'])->name('pengaduan.masuk');
            Route::get('masuk', [PengaduanController::class, 'masuk'])->name('pengaduan.masuk');
            Route::get('diproses', [PengaduanController::class, 'diproses'])->name('pengaduan.diproses');
            Route::get('tanggapan', [PengaduanController::class, 'tanggapan'])->name('pengaduan.tanggapan');
            Route::get('detail/{laporan:slug}', [PengaduanController::class, 'detail'])->name('pengaduan.detail');
        });
    });

    // area user
    Route::prefix('user-area')->group(function(){
        Route::get('dashboard', [UserController::class, 'index'])->name('user');
        Route::get('ajukan-pengaduan', [UserController::class, 'createPengaduan'])->name('create.pengaduan');
        Route::get('myreport', [UserController::class, 'pengaduanSaya'])->name('my.pengaduan');
        Route::post('pengaduan',[UserController::class, 'storePengaduan'])->name('kirim-pengaduan');
        Route::get('detail/{laporan:slug}', [UserController::class, 'detail'])->name('myreport.detail');

    });

    
});


Route::view('tampilan', 'template.template');

require __DIR__ . '/auth.php';




// Route Aplikasi
Route::resource('laporan', LaporanController::class)->middleware('auth');
