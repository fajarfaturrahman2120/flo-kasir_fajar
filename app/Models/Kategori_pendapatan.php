<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori_pendapatan extends Model
{
protected $table = 'kategori_pendapatan';
    protected $primaryKey = 'id_kategori_pendapatan';
    protected $fillable = [
        'id_toko',
        'nama_kategori_pendapatan',

    ];


        public function toko()
        {
            return $this->belongsTo(AsetToko::class, 'id_toko', 'id_toko');
        }
}
