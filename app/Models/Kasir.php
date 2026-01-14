<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
 protected $table = 'kasir';
    protected $primaryKey = 'id_kasir';

    protected $fillable = [
        'id_toko',
        'nama_kasir',
        'nik_kasir',
        'no_hp_kasir',
        'alamat_kasir',
        'keterangan_kasir',

    ];
    public function toko()
    {
        return $this->belongsTo(AsetToko::class, 'id_toko', 'id_toko');
    }
}
