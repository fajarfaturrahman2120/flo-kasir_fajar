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
        Schema::create('kas_keluar_masuk', function (Blueprint $table) {
            $table->id('id_kas_keluar_masuk');
            $table->integer('id_toko');
            $table->string('nama_kas_keluar_masuk');
            $table->integer('id_user');
            $table->string('pembayaran_kas_keluar_masuk');
            $table->date('tanggal_bayar_kas_keluar_masuk');
            $table->integer('jumlah_kas_keluar_masuk');
            $table->string('tipe_kas_keluar_masuk');
            $table->integer('bulan_kas_keluar_masuk');
            $table->integer('tahun_kas_keluar_masuk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_kas_keluar_masuk');
    }
};
