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
        Schema::create('kasbon_detail', function (Blueprint $table) {
            $table->id('id_kasbon_detail');
            $table->integer('id_kasbon');
            $table->integer('id_toko');
            $table->integer('jumlah_kasbon_detail');
            $table->string('tipe_bayar_kasbon_detail');
            $table->date('tanggal_kasbon_detail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_kasbon_detail');
    }
};
