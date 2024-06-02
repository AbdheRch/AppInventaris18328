<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GenerateLaporanController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\ValidasiPengembalianController;
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

Route::get('/', [DashboardController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/petugas', [PetugasController::class, 'index']);
Route::get('/tambahpetugas', [PetugasController::class,'create']);
Route::post('/storepetugas', [PetugasController::class,'store']);
Route::get('/editpetugas{id_petugas}', [PetugasController::class,'edit']);
Route::post('/updatepetugas', [PetugasController::class,'update']);
Route::get('/hapuspetugas{id_petugas}', [PetugasController::class,'destroy']);

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/tambahpegawai', [PegawaiController::class,'create']);
Route::post('/storepegawai', [PegawaiController::class,'store']);
Route::get('/editpegawai{id_pegawai}', [PegawaiController::class,'edit']);
Route::post('/updatepegawai', [PegawaiController::class,'update']);
Route::get('/hapuspegawai{id_pegawai}', [PegawaiController::class,'destroy']);

Route::get('/ruang', [RuangController::class,'index']);
Route::get('/tambahruang', [RuangController::class,'create']);
Route::post('/storeruang', [RuangController::class,'store']);
Route::get('/editruang{id_ruang}', [RuangController::class,'edit']);
Route::post('/updateruang', [RuangController::class,'update']);
Route::get('/hapusruang{id_ruang}', [RuangController::class,'destroy']);

Route::get('/jenis', [JenisController::class,'index']);
Route::get('/tambahjenis', [JenisController::class,'create']);
Route::post('/storejenis', [JenisController::class,'store']);
Route::get('/editjenis{id_jenis}', [JenisController::class,'edit']);
Route::post('/updatejenis', [JenisController::class,'update']);
Route::get('/hapusjenis{id_jenis}', [JenisController::class,'destroy']);

Route::get('/inventaris', [InventarisController::class,'index']);
Route::get('/tambahinventaris', [InventarisController::class,'create']);
Route::post('/storeinventaris', [InventarisController::class,'store']);
Route::get('/editinventaris{id_inventaris}', [InventarisController::class,'edit']);
Route::post('/updateinventaris', [InventarisController::class,'update']);
Route::get('/hapusinventaris{id_inventaris}', [InventarisController::class,'destroy']);

Route::get('/peminjaman', [PeminjamanController::class,'index']);
Route::get('/tambahpeminjaman', [PeminjamanController::class,'create']);
Route::post('/storepeminjaman', [PeminjamanController::class,'store']);

Route::post('/peminjaman/{id_peminjaman}/validasi', [ValidasiPengembalianController::class, 'validasi'])->name('peminjaman.validasi');   
Route::get('/pengembalian', [ValidasiPengembalianController::class,'pengembalian']);
Route::post('/peminjaman/{id_peminjaman}/kembalikan', [ValidasiPengembalianController::class, 'kembalikan'])->name('peminjaman.kembalikan');

Route::get('/laporan', [GenerateLaporanController::class,'laporan']);
    Route::get('/datalaporan', [GenerateLaporanController::class,'datalaporan']);
    Route::get('/peminjaman/pdf', [GenerateLaporanController::class,'generatePdf']);