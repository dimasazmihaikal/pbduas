<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/dashboardadmin', [AuthController::class, 'dashboardAdmin'])->name('dashboardadmin');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/akunkaryawan', [AuthController::class, 'akunkaryawan'])->name('akunkaryawan1');
Route::post('/tambah-akun', [AuthController::class, 'tambahAkun'])->name('tambahAkun');
Route::post('/hapus-akun/{id}', [AuthController::class, 'hapusAkun'])->name('hapusAkun');
Route::get('/edit-akun/{id}', [AuthController::class, 'editAkun'])->name('editAkun');
Route::post('/update-akun/{id}', [AuthController::class, 'updateAkun'])->name('updateAkun');

Route::get('/pengajuancuti', [AuthController::class, 'pengajuanCuti'])->name('pengajuancuti');
Route::post('/approve-cuti/{id}', [AuthController::class, 'approveCuti'])->name('approveCuti');
Route::post('/reject-cuti/{id}', [AuthController::class, 'rejectCuti'])->name('rejectCuti');


Route::get('/cutipegawai', [AuthController::class, 'cutipegawai'])->name('cutipegawai');

Route::get('/gajikaryawan', [AuthController::class, 'gajikaryawan'])->name('gajikaryawan');
Route::post('/bayar-gaji/{id_karyawan}', [AuthController::class, 'bayarGaji'])->name('bayarGaji');


Route::get('/riwayat-gaji', [AuthController::class, 'riwayatGaji'])->name('riwayatGaji');




Route::get('/absensi', [AuthController::class, 'absensi'])->name('absensi');
Route::post('/absen', [AuthController::class, 'absen'])->name('absen');
Route::get('/absensi/history', [AuthController::class, 'historyAbsensi'])->name('absensi.history');




Route::get('/cuti', [AuthController::class, 'cuti'])->name('cuti');
Route::post('/cuti/tambah', [AuthController::class, 'tambahCuti'])->name('cuti.tambah');




Route::get('/gaji', [AuthController::class, 'gaji'])->name('gaji');

