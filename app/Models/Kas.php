<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kas extends Model
{
      protected $table = 'kas';
    protected $primaryKey = 'id_kas';
    public $incrementing = true;

    protected $fillable = [
        'id_toko',
        'tipe_kas',
        'modal_kas',
        'keterangan_kas',
        'tanggal_kas',
        'bulan_kas',
        'tahun_kas',
        'pembayaran_kas',
    ];
    // ✅ INI YANG KURANG (WAJIB ADA)
    public function toko()
    {
        return $this->belongsTo(AsetToko::class, 'id_toko', 'id_toko');
    }
}
