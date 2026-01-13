<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsetTokoController;
use App\Http\Controllers\BopController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KasController;
use App\Http\Controllers\KasbonController;

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

