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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->integer('id_toko');
            $table->integer('id_kasir');
            $table->integer('id_customer');
            $table->date('tanggal_transaksi');
            $table->integer('total_transaksi');
            $table->integer('diskon_transaksi');
            $table->integer('konversi_poin_belanja');
            $table->integer('poin_yang_digunakan');
            $table->integer('kembalian');
            $table->integer('qty_transaksi');
            $table->integer('bayar');
            $table->string('status_bayar');
            $table->string('status_transaksi');
            $table->string('no_transaksi');
            $table->string('nama_pembeli');
            $table->string('keterangan_transaksi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
