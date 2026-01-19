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
        Schema::create('aset_toko', function (Blueprint $table) {
            $table->id('id_aset_toko');
            $table->integer('id_toko');
            $table->string('nama_aset_toko');
            $table->decimal('harga_perolehan');
            $table->decimal('harga_sekarang');
            $table->text('keterangan_aset_toko');
            $table->integer('bulan_aset_toko');
            $table->integer('tahun_aset_toko');
            $table->date('tanggal_aset_toko');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aset_toko');
    }
};
