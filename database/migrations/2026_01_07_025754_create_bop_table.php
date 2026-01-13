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
        Schema::create('bop', function (Blueprint $table) {
            $table->id('id_bop');
            $table->integer('id_toko');
            $table->integer('id_kategori_bop');
            $table->integer('jumlah_bop');
            $table->string('keterangan_bop');
            $table->string('tipe_bayar_bop');
            $table->string('gambar_bop');
            $table->integer('bulan_bop');
            $table->integer('tahun_bop');
            $table->date('tanggal_bop');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bop');
    }
};
