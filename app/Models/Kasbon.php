<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kasbon extends Model
{
    protected $table = 'kasbon';
    protected $primaryKey = 'id_kasbon';

    protected $fillable = [
        'id_toko',
        'jumlah_kasbon',
        'nama_pengkasbon',
        'jenis_kasbon',
        'pembayaran_kasbon',
        'keterangan_kasbon',
        'cicilan',
        'tanggal_kasbon',
        'bulan_kasbon',
        'tahun_kasbon',
    ];


        public function toko()
        {
            return $this->belongsTo(AsetToko::class, 'id_toko', 'id_toko');
        }

}
