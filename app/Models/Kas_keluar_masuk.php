<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kas_keluar_masuk extends Model
{
    protected $table = 'kas_keluar_masuk';
    protected $primaryKey = 'id_kas_keluar_masuk';

    protected $fillable = [
        'id_kas_keluar_masuk',
        'id_toko',
        'nama_kas_keluar_masuk',
        'id_user',
        'pembayaran_kas_keluar_masuk',
        'tanggal_bayar_kas_keluar_masuk',
        'jumlah_kas_keluar_masuk',
        'tipe_kas_keluar_masuk',
        'bulan_kas_keluar_masuk',
        'tahun_kas_keluar_masuk',

    ];
    public function toko()
    {
        return $this->belongsTo(AsetToko::class, 'id_toko', 'id_toko');
    }
}
