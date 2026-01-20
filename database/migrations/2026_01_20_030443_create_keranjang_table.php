<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('keranjang', function (Blueprint $table) {
            $table->id('id_keranjang');
            $table->integer('id_toko');
            $table->integer('id_kasir');
            $table->integer('id_transaksi');
            $table->integer('id_produk');
            $table->integer('qty_keranjang');
            $table->integer('total_beli');
            $table->date('tanggal_beli');
            $table->integer('harga_jual');
            $table->integer('harga_pokok');
            $table->integer('harga_grosir');
            $table->integer('min_grosir');
            $table->string('harga_terpilih');
            $table->integer('harga_diskon');
            $table->string('status_beli');
            $table->string('is_diskon');
            $table->string('pengaturan_stok');
            $table->string('cek_harga_diskon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjang');
    }
};
