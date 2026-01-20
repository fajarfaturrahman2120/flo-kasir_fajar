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
        Schema::create('stok_produk', function (Blueprint $table) {
            $table->id('id_stok_produk');
            $table->integer('id_toko');
            $table->integer('id_produk');
            $table->date('tanggal_input');
            $table->string('jenis_stok');
            $table->string('jumlah_stok');
            $table->string('harga_total_beli_stok');
            $table->string('harga_satu_beli_stok');
            $table->integer('id_supplier');
            $table->string('status_bayar');
            $table->string('pembayaran');
            $table->text('keterangan');
            $table->date('tanggal_expired');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok_produk');
    }
};
