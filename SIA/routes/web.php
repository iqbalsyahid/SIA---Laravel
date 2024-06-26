<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\DetailPesanController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LapStokController;


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//User
Route::get('/user/hapus/{id}', [UserController::class, 'destroy']);
Route::resource('/user', UserController::class);

//Barang
Route::get('/barang/hapus/{id}', [BarangController::class, 'destroy']);
Route::resource('/barang', BarangController::class);

//Supplier
Route::get('/supplier/hapus/{id}', [SupplierController::class, 'destroy']);
Route::resource('/supplier', SupplierController::class);

//Akun
Route::get('/akun/hapus/{id}', [AkunController::class, 'destroy']);
Route::resource('/akun', AkunController::class);

// Setting
Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
Route::post('/setting/simpan', [SettingController::class, 'simpan']);

//Route Pemesanan
Route::get('/transaksi', [PemesananController::class, 'index'])->name('pemesanan.index');
Route::post('/sem/store', [PemesananController::class, 'store']);
Route::get('/transaksi/hapus/{kd_brg}',[PemesananController::class, 'destroy']);

//Route Detail Pesan
Route::post('/detail/store', [DetailPesanController::class, 'store']);
Route::post('/detail/simpan', [DetailPesanController::class, 'simpan']);

//Route Pembelian
Route::get('/pembelian', [PembelianController::class, 'index'])->name('pembelian.index');
Route::get('/pembelian-beli/{id}', [PembelianController::class, 'edit']);
Route::post('/pembelian/simpan', [PembelianController::class, 'simpan']);

//Route Cetak Invoice
Route::get('/laporan/faktur/{invoice}', [PembelianController::class, 'pdf'])->name('cetak.order_pdf');

//Laporan
Route::resource( '/laporan' , LaporanController::class);
Route::get('/laporancetak/cetak_pdf', [LaporanController::class, 'cetak_pdf']);
Route::resource( '/stok' , LapStokController::class);