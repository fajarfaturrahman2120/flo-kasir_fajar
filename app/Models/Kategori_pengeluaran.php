<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori_pengeluaran extends Model
{
     protected $table = 'kategori_pengeluaran';
    protected $primaryKey = 'id_kategori_pengeluaran';
    protected $fillable = [
        'id_toko',
        'nama_kategori_pengeluaran',

    ];


        public function toko()
        {
            return $this->belongsTo(AsetToko::class, 'id_toko', 'id_toko');
        }
}
