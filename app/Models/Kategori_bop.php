<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori_bop extends Model
{
     protected $table = 'kategori_bop';
    protected $primaryKey = 'id_kategori_bop';
    protected $fillable = [
        'id_toko',
        'nama_kategori_bop',

    ];


        public function toko()
        {
            return $this->belongsTo(AsetToko::class, 'id_toko', 'id_toko');
        }
}
