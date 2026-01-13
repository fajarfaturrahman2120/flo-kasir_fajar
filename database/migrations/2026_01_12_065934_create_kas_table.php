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
        Schema::create('kas', function (Blueprint $table) {
            $table->id('id_kas');
            $table->integer('id_toko');
            $table->string('tipe_kas');
            $table->integer('modal_kas');
            $table->string('keterangan_kas');
            $table->date('tanggal_kas');
            $table->integer('bulan_kas');
            $table->integer('tahun_kas');
            $table->string('pembayaran_kas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kas');
    }
};
