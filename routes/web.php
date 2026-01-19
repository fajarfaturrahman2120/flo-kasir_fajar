<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsetTokoController;
use App\Http\Controllers\BopController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KasController;
use App\Http\Controllers\KasbonController;
use App\Http\Controllers\Kasbon_detailController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\Kas_keluar_masukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\Kategori_bopController;
use App\Http\Controllers\Kategori_pendapatanController;
use App\Http\Controllers\Kategori_pengeluaranController;


Route::get('/', function () {
    return view('welcome');
});
// Asettoko
Route::get('/aset_toko', [AsetTokoController::class, 'index'])->name('aset_toko.index');
Route::get('/aset_toko/create', [AsetTokoController::class, 'create'])->name('aset_toko.create');
Route::post('/aset_toko', [AsetTokoController::class, 'store'])->name('aset_toko.store');
Route::get('/aset_toko/{id}/edit', [AsetTokoController::class, 'edit'])->name('aset_toko.edit');
Route::put('/aset_toko/{id}', [AsetTokoController::class, 'update'])->name('aset_toko.update');
Route::get('/aset_toko/{id}', [AsetTokoController::class, 'show'])->name('aset_toko.show');
Route::delete('/aset_toko/{id}', [AsetTokoController::class, 'destroy'])->name('aset_toko.destroy');
//bop
Route::get('/bop', [BopController::class, 'index'])->name('bop.index');
Route::get('/bop/create', [BopController::class, 'create'])->name('bop.create');
Route::post('/bop', [BopController::class, 'store'])->name('bop.store');
Route::get('/bop/{id}/edit', [BopController::class, 'edit'])->name('bop.edit');
Route::put('/bop/{id}', [BopController::class, 'update'])->name('bop.update');
Route::get('/bop/{id}', [BopController::class, 'show'])->name('bop.show');
Route::delete('/bop/{id}', [BopController::class, 'destroy'])->name('bop.destroy');
//customer
Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('/customer', [CustomerController::class, 'store'])->name('customer.store');
Route::get('/customer/{id}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
Route::put('/customer/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::get('/customer/{id}', [CustomerController::class, 'show'])->name('customer.show');
Route::delete('/customer/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');
//kas
Route::get('/kas', [KasController::class, 'index'])->name('kas.index');
Route::get('/kas/create', [KasController::class, 'create'])->name('kas.create');
Route::post('/kas', [KasController::class, 'store'])->name('kas.store');
Route::get('/kas/{id}/edit', [KasController::class, 'edit'])->name('kas.edit');
Route::put('/kas/{id}', [KasController::class, 'update'])->name('kas.update');
Route::get('/kas/{id}', [KasController::class, 'show'])->name('kas.show');
Route::delete('/kas/{id}', [KasController::class, 'destroy'])->name('kas.destroy');
//kasbon
Route::get('/kasbon', [KasbonController::class, 'index'])->name('kasbon.index');
Route::get('/kasbon/create', [KasbonController::class, 'create'])->name('kasbon.create');
Route::post('/kasbon', [KasbonController::class, 'store'])->name('kasbon.store');
Route::get('/kasbon/{id}/edit', [KasbonController::class, 'edit'])->name('kasbon.edit');
Route::put('/kasbon/{id}', [KasbonController::class, 'update'])->name('kasbon.update');
Route::get('/kasbon/{id}', [KasbonController::class, 'show'])->name('kasbon.show');
Route::delete('/kasbon/{id}', [KasbonController::class, 'destroy'])->name('kasbon.destroy');
//kasbon detail
Route::get('/kasbon_detail', [Kasbon_detailController::class, 'index'])->name('kasbon_detail.index');
Route::get('/kasbon_detail/create', [Kasbon_detailController::class, 'create'])->name('kasbon_detail.create');
Route::post('/kasbon_detail', [Kasbon_detailController::class, 'store'])->name('kasbon_detail.store');
Route::get('/kasbon_detail/{id}/edit', [Kasbon_detailController::class, 'edit'])->name('kasbon_detail.edit');
Route::put('/kasbon_detail/{id}', [Kasbon_detailController::class, 'update'])->name('kasbon_detail.update');
Route::get('/kasbon_detail/{id}', [Kasbon_detailController::class, 'show'])->name('kasbon_detail.show');
Route::delete('/kasbon_detail/{id}', [Kasbon_detailController::class, 'destroy'])->name('kasbon_detail.destroy');
//kasir
Route::get('/kasir', [KasirController::class, 'index'])->name('kasir.index');
Route::get('/kasir/create', [KasirController::class, 'create'])->name('kasir.create');
Route::post('/kasir', [KasirController::class, 'store'])->name('kasir.store');
Route::get('/kasir/{id}/edit', [KasirController::class, 'edit'])->name('kasir.edit');
Route::put('/kasir/{id}', [KasirController::class, 'update'])->name('kasir.update');
Route::get('/kasir/{id}', [KasirController::class, 'show'])->name('kasir.show');
Route::delete('/kasir/{id}', [KasirController::class, 'destroy'])->name('kasir.destroy');
//kas keluar masuk
Route::get('/kas_keluar_masuk', [Kas_keluar_masukController::class, 'index'])->name('kas_keluar_masuk.index');
Route::get('/kas_keluar_masuk/create', [Kas_keluar_masukController::class, 'create'])->name('kas_keluar_masuk.create');
Route::post('/kas_keluar_masuk', [Kas_keluar_masukController::class, 'store'])->name('kas_keluar_masuk.store');
Route::get('/kas_keluar_masuk/{id}/edit', [Kas_keluar_masukController::class, 'edit'])->name('kas_keluar_masuk.edit');
Route::put('/kas_keluar_masuk/{id}', [Kas_keluar_masukController::class, 'update'])->name('kas_keluar_masuk.update');
Route::get('/kas_keluar_masuk/{id}', [Kas_keluar_masukController::class, 'show'])->name('kas_keluar_masuk.show');
Route::delete('/kas_keluar_masuk/{id}', [Kas_keluar_masukController::class, 'destroy'])->name('kas_keluar_masuk.destroy');
//kategori
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::get('/kategori/{id}', [KategoriController::class, 'show'])->name('kategori.show');
Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
//kategoti_bop
Route::get('/kategori_bop', [Kategori_bopController::class, 'index'])->name('kategori_bop.index');
Route::get('/kategori_bop/create', [Kategori_bopController::class, 'create'])->name('kategori_bop.create');
Route::post('/kategori_bop', [Kategori_bopController::class, 'store'])->name('kategori_bop.store');
Route::get('/kategori_bop/{id}/edit', [Kategori_bopController::class, 'edit'])->name('kategori_bop.edit');
Route::put('/kategori_bop/{id}', [Kategori_bopController::class, 'update'])->name('kategori_bop.update');
Route::get('/kategori_bop/{id}', [Kategori_bopController::class, 'show'])->name('kategori_bop.show');
Route::delete('/kategori_bop/{id}', [Kategori_bopController::class, 'destroy'])->name('kategori_bop.destroy');
//kategori Pendapatan
Route::get('/kategori_pendapatan', [Kategori_pendapatanController::class, 'index'])->name('kategori_pendapatan.index');
Route::get('/kategori_pendapatan/create', [Kategori_pendapatanController::class, 'create'])->name('kategori_pendapatan.create');
Route::post('/kategori_pendapatan', [Kategori_pendapatanController::class, 'store'])->name('kategori_pendapatan.store');
Route::get('/kategori_pendapatan/{id}/edit', [Kategori_pendapatanController::class, 'edit'])->name('kategori_pendapatan.edit');
Route::put('/kategori_pendapatan/{id}', [Kategori_pendapatanController::class, 'update'])->name('kategori_pendapatan.update');
Route::get('/kategori_pendapatan/{id}', [Kategori_pendapatanController::class, 'show'])->name('kategori_pendapatan.show');
Route::delete('/kategori_pendapatan/{id}', [Kategori_pendapatanController::class, 'destroy'])->name('kategori_pendapatan.destroy');
//kategori Pengeluaran
Route::get('/kategori_pengeluaran', [Kategori_pengeluaranController::class, 'index'])->name('kategori_pengeluaran.index');
Route::get('/kategori_pengeluaran/create', [Kategori_pengeluaranController::class, 'create'])->name('kategori_pengeluaran.create');
Route::post('/kategori_pengeluaran', [Kategori_pengeluaranController::class, 'store'])->name('kategori_pengeluaran.store');
Route::get('/kategori_pengeluaran/{id}/edit', [Kategori_pengeluaranController::class, 'edit'])->name('kategori_pengeluaran.edit');
Route::put('/kategori_pengeluaran/{id}', [Kategori_pengeluaranController::class, 'update'])->name('kategori_pengeluaran.update');
Route::get('/kategori_pengeluaran/{id}', [Kategori_pengeluaranController::class, 'show'])->name('kategori_pengeluaran.show');
Route::delete('/kategori_pengeluaran/{id}', [Kategori_pengeluaranController::class, 'destroy'])->name('kategori_pengeluaran.destroy');
