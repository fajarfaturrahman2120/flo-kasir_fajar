<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id_Kategori';
    protected $fillable = [
            'id_toko',
            'nama_kategori',
            'jenis_transaksi',

        ];


        public function toko()
        {
            return $this->belongsTo(AsetToko::class, 'id_toko', 'id_toko');
        }

}
