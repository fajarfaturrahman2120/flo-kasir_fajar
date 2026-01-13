<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bop extends Model
{
    protected $table = 'bop';
    protected $primaryKey = 'id_bop';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'id_toko',
        'id_kategori_bop',
        'jumlah_bop',
        'keterangan_bop',
        'tipe_bayar_bop',
        'gambar_bop',
        'bulan_bop',
        'tahun_bop',
        'tanggal_bop',
    ];

    protected $casts = [
        'tanggal_bop' => 'date',
    ];

    public function toko()
    {
        return $this->belongsTo(AsetToko::class, 'id_toko', 'id_toko');
    }
}
